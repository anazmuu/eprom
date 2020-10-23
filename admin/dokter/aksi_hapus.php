<?php
$koneksi = mysqli_connect("localhost","root","","e-prom");
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM t_dokter WHERE id_dokter='$id'");
header('location:../list-doctor.php');
?>