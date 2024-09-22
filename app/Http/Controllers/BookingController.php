<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    public function create(): View
    {
        $eventInfo = Event::orderBy('date', 'asc')->get();
        return view('ticket-book', compact('eventInfo'));
    }

    public function bookSeats(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'seats_booked' => ['required', 'integer', 'min:1'],
            'event_id' => ['required', 'integer', 'not_in:0'],
            'phone_no' => ['required', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
        ], [
            // Custom messages for seats_booked
            'seats_booked.required' => 'Please specify the number of seats you want to book.',
            'seats_booked.integer' => 'The seats booked must be an integer.',
            'seats_booked.min' => 'You must book at least 1 seat.',

            // Custom messages for event_id
            'event_id.not_in' => 'Please select a valid event.',

            // Custom message for phone_no
            'phone_no.required' => 'The phone number is required.',
            'phone_no.regex' => 'Please enter a valid Bangladeshi phone number.',
        ]);

        try {
            DB::transaction(function () use ($validated) {
                // Retrieve the event and check availability
                $event = Event::find($validated['event_id']);

                if (!$event) {
                    throw new \Exception("Event not found");
                }

                // Optimistically check available seats
                if ($event->available_seats < $validated['seats_booked']) {
                    throw new \Exception("Not enough seats available");
                }

                // Create user
                $user = User::create([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'address' => $validated['address'],
                    'phone_no' => $validated['phone_no'],
                ]);

                // Create booking record
                Booking::create([
                    'event_id' => $validated['event_id'],
                    'user_id' => $user->id,
                    'seats_booked' => $validated['seats_booked'],
                ]);

                // Update available seats directly on the model
                $event->available_seats -= $validated['seats_booked'];
                $event->save();
            });

            return redirect()->back()->with('success', 'Seats booked successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
