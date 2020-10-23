<?php
session_start();
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up E-PROM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/login/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/login/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/login/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/login/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/login/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/login/css/animate.css">
    <link rel="stylesheet" href="../assets/login/css/normalize.css">
    <link rel="stylesheet" href="../assets/login/css/main.css">
    <link rel="stylesheet" href="../assets/login/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/login/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/login/css/form/all-type-forms.css">
    <link rel="stylesheet" href="../assets/login/style.css">
    <link rel="stylesheet" href="../assets/login/css/responsive.css">
    <script src="../assets/login/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!-- Login Form --
    <form method='post' action='cek_login.php'>
    <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<script> alert('Username atau password salah!'); </script>";
                                } else if ($_GET['pesan'] == "logout") {
                                    echo "<script> alert('Anda berhasil Logout!'); </script>";
                                } else if ($_GET['pesan'] == "belum_login") {
                                        echo "<script> alert('Anda harus Login terlebih dahulu!'); </script>";
                                    }
                                    else if ($_GET['pesan'] == "captcha_salah") {
                                        echo "<script> alert('captcha yang anda masukan salah!'); </script>";
                                    }
                            }
        
        ?>
      <input type="text"  class="fadeIn second" name="username" placeholder="Username" autofocus autocomplete='off' required>
      <input type="password"  class="password fadeIn third" name="password" placeholder="Password"> <br>
      <input type="text"  class="fadeIn second" name="username" placeholder="Username" autofocus autocomplete='off' required>
      <input type="password"  class="password fadeIn third" name="password" placeholder="Password"> <br>
    <input type="submit" class="fadeIn fourth" value="LogIn">
    </form>
  </div>
</div> -->       
<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body1">
                      <center><img src="../assets/img/logo.png" style="margin-bottom:20px;" height='20px' class="img-fluild" alt="Logo"></center>
                      <center><h4>DATA PASIEN</h4></center>
                      <div class="help-block small">*Masukan sesuai dengan data anda*</div>
                        <form action="pasien/pasien.php" method='post' id="loginForm">
                            <div class="row">

                              <div class="form-group col-lg-12">
                                <label for="nik">NIK</label>
                                <input autocomplete='off' type="number" name="nik" class="form-control" id="nik" placeholder="" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="nama">Nama</label>
                                <input type="text" autocomplete='off' name="nama" class="form-control" id="nama" placeholder="" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" autocomplete='off' class="form-control" id="alamat" placeholder="" required>
                            </div>
                            <div class="form-group col-lg-12" >
                                <label for="ttl">Tempat Tanggal Lahir</label>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="tmp_lahir" autocomplete='off' class="form-control" id="usia" placeholder="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="date" name="ttl" class="form-control" autocomplete='off' id="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" class="form-control" id="usia" placeholder="" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="col-form-label">Jenis Kelamin</label>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="Laki laki" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki laki
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="Perempuan" >
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="notelp">Nomor Telepon</label>
                                <input type="text" name="notelp" class="form-control" id="notelp" placeholder="" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="penyakit">Riwayat Penyakit</label>
                                <input type="text" name="r_penyakit" class="form-control" id="penyakit" placeholder="" required>
                            </div>
  

                            </div>              

                            <div class="text-center">
                                <button class="btn btn-success loginbtn" type='submit'>Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
			<div class="text-center login-footer"></div>
		</div>   
    </div>

</body>
<script src="../assets/login/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/login/js/bootstrap.min.js"></script>
    <script src="../assets/login/js/wow.min.js"></script>
    <script src="../assets/login/js/jquery-price-slider.js"></script>
    <script src="../assets/login/js/jquery.meanmenu.js"></script>
    <script src="../assets/login/js/owl.carousel.min.js"></script>
    <script src="../assets/login/js/jquery.sticky.js"></script>
    <script src="../assets/login/js/jquery.scrollUp.min.js"></script>
    <script src="../assets/login/js/icheck/icheck.min.js"></script>
    <script src="../assets/login/js/icheck/icheck-active.js"></script>
    <script src="../assets/login/js/plugins.js"></script>

</html>