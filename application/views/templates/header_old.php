<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $viewName?></title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="<?php echo base_url();?>admin_css/bootstrap.min.css" rel="stylesheet">
    <!-- mailbox -->
    <link href="<?php echo base_url();?>admin_css/mailbox.css" rel="stylesheet">
    <!-- slimscroll -->
    <link href="<?php echo base_url();?>admin_css/jquery.slimscroll.css" rel="stylesheet">
    <!-- Fontes -->
    <link href="<?php echo base_url();?>admin_css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin_css/simple-line-icons.css" rel="stylesheet">
    <!-- flotCart css -->
    <link href="<?php echo base_url();?>admin_css/flotCart.css" rel="stylesheet">
    <!-- all buttons css -->
    <link href="<?php echo base_url();?>admin_css/buttons.css" rel="stylesheet">
    <!-- animate css -->
    <link href="<?php echo base_url();?>admin_css/animate.css" rel="stylesheet">
    <!-- adminbag main css -->
    <link href="<?php echo base_url();?>admin_css/main.css" rel="stylesheet">
    <!-- media css for responsive  -->
    <link href="<?php echo base_url();?>admin_css/main.media.css" rel="stylesheet">
    <!-- eCommerce css -->
    <link href="<?php echo base_url();?>admin_css/eCommerce.css" rel="stylesheet">
    <!-- icheck -->
    <link href="<?php echo base_url();?>admin_css/all.css" rel="stylesheet">
    <!-- aqua black theme css -->
    <link href="<?php echo base_url();?>admin_css/aqua-black.css" rel="stylesheet">

    <link href="<?php echo base_url();?>js/DataTables/datatables.css" rel="stylesheet">
    <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>
<style type="text/css">
  .card-image {
  min-height: 1px; // 1 
  
  > img {
    border-radius: 3px;
    display: block;
    margin: auto;
    max-width: 100%;
  }
  
  &:not(:first-child):not(:last-child) { 
    border-radius: 0; 
  } 
}

