<?php
$koneksi   = mysqli_connect("localhost","root","","e-prom");
$id        = $_POST['id'];
$nik       = $_POST['nik'];
$nama      = $_POST['nama'];
$alamat    = $_POST['alamat'];
$usia      = $_POST['usia'];
$jk        = $_POST['jk'];
$no_telp   = $_POST['no_telp'];
$spesialis = $_POST['spesialis'];
$email     = $_POST['email'];
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
mysqli_query($koneksi,"UPDATE t_dokter SET nik='$nik', nama='$nama', alamat='$alamat', usia='$usia', jk='$jk', notelp='$no_telp', spesialisasi='$spesialis', email='$email' WHERE id_dokter='$id'");
if($nama_file !== ""){
        $path = "image/".$nama_file;
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
                if(move_uploaded_file($tmp_file, $path)){
                        mysqli_query($koneksi,"UPDATE t_dokter SET gambar='$nama_file' WHERE id_dokter='$id'");
                }else{
                        $pesan = "gagalupload";
                }
        }else{
                $pesan = "bukanimg";
        }
}
header('location:../list-doctor.php');
?>