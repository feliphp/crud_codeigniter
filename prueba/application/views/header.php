<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <title>Users | Prueba</title>
		<link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png';?>">
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href='<?php echo base_url()."css/bootstrap.min.css";?>'>
    <!-- bootstrap theme -->
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap-theme.css';?>">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url().'css/elegant-icons-style.css';?>" rel="stylesheet" />
    <link href="<?php echo base_url().'css/font-awesome.css';?>" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url().'css/style.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'css/style-responsive.css';?>" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/lte-ie7.js"></script>
<![endif]-->
</head>
<body>
  <body>

    <!-- container section start -->
    <section id="container" class="">
        <!--header start-->
        <header class="header dark-bg">
              <div class="toggle-nav">
                  <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
              </div>

              <!--logo start-->
              <a href="index.php?cargar=inicio" class="logo">PRUEBA <span class="lite">ABC DIGITAL</span></a>
              <!--logo end-->

              <div class="nav search-row" id="top_menu">
                  <!--  search form start -->
                  <ul class="nav top-menu">
                      <li>
                        <!--  <form class="navbar-form">
                              <input class="form-control" placeholder="Search" type="text">
                          </form>-->
                      </li>
                  </ul>
                  <!--  search form end -->
              </div>

              <div class="top-nav notification-row">
                  <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                      <!-- user login dropdown start-->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                  <img alt="" src="../images/avatar1_small.png">
                              </span>
                              <span class="username">
                                <?php //echo $_SESSION['username'];?></span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <!--<li class="eborder-top">
                                  <a href="#"><i class="icon_profile"></i> My Profile</a>
                              </li>
                              <li>
                                  <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                              </li>-->
                              <li>
                                  <a href="<?php echo site_url('users/logout'); ?>"><i class="icon_key_alt"></i> Log Out</a>
                              </li>

                          </ul>
                      </li>
                      <!-- user login dropdown end -->
                  </ul>
                  <!-- notificatoin dropdown end-->
              </div>
        </header>
        <!--header end-->
