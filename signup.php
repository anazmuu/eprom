<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nik  = $_POST['nik'];
$jk   = $_POST['jk'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$rp     = $_POST['rp'];
$date = date('Y-m-d');
$ttl = $_POST['ttl'];
mysqli_query($Koneksi,"INSERT INTO t_pasien VALUES ('','','$nik','$nama','$alamat','$ttl','$jk','$notelp','','$rp','$usia','$date')");
header('location:index.php?pesan=databerhasil');
?>