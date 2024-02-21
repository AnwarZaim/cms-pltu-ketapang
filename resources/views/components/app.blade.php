<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CMS|PLTU|KETAPANG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ url('/') }}/admin-asset/assets/images/favicon.ico"> --}}


    <!-- Bootstrap Css -->
    <link href="{{ url('/') }}/admin-asset/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('/') }}/admin-asset/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('/') }}/admin-asset/assets/css/app.min.css" id="app-style" rel="stylesheet"
        type="text/css" />

</head>

<body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <x-layouts.header/>

        <!-- ========== Left Sidebar Start ========== -->
        <x-layouts.sidebar/>
        <!-- Left Sidebar End -->


        {!!$slot!!}


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ url('/') }}/admin-asset/assets/images/layouts/layout-1.png"
                        class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ url('/') }}/admin-asset/assets/images/layouts/layout-2.png"
                        class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="{{ url('/') }}/admin-asset/assets/css/bootstrap-dark.min.css"
                        data-appStyle="{{ url('/') }}/admin-asset/assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ url('/') }}/admin-asset/assets/images/layouts/layout-3.png"
                        class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="{{ url('/') }}/admin-asset/assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <h6 class="mb-2">Select Custom Colors</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-default"
                        value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')"
                        checked>
                    <label class="form-check-label" for="theme-default">Default</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-red"
                        value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                    <label class="form-check-label" for="theme-red">Red</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-green"
                        value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                    <label class="form-check-label" for="theme-green">Green</label>
                </div>
            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('/') }}/admin-asset/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/admin-asset/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/admin-asset/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('/') }}/admin-asset/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('/') }}/admin-asset/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ url('/') }}/admin-asset/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Peity JS -->
    <script src="{{ url('/') }}/admin-asset/assets/libs/peity/jquery.peity.min.js"></script>

    <script src="{{ url('/') }}/admin-asset/assets/libs/morris.js/morris.min.js"></script>

    <script src="{{ url('/') }}/admin-asset/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init JS -->
    <script src="{{ url('/') }}/admin-asset/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/admin-asset/assets/js/app.js"></script>

</body>

</html>
