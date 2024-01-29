<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

   

    

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
           
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Reports</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('home') }}" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard<span class="badge bg-warning-transparent ms-2"></span></span>
                    </a>
                   
                 
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Manage</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('attendance') }}" class="side-menu__item">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        <span class="side-menu__label">Attendance<span class="badge bg-secondary-transparent ms-2"></span></span>    
                    </a>  
                </li>
               
        <!-- Start::slide -->
        <li class="slide has-sub">
            <a href="{{ route('employees') }}" class="side-menu__item">
                <i class="bx bx-fingerprint side-menu__icon"></i>
                <span class="side-menu__label">Employees</span>
                <i class="fe fe-chevron-right side-menu__angle"></i>
            </a>
        </li>
        <!-- End::slide -->

        <!-- Start::slide__category -->
        <li class="slide__category"><span class="category-name">Printables</span></li>
        <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('schedule') }}" class="side-menu__item">
                        <i class="bx bx-medal side-menu__icon"></i>
                        <span class="side-menu__label">Schedule</span>   
                    </a>
                </li>
                <!-- End::slide -->

