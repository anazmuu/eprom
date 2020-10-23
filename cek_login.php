<?php 
session_start();
include 'Koneksi.php'; 
	
$pesan='';
$username = $_POST['username'];
$password = md5($_POST['password']);
$data = mysqli_query($Koneksi,"select * from t_admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['password'] = $password;
	$_SESSION['username'] = $username;
	$_SESSION['pesan']=$pesan;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:login/index.php?pesan=gagal");
}
?>