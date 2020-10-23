<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>


<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <img src="../assets/img/logo.png" height='50px' style="margin-top:20px;" alt="">
            <br>
            <h2 class="active"> Lupa Password</h2>
            <?php
            $message = "";
            if (isset($_GET['msg'])) {
                $message = $_GET['msg'];
            }
            ?>
            <h3 class="msg"><?= $message; ?></h3>


            <!-- Login Form -->
            <form method="post" action="kirim.php">


                <!--dropdown-->
                <label class="text-white mb-3 lead">Where do you live?</label>
                <!-- Multiselect dropdown -->
                <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100">
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>Italy</option>
                </select><!-- End -->
                <!--end dropdown-->





                <input type="text" class="fadeIn second" name="email" placeholder="Masukan Email Anda" autofocus autocomplete='off' required>
                <!-- Icon -->
                <input type="submit" name="submit" class="fadeIn fourth" value="Kirim">



                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="../index.php">LogIn</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>