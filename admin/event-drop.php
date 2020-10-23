<?php include 'template/header.php'; ?>
            <!-- Mobile Menu end -->
            
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list shadow-ct" style="background-color:#fff; margin-top:37px; border-radius:5px 5px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <span style="font-family: 'Montserrat', sans-serif; font-size:27px;" > Jadwal | Event</span></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="index.php" style='color:blue;'>Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Event</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15" style="margin-top:-70px;">
            <div class="container-fluid">
                <div class="row">
                <!-- DROP -->
                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4">
                        <div class="sparkline13-list shadow-ct" style="margin-top:-5px; margin-bottom:25px;">
                                <div><a href="#home" aria-controls="home" role="tab" data-toggle="tab">EVENT</a></div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md- col-sm-4 col-xs-4">
                        <div class="sparkline13-list shadow-ct" style="margin-top:-5px; margin-bottom:25px;">
                        <div><a href="event.php">DOKTER JAGA</a></div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="sparkline13-list shadow-ct" style="margin-top:-5px; margin-bottom:25px;">
                        <div><a href="event.php">PERAWAT JAGA</a></div>

                        </div>
                    </div>
                <!-- END DROP -->
                </div>
                <div class="row">
                <!-- DROP -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list shadow-ct" style="margin-top:-5px; margin-bottom:25px;">
                        <!-- EVENT -->
                        <div class="calender-inner" id="home">
                                <div id='calendar'></div>
                        </div>
                        <!-- END EVENT -->
                        </div>
                    </div>

                <!-- END DROP -->
                </div>
            </div>
        </div>
    </div>
<?php include 'template/footer.php' ?>