<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:../index.php?pesan=belum_login");
}
$tgl = date('Y-m-d');
include '../../koneksi.php';
    $data = mysqli_query($Koneksi,"SELECT * FROM t_pasien where tgl_masuk='$tgl'");
    $data1 = mysqli_query($Koneksi,"SELECT * FROM t_dokter");
    $data3 = mysqli_query($Koneksi,"SELECT * FROM t_perawat");
    $data4 = mysqli_query($Koneksi,"SELECT * FROM t_pasien");
    $num2 = mysqli_num_rows($data1);
    $num3 = mysqli_num_rows($data3);
    $num1 = mysqli_num_rows($data);
    $num4 = mysqli_num_rows($data4);
    ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Prom</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="../css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="../css/editor/select2.css">
    <link rel="stylesheet" href="../css/editor/datetimepicker.css">
    <link rel="stylesheet" href="../css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="../css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../css/data-table/bootstrap-editable.css">

    <!-- style CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../style1.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

</head>
<style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #f5f4e9;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
<body>
<div class="preloader">
      <div class="loading">
        <img src="../img/loader-128x/Preloader_23.gif" width="350">
      </div>
    </div>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="../img/logo/logo1.png" style="margin-top: 10px;" width="170" height="250" alt="" /></a>
                <strong><a href="index.php"><img src="../img/logo/logo.png" alt="" width="40" height="40"/></a></strong>
            </div>
            <!-- SIDEBAR -->
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active" style="margin-top: 20px;">
                            <a href="../index.php"><i class="fas fa-hospital-alt fa-fw"></i><span class="mini-click-non"> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../inbox.php" aria-expanded="false"></span><i class="fas fa-envelope-open-text fa-fw"></i><span class="mini-click-non"> Inbox</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="../klinik.php" aria-expanded="false"><i class="fas fa-hospital fa-fw"></i><span class="mini-click-non"> Klinik</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="../list-pasien.php"><span class="mini-sub-pro">Umum</span></a></li>
                                <li><a title="Add Students" href="../#"><span class="mini-sub-pro">Gigi</span></a></li>
                                <li><a title="Edit Students" href="../#"><span class="mini-sub-pro">IGD</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../list-pasien.php" aria-expanded="false"><i class="fa fa-user-injured fa-fw"></i><span class="mini-click-non"> Data Pasien</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="../event-drop.php" aria-expanded="false"><i class="fa fa-list-alt fa-fw"></i><span class="mini-click-non"> Event</span></a>
                        </li>
                        <li>
                            <a href="../pelaporan.php" aria-expanded="false"><i class="fa fa-notes-medical fa-fw"></i><span class="mini-click-non"> Pelaporan</span></a>
                        </li>
                        <li>
                            <a href="../rawat.php" aria-expanded="false"></span><i class="fa fa-procedures fa-fw"></i><span class="mini-click-non"> Rawat Inap</span></a>
                        </li>
                        <li>
                            <a href="../list-doctor.php" aria-expanded="false"><i class="fa fa-user-md fa-fw"></i><span class="mini-click-non"> List Doctor</span></a>
                        </li>
                        <li>
                            <a href="../human-resource.php" aria-expanded="false"><i class="fa fa-user-circle fa-fw"></i><span class="mini-click-non"> Human Resources</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- END SIDEBAR -->
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="../img/logo/logo1.png" style="margin-top: 10px;" width="170" height="250" alt="" /></a>
                <strong><a href="index.php"><img src="../img/logo/logo.png" alt=""  width="40" height="40" /></a></strong>
            </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro color-custom" aria-hidden="true"></i><span class="indicator-ms" style="background-color:#1dc5fe!important;"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell color-custom" aria-hidden="true"></i><span class="indicator-nt" style="background-color:#1dc5fe!important;"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="../img/logo/avatar1.png" alt="" />
															<span class="admin-name">
                                                            <?php
                                                            $kas = $_SESSION['username'];
                                                            $admin = mysqli_query($Koneksi,"SELECT * FROM t_admin WHERE username='$kas'");
                                                            while($d5 = mysqli_fetch_array($admin)){
                                                                echo $d5['nama'];
                                                            }
                                                            ?>
                                                            </span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow color-custom"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="profil.php" style='color:#999;'><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="setting.php" style='color:#999;'><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="logout.php" style='color:#999;'><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index.php">Dashboard<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="klinik.php">Klinik <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="klinik-umum.php">Umum</a>
                                                </li>
                                                <li><a href="klinik-gigi.php">Gigi</a>
                                                </li>
                                                <li><a href="pelayanan-terpadu.php">Pelayanan Terpadu</a>
                                                </li>
                                                <li><a href="imunisasi.php">Ruang Imunisasi</a>
                                                </li>
                                                <li><a href="igd.php">IGD</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="list-pasien.php">Data Pasien</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="event.php">Jadwal / Event<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="event.php">Event</a>
                                                </li>
                                                <li><a href="dokter-jaga.php">Dokter Jaga</a>
                                                </li>
                                                <li><a href="perawat-jaga.php">Perawat jaga</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="pelaporan.php">Pelaporan</a></li>
                                        <li><a href="kapus.php">Rawat Inap (KAPUS)</a></li>
                                        <li><a href="list-doctor.php">List Dokter</a></li>
                                        <li><a href="human_resource.php">Human Resources</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

