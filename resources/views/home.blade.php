@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    < class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>

                        <div>
                            <p class="fw-semibold fs-18 mb-0">Welcome to ZCHPC! !</p>
                            <span class="fs-semibold text-muted">Admin Dashboard.</span>
                            
                        </div>
                        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">                           
                            <div class="row">
                                 <div class="col-xl-3">
                                    <div class="card custom-card crm-highlight-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>                                                   
                                                    <div class="fw-semibold fs-18 text-fixed-white mb-2">Total Employees</div>
                                                      <div class="icon">
                                                          <i class="ion ion-person-stalker"></i>
                                                      </div>
                                                      <div class="inner">
                                                        <h3>
                                                            <?php
                                                            $todayAttendance = DB::table('attendance')->where('date', $today)->where('status', 1)->count();
                                                            echo $todayAttendance;
                                                            ?>
                                                        </h3>
                                                        
                                                    </div>
                                                    <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="{{ route('attendance') }}"><u>more info</u></a></span>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>





                                <div class="col-xl-9">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Monthly Attendance Report
                                                    </div>
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <div class="d-flex flex-wrap gap-2">
                                                               
                                                                <form class="form-inline">
                                                                    <div class="form-group">
                                                                        <label>Select Year: </label>
                                                                        <select class="form-control input-sm" id="select_year">
                                                                            @php
                                                                            $year = 2024; // Set the desired year here
                                                                            @endphp
                                                                            @for ($i = 2015; $i <= 2065; $i++)
                                                                                @php
                                                                                $selected = ($i == $year) ? 'selected' : '';
                                                                                @endphp
                                                                                <option value="{{ $i }}" {{ $selected }}>{{ $i }}</option>
                                                                            @endfor
                                                                        </select>
                                                                    </div>
                                                                </form>
                                        
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="content-wrapper">
                                                        <div id="crm-revenue-analytics"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    
    
    
    
    
    
    





                                       

                        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">                           
                            <div class="row">
                                 <div class="col-xl-4">
                                    <div class="card custom-card crm-highlight-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>                                                   
                                                    <div class="fw-semibold fs-18 text-fixed-white mb-2">On Time percentage </div>
                                                      <div class="icon">
                                                          <i class="ion ion-person-stalker"></i>
                                                      </div>
                                                      <div class="inner">
                                                        <?php
                                                        $total = DB::table('attendance')->count();
                                                        $early = DB::table('attendance')->where('status', 1)->count();
                                                        
                                                        if ($total > 0) {
                                                            $percentage = ($early / $total) * 100;
                                                        } else {
                                                            $percentage = 0; // or any other default value you prefer
                                                        }
                                                        
                                                        echo "<h3>" . number_format($percentage, 2) . "<sup style='font-size: 20px'>%</sup></h3>";
                                                        ?>
                                                    </div>
                                                    <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="{{ route('employees') }}"><u>more info</u></a></span>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">                           
                                            <div class="row">
                                                 <div class="col-xl-6">
                                                    <div class="card custom-card crm-highlight-card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>                                                   
                                                                    <div class="fw-semibold fs-18 text-fixed-white mb-2">On Time today</div>
                                                                      <div class="icon">
                                                                          <i class="ion ion-person-stalker"></i>
                                                                      </div>
                                                                      <div class="inner">
                                                                        <h3>
                                                                            <?php
                                                                                $count = DB::table('attendance')
                                                                                    ->where('date', $today)
                                                                                    ->where('status', 0)
                                                                                    ->count();
                                        
                                                                                echo $count;
                                                                            ?>
                                                                        </h3>
                                                                    </div>
                                                                    <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="{{ route('attendance') }}"><u>more info</u></a></span>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
    
                                                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">                           
                                                    <div class="row">
                                                         <div class="col-xl-10">
                                                            <div class="card custom-card crm-highlight-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <div>                                                   
                                                                            <div class="fw-semibold fs-18 text-fixed-white mb-2"> Employees Late today</div>
                                                                              <div class="icon">
                                                                                  <i class="ion ion-person-stalker"></i>
                                                                              </div>
                                                                              <div class="inner">
                                                                                <h3>
                                                                                    <?php
                                                                                        $count = DB::table('attendance')
                                                                                            ->where('date', $today)
                                                                                            ->where('status', 0)
                                                                                            ->count();
                                                
                                                                                        echo $count;
                                                                                    ?>
                                                                                </h3>
                                                                            </div>
                                                                            <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="{{ route('attendance') }}"><u>more info</u></a></span>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>





                                                        

                               
                            
                                                   
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

