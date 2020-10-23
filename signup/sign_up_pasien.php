
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Sign Up Pasien</title>
  </head>
  <body>

<!-- Form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card m-5 shadow">
            <div class="card-body">
            <h2 class="text-center mb-5">SIGN UP PASIEN</h2>
            <form method="post" action="pasien.php">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input autocomplete='off' type="number" name="nik" class="form-control" id="nik" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" autocomplete='off' name="nama" class="form-control" id="nama" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" autocomplete='off' class="form-control" id="alamat" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="ttl">Tempat Tanggal Lahir</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="tmp_lahir" autocomplete='off' class="form-control" id="usia" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="ttl" class="form-control" autocomplete='off' id="" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="text" name="usia" class="form-control" id="usia" placeholder="" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Jenis Kelamin</label>
                <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="Laki laki" checked>
                <label class="form-check-label" for="gridRadios1">
                    Laki laki
                </label>
                </div>
                <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="Perempuan" >
                <label class="form-check-label" for="gridRadios2">
                    Perempuan
                </label>
                </div>
            </div>
            <div class="form-group">
                <label for="notelp">Nomor Telepon</label>
                <input type="text" name="notelp" class="form-control" id="notelp" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="penyakit">Riwayat Penyakit</label>
                <input type="text" name="r_penyakit" class="form-control" id="penyakit" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="../../index.php"><div class='btn btn-danger'> Kembali</div> </a>
            </form>
            </div>
            </div>
        
        </div>
    </div>
</div>
<!-- end form -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>