<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <link rel="canonical" href="@yield('canonical')" />
    <link href="assets/admin/css/pace.min.css" rel="stylesheet" />
    <script src="assets/admin/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets/admin/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/admin/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/admin/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/admin/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="assets/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">Aeronautics</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{url('/dashboard')}}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="icons.html">
                        <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
                    </a>
                </li>

                <li>
                    <a href="forms.html">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
                    </a>
                </li>

                <li>
                    <a href="tables.html">
                        <i class="zmdi zmdi-grid"></i> <span>Tables</span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li>

                <li>
                    <a href="profile.html">
                        <i class="zmdi zmdi-face"></i> <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a href="login.html" target="_blank">
                        <i class="zmdi zmdi-lock"></i> <span>Login</span>
                    </a>
                </li>

                <li>
                    <a href="register.html" target="_blank">
                        <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
                    </a>
                </li>

                <li class="sidebar-header">LABELS</li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a></li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <div class="content-wrapper">
            <div class="container-fluid">