%card-image-side {
  width: 100%; // 1
  
  @media (min-width: 30em) { 
    max-width: 55%; // 2   
  }   
  
  > img {
    height: 100%;
  }  
}</style>
<body class="page-header-fixed">
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="dash1.html"> <img class="logo-default" alt="logo" src="<?php echo base_url();?>images/logo.png" style="margin-bottom:20px; "> </a>
            </div>
            <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div>
            <!-- END LOGO -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info"> <i class="fa fa-envelope"></i> <span class="badge badge-info">6</span> </a>
                        <ul class="dropdown-menu dropdown-messages menuBig">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="pull-left" href="#"> <img src="" class="img-circle" alt="image"> </a>
                                    <div class="media-body"> <small class="pull-right">46h ago</small> <strong>Mike Loreipsum</strong> started following <strong>Olivia Wenscombe</strong>.
                                        <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small> </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="pull-left" href="#"> <img src="" class="img-circle" alt="image"> </a>
                                    <div class="media-body "> <small class="pull-right text-navy">5h ago</small> <strong> Alex Smith </strong> started following <strong>Olivia Wenscombe</strong>.
                                        <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small> </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="pull-left" href="#"> <img src="" class="img-circle" alt="image"> </a>
                                    <div class="media-body "> <small class="pull-right">23h ago</small> <strong>Olivia Wenscombe</strong> love <strong>Sophie </strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small> </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="#> <i class="fa fa-envelope"></i> <strong>Read All Messages</strong> </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info"> <i class="fa fa-bell"></i> <span class="badge badge-primary">8</span> </a>
                        <ul class="dropdown-menu dropdown-alerts menuBig">
                            <li>
                                <a href="#">
                                    <div> <i class="fa fa-envelope fa-fw"></i> You have 16 messages <span class="pull-right text-muted small">4 minutes ago</span> </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div> <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div> <i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span> </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="#"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- START USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <img src="" class="img-circle" alt=""> <span class="username username-hide-on-mobile"> Admin</span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#"> <i class="icon-user"></i> My Profile </a>

                            </li>
                            <li>
                                <a href="#"> <i class="icon-user"></i> Profile-2 </a>
                            </li>
                            <li>
                                <a href="#"> <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="#"> <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger"> 3 </span> </a>
                            </li>
                            <li>
                                <a href="dash1.html"> <i class="icon-rocket"></i> My Tasks <span class="badge badge-success"> 7 </span> </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#"> <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('User/logout'); ?>"> <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    
          

    
          
   

          <!-- #/ container -->
              </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <div class="page-container">
        <!-- Start page sidebar wrapper -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar">
                <ul class="page-sidebar-menu  page-header-fixed ">
                    <li class="sidebar-search-wrapper">
                        <!-- START RESPONSIVE SEARCH FORM -->
                        <form class="sidebar-search  " action="#" method="POST">
                            <a href="javascript:;" class="remove"> <i class="icon-close"></i> </a>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn"> <a href="javascript:;" class="btn submit"> <i class="icon-magnifier"></i> </a> </span> </div>
                        </form>
                        <!-- END RESPONSIVE SEARCH FORM -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="<?php echo base_url('Dashboard');?>"> <i class="fa fa-th-large"></i> <span class="title">Dashboard</span> <i class="fa fa-chevron-right" aria-hidden="true" style="padding-left: 80px;"></i> </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">CMS </span> <i class="fa fa-chevron-right" aria-hidden="true" style="padding-left: 80px;"></i> </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/partnersDetails');?>"> <span class="title">Partner</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/banners');?>"> <span class="title">Banner</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/footerInfo');?>"> <span class="title">Footer Info</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/contactUs');?>"> <span class="title">Contact Us</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/editAboutUs');?>"> <span class="title">About Us</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/editServices');?>"> <span class="title">Services</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/editPrivacyPolicy');?>"> <span class="title">Privacy Policy</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Dashboard/editOurNetwork');?>"> <span class="title">Our Network</span> </a>
                            </li>
                        </ul>
                    </li>
                     <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/transfer');?>"> <i class="fa fa-th-large"></i> <span class="title">Transfer</span> <span class=""></span> </a>
                         
                    </li>
                   
                    <!--li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Booking List</span> <span class="arrow"></span> </a>
                         
                    </li-->
                   
                   <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/hotel')?>"> <i class="fa fa-th-large"></i> <span class="title">Hotel</span> <i class="" aria-hidden="true"></i> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/visa');?>"> <i class="fa fa-th-large"></i> <span class="title">Visa</span> <i class="" aria-hidden="true"></i> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/dubaiUaeVisa');?>"> <i class="fa fa-th-large"></i> <span class="title">Dubai UAE Visa</span> <i class="" aria-hidden="true"></i> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/flights');?>"> <i class="fa fa-th-large"></i> <span class="title">Flight</span> <i class="" aria-hidden="true"></i> </a>
                         
                    </li>
                    
                    <!--li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Report</span> <span class="arrow"></span> </a>
                         
                    </li>
                   
                    <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Accounting</span> <span class="arrow"></span> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Package Management</span> <span class="arrow"></span> </a>
                         
                    </li -->
                    <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/TravelSimData');?>"> <i class="fa fa-th-large"></i> <span class="title">Travel Sim Card</span> <span class=""></span> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/TravelInsuranceData');?>"> <i class="fa fa-th-large"></i> <span class="title">Travel Insurance</span> <span class=""></span> </a>
                         
                    </li>
                   <li >
                       <a class="nav-link " href="<?php echo base_url('Dashboard/ListTourPackages');?>"> <i class="fa fa-th-large"></i> <span class="title">Tour Packages</span> <span class=""></span> </a>
                         
                    </li>
                        </ul>
                    </li>
                   
                   
                </ul>
            </div>
        </div>
        <!-- End page sidebar wrapper -->
