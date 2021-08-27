<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.student')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Student</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.lecturer')}}" class="waves-effect">
                        <i class="ti-email"></i>
                        <span>Lecturer</span>
                    </a>
                </li>

                <li class="menu-title">Modules</li>

                <li>
                    <a href="{{route('admin.event')}}" class="waves-effect">
                        <i class="ti-package"></i>
                        <span>Event/News</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.timetable')}}" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span>Timetable</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.fee')}}" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span>Fees</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.course')}}" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span>Course</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.level')}}" class="waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span>Level</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.department')}}" class="waves-effect">
                        <i class="ti-view-grid"></i>
                        <span>Department</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.session')}}" class="waves-effect">
                        <i class="ti-face-smile"></i>
                        <span>Session</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.semester')}}" class="waves-effect">
                        <i class="ti-face-smile"></i>
                        <span>Semester</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.payment')}}" class="waves-effect">
                        <i class="ti-location-pin"></i>
                        <span>Payments</span>
                    </a>
                </li>

                {{-- <li class="menu-title">Extras</li> --}}

                <li>
                    <a href="{{route('admin.logout')}}" class="waves-effect">
                        <i class="ti-layout"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
