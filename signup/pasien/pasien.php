<?php

include '../../koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmp_lahir = $_POST['tmp_lahir'];
$ttl = $_POST['ttl'];
$usia = $_POST['usia'];
$jk = $_POST['jk'];
$notelp = $_POST['notelp'];
$r_penyakit = $_POST['r_penyakit'];
$tgl = date('Y-m-d');

$data = mysqli_query($Koneksi, "INSERT INTO t_pasien VALUES ('','$nik','$nama','$alamat','$tmp_lahir','$ttl','$usia','$jk','$notelp','$r_penyakit,$tgl')");

if($data) {
    echo "<script>alert('Akun telah berhasil dibuat!'); window.location = '../login.php';</script>";
}else{
    echo "<script>alert('Akun gagal dibuat!'); window.location = '../login.php';</script>";
}


?>