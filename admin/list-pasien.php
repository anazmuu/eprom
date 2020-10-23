<?php include 'template/header.php'; ?>
        <div class="breadcome-area " >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list" style="background-color:#fff; margin-top:37px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <span style="font-family: 'Montserrat', sans-serif; font-size:27px;"> Data Pasien</span></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a style='color:blue;' href="index.php">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Data Pasien </span>
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
        <div id="toolbar">
             <a href="user/tambah.php" class="btn btn-primary btn-sm"> <b> + </b> Tambah Data </a>
        </div>
        <div class="data-table-area mg-b-15" style="background-color:#fff; margin-top:37px; margin:0px 17px 100px 17px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                            <div id="toolbar">
                                </div>
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr align='center'>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th>Antrian</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>J / K</th>
                                                <th>No Telp</th>
                                                <th>Riwayat Penyakit</th>
                                                <th>Usia</th>
                                                <th>Aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $data = mysqli_query($Koneksi,"SELECT * FROM t_pasien");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $d['no_antrian'] ?></td>
                                                <td><?= $d['nama'] ?></td>
                                                <td><?= $d['alamat'] ?></td>
                                                <td><?= $d['jk'] ?></td>
                                                <td><?= $d['notelp'] ?></td>
                                                <td><?= $d['r_penyakit'] ?></td>
                                                <td><?= $d['usia'] ?></td>
                                                <td>
                                                <div class="btn-group">
                                                    <a class="custom-aksi2" href="user/edit.php?id=<?= $d['id_pasien'] ?>"><i class="fa fa-edit"></i></a>
                                                    <a class="custom-aksi3 " href="user/aksi_hapus.php?id=<?= $d['id_pasien'] ?>"><i class="fa fa-trash"></i></a>
                                                </div>    
                                            </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'template/footer.php' ?>