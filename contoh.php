<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Prom</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script> alert('Username atau password salah!'); </script>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<script> alert('Anda berhasil Logout!'); </script>";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "<script> alert('Anda harus Login terlebih dahulu!'); </script>";
        }
    }

    ?>
    <div class="window">
        <div class="MainTitle" id="MainTitle">
            <div id="TitleOne" class="TitleOne">
                <h2>Hi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button id="SignUp">Sign Up</button>
            </div>

            <div id="TitleTwo" class="TitleTwo hide">
                <h2>Hai</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button id="SignIn">Sign In</button>
            </div>

        </div>
        <div id="LoginForm" class="LoginForm">
            <div class="FormOne" id="FormOne">
                <center><img src="image/logo.png" width="160px;" height="35px;" alt=""></center>
                <p>Enter your Username and Password</p>
                <form method="post" action='../cek_login.php'>
                    <input type="text" placeholder="Usename" name='username' autocomplete='off' aurofocus>
                    <input type="password" placeholder="Password" name='password'>
                    <a href="#" class="pe">Forgot Password</a>
                    <input type="submit" value="Login">
                </form>
                <a href="#" class="pe">Theme Of Use |</a>
                <a href="#" class="pe"> Privacy Policy</a>
            </div>

            <div class="FormOne hide" id="FormTwo">
                <div class="FormTwo">
                    <center><img src="image/logo.png" width="160px;" height="35px;" alt=""></center>
                    <p>Enter your Username and Password</p>
                    <form method="post" action='signup/sign'>
                        <input type="text" placeholder="Usename">
                        <input type="password" placeholder="Password">
                        <input type="phone" placeholder="Phone">
                        <input type="button" value="Sign Up">
                    </form>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="Main.js"></script>

</body>

</html>