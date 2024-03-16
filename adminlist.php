<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DreamScape Homes | Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Main Wrapper -->


    <!-- Header -->
    <br />
    <b>Notice</b>: session_start(): Ignoring session_start() because a session is already active in
    <b>C:\xampp\htdocs\RealEstate-PHP\admin\header.php</b> on line <b>2</b><br />

    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="dashboard.php" class="logo">
                <img src="assets/img/rsadmin.png" alt="Logo">
            </a>
            <a href="dashboard.php" class="logo logo-small">
                <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>



        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">


            <!-- User Menu -->
            <!-- <h4 style="color:white;margin-top:13px;text-transform:capitalize;"></h4> -->
            <li class="nav-item dropdown app-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png"
                            width="31" alt="Ryan Taylor"></span>
                </a>

                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="assets/img/profiles/avatar-01.png" alt="User Image"
                                class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6></h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>

            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>

    <!-- header --->



    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="menu-title">
                        <span>All Users</span>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="adminlist.php"> Admin </a></li>
                            <li><a href="userlist.php"> Users </a></li>
                            <li><a href="useragent.php"> Agent </a></li>
                            <li><a href="userbuilder.php"> Builder </a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>State & City</span>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fe fe-location"></i> <span>State & City</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="stateadd.php"> State </a></li>
                            <li><a href="cityadd.php"> City </a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Property Management</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-map"></i> <span> Property</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="propertyadd.php"> Add Property</a></li>
                            <li><a href="propertyview.php"> View Property </a></li>

                        </ul>
                    </li>



                    <li class="menu-title">
                        <span>Query</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-comment"></i> <span> Contact,Feedback </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="contactview.php"> Contact </a></li>
                            <li><a href="feedbackview.php"> Feedback </a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>About</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-browser"></i> <span> About Page </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="aboutadd.php"> Add About Content </a></li>
                            <li><a href="aboutview.php"> View About </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Admin</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Admin List</h4>
                        </div>
                        <div class="card-body">

                            <table id="basic-datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Of Birth</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>admin@gmail.com</td>
                                        <td>1994-12-06</td>
                                        <td>1470002569</td>
                                        <td><a href="admindelete.php?id=9"><button
                                                    class="btn btn-danger">Delete</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>pambi</td>
                                        <td>pambi@gmail.com</td>
                                        <td>0000-00-00</td>
                                        <td>0789887766</td>
                                        <td><a href="admindelete.php?id=14"><button
                                                    class="btn btn-danger">Delete</button></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->


    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.flash.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>