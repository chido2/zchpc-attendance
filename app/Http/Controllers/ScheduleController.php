<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        // Add logic to fetch schedule data and pass it to the view
        return view('schedule.index'); // Assuming you have a view file named 'index.blade.php' inside the 'resources/views/schedule' directory
    }
}



