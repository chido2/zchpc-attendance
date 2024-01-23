<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $today = date('Y-m-d');
        $count = Attendance::where('date', $today)
            ->where('status', 1)
            ->count();

        $year = request('year', Carbon::now()->year);
        $months = [];

        for ($m = 1; $m <= 12; $m++) {
            $month = Carbon::createFromDate($year, $m, 1);
            $monthName = $month->shortMonthName;
            array_push($months, $monthName);
        }

        return view('attendance.indexs', ['count' => $count, 'months' => $months]);
    }
}