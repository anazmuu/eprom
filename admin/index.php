<?php include 'template/header.php'; ?>
<?php
$dar = mysqli_query($Koneksi, "SELECT * FROM t_perawat");
$dart = mysqli_num_rows($dar);
?>
<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list" style="background-color:#fff; margin-top:37px;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <span style="font-family: 'Montserrat', sans-serif; font-size:27px;">Dashboard</span></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="index.php" style='color:blue;'>Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- <div class="analytics-sparkle-line reso-mg-b-30" style="background-color:#fff; border-radius:5px 5px; box-shadow:-0px -0px 5px #aeaeae;">
                    <div class="analytics-content">
                        <h5>Data Pasien Hari ini </h5>
                        <h2><span class="counter"><?php echo $num1 ?></span> Jiwa <span class="tuition-fees"><?php echo $tgl ?></span></h2>
                    </div>
                </div> -->
                <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n sbg3" >
                            <h3 class="box-title" style="color:#fff;">Pasien Hari Ini</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div><span class="fa fa-user-injured fa-2x" style="color:#fff;"></span></div>
                                </li>
                                <li class="text-right sp-cn-r" ><i class="fas fa-level-up-alt" aria-hidden="true" style="color:#fff;"></i> <span class="counter" style="color:#fff!important;"><span class="counter" ><?php echo $num1 ?></span></span>
                                </li>
                            </ul>
                        </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- <div class="analytics-sparkle-line reso-mg-b-30" style="background-color:#fff; border-radius:5px 5px; box-shadow:-0px -0px 5px #aeaeae;">
                    <div class="analytics-content">
                        <h5>Data Dokter</h5>
                        <h2><span class="counter"><?php echo $num2 ?></span> Dokter<span class="tuition-fees">Keseluruhan </span></h2>
                    </div>
                </div> -->
                <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n sbg4" >
                            <h3 class="box-title" style="color:#fff;">Data Dokter</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div><span class="fa fa-user-md fa-2x" style="color:#fff;"></span></div>
                                </li>
                                <li class="text-right sp-cn-r" ><i class="fas fa-level-up-alt" aria-hidden="true" style="color:#fff;"></i> <span class="counter" style="color:#fff!important;"><span class="counter" ><?php echo $num2 ?></span></span>
                                </li>
                            </ul>
                        </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- <div class="analytics-sparkle-line reso-mg-b-30" style="background-color:#fff; border-radius:5px 5px; box-shadow:-0px -0px 5px #aeaeae;">
                    <div class="analytics-content">
                        <h5>Data Perawat</h5>
                        <h2><span class="counter"><?php echo $dart ?></span> Perawat<span class="tuition-fees">Keseluruhan </span></h2>
                    </div>
                </div> -->
                <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n sbg2" >
                            <h3 class="box-title" style="color:#fff;">Data Perawat</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div><span class="fa fa-user-nurse fa-2x" style="color:#fff;"></span></div>
                                </li>
                                <li class="text-right sp-cn-r" ><i class="fas fa-level-up-alt" aria-hidden="true" style="color:#fff;"></i> <span class="counter" style="color:#fff!important;"><span class="counter" ><?php echo $dart ?></span></span>
                                </li>
                            </ul>
                        </div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30" style="background-color:#fff; border-radius:5px 5px; box-shadow:-0px -0px 5px #aeaeae;">
                    <div class="analytics-content">
                        <h5>Data Pasien</h5>
                        <h2><span class="counter"><?= $num4 ?></span> Pasien <span class="tuition-fees">Keseluruhan</span></h2>
                    </div>
                </div> -->
                <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n sbg1">
                            <h3 class="box-title" style="color:#fff;">Pasien Keseluruhan</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div><span class="fa fa-users fa-2x" style="color:#fff;"></span></div>
                                </li>
                                <li class="text-right sp-cn-r" ><i class="fas fa-level-up-alt" aria-hidden="true" style="color:#fff;"></i> <span class="counter" style="color:#fff!important;"><span class="counter" ><?php echo $num4 ?></span></span>
                                </li>
                            </ul>
                        </div>

            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php'; ?>