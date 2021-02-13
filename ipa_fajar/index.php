<?php
session_start();
include './koneksi.php';

function base() {
    echo str_replace("index.php", "", $_SERVER['PHP_SELF']);
}

$link = "http://localhost/ipa_fajar/";
$url = explode("/", $_SERVER["QUERY_STRING"]);
if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
    ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com//polygon/adminty/default/widget-statistic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 06:22:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- radial chart -->
    <link rel="stylesheet" href="../files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="../files/assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.html">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.html">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.html">
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Vertical</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-static.html">
                                                        <span class="pcoded-mtext" >Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-header-fixed.html">
                                                        <span class="pcoded-mtext" >Header Fixed</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-compact.html">
                                                        <span class="pcoded-mtext" >Compact</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-sidebar.html">
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext" >Horizontal</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-horizontal-static.html" target="_blank">
                                                        <span class="pcoded-mtext" >Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-fixed.html" target="_blank">
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon.html" target="_blank">
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon-fixed.html" target="_blank">
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-bottom.html">
                                                <span class="pcoded-mtext" >Bottom Menu</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.html" target="_blank">
                                                <span class="pcoded-mtext">Box Layout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.html" target="_blank">
                                                <span class="pcoded-mtext">RTL</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="navbar-light.html">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext" >Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="widget-statistic.html">
                                                <span class="pcoded-mtext" >Statistic</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.html">
                                                <span class="pcoded-mtext" >Data</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-chart.html">
                                                <span class="pcoded-mtext" >Chart Widget</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext" >Basic Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="alert.html">
                                                <span class="pcoded-mtext">Alert</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.html">
                                                <span class="pcoded-mtext" >Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html">
                                                <span class="pcoded-mtext" >Button</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-shadow.html">
                                                <span class="pcoded-mtext" >Box-Shadow</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="accordion.html">
                                                <span class="pcoded-mtext" >Accordion</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="generic-class.html">
                                                <span class="pcoded-mtext" >Generic Class</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html">
                                                <span class="pcoded-mtext" >Tabs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html">
                                                <span class="pcoded-mtext" >Color</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html">
                                                <span class="pcoded-mtext">Label Badge</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="progress-bar.html">
                                                <span class="pcoded-mtext" >Progress Bar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="preloader.html">
                                                <span class="pcoded-mtext" >Pre-Loader</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="list.html">
                                                <span class="pcoded-mtext" >List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html">
                                                <span class="pcoded-mtext" >Tooltip And Popover</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html">
                                                <span class="pcoded-mtext" >Typography</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="other.html">
                                                <span class="pcoded-mtext" >Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                        <span class="pcoded-mtext">Advance Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="draggable.html">
                                                <span class="pcoded-mtext" >Draggable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-grid.html">
                                                <span class="pcoded-mtext" >Grid Stack</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="light-box.html">
                                                <span class="pcoded-mtext" >Light Box</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="modal.html">
                                                <span class="pcoded-mtext" >Modal</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.html">
                                                <span class="pcoded-mtext" >Notifications</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notify.html">
                                                <span class="pcoded-mtext" >PNOTIFY</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rating.html">
                                                <span class="pcoded-mtext" >Rating</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="range-slider.html">
                                                <span class="pcoded-mtext" >Range Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="slider.html">
                                                <span class="pcoded-mtext" >Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="syntax-highlighter.html">
                                                <span class="pcoded-mtext" >Syntax Highlighter</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tour.html">
                                                <span class="pcoded-mtext" >Tour</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="treeview.html">
                                                <span class="pcoded-mtext" >Tree View</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="nestable.html">
                                                <span class="pcoded-mtext" >Nestable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="toolbar.html">
                                                <span class="pcoded-mtext" >Toolbar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="x-editable.html">
                                                <span class="pcoded-mtext" >X-Editable</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                        <span class="pcoded-mtext" >Extra Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="session-timeout.html">
                                                <span class="pcoded-mtext" >Session Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="session-idle-timeout.html">
                                                <span class="pcoded-mtext" >Session Idle Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="offline.html">
                                                <span class="pcoded-mtext" >Offline</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="animation.html">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext" >Animations</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="sticky.html">
                                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                        <span class="pcoded-mtext" >Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                        <span class="pcoded-mtext" >Icons</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.html">
                                                <span class="pcoded-mtext" >Font Awesome</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-mtext" >Themify</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-simple-line.html">
                                                <span class="pcoded-mtext" >Simple Line Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-ion.html">
                                                <span class="pcoded-mtext" >Ion Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-material-design.html">
                                                <span class="pcoded-mtext" >Material Design</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-icofonts.html">
                                                <span class="pcoded-mtext" >Ico Fonts</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-weather.html">
                                                <span class="pcoded-mtext" >Weather Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-typicons.html">
                                                <span class="pcoded-mtext" >Typicons</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-flags.html">
                                                <span class="pcoded-mtext" >Flags</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext" >Form Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="form-elements-component.html">
                                                <span class="pcoded-mtext" >Form Components</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-add-on.html">
                                                <span class="pcoded-mtext" >Form-Elements-Add-On</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-advance.html">
                                                <span class="pcoded-mtext" >Form-Elements-Advance</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-validation.html">
                                                <span class="pcoded-mtext" >Form Validation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="form-picker.html">
                                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                                        <span class="pcoded-mtext" >Form Picker</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-select.html">
                                        <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                                        <span class="pcoded-mtext" >Form Select</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-masking.html">
                                        <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                        <span class="pcoded-mtext" >Form Masking</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-wizard.html">
                                        <span class="pcoded-micon"><i class="feather icon-tv"></i></span>
                                        <span class="pcoded-mtext" >Form Wizard</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                        <span class="pcoded-mtext" >Ready To Use</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="ready-cloned-elements-form.html">
                                                <span class="pcoded-mtext" >Cloned Elements Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-currency-form.html">
                                                <span class="pcoded-mtext" >Currency Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking.html">
                                                <span class="pcoded-mtext" >Booking Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking-multi-steps.html">
                                                <span class="pcoded-mtext" >Booking Multi Steps Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-comment.html">
                                                <span class="pcoded-mtext" >Comment Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-contact.html">
                                                <span class="pcoded-mtext" >Contact Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-job-application-form.html">
                                                <span class="pcoded-mtext" >Job Application Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-js-addition-form.html">
                                                <span class="pcoded-mtext" >JS Addition Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-login-form.html">
                                                <span class="pcoded-mtext" >Login Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-popup-modal-form.html" target="_blank">
                                                <span class="pcoded-mtext" >Popup Modal Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-registration-form.html">
                                                <span class="pcoded-mtext" >Registration Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-review-form.html">
                                                <span class="pcoded-mtext" >Review Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-subscribe-form.html">
                                                <span class="pcoded-mtext" >Subscribe Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-suggestion-form.html">
                                                <span class="pcoded-mtext" >Suggestion Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-tabs-form.html">
                                                <span class="pcoded-mtext" >Tabs Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                        <span class="pcoded-mtext" >Bootstrap Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="bs-basic-table.html">
                                                <span class="pcoded-mtext" >Basic Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-sizing.html">
                                                <span class="pcoded-mtext" >Sizing Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-border.html">
                                                <span class="pcoded-mtext" >Border Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-styling.html">
                                                <span class="pcoded-mtext" >Styling Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-inbox"></i></span>
                                        <span class="pcoded-mtext" >Data Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-basic.html">
                                                <span class="pcoded-mtext" >Basic Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-advance.html">
                                                <span class="pcoded-mtext" >Advance Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-styling.html">
                                                <span class="pcoded-mtext" >Styling</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-api.html">
                                                <span class="pcoded-mtext" >API</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ajax.html">
                                                <span class="pcoded-mtext" >Ajax</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-server-side.html">
                                                <span class="pcoded-mtext" >Server Side</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-plugin.html">
                                                <span class="pcoded-mtext" >Plug-In</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-data-sources.html">
                                                <span class="pcoded-mtext" >Data Sources</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                                        <span class="pcoded-mtext">Data Table Extensions</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-autofill.html">
                                                <span class="pcoded-mtext" >AutoFill</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext" >Button</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="dt-ext-basic-buttons.html">
                                                        <span class="pcoded-mtext" >Basic Button</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dt-ext-buttons-html-5-data-export.html">
                                                        <span class="pcoded-mtext" >Html-5 Data Export</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-col-reorder.html">
                                                <span class="pcoded-mtext" >Col Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-columns.html">
                                                <span class="pcoded-mtext" >Fixed Columns</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-header.html">
                                                <span class="pcoded-mtext" >Fixed Header</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-key-table.html">
                                                <span class="pcoded-mtext" >Key Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-responsive.html">
                                                <span class="pcoded-mtext" >Responsive</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-row-reorder.html">
                                                <span class="pcoded-mtext" >Row Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-scroller.html">
                                                <span class="pcoded-mtext"  >Scroller</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-select.html">
                                                <span class="pcoded-mtext" >Select Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="foo-table.html">
                                        <span class="pcoded-micon"><i class="feather icon-hash"></i></span>
                                        <span class="pcoded-mtext" >FooTable</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                                        <span class="pcoded-mtext" >Handson Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="handson-appearance.html">
                                                <span class="pcoded-mtext">Appearance</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-data-operation.html">
                                                <span class="pcoded-mtext">Data Operation</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-cols.html">
                                                <span class="pcoded-mtext">Rows Columns</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-columns-only.html">
                                                <span class="pcoded-mtext">Columns Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-features.html">
                                                <span class="pcoded-mtext">Cell Features</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-types.html">
                                                <span class="pcoded-mtext">Cell Types</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-integrations.html">
                                                <span class="pcoded-mtext">Integrations</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-only.html">
                                                <span class="pcoded-mtext">Rows Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-utilities.html">
                                                <span class="pcoded-mtext">Utilities</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="editable-table.html">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext" >Editable Table</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                                        <span class="pcoded-mtext" >Charts</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="chart-google.html">
                                                <span class="pcoded-mtext" >Google Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-echart.html">
                                                <span class="pcoded-mtext" >Echarts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-chartjs.html">
                                                <span class="pcoded-mtext" >ChartJs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-list.html">
                                                <span class="pcoded-mtext" >List Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-float.html">
                                                <span class="pcoded-mtext" >Float Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-knob.html">
                                                <span class="pcoded-mtext" >Knob chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-morris.html">
                                                <span class="pcoded-mtext" >Morris Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-nvd3.html">
                                                <span class="pcoded-mtext" >Nvd3 Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-peity.html">
                                                <span class="pcoded-mtext" >Peity Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-radial.html">
                                                <span class="pcoded-mtext" >Radial Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-rickshaw.html">
                                                <span class="pcoded-mtext" >Rickshaw Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-sparkline.html">
                                                <span class="pcoded-mtext" >Sparkline Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-c3.html">
                                                <span class="pcoded-mtext" >C3 Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                        <span class="pcoded-mtext">Maps</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="map-google.html">
                                                <span class="pcoded-mtext" >Google Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-vector.html">
                                                <span class="pcoded-mtext" >Vector Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-api.html">
                                                <span class="pcoded-mtext" >Google Map Search API</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="location.html">
                                                <span class="pcoded-mtext" >Location</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="https://colorlib.com//polygon/adminty/files/extra-pages/landingpage/index.html" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span>
                                        <span class="pcoded-mtext" >Landing Page</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                        <span class="pcoded-mtext">Authentication</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.html" target="_blank">
                                                <span class="pcoded-mtext" >Login With BG Image</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social.html" target="_blank">
                                                <span class="pcoded-mtext" >Login With Social Icon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext" >Login Social With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-normal-sign-in-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext" >Login With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" target="_blank">
                                                <span class="pcoded-mtext" >Registration BG Image</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social.html" target="_blank">
                                                <span class="pcoded-mtext" >Registration Social Icon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext" >Registration Social With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext" >Registration With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-multi-step-sign-up.html" target="_blank">
                                                <span class="pcoded-mtext" >Multi Step Registration</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-reset-password.html" target="_blank">
                                                <span class="pcoded-mtext" >Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-lock-screen.html" target="_blank">
                                                <span class="pcoded-mtext" >Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-modal.html" target="_blank">
                                                <span class="pcoded-mtext" >Modal</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                        <span class="pcoded-mtext" >Maintenance</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="error.html">
                                                <span class="pcoded-mtext" >Error</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="comming-soon.html">
                                                <span class="pcoded-mtext" >Comming Soon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="offline-ui.html">
                                                <span class="pcoded-mtext" >Offline UI</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext" >User Profile</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="timeline.html">
                                                <span class="pcoded-mtext" >Timeline</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="timeline-social.html">
                                                <span class="pcoded-mtext" >Timeline Social</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-profile.html">
                                                <span class="pcoded-mtext" >User Profile</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-card.html">
                                                <span class="pcoded-mtext" >User Card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                        <span class="pcoded-mtext" >E-Commerce</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="product.html">
                                                <span class="pcoded-mtext" >Product</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-list.html">
                                                <span class="pcoded-mtext" >Product List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-edit.html">
                                                <span class="pcoded-mtext" >Product Edit</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-detail.html">
                                                <span class="pcoded-mtext" >Product Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-cart.html">
                                                <span class="pcoded-mtext" >Product Card</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-payment.html">
                                                <span class="pcoded-mtext" >Credit Card Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                        <span class="pcoded-mtext" >Email</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="email-compose.html">
                                                <span class="pcoded-mtext" >Compose Email</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-inbox.html">
                                                <span class="pcoded-mtext" >Inbox</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-read.html">
                                                <span class="pcoded-mtext" >Read Mail</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext" >Email Template</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-welcome.html">
                                                        <span class="pcoded-mtext" >Welcome Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-password.html">
                                                        <span class="pcoded-mtext"  >Reset Password</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-newsletter.html">
                                                        <span class="pcoded-mtext"  >Newsletter Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-launch.html">
                                                        <span class="pcoded-mtext" >App Launch</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-activation.html">
                                                        <span class="pcoded-mtext" >Activation Code</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">App</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="chat.html">
                                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                        <span class="pcoded-mtext" >Chat</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-globe"></i></span>
                                        <span class="pcoded-mtext" >Social</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="fb-wall.html">
                                                <span class="pcoded-mtext" >Wall</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="message.html">
                                                <span class="pcoded-mtext" >Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                        <span class="pcoded-mtext" >Task</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="task-list.html">
                                                <span class="pcoded-mtext" >Task List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="task-board.html">
                                                <span class="pcoded-mtext" >Task Board</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="task-detail.html">
                                                <span class="pcoded-mtext" >Task Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="issue-list.html">
                                                <span class="pcoded-mtext" >Issue List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                                        <span class="pcoded-mtext" >To-Do</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="todo.html">
                                                <span class="pcoded-mtext" >To-Do</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="notes.html">
                                                <span class="pcoded-mtext">Notes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                                        <span class="pcoded-mtext">Gallery</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="gallery-grid.html">
                                                <span class="pcoded-mtext" >Gallery-Grid</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-masonry.html">
                                                <span class="pcoded-mtext" >Masonry Gallery</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-advance.html">
                                                <span class="pcoded-mtext" >Advance Gallery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-search"></i><b>S</b></span>
                                        <span class="pcoded-mtext" >Search</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="search-result.html">
                                                <span class="pcoded-mtext" >Simple Search</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="search-result2.html">
                                                <span class="pcoded-mtext" >Grouping Search</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                                        <span class="pcoded-mtext" >Job Search</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="job-card-view.html">
                                                <span class="pcoded-mtext" >Card View</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-details.html">
                                                <span class="pcoded-mtext" >Job Detailed</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-find.html">
                                                <span class="pcoded-mtext" >Job Find</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-panel-view.html">
                                                <span class="pcoded-mtext" >Job Panel View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Extension</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                                        <span class="pcoded-mtext" >Editor</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="ck-editor.html">
                                                <span class="pcoded-mtext" >CK-Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="wysiwyg-editor.html">
                                                <span class="pcoded-mtext" >WYSIWYG Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ace-editor.html">
                                                <span class="pcoded-mtext" >Ace Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="long-press-editor.html">
                                                <span class="pcoded-mtext" >Long Press Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
                                        <span class="pcoded-mtext" >Invoice</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="invoice.html">
                                                <span class="pcoded-mtext" >Invoice</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-summary.html">
                                                <span class="pcoded-mtext" >Invoice Summary</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-list.html">
                                                <span class="pcoded-mtext" >Invoice List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext" >Event Calendar</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="event-full-calender.html">
                                                <span class="pcoded-mtext" >Full Calendar</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="event-clndr.html">
                                                <span class="pcoded-mtext" >CLNDER</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="image-crop.html">
                                        <span class="pcoded-micon"><i class="feather icon-scissors"></i></span>
                                        <span class="pcoded-mtext" >Image Cropper</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="file-upload.html">
                                        <span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span>
                                        <span class="pcoded-mtext" >File Upload</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="change-loges.html">
                                        <span class="pcoded-micon"><i class="feather icon-briefcase"></i><b>CL</b></span>
                                        <span class="pcoded-mtext" >Change Loges</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                        <span class="pcoded-mtext">Menu Levels</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext" >Menu Level 2.1</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext" >Menu Level 2.2</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)">
                                                        <span class="pcoded-mtext" >Menu Level 3.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext" >Menu Level 2.3</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="disabled">
                                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                                        <span class="pcoded-mtext"  >Disabled Menu</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sample-page.html">
                                        <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                                        <span class="pcoded-mtext" >Sample Page</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                        <span class="pcoded-mtext" >Documentation</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                                        <span class="pcoded-mtext" >Submit Issue</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Widget</h4>
                                                        <span>More than 100+ widget</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Widget</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- statustic with progressbar  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card statustic-progress-card">
                                                    <div class="card-header">
                                                        <h5>Open Ticket</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <label class="label label-success">
                                                                    35% <i class="m-l-10 feather icon-arrow-up"></i>
                                                                </label>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="">35</h5>
                                                            </div>
                                                        </div>
                                                        <div class="progress m-t-15">
                                                            <div class="progress-bar bg-c-green" style="width:35%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card statustic-progress-card">
                                                    <div class="card-header">
                                                        <h5>Open Ticket</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <label class="label bg-c-lite-green">
                                                                    35% <i class="m-l-10 feather icon-arrow-up"></i>
                                                                </label>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="">28</h5>
                                                            </div>
                                                        </div>
                                                        <div class="progress m-t-15">
                                                            <div class="progress-bar bg-c-lite-green" style="width:28%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card statustic-progress-card">
                                                    <div class="card-header">
                                                        <h5>Open Ticket</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <label class="label label-danger">
                                                                    35% <i class="m-l-10 feather icon-arrow-up"></i>
                                                                </label>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="">87</h5>
                                                            </div>
                                                        </div>
                                                        <div class="progress m-t-15">
                                                            <div class="progress-bar bg-c-pink" style="width:87%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card statustic-progress-card">
                                                    <div class="card-header">
                                                        <h5>Open Ticket</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <label class="label label-warning">
                                                                    35% <i class="m-l-10 feather icon-arrow-up"></i>
                                                                </label>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="">32</h5>
                                                            </div>
                                                        </div>
                                                        <div class="progress m-t-15">
                                                            <div class="progress-bar bg-c-yellow" style="width:32%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic with progressbar  end -->

                                            <!-- customar project  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center m-l-0">
                                                            <div class="col-auto">
                                                                <i class="feather icon-book f-30 text-c-lite-green"></i>
                                                            </div>
                                                            <div class="col-auto">
                                                                <h6 class="text-muted m-b-10">Tickets Answered</h6>
                                                                <h2 class="m-b-0">379</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center m-l-0">
                                                            <div class="col-auto">
                                                                <i class="feather icon-feather f-30 text-c-green"></i>
                                                            </div>
                                                            <div class="col-auto">
                                                                <h6 class="text-muted m-b-10">Projects Launched</h6>
                                                                <h2 class="m-b-0">205</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center m-l-0">
                                                            <div class="col-auto">
                                                                <i class="feather icon-users f-30 text-c-pink"></i>
                                                            </div>
                                                            <div class="col-auto">
                                                                <h6 class="text-muted m-b-10">Happy Customers</h6>
                                                                <h2 class="m-b-0">5984</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center m-l-0">
                                                            <div class="col-auto">
                                                                <i class="feather icon-battery-charging f-30 text-c-blue"></i>
                                                            </div>
                                                            <div class="col-auto">
                                                                <h6 class="text-muted m-b-10">Unique Innovation</h6>
                                                                <h2 class="m-b-0">325</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- customar project  end -->

                                            <!-- user start -->
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600">Jeny William</h6>
                                                                <p>Web Designer</p>
                                                                <i class="feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400"><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="610b040f1821060c00080d4f020e0c">[email&#160;protected]</a></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="text-muted f-w-400">0023-333-526136</h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Recent</p>
                                                                        <h6 class="text-muted f-w-400">Guruable Admin</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                                                        <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="row">
                                                    <!-- order-visitor start -->
                                                    <div class="col-md-6">
                                                        <div class="card text-center text-white bg-c-green">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Total Subscription</h6>
                                                                <h4 class="m-t-10 m-b-10"><i class="feather icon-arrow-up m-r-15"></i>7652</h4>
                                                                <p class="m-b-0">48% From Last 24 Hours</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center text-white bg-c-pink">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Order Status</h6>
                                                                <h4 class="m-t-10 m-b-10"><i class="feather icon-arrow-up m-r-15"></i>6325</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center text-white bg-c-lite-green">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Unique Visitors</h6>
                                                                <h4 class="m-t-10 m-b-10"><i class="feather icon-arrow-down m-r-15"></i>652</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center text-white bg-c-yellow">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Monthly Earnings</h6>
                                                                <h4 class="m-t-10 m-b-10"><i class="feather icon-arrow-up m-r-15"></i>5963</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- order-visitor end -->
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-block">
                                                                <div class="row">

                                                                    <div class="col-sm-6">
                                                                        <h2 class="d-inline-block text-c-green m-r-10">897</h2>
                                                                        <div class="d-inline-block">
                                                                            <p class="m-b-0"><i class="feather icon-chevrons-down m-r-10 text-c-pink"></i>10%</p>
                                                                            <p class="text-muted m-b-0">Total Users</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <h2 class="d-inline-block text-c-pink m-r-10">8456</h2>
                                                                        <div class="d-inline-block">
                                                                            <p class="m-b-0"><i class="feather icon-chevrons-up m-r-10 text-c-green"></i>87%</p>
                                                                            <p class="text-muted m-b-0">Total Views</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user end -->

                                            <!-- subscribe start -->
                                            <div class="col-md-12 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-mail text-c-lite-green d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-lite-green">8.62k</span> Subscribers</h4>
                                                        <p class="m-b-20">Your main list is growing</p>
                                                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-twitter text-c-green d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-blgreenue">+40</span> Followers</h4>
                                                        <p class="m-b-20">Your main list is growing</p>
                                                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-briefcase text-c-pink d-block f-40"></i>
                                                        <h4 class="m-t-20">Business Plan</h4>
                                                        <p class="m-b-20">This is your current active plan</p>
                                                        <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- subscribe end -->

                                            <!-- statustic start -->
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card statustic-card">
                                                    <div class="card-header">
                                                        <h5>Articles</h5>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <span class="d-block text-c-blue f-36">56</span>
                                                        <p class="m-b-0">Total</p>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-c-blue" style="width:56%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <h6 class="text-white m-b-0">Draft: 22</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card statustic-card">
                                                    <div class="card-header">
                                                        <h5>Categories</h5>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <span class="d-block text-c-green f-36">14</span>
                                                        <p class="m-b-0">Total</p>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-c-green" style="width:14%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <h6 class="text-white m-b-0">Used: 14</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card statustic-card">
                                                    <div class="card-header">
                                                        <h5>Tickets</h5>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <span class="d-block text-c-pink f-36">85</span>
                                                        <p class="m-b-0">Total</p>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-c-pink" style="width:85%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-pink">
                                                        <h6 class="text-white m-b-0">Closed Today: 85</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card statustic-card">
                                                    <div class="card-header">
                                                        <h5>Forums</h5>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <span class="d-block text-c-yellow f-36">42</span>
                                                        <p class="m-b-0">Total</p>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-c-yellow" style="width:42%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <h6 class="text-white m-b-0">Unanswered: 42</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic end -->

                                            <!-- widget-statstic start -->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card widget-statstic-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Statistics</h5>
                                                            <p class="p-t-10 m-b-0 text-c-yellow">Compared to last week</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <i class="feather icon-sliders st-icon bg-c-yellow"></i>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block">5,456</h3>
                                                            <i class="feather icon-arrow-up f-30 text-c-green"></i>
                                                            <span class="f-right bg-c-yellow">23%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-statstic-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Unique Visitor</h5>
                                                            <p class="p-t-10 m-b-0 text-c-pink">55% From last 28 hours</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <i class="feather icon-users st-icon bg-c-pink txt-lite-color"></i>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block">3,874</h3>
                                                            <i class="feather icon-arrow-down text-c-pink f-30 "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-statstic-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>New Orders</h5>
                                                            <p class="p-t-10 m-b-0 text-c-blue">54% From last month</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <i class="feather icon-shopping-cart st-icon bg-c-blue"></i>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block">5,456</h3>
                                                            <i class="feather icon-arrow-up text-c-green f-30 "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- widget-statstic end -->
                                            <!-- user-radial-card  start -->
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card">
                                                    <div class="card-block user-radial-card">
                                                        <div data-label="50%" class="radial-bar radial-bar-90 radial-bar-lg radial-bar-danger">
                                                            <img src="../files/assets/images/avatar-2.jpg" alt="User-Image">
                                                        </div>
                                                        <span class="f-36 text-c-pink">3,6</span>
                                                        <p>From 6 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card">
                                                    <div class="card-block user-radial-card">
                                                        <div data-label="50%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-success">
                                                            <img src="../files/assets/images/avatar-2.jpg" alt="User-Image">
                                                        </div>
                                                        <span class="f-36 text-c-green">85%</span>
                                                        <p>From 6 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card">
                                                    <div class="card-block user-radial-card">
                                                        <div data-label="50%" class="radial-bar radial-bar-60 radial-bar-lg radial-bar-primary">
                                                            <img src="../files/assets/images/avatar-2.jpg" alt="User-Image">
                                                        </div>
                                                        <span class="f-36 text-c-lite-green">73%</span>
                                                        <p>From 6 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card">
                                                    <div class="card-block user-radial-card">
                                                        <div data-label="50%" class="radial-bar radial-bar-35 radial-bar-lg radial-bar-warning">
                                                            <img src="../files/assets/images/avatar-2.jpg" alt="User-Image">
                                                        </div>
                                                        <span class="f-36 text-c-yellow">6</span>
                                                        <p>From 6 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user-radial-card  end -->


                                            <!-- social download  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-blue">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Mail</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-pink">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Twitter</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card social-card bg-simple-c-green">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Instagram</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <!-- social download  end -->

                                            <!-- visitors  start -->
                                            <div class="col-sm-4">
                                                <div class="card bg-c-pink text-white widget-visitor-card">
                                                    <div class="card-block-small text-center">
                                                        <h2>1,658</h2>
                                                        <h6>Daily user</h6>
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card bg-c-blue text-white widget-visitor-card">
                                                    <div class="card-block-small text-center">
                                                        <h2>5,678</h2>
                                                        <h6>Daily visitor</h6>
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card bg-c-yellow text-white widget-visitor-card">
                                                    <div class="card-block-small text-center">
                                                        <h2>5,678</h2>
                                                        <h6>Last month visitor</h6>
                                                        <i class="feather icon-award"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- visitors  end -->

                                            <!-- project  start -->
                                            <div class="col-md-12 col-xl-6 ">
                                                <div class="card app-design">
                                                    <div class="card-block">
                                                        <button class="btn btn-primary f-right">Completed</button>
                                                        <h6 class="f-w-400 text-muted">App design and development</h6>
                                                        <p class="text-c-blue f-w-400">Android</p>
                                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                                        <div class="design-description d-inline-block m-r-40">
                                                            <h3 class="f-w-400">678</h3>
                                                            <p class="text-muted">Question</p>
                                                        </div>
                                                        <div class="design-description d-inline-block">
                                                            <h3 class="f-w-400">1,452</h3>
                                                            <p class="text-muted">Comments</p>
                                                        </div>
                                                        <div class="team-box p-b-20">
                                                            <p class="d-inline-block m-r-20 f-w-400">Team</p>
                                                            <div class="team-section d-inline-block">
                                                                <a href="#! "><img src="../files/assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt=" "></a>
                                                                <a href="#! "><img src="../files/assets/images/avatar-3.jpg" data-toggle="tooltip" title="Lary Doe" alt=" " class="m-l-5 "></a>
                                                                <a href="#! "><img src="../files/assets/images/avatar-4.jpg" data-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>
                                                                <a href="#! "><img src="../files/assets/images/avatar-2.jpg" data-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>
                                                            </div>
                                                        </div>
                                                        <div class="progress-box">
                                                            <p class="d-inline-block m-r-20 f-w-400">Progress</p>
                                                            <div class="progress d-inline-block">
                                                                <div class="progress-bar bg-c-blue" style="width:78% "><label>78%</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6 ">
                                                <div class="card app-design">
                                                    <div class="card-block">
                                                        <button class="btn btn-success f-right">Pending</button>
                                                        <h6 class="f-w-400 text-muted">Landing page design</h6>
                                                        <p class="text-c-green f-w-400">Webdesign</p>
                                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                                        <div class="design-description d-inline-block m-r-40">
                                                            <h3 class="f-w-400">271</h3>
                                                            <p class="text-muted">Question</p>
                                                        </div>
                                                        <div class="design-description d-inline-block">
                                                            <h3 class="f-w-400">816</h3>
                                                            <p class="text-muted">Comments</p>
                                                        </div>
                                                        <div class="team-box p-b-20">
                                                            <p class="d-inline-block m-r-20 f-w-400">Team</p>
                                                            <div class="team-section d-inline-block">
                                                                <div class="team-section d-inline-block">
                                                                    <a href="#! "><img src="../files/assets/images/avatar-3.jpg" data-toggle="tooltip" title="Lary Doe" alt=" " class="m-l-5 "></a>
                                                                    <a href="#! "><img src="../files/assets/images/avatar-4.jpg" data-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>
                                                                    <a href="#! "><img src="../files/assets/images/avatar-5.jpg" data-toggle="tooltip" title="Josephin Doe" alt=" "></a>
                                                                    <a href="#! "><img src="../files/assets/images/avatar-7.jpg" data-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-box">
                                                            <p class="d-inline-block m-r-20 f-w-400">Progress</p>
                                                            <div class="progress d-inline-block">
                                                                <div class="progress-bar bg-c-green" style="width:78% "><label>78%</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- project  end -->

                                            <!-- statustic-card  start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Use Space</span>
                                                        <h4>49/50GB</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 feather icon-alert-triangle m-r-10"></i>Get more space
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Revenue</span>
                                                        <h4>$23,589</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 feather icon-calendar m-r-10"></i>Last 24 hours
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-alert-triangle bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Fixed Issue</span>
                                                        <h4>45</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 feather icon-tag m-r-10"></i>Tracked at microsoft
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-twitter bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Followers</span>
                                                        <h4>+562</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 feather icon-watch m-r-10"></i>Just update
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic-card  end -->

                                            <!-- user card  start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-blue">
                                                    <div class="card-block">
                                                        <i class="feather icon-user bg-simple-c-blue card1-icon"></i>
                                                        <h4>652</h4>
                                                        <p>Latest User</p>
                                                        <a href="#!" class="more-info">More Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-pink">
                                                    <div class="card-block">
                                                        <i class="feather icon-home bg-simple-c-pink card1-icon"></i>
                                                        <h4>652</h4>
                                                        <p>Latest User</p>
                                                        <a href="#!" class="more-info">More Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-green">
                                                    <div class="card-block">
                                                        <i class="feather icon-alert-triangle bg-simple-c-green card1-icon"></i>
                                                        <h4>652</h4>
                                                        <p>Latest User</p>
                                                        <a href="#!" class="more-info">More Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-yellow">
                                                    <div class="card-block">
                                                        <i class="feather icon-twitter bg-simple-c-yellow card1-icon"></i>
                                                        <h4>652</h4>
                                                        <p>Latest User</p>
                                                        <a href="#!" class="more-info">More Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user card  end -->

                                            <!-- order  start -->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6>Revenue</h6>
                                                        <h2>$42,562</h2>
                                                        <p class="m-b-0">$5,032 <i class="feather icon-arrow-up m-l-10"></i></p>
                                                        <i class="card-icon feather icon-filter"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6>Orders Received</h6>
                                                        <h2>486</h2>
                                                        <p class="m-b-0">$5,032 <i class="feather icon-arrow-up m-l-10 m-r-10"></i>$1,055 <i class="feather icon-arrow-down"></i></p>
                                                        <i class="card-icon feather icon-users"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6>Total Sales</h6>
                                                        <h2 >1641</h2>
                                                        <p class="m-b-0">$5,032 <i class="feather icon-arrow-down m-l-10 m-r-10"></i>$1,055 <i class="feather icon-arrow-up"></i></p>
                                                        <i class="card-icon feather icon-radio"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- order  end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->


                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../files/assets/pages/widget/excanvas.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/assets/js/SmoothScroll.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../files/assets/js/jquery.mousewheel.min.js"></script>
    <!-- Custom js -->
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com//polygon/adminty/default/widget-statistic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 06:22:15 GMT -->
</html>
    <!-- <html>
        <head>
			<script language='JavaScript'>
			var txt=" - SISFO PENINGKATAN KUALITAS LABORATORIUM";
			var speed=200;
			var refresh=null;
			function action() { document.title=txt;
			txt=txt.substring(1,txt.length)+txt.charAt(0);
			refresh=setTimeout("action()",speed);}action();
			</script>
            <meta charset="UTF-8">
           
            <link rel="stylesheet" href="<?php echo $link ?>boostrap4/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo $link ?>boostrap4/style.css">
            <link rel="stylesheet" href=<?php echo $link ?>plugin/css_datatables/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="<?php echo $link ?>plugin/css_datatables/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="<?php echo $link ?>plugin/sweetalert2/dist/sweetalert2.min.css">
            <link rel="stylesheet" href="<?php echo $link ?>font-awesome-4.7.0/css/font-awesome.css">

            <script src="<?php echo $link ?>boostrap4/jquery-1.11.3.min.js"></script>
            <script src="<?php echo $link ?>boostrap4/js/bootstrap.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/dataTables.bootstrap4.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/dataTables.responsive.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/responsive.bootstrap4.min.js"></script>
            <script src="<?php echo $link ?>plugin/sweetalert2/dist/sweetalert2.min.js"></script> 
            <script src="<?php echo $link ?>plugin/bootstrap-validator/dist/validator.js"></script>		
			
        </head>
        <body>
            <?php
            include './menu.php';
            ?>
            <div class="container-fluid" style="margin-top:70px;">
                <?php
                include './paging.php';
                ?>
            </div>
        </body>
    </html> -->
    <?php
} else {
    header("location:login.php");
}
?>


