<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="assets/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="assets/html/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="assets/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="assets/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="assets/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="assets/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="assets/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Basic Table</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>
                </ul>
                <!-- <div class="center p-20">
                     <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger btn-block waves-effect waves-light">Upgrade to Pro</a>
                 </div> -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <?= @$content ?>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/html/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="assets/html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/html/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/html/js/custom.min.js"></script>
</body>

</html>