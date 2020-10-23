<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative&display=swap" rel="stylesheet">
    <style>
        
.FormOne form input[type="submit"] {
   
    color: #fff;
    width: 60%;
    border-radius: 100px;
    margin-top: 10px;
    cursor: pointer;
}

        </style>
</head>
<body>
    
    <div class="window">
        <div class="MainTitle" id="MainTitle">
            <div id="TitleOne" class="TitleOne">
                <h2>Hi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button id="SignUp">Sign Up</button>
            </div>

            <div id="TitleTwo" class="TitleTwo hide">
                <h2>Hi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button id="SignIn">Sign In</button>
            </div>

        </div>
        <div id="LoginForm" class="LoginForm">
            <div class="FormOne" id="FormOne">
                <center><img src="image/logo.png" width="160px;" height="35px;" alt=""></center>
                <p>Enter your Username and Password</p>
                <form>
                    <input type="text" placeholder="Usename">
                    <input type="password" placeholder="Password">
                    <a href="#" class="pe">Forgot Password</a>
                    <input type="button" value="Login">
                </form>
                <a href="#" class="pe">Theme Of Use  |</a>
                <a href="#" class="pe">  Privacy Policy</a>
            </div>

        <div class="FormOne hide" id="FormTwo">
            <div class="FormTwo">
                <center><img src="image/logo.png" width="160px;" height="35px;" alt=""></center>
                <p>Enter your Username and Password</p>
                <form >
                    <input type="text" name="username" placeholder="Usename" required>
                    <input type="password" name="password"placeholder="Password" required>
                    <input type="phone" name="phone" placeholder="Phone" required>
                    <label>
                    <input type="checkbox" oninput="validasi()" name="hoby[]" id="hoby">saya setuju dengan kebijakan sistem ini
                    </label>
                    <input type="submit"  name="save" value="Sign Up" disabled="">
                </form>
            </div>
        </div>

        </div>
    </div>
    

    <script src="assets/jquery.js"></script>
    <script src="assets/Main.js"></script>

</body>
<script>
$("input[type=checkbox]").on( "change", function(evt) {
var hoby = $('input[id=hoby]:checked');
if(hoby.length == 0){
	$("input[name=save]").prop("disabled", true);
    $("input[name=save]").css("background","");
}else{
	$("input[name=save]").prop("disabled", false);
    $("input[name=save]").css("background"," rgb(0, 174, 255)");

   
}
});
</script>

</html>