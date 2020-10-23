<?php
$koneksi = mysqli_connect("localhost","root","","e-prom");
$no_antrian = $_POST['no_antrian'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$no_telp = $_POST['no_telp'];
$tmp_lahir = $_POST['tmp_lahir'];
$r_penyakit = $_POST['r_penyakit'];
$usia = $_POST['usia'];
$date = date('Y-m-d');
mysqli_query($koneksi,"INSERT INTO t_pasien VALUES('','$no_antrian','$nik','$nama','$alamat','$ttl','$jk','$no_telp','$tmp_lahir','$r_penyakit','$usia','$date')");
header('location:../list-pasien.php');
?>