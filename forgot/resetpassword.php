<?php
include('../koneksi.php');

if (isset($_GET['key']) && isset($_GET['email'])) {
    $key = $_GET['key'];
    $email = $_GET['email'];
    $message = "";
    $check = mysqli_query($Koneksi, "SELECT * FROM forget_password WHERE email='$email' and temp_key='$key'");
    if (mysqli_num_rows($check) != 1) {
        echo "This url is invalid or already been used. Please verify and try again.";
        exit;
    }

    if (isset($_POST["submit"])) {

        $password1 = mysqli_real_escape_string($Koneksi, $_POST['password1']);
        $password2 = mysqli_real_escape_string($Koneksi, $_POST['password2']);
        if ($password2 == $password1) {
            $message = "New password has been set for " . $email;
            $password = $password1;
            mysqli_query($Koneksi, "DELETE FROM forget_password where email='$email' and temp_key='$key'");
            mysqli_query($Koneksi, "UPDATE admin set password='$password' where email='$email'");
        } else {
            $message = "Verify your password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>

<body>
    <?= "$message" ?>
    <form class="text-center" method="POST">
        Password Baru :<input type="password" name="password1" placeholder="New Password"><br />
        Konfirmasi : <input type="password" name="password2" placeholder="New Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>

</body>

</html>