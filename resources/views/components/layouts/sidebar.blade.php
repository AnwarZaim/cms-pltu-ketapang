<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div class="user-details">
            <div class="d-flex">
                <div class="me-2">
                    <img src="{{ url('/') }}/admin-asset/assets/images/users/avatar-4.jpg" alt=""
                        class="avatar-md rounded-circle">
                </div>
                <div class="user-info w-100">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Donald Johnson
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-account-circle text-muted me-2"></i>
                                    Profile<div class="ripple-wrapper me-2"></div>
                                </a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-cog text-muted me-2"></i>
                                    Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                    Lock screen</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-power text-muted me-2"></i>
                                    Logout</a></li>
                        </ul>
                    </div>
                    <p class="text-white-50 m-0">Administrator</p>
                </div>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{url('Dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge bg-primary float-end"></span>
                        <span>Dashboard</span>

                    </a>
                </li>

                <li>
                    <a href="{{url('DataPegawai')}}" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span>Data Pegawai</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('Absensi')}}" class="">
                        <i class="mdi mdi-buffer"></i>
                        <span>Absensi</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('MonitoringOvertime')}}" class="">
                        <i class="mdi mdi-black-mesa"></i>
                        <span>Monitoring Overtime</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('AreaKerja')}}" class="waves-effect">
                        <i class="mdi mdi-clipboard"></i>
                        <span>Area Kerja</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-finance"></i>
                        <span>AbsensiBrifing</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-chartist.html">Pagi</a></li>
                        <li><a href="charts-chartjs.html">Sore</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>