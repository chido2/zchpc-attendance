@extends('layouts.app')

@section('content')

    <div class="inner">
        <?php
            $today = date('Y-m-d'); // Define the $today variable with the current date

            $query = DB::table('attendance')
                ->where('date', $today)
                ->where('status', 1)
                ->get();

            echo "<h3>".count($query)."</h3>";
        ?>
    </div>
    //
@endsection