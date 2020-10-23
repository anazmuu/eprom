<?php

include '../koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$jk = $_POST['jk'];
$notelp = $_POST['notelp'];
$spesialisasi = $_POST['spesialisasi'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi, "INSERT INTO t_dokter VALUES ('','$nik','$nama','$alamat','$usia','$jk','$notelp','$spesialisasi','$username','$password')");

if($data) {
    echo "<script>alert('Akun telah berhasil dibuat!'); window.location = '../login.php';</script>";
}else{
    echo "<script>alert('Akun gagal dibuat!'); window.location = '../login.php';</script>";
}


?>