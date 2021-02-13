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
<?php
//dari menu.php
if ($_SESSION["status"] == "A") {
    $petugas="none";
    $mastering="none";
    $analisis="block";
	$kuisioner="none";
} else if ($_SESSION["status"] == "S") {
    $mastering="block";
    $analisis="block";
    $petugas="block";
	$kuisioner="none";
} else {
    $mastering="none";
    $kuisioner="block";
	$analisis="none";
    $petugas="none";
}
?>

<!-- Mirrored from colorlib.com//polygon/adminty/default/widget-statistic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 06:22:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>IPA FAJAR </title>
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
    <link rel="stylesheet" type="text/css" href="<?php base() ?>admin-style/files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php base() ?>admin-style/files/assets/icon/feather/css/feather.css">
    <!-- radial chart -->
    <link rel="stylesheet" href="<?php base() ?>admin-style/files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php base() ?>admin-style/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php base() ?>admin-style/files/assets/css/jquery.mCustomScrollbar.css">
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
                            <img class="img-fluid" src="<?php base() ?>admin-style/files/assets/images/logo.png" alt="Theme-Logo" />
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
                          
                            
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- <img src="<?php base() ?>admin-style/files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                        <?php
                        if ($_SESSION["status"] == "A") {
                            $p = "Kepala Laboratorium";
                        } else if ($_SESSION["status"] == "S") {
                            $p = "Petugas";
                        } else {
                            $p = "siswa";
                        }
                        ?>
                                        <span>
                                        <?php
                            echo $_SESSION["nama"] . "(" . $p . ")".$_SESSION["alamat"];
                            // echo $_SESSION["nama"];
							 
                            ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                     
                                        <li>
                                            <a href="<?php base() ?>logout.php">
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

            <!-- Sidebar inner chat start-->
            
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="">
                                    <a href="<?php base() ?>beranda">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Home</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu" style="display:<?php echo $mastering ?>">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Mastering</span>
                                        <!-- <span class="pcoded-badge label label-warning">NEW</span> -->
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " style="display:<?php echo $petugas ?>">
                                            <a href="<?php base() ?>petugas">
                                                <span class="pcoded-mtext" >Petugas</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                        <a  href="<?php base() ?>siswa">
                                                <span class="pcoded-mtext" >Siswa</span>
                                            </a>
                                        </li>
                                     <li class=" ">
                                            <a href="<?php base() ?>laboratorium">
                                                <span class="pcoded-mtext" >Laboratorium</span>
                                            </a>
                                        </li>
                                     <li class=" ">
                                            <a href="<?php base() ?>indikator">
                                                <span class="pcoded-mtext" >Indikator</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php base() ?>atribut">
                                                <span class="pcoded-mtext">Atribut</span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </li>
                                <li class="" style="display:<?php echo $analisis ?>">
                                    <a href="<?php base() ?>analisis">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Analisis</span>
                                    </a>
                                </li>
                                <li class="" style="display:<?php echo $kuisioner ?>">
                                    <a href="<?php base() ?>kuis_kom">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Kuisioner</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="pcoded-navigatio-lavel">UI Element</div>
                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php base() ?>logout.php">
                                        <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                        <span class="pcoded-mtext" >Logout</span>
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
                                    <!-- <div class="page-header">
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
                                    </div> -->
                                    <!-- Page-header end -->
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- statustic with progressbar  start -->
                                            <div class="container-fluid" style="margin-top:70px;">
                <?php
                include './paging.php';
                ?>
            </div>
                                            <!-- order  end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->


                                </div>
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
                    <img src="<?php base() ?>admin-style/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php base() ?>admin-style/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php base() ?>admin-style/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php base() ?>admin-style/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php base() ?>admin-style/files/assets/images/browser/ie.png" alt="">
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
    <script data-cfasync="false" src="<?php base() ?>admin-style/<?php base() ?>admin-style/<?php base() ?>admin-style/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php base() ?>admin-style/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php base() ?>admin-style/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php base() ?>admin-style/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php base() ?>admin-style/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php base() ?>admin-style/files/assets/pages/widget/excanvas.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php base() ?>admin-style/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php base() ?>admin-style/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php base() ?>admin-style/files/assets/js/SmoothScroll.js"></script>
    <script src="<?php base() ?>admin-style/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php base() ?>admin-style/files/assets/js/jquery.mousewheel.min.js"></script>
    <!-- Custom js -->
    <script src="<?php base() ?>admin-style/files/assets/js/pcoded.min.js"></script>
    <script src="<?php base() ?>admin-style/files/assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="<?php base() ?>admin-style/files/assets/js/script.js"></script>

    
    <!-- <script src="<?php echo $link ?>boostrap4/jquery-1.11.3.min.js"></script> -->
    <!-- <link rel="stylesheet" href="<?php echo $link ?>plugin/sweetalert2/dist/sweetalert2.min.css">
            <script src="<?php echo $link ?>plugin/sweetalert2/dist/sweetalert2.min.js"></script>  -->
           
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
            // include './menu.php';
            ?>
            <div class="container-fluid" style="margin-top:70px;">
                <?php
                // include './paging.php';
                ?>
            </div>
        </body>
    </html> -->
    <?php
} else {
    header("location:login.php");
}
?>


