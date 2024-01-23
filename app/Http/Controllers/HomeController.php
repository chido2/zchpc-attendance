<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

        $year = Carbon::now()->format('Y');
        $and = 'YEAR(date) = '.$year;
        $months = [];
        $ontime = [];
        $late = [];

        for ($m = 1; $m <= 12; $m++) {
            $oquery = DB::table('attendance')
                ->whereMonth('date', $m)
                ->where('status', 1)
                ->whereRaw($and)
                ->count();
            array_push($ontime, $oquery);

            $lquery = DB::table('attendance')
                ->whereMonth('date', $m)
                ->where('status', 0)
                ->whereRaw($and)
                ->count();
            array_push($late, $lquery);

            $num = str_pad($m, 2, 0, STR_PAD_LEFT);
            $month = date('M', mktime(0, 0, 0, $m, 1));
            array_push($months, $month);
        }

        $months = json_encode($months);
        $late = json_encode($late);
        $ontime = json_encode($ontime);

        $count = DB::table('attendance')
            ->where('date', $today)
            ->where('status', 0)
            ->count();

        return view('home', compact('today', 'count', 'months', 'late', 'ontime'));
    }
}