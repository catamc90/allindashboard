<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>AllinDashboard</title>
    <!-- This page CSS -->
    <!-- chartist CSS
    <link href="./morris.css" rel="stylesheet"> -->
    <!--Toaster Popup message CSS
    <link href="./jquery.toast.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="./assets/css/style.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="./assets/css/dashboard1.css" rel="stylesheet">
    <link href="./assets/css/update.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--users.php-->
    <link href="./assets/css/footable.core.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./assets/css/footable-page.css" rel="stylesheet">
    <!-- end users.php-->

    <!--news.php-->
<!--    <link href="./assets/css/css-chart.css" rel="stylesheet">-->
    <!--end news-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="skin-purple fixed-layout mini-sidebar">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader" style="display: none;">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="assets/images/sign1.png" alt="homepage" class="dark-logo">
                        <!-- Light Logo icon -->
                        <img src="assets/images/sign1.png" alt="homepage" class="light-logo">
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span style="display: none;">
                         <!-- dark Logo text -->
                         <img src="assets/images/sign1.png" alt="homepage" class="dark-logo">
                        <!-- Light Logo text -->
                         <img src="assets/images/sign1.png" class="light-logo" alt="homepage"></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars fa-2x"></i></a> </li>
<!--                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars fa-2x"></i></a> </li>-->
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item">
                        <img src="assets/images/sign2.png">

                    </li>
                </ul>
                <!-- ============================================================== -->



                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="hidden-md-down">Hello, <strong>Kelly!</strong> &nbsp;</span>
                            <img src="./assets/images/1.jpg" alt="user" class="img-circle">
                            <span class="badgehh badge-default"><span class="txt"> 7 </span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"> NOTIFICATIONS <span class="badge-dropdown"><span class="txt"> 7 </span></span></a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item">SETTINGS</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item">FEEDBACK</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item">LOGOUT</a>

                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    <!--<li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>-->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar ps ps--theme_default ps--active-y" data-ps-id="c25eecb8-efa0-c069-eee4-45045f9cb0c7">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">

                    <li class="active"> <a class="has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-th-large fa-lg"></i><span class="hide-menu"> DASHBOARD
                            <span class="badge badge-pill badge-cyan ml-auto">5</span></span></a>
                        <ul aria-expanded="false" class="collapse in">
                            <li class="active"><a href="index.php" class="active">Overview </a></li>
                            <li><a href="users.php">Users</a></li>
                            <li><a href="leaderboard.php">Leaderboard</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="alerts.php">Alerts</a></li>
                        </ul>
                    </li>

                    <li> <a class="waves-effect waves-dark" href="media.php" aria-expanded="false"><i class="fa fa-images fa-lg"></i><span class="hide-menu">Media</span></a></li>

<!--                    <li> <a class="has-arrow waves-effect waves-dark" href="media.php" ><i class="fas fa-images fa-lg"></i><span class="hide-menu"> Media</span></a></li>-->


                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-newspaper fa-lg"></i><span class="hide-menu"> News</span></a>
                    </li>

                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-bell fa-lg"></i><span class="hide-menu"> Alerts</span></a>
                    </li>

                    <li> <a class="waves-effect waves-dark" href="settings.php" aria-expanded="false"><i class="fas fa-users fa-lg"></i><span class="hide-menu">Settings</span></a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 847px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 558px;"></div></div></div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.css  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->