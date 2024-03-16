<?php
session_start();
require ("connection.php");
////code

// if(!isset($_SESSION['auser']))
// {
// 	header("location:index.php");
// }
//                  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreamscape - Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main_style.css">


</head>

<body>

    <!-- Main Wrapper -->


    <!-- Header -->
    <?php
    include 'inc/my_header.php';
    ?>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li>
                        <a href="admin_dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>


                    <li class="menu-title">
                        <span>All Users</span>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="useradmin.php"> Admin </a></li>
                            <li><a href="usertenant.php"> Tenants </a></li>
                            <li><a href="useragent.php"> Agent </a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Admin</span>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fe fe-location"></i> <span>Admin</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="admin_registration_form.php"> Admin Registration</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Property Management</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-map"></i> <span> Property</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="propertyviewadmin.php"> View Properties </a></li>

                        </ul>
                    </li>




                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <p></p>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM tenants WHERE utype = 'tenant'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered Tenants</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM agents WHERE utype = 'agent'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered Agents</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-user"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties ";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered properties</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties WHERE propertytype = 'Villa'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered Villas</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties WHERE propertytype = 'Apartment'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered Apartments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-user"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties WHERE propertytype = 'Flat'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered flat</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties WHERE propertytype = 'Office'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered offices</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM agents WHERE utype = 'agent'";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered Agents</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-user"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties ";
                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered properties</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-user"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties ";

                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered Apartments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-user"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties WHERE statetype = 'rent'";

                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered properties for rent</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-user"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>
                                    <?php $sql = "SELECT * FROM properties WHERE statetype = 'sale'";

                                    $query = $conn->query($sql);
                                    echo "$query->num_rows"; ?>
                                </h3>

                                <h6 class="text-muted">Registered properties for sale</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>









                <!-- jQuery -->
                <script src="admin/js/jquery-3.2.1.min.js"></script>

                <!-- Bootstrap Core JS -->
                <script src="admin/js/popper.min.js"></script>
                <script src="admin/js/bootstrap.min.js"></script>

                <!-- Slimscroll JS -->
                <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

                <script src="assets/plugins/raphael/raphael.min.js"></script>
                <script src="assets/plugins/morris/morris.min.js"></script>
                <script src="admin/js/chart.morris.js"></script>

                <!-- Custom JS -->
                <script src="admin/js/script.js"></script>
            </div>
</body>

</html>