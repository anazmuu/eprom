<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>

<div class="breadcome-area " >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list" style="background-color:#fff; margin-top:37px; border-radius:5px 5px; box-shadow:-0px -0px 5px #aeaeae;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <i class="fa fa-user-md fa-3x"><span style="font-family: 'Montserrat', sans-serif; font-size:27px;"> | DETAIL DOKTER</span></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a style='color:blue;' href="index.php">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod"> List Dokter </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                      
        <div style="margin-bottom:70px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list" style="background-color:#fff; margin-top:10px; border-radius:5px 5px; box-shadow:-0px -0px 5px #aeaeae;">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <?php
                                        $id = $_GET['id'];
                                        $koneksi = mysqli_connect("localhost","root","","e-prom");
                                        $data = mysqli_query($koneksi,"SELECT * FROM t_dokter WHERE id_dokter='$id'");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <div class="col-lg-6"> <img src="image/<?= $d['gambar'] ?>" width='350px' height='350px' alt=""> </div>
                                        <div class="col-lg-6"> 
                                        
                                        <div class="table table-responsive">
                                                <table class="table table-borderless">
                                                      <tr>
                                                                <td> NIK  </td>
                                                                <td>: <?= $d['nik'] ?></td>
                                                      </tr>
                                                      
                                                      <tr>
                                                                <td> Username  </td>
                                                                <td>: <?= $d['username'] ?>  </td>
                                                      </tr> 
                                                      <tr>
                                                                <td> Nama  </td>
                                                                <td>: <?= $d['nama'] ?>  </td>
                                                      </tr> 
                                                      <tr>
                                                                <td> Alamat </td>
                                                                <td>: <?= $d['alamat'] ?> </td>
                                                      </tr> 
                                                      <tr> 
                                                                <td> Usia </td>
                                                                <td>: <?= $d['usia'] ?> </td>
                                                      </tr>
                                                      <tr>
                                                                <td> Jenis Kelamin </td>
                                                                <td>: <?= $d['jk'] ?></td>
                                                      </tr>
                                                      <tr>
                                                                <td> No Telepon </td>
                                                                <td>: <?= $d['notelp'] ?> </td>
                                                      </tr>
                                                      <tr>
                                                                <td> Spesialis </td>
                                                                <td>: <?= $d['spesialisasi'] ?></td>
                                                      </tr>
                                                      <tr>
                                                                <td> Email  </td>
                                                                <td>: <?= $d['email'] ?>  </td>
                                                      </tr>
                                                </table>
                                                <a href="../list-doctor.php" class='btn btn-success btn-md'> Kembali </a>
                                        </div>
                                         </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
        </div>
        </div>
<?php include 'footer.php'; ?>