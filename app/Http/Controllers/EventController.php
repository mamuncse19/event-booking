<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    public function index(): View
    {
        $eventInfo = Event::orderBy('date','asc')->get();
        return view('admin.event.index',compact('eventInfo'));
    }

    public function create(): View
    {
        return view('admin.event.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'total_seats' => 'required|integer|min:1',
        ]);

        Event::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'date' => $validated['date'],
            'total_seats' => $validated['total_seats'],
            'available_seats' => $validated['total_seats'],
        ]);

        $sms = [
            'message' => 'Event created successfully',
            'alert-type' => 'success'
        ];
        return redirect(route('event.list', absolute: false))->with($sms);
    }
}
