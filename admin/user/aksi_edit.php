<?php
$koneksi = mysqli_connect("localhost","root","","e-prom");
$id = $_POST['id'];
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
mysqli_query($koneksi,"UPDATE t_pasien SET no_antrian='$no_antrian', nik='$nik', nama='$nama', alamat='$alamat', ttl='$ttl', jk='$jk', notelp='$no_telp', tmp_lahir='$tmp_lahir', usia='$usia', r_penyakit='$r_penyakit' WHERE id_pasien='$id'");
header('location:../list-pasien.php');
?>