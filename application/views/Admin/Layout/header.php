<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url('Asset/Admin/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/bar.css')?>">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/Admin/css/pignose.calender.css')?>" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url('Asset/Admin/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/style4.css')?>">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url('Asset/Admin/css/fontawesome-all.css')?>" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="<?php echo base_url('Asset/Admin///fonts.googleapis.com/css?family=Poiret+One')?>" rel="stylesheet">
    <link href="<?php echo base_url('Asset/Admin///fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')?>" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a >Admin</a>
                </h1>
                <span></span>
            </div>
           <!--  <div class="profile-bg"></div> -->
            <ul class="list-unstyled components">
               
                 <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                      <!--   <i class="fas fa-laptop"></i> -->
                        Section
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo base_url('index.php/Admin_controller/Add_section')?>">Add Section</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('index.php/Admin_controller/Manage_section')?>">Manage Section</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                       <!--  <i class="fas fa-laptop"></i> -->
                        Lawyer
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="<?php echo base_url('index.php/Admin_controller/lawyer')?>">Add Lawyer</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('index.php/Admin_controller/Manage_lawyer')?>">Manage Lawyer</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Admin_controller/User_Details')?>">
                        <!-- <i class="fas fa-chart-pie"></i> -->
                        User Details
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Admin_controller/Registed_case')?>">
                        <!-- <i class="fas fa-chart-pie"></i> -->
                        Registered Cases
                    </a>
                </li>
                
                
                <li>
                    <a href="<?php echo base_url('index.php/Admin_controller/Payment_details')?>">
                      <!--   <i class="fas fa-th"></i> -->
                        Payment Details
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                       <!--  <i class="fas fa-laptop"></i> -->
                       Settings
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="<?php echo base_url('index.php/Admin_controller/change_password')?>">Change Password</a>
                        </li>
                       
                        <li>
                            <a href="<?php echo base_url('index.php/Admin_controller/logout')?>">Logout</a>
                        </li>
                        
                    </ul>
                </li>
                
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                   
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                      
                      
                        <li class="nav-item dropdown">
                           
                            
            </nav>
            <!--// top-bar -->
           
            <!--// Bar-Chart -->

            <!--// three-grids -->
          