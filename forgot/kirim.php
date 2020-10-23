<?php
include "../koneksi.php";
$message = "";
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $data = mysqli_query($Koneksi, "select * from t_admin where email='$email'");
    $cek = mysqli_num_rows($data);
    if ($cek > 0) {
        $key = md5(time() + 123456789 % rand(4000, 55000000));
        mysqli_query($Koneksi, "INSERT INTO forget_password(email,temp_key) VALUES('$email','$key')");
        if (mysqli_query($Koneksi, "delete from forget_password WHERE DATEDIFF(CURRENT_DATE,`created`) >= 2"))

            $to = $email;

        $from = 'RSUgarut' . $_SERVER['SERVER_NAME'];
        $fromName = 'RSU_garut';

        $subject = "Send HTML Email in PHP by CodexWorld";

        $htmlContent = "
    <html> 
    <head> 
        <title>Welcome to CodexWorld</title> 
    </head> 
    <body> 
      http://radensahid.000webhostapp.com/resetpassword.php?email=$email&&key=$key;
    </body> 
    </html>";

        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";
        $headers .= 'Cc: welcome@example.com' . "\r\n";
        $headers .= 'Bcc: welcome2@example.com' . "\r\n";

        // Send email 
        if (mail($to, $subject, $htmlContent, $headers)) {
            $message = "Link Aktivasi sudah dikirim ke email anda !!!";
        } else {
            $message = "Email gagal dikirim!";
        }
    } else {
        $message = "Email Tidak Ditemukan";
    }
} else {
    header("location:forgotpassword.php");
}
header("location:forgotpassword.php?msg=$message");
