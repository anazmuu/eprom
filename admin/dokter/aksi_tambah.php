<?php
$koneksi   = mysqli_connect("localhost","root","","e-prom");
$nik       = $_POST['nik'];
$nama      = $_POST['nama'];
$alamat    = $_POST['alamat'];
$usia      = $_POST['usia'];
$jk        = $_POST['jk'];
$no_telp   = $_POST['no_telp'];
$spesialis = $_POST['spesialis'];
$username  = $_POST['username'];
$password  = md5($_POST['password']);
$email     = $_POST['email'];
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "image/".$nama_file;
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
                if(move_uploaded_file($tmp_file, $path)){
                        $query = mysqli_query($koneksi,"INSERT INTO t_dokter VALUES ('','$nik','$nama_file','$nama','$alamat','$usia','$jk','$no_telp','$spesialis','$username','$password','$email')");
                        if($query){
                                header("location:../list-doctor.php?pesan=berhasil");
                        }else{
                                header("location:../list-doctor.php?pesan=gagaldb");
                        }
                }else{
                        header("location:../list-doctor.php?pesan=gagalupload");
                }
        }else{
                header("location:../list-doctor.php?pesan=bukanimg");
        }
?>