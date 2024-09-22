<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index(): View
    {
        $eventInfo = Event::orderBy('date','asc')->get();
        return view('index',compact('eventInfo'));
    }

    public function adminDashboard(): View
    {
        $totalEvent = Event::count();
        return view('admin.dashboard',compact('totalEvent'));
    }
}
