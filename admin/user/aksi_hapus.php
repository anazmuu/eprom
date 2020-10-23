<?php
$koneksi = mysqli_connect("localhost","root","","e-prom");
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM t_pasien WHERE id_pasien='$id'");
header('location:../list-pasien.php');
?>