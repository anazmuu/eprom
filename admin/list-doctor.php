<?php include 'template/header.php'; ?>
            <!-- Mobile Menu end -->
            
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list shadow-ct" style="background-color:#fff; margin-top:37px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <span style="font-family: 'Montserrat', sans-serif; font-size:27px;" >List Doctor</span></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="index.php" style='color:blue;'>Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">List Dokter </span>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list shadow-ct" style="margin-top:-5px;">
                            <div class="sparkline13-graph">
                            
                            <div id="toolbar">
                                <a href="dokter/tambah.php" class="btn btn-primary btn-sm"> <b> + </b> Tambah Data </a>
                                </div>
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr align='center'>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Foto </th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Usia</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telepon</th>
                                                <th>Spesialis</th>
                                                <th>Aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1 ;
                                        $data = mysqli_query($Koneksi,"SELECT * FROM t_dokter");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['nik'] ?></td>
                                                <td> <img src="dokter/image/<?= $d['gambar'] ?>" height='150px' width='50px' alt="">  </td>
                                                <td><?= $d['nama'] ?></td>
                                                <td><?= $d['alamat'] ?></td>
                                                <td><?= $d['usia'] ?></td>
                                                <td><?= $d['jk'] ?></td>
                                                <td><?= $d['notelp'] ?></td>
                                                <td><?= $d['spesialisasi'] ?></td>
                                                <td>
                                                <div class="btn-group">
                                                    <a class="custom-aksi2" href="dokter/edit.php?id=<?= $d['id_dokter'] ?>"><i class="fa fa-edit"></i></a>
                                                    <a class="custom-aksi3" href="dokter/aksi_hapus.php?id=<?= $d['id_dokter'] ?>"><i class="fa fa-trash"></i></a>
                                                </div>        </td>
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