<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/style.responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
<?php
    if(isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script> alert('Username atau password salah!'); </script>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<script> alert('Anda berhasil Logout!'); </script>";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "<script> alert('Anda harus Login terlebih dahulu!'); </script>";
        }
    }

    ?>
<body>
    <div class="window">
        <div class="MainTitle" id="MainTitle">
            <div id="TitleOne" class="TitleOne">
                <div class><img src="admin/img/hospital.png" height="280px" style="margin: 30px 0px 0px 30px;" alt=""></div>
            </div>
            <div id="TitleTwo" class="TitleTwo hide">
                <h2><img src="admin/img/hospital.png" height="300px" style="margin: 30px 30px 0px 0px;" alt=""></h2>
            </div>
        </div>
        <div id="LoginForm" class="LoginForm">
            <div class="FormOne" id="FormOne">
                <center><img src="admin/img/logo.png" width="160px;" height="35px;" alt=""></center>
                <p class="text-secondary">Enter your Username and Password</p>
                <form method="post" action="cek_login.php">
                    <input type="text" name="username" class="rounded-pill pl-3 bg-white border border-info" placeholder="Usename" required>
                    <input type="password" name="password" class="rounded-pill pl-3 bg-white border border-info" placeholder="Password" required>
                            <a href="#" class="pe"  style="text-decoration: none;">Forgot Password</a>
                    <button class="btn btn-info rounded-pill pl-5 pr-5 mb-3">SIGN IN</button>
                </form>
                <span class="pe mt-3 text-secondary">Belum punya akun?</span> <a href="#" class="pe text-info " style="text-decoration: none;" id="rSignUp" >Sign Up</a><br>
                <a href="#" class="pe" id="terms" style="text-decoration: none;" >Terms Of Use  |</a>
                <a href="#" class="pe" id="privacy" style="text-decoration: none;">  Privacy Policy</a>
            </div>

        <div class="FormOne hide" id="FormTwo">
            <div class="FormTwo">
                <center><img src="admin/img/logo.png" width="160px;" height="35px;" alt=""></center>
                <p class="text-secondary">Enter your Username and Password</p>
                <form>
                    <input type="text" class="rounded-pill pl-3 bg-white border border-info" placeholder="Usename">
                    <input type="password" class="rounded-pill pl-3 bg-white border border-info" placeholder="Password">
                    <input type="phone" class="rounded-pill pl-3 bg-white border border-info" placeholder="Phone">
                    <button type="submit" class="btn btn-info rounded-pill pl-5 pr-5 mb-3">SIGN UP</button>
                </form>
                <span class="pe text-secondary">Sudah punya akun? </span> <a href="#" class="pe" style="text-decoration: none;" id="rSignIn" >Sign In</a>
            </div>
        </div>        
        </div>
    </div>
    <!-- SignUp -->
    <div class="window2 hide" id="Window2">
            <div class="mt-5">
                <center><img src="admin/img/logo.png" width="160px;" height="35px;" alt=""></center>
                <p class="text-secondary text-center mt-2"></p>

                <form class="ml-5 mr-5 pl-5 pr-5" method="post" action="signup.php">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="number" name="nik" class="form-control border-info" placeholder="NIK" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="nama" class="form-control border-info" placeholder="Nama Lengkap" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="number" name="usia" class="form-control border-info" placeholder="Usia" required>
                      </div>
                      <div class="form-group col-md-6">
                      <input type="text" id="date" class="form-control border-info" name="ttl"  placeholder="Tanggal Lahir" required />
                        <!-- <input type="text" class="form-control border-info" name="notelp" id="date" placeholder="Tanggal Lahir" required> -->
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <div class="border border-info rounded pt-2 pb-1 pl-2">
                          <div class="form-check">
                            <input class="form-check-input" name="jk" type="radio" name="exampleRadios" id="exampleRadios1" value="Laki Laki" checked>
                            <label class="form-check-label mr-5" for="exampleRadios1">
                              Laki-Laki
                            </label>
                            <input class="form-check-input" name="jk" type="radio" name="exampleRadios" id="exampleRadios2" value="Perempuan">
                            <label class="form-check-label" for="exampleRadios2">
                              Perempuan
                            </label>
                          </div>
                      </div>
                      </div>

                      <div class="form-group col-md-6">
                        <input type="number" class="form-control border-info" name="notelp" placeholder="Nomor Telepon" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control border-info" name="rp" placeholder="Riwayat Penyakit" required></textarea>
                    </div>
                    <div class="form-group">
                      <textarea name="alamat" class="form-control border-info" placeholder="Alamat" required></textarea>
                    </div>
                    <!-- <div class="form-group">
                      <input type="text" class="form-control border-info" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control border-info" placeholder="Usia" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control border-info" placeholder="Nomor Telepon" required>
                    </div> -->
                        <div class="text-center">
                        <button type="submit" class="btn btn-info rounded-pill pl-5 pr-5 mb-3">SIGN UP</button>
                    </div>
                  </form>

                <!-- <span class="pe text-secondary">Sudah punya akun? </span> <a href="#" class="pe" style="text-decoration: none;" id="rSignIn" >Sign In</a> -->
            </div>
    </div>
    <!-- Terms -->
    <div class="Terms hide" id="Terms">
        <div class="text-terms">
            <h2 class="text-secondary font-weight-bold text-center">TERMS OF USE</h2>
            <p class="text-secondary" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi nostrum harum voluptatum suscipit similique, dolore nesciunt, a, totam id ex eos. Labore totam et facere aperiam ullam dignissimos ex alias ducimus dolorum similique dolorem, repudiandae aliquam tenetur quaerat voluptas? Quod incidunt dolor facilis sint saepe totam laborum praesentium deleniti modi tempore quia, fugiat eveniet sequi soluta voluptatem labore eaque, architecto culpa voluptas reiciendis impedit vero. Provident, sed voluptas. Veritatis adipisci obcaecati eum illum provident explicabo sit numquam neque modi repellendus praesentium quibusdam sed libero repudiandae eligendi amet consequatur porro omnis pariatur maiores, sunt illo nisi totam! Architecto nostrum numquam dolores necessitatibus placeat nemo eligendi aliquam pariatur officiis doloremque, iste dolor, ipsam praesentium iusto fuga voluptatem, facere odio. Reprehenderit illo obcaecati repellendus molestias adipisci, tempore similique eum doloremque nihil a vel recusandae, saepe eos praesentium quod ea earum autem numquam ducimus consequuntur. Excepturi atque, quod, molestias facere dolorum aliquid tempore voluptatem ullam quasi esse accusamus fugit facilis, sequi dicta maiores. Voluptatum officiis ducimus laborum, eveniet inventore recusandae facere quae. Officia totam nam beatae debitis exercitationem magnam nostrum, ipsa delectus, eos voluptate sunt tempore sequi, dolore corporis impedit error illum. Voluptatibus, minima maiores maxime culpa recusandae beatae fugiat saepe cupiditate velit ex facilis adipisci inventore iure exercitationem iste earum odit magni nobis vero. Odio corrupti ipsum placeat dicta molestiae obcaecati perspiciatis explicabo facilis hic dolorum, libero impedit voluptas, nulla eum illum architecto. Beatae at quo laborum cum ratione sapiente accusamus ut. Molestiae non maxime consequuntur nesciunt expedita unde iste vitae, dignissimos optio, quo saepe, consequatur totam officiis ad ex illum veniam quidem facilis magnam qui aut? Tenetur ad, hic magni quos dicta repudiandae voluptatibus, fuga repellendus amet praesentium minima quasi! Iure cumque, accusantium odio neque error non corporis alias aut culpa voluptatum minima reprehenderit repellendus consequuntur. Eos nostrum unde saepe accusamus quam, doloribus necessitatibus tenetur officia consequuntur, maxime ea tempora a? Consectetur, fuga facere! Aperiam, enim sint, asperiores ullam fuga nulla id nam suscipit, quibusdam voluptas autem quo sequi error quisquam incidunt at beatae provident. Placeat nemo fuga ratione architecto, explicabo ea, aliquam, porro laboriosam sequi quia accusantium? Atque magni optio delectus earum commodi quis error alias consequatur ut ea obcaecati suscipit aperiam provident est neque, vel mollitia quisquam recusandae veritatis aliquam et deserunt, autem dolorum! Ipsum, quae et placeat, cumque facilis est vel ratione cupiditate repellat voluptates dicta dolores modi tenetur non impedit voluptatem, consequatur totam laudantium quibusdam eos sapiente delectus. Ipsum similique obcaecati beatae natus, iusto laborum quisquam explicabo rem fugiat ab blanditiis tenetur consequuntur accusantium eius mollitia minima. Omnis enim deleniti asperiores totam. Doloremque quisquam, id reiciendis voluptatem ipsa quo dignissimos possimus. Dignissimos ipsam itaque nam corporis pariatur obcaecati recusandae, odio repellendus non sunt ab reprehenderit id nulla enim facere. Modi ducimus exercitationem ullam deleniti ipsa asperiores odit laudantium? Quis nemo dolore doloribus qui sit officia voluptates nihil ducimus fugiat saepe reprehenderit quod, sapiente labore temporibus totam. Laborum vero eius, nemo ea porro distinctio dignissimos aliquam doloremque, nam deserunt, incidunt fugiat quas odit blanditiis dolores rerum veniam eaque. Voluptas pariatur doloremque maxime quos qui delectus eaque molestias laborum sint, ab atque, natus nesciunt in aut. Neque, ullam itaque similique voluptatum est laboriosam ducimus ratione veniam quae corrupti ipsa sequi at modi dignissimos excepturi deserunt voluptate quod. Maiores modi dolor numquam consectetur, fugit eos veritatis libero sapiente velit, iusto natus nemo accusantium rem exercitationem quo deserunt sed voluptate reprehenderit consequuntur incidunt repellat cupiditate aspernatur obcaecati! In placeat fugit recusandae quae consectetur nihil aperiam esse aspernatur numquam blanditiis soluta, deleniti dolores nisi repellendus. Pariatur expedita laudantium, eum dolor dolorum, exercitationem repellat debitis voluptate odio veritatis velit totam, illum officia quasi. Rem totam nisi eum nemo cumque sequi omnis iure laboriosam accusamus illo sapiente eligendi cum delectus perferendis facere eaque amet similique iste, obcaecati velit nihil. Esse, vitae? Vel ex soluta non eligendi est nisi illo. Laboriosam in odit tenetur illum neque debitis, iure autem doloremque placeat cumque dignissimos quaerat nostrum, natus non error, repudiandae reiciendis ratione recusandae asperiores quidem incidunt. Aliquid cumque id pariatur quod beatae, unde aliquam excepturi provident ex soluta eaque assumenda, illum quis cum deleniti? Totam quas minus quia officiis architecto ut assumenda similique! Accusantium inventore deleniti cumque aliquid illum itaque, numquam at illo aspernatur dignissimos ut voluptatum! Assumenda natus, quae soluta incidunt cupiditate eaque quod deleniti necessitatibus. Blanditiis, possimus tempora qui voluptatem voluptas rem rerum eligendi. Quae, ab reiciendis molestiae sed est incidunt consequatur laborum recusandae officiis placeat molestias perspiciatis nobis facere mollitia culpa dolores beatae necessitatibus. Minima dignissimos eius illum sint quos, accusamus delectus praesentium ratione dolore sequi sunt atque in veritatis hic esse modi at inventore recusandae? Consequatur doloribus dolorem, vero suscipit facilis in deleniti tempora. Officiis iusto aperiam labore facilis exercitationem adipisci vitae illum, sunt sed autem mollitia ratione perspiciatis. Quisquam numquam, placeat aspernatur ut accusamus, exercitationem quidem fuga ratione, explicabo porro illum ad provident ex error facilis eveniet vel ullam cupiditate optio voluptates! A ducimus eligendi maxime ratione itaque rerum id! Neque commodi dolore nobis atque repellendus beatae nesciunt eos ea iure labore, recusandae aliquam deleniti adipisci pariatur necessitatibus perferendis reiciendis ex harum corrupti non? Optio possimus ipsa corporis eius officiis ipsam quidem itaque. Praesentium dicta possimus commodi illo officia iure enim explicabo nobis cupiditate nulla, aperiam atque unde magni sit id maxime. Beatae iure repudiandae quos impedit officiis inventore maiores fugit pariatur saepe? Delectus fugit recusandae nam ipsam corporis quam accusamus architecto praesentium aperiam laboriosam ad, velit illum dolor quisquam adipisci aspernatur facere fuga aut. Expedita porro alias vel consequuntur ut tempore corrupti labore optio fuga voluptas autem exercitationem maxime amet deserunt corporis voluptatibus commodi vero et, molestias accusamus ipsum? Quod, ipsum. Beatae dolor, molestiae delectus hic quis mollitia impedit, voluptate porro consequatur labore nesciunt cumque nam minima facere officiis eveniet libero deserunt facilis, non pariatur? Impedit nulla voluptas alias quis unde soluta temporibus earum, placeat porro voluptate cum adipisci quas voluptatibus deleniti animi. Debitis doloribus iusto incidunt, illo dolore itaque delectus error beatae, tempora adipisci mollitia veniam. Nemo tempore veniam sit vero reprehenderit impedit assumenda voluptatum voluptatem, illum laudantium corrupti! Fuga.</p>
            <div id="backTerms" class="btn btn-outline-info rounded-pill" style="cursor: pointer;">
                Kembali ke login    
            </div>
        </div>
    </div>
    <!-- Privacy -->
    <div class="Terms hide" id="Privacy">
        <div class="text-terms">
          <h2 class="text-secondary font-weight-bold text-center">PRIVACY POLICY</h2>
          <p class="text-secondary" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi nostrum harum voluptatum suscipit similique, dolore nesciunt, a, totam id ex eos. Labore totam et facere aperiam ullam dignissimos ex alias ducimus dolorum similique dolorem, repudiandae aliquam tenetur quaerat voluptas? Quod incidunt dolor facilis sint saepe totam laborum praesentium deleniti modi tempore quia, fugiat eveniet sequi soluta voluptatem labore eaque, architecto culpa voluptas reiciendis impedit vero. Provident, sed voluptas. Veritatis adipisci obcaecati eum illum provident explicabo sit numquam neque modi repellendus praesentium quibusdam sed libero repudiandae eligendi amet consequatur porro omnis pariatur maiores, sunt illo nisi totam! Architecto nostrum numquam dolores necessitatibus placeat nemo eligendi aliquam pariatur officiis doloremque, iste dolor, ipsam praesentium iusto fuga voluptatem, facere odio. Reprehenderit illo obcaecati repellendus molestias adipisci, tempore similique eum doloremque nihil a vel recusandae, saepe eos praesentium quod ea earum autem numquam ducimus consequuntur. Excepturi atque, quod, molestias facere dolorum aliquid tempore voluptatem ullam quasi esse accusamus fugit facilis, sequi dicta maiores. Voluptatum officiis ducimus laborum, eveniet inventore recusandae facere quae. Officia totam nam beatae debitis exercitationem magnam nostrum, ipsa delectus, eos voluptate sunt tempore sequi, dolore corporis impedit error illum. Voluptatibus, minima maiores maxime culpa recusandae beatae fugiat saepe cupiditate velit ex facilis adipisci inventore iure exercitationem iste earum odit magni nobis vero. Odio corrupti ipsum placeat dicta molestiae obcaecati perspiciatis explicabo facilis hic dolorum, libero impedit voluptas, nulla eum illum architecto. Beatae at quo laborum cum ratione sapiente accusamus ut. Molestiae non maxime consequuntur nesciunt expedita unde iste vitae, dignissimos optio, quo saepe, consequatur totam officiis ad ex illum veniam quidem facilis magnam qui aut? Tenetur ad, hic magni quos dicta repudiandae voluptatibus, fuga repellendus amet praesentium minima quasi! Iure cumque, accusantium odio neque error non corporis alias aut culpa voluptatum minima reprehenderit repellendus consequuntur. Eos nostrum unde saepe accusamus quam, doloribus necessitatibus tenetur officia consequuntur, maxime ea tempora a? Consectetur, fuga facere! Aperiam, enim sint, asperiores ullam fuga nulla id nam suscipit, quibusdam voluptas autem quo sequi error quisquam incidunt at beatae provident. Placeat nemo fuga ratione architecto, explicabo ea, aliquam, porro laboriosam sequi quia accusantium? Atque magni optio delectus earum commodi quis error alias consequatur ut ea obcaecati suscipit aperiam provident est neque, vel mollitia quisquam recusandae veritatis aliquam et deserunt, autem dolorum! Ipsum, quae et placeat, cumque facilis est vel ratione cupiditate repellat voluptates dicta dolores modi tenetur non impedit voluptatem, consequatur totam laudantium quibusdam eos sapiente delectus. Ipsum similique obcaecati beatae natus, iusto laborum quisquam explicabo rem fugiat ab blanditiis tenetur consequuntur accusantium eius mollitia minima. Omnis enim deleniti asperiores totam. Doloremque quisquam, id reiciendis voluptatem ipsa quo dignissimos possimus. Dignissimos ipsam itaque nam corporis pariatur obcaecati recusandae, odio repellendus non sunt ab reprehenderit id nulla enim facere. Modi ducimus exercitationem ullam deleniti ipsa asperiores odit laudantium? Quis nemo dolore doloribus qui sit officia voluptates nihil ducimus fugiat saepe reprehenderit quod, sapiente labore temporibus totam. Laborum vero eius, nemo ea porro distinctio dignissimos aliquam doloremque, nam deserunt, incidunt fugiat quas odit blanditiis dolores rerum veniam eaque. Voluptas pariatur doloremque maxime quos qui delectus eaque molestias laborum sint, ab atque, natus nesciunt in aut. Neque, ullam itaque similique voluptatum est laboriosam ducimus ratione veniam quae corrupti ipsa sequi at modi dignissimos excepturi deserunt voluptate quod. Maiores modi dolor numquam consectetur, fugit eos veritatis libero sapiente velit, iusto natus nemo accusantium rem exercitationem quo deserunt sed voluptate reprehenderit consequuntur incidunt repellat cupiditate aspernatur obcaecati! In placeat fugit recusandae quae consectetur nihil aperiam esse aspernatur numquam blanditiis soluta, deleniti dolores nisi repellendus. Pariatur expedita laudantium, eum dolor dolorum, exercitationem repellat debitis voluptate odio veritatis velit totam, illum officia quasi. Rem totam nisi eum nemo cumque sequi omnis iure laboriosam accusamus illo sapiente eligendi cum delectus perferendis facere eaque amet similique iste, obcaecati velit nihil. Esse, vitae? Vel ex soluta non eligendi est nisi illo. Laboriosam in odit tenetur illum neque debitis, iure autem doloremque placeat cumque dignissimos quaerat nostrum, natus non error, repudiandae reiciendis ratione recusandae asperiores quidem incidunt. Aliquid cumque id pariatur quod beatae, unde aliquam excepturi provident ex soluta eaque assumenda, illum quis cum deleniti? Totam quas minus quia officiis architecto ut assumenda similique! Accusantium inventore deleniti cumque aliquid illum itaque, numquam at illo aspernatur dignissimos ut voluptatum! Assumenda natus, quae soluta incidunt cupiditate eaque quod deleniti necessitatibus. Blanditiis, possimus tempora qui voluptatem voluptas rem rerum eligendi. Quae, ab reiciendis molestiae sed est incidunt consequatur laborum recusandae officiis placeat molestias perspiciatis nobis facere mollitia culpa dolores beatae necessitatibus. Minima dignissimos eius illum sint quos, accusamus delectus praesentium ratione dolore sequi sunt atque in veritatis hic esse modi at inventore recusandae? Consequatur doloribus dolorem, vero suscipit facilis in deleniti tempora. Officiis iusto aperiam labore facilis exercitationem adipisci vitae illum, sunt sed autem mollitia ratione perspiciatis. Quisquam numquam, placeat aspernatur ut accusamus, exercitationem quidem fuga ratione, explicabo porro illum ad provident ex error facilis eveniet vel ullam cupiditate optio voluptates! A ducimus eligendi maxime ratione itaque rerum id! Neque commodi dolore nobis atque repellendus beatae nesciunt eos ea iure labore, recusandae aliquam deleniti adipisci pariatur necessitatibus perferendis reiciendis ex harum corrupti non? Optio possimus ipsa corporis eius officiis ipsam quidem itaque. Praesentium dicta possimus commodi illo officia iure enim explicabo nobis cupiditate nulla, aperiam atque unde magni sit id maxime. Beatae iure repudiandae quos impedit officiis inventore maiores fugit pariatur saepe? Delectus fugit recusandae nam ipsam corporis quam accusamus architecto praesentium aperiam laboriosam ad, velit illum dolor quisquam adipisci aspernatur facere fuga aut. Expedita porro alias vel consequuntur ut tempore corrupti labore optio fuga voluptas autem exercitationem maxime amet deserunt corporis voluptatibus commodi vero et, molestias accusamus ipsum? Quod, ipsum. Beatae dolor, molestiae delectus hic quis mollitia impedit, voluptate porro consequatur labore nesciunt cumque nam minima facere officiis eveniet libero deserunt facilis, non pariatur? Impedit nulla voluptas alias quis unde soluta temporibus earum, placeat porro voluptate cum adipisci quas voluptatibus deleniti animi. Debitis doloribus iusto incidunt, illo dolore itaque delectus error beatae, tempora adipisci mollitia veniam. Nemo tempore veniam sit vero reprehenderit impedit assumenda voluptatum voluptatem, illum laudantium corrupti! Fuga.</p>
          <div id="backPriv" class="btn btn-outline-info rounded-pill" style="cursor: pointer;">
              Kembali ke login    
          </div>
        </div>
    </div>
<script>
$(document).ready(function() {
  $("#date").datepicker({
    dateFormat:'yy-mm-dd',
  });  
});
</script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
    <script src="assets/Main.js"></script>

</body>
</html>