<div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
    <div class="hpanel shadow-ct">
        <div class="panel-heading hbuilt mailbox-hd">
            <div class="text-center p-xs font-normal">
                <div class="input-group">
                    <input type="text" id='myInput' onkeyup="myFunction()" title="Type In name" class="form-control input-sm" placeholder="Search data" autocomplete='off'> <span class="input-group-btn active-hook"> <button type="button" class="btn btn-sm btn-default"> Search </button> </span></div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-6 col-sm-6 col-xs-8">

                    <div class="btn-group ib-btn-gp active-hook mail-btn-sd mg-b-15">
                        <button class="btn btn-default btn-sm" id="refres"><i class="fa fa-refresh"></i> Refresh</button>
                        <button type="submit" class="btn btn-default btn-sm" name="sembunyikan"><i class="fa fa-eye"></i></button>
                        <button type="submit" class="btn btn-default btn-sm" name="info"><i class="fa fa-exclamation"></i></button>
                        <button type="submit" class="btn btn-default btn-sm" name="hapus"><i class="fa fa-trash"></i></button>
                        <button type="submit" class="btn btn-default btn-sm" name="sudah_dibaca"><i class="fa fa-check"></i></button>
                        <button type="button" id="selectAll" class="btn btn-default btn-sm"><i class="fa fa-tag"></i></button>
                    </div>
                </div>

                <div class="col-md-6 col-md-6 col-sm-6 col-xs-4 mailbox-pagination">
                    <div class="btn-group ib-btn-gp active-hook mail-btn-sd mg-b-15">
                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="table-responsive ib-tb">
                <table class="table table-hover table-mailbox" id='myTable'>
                    <tbody>
                        <?php
                        $num = 40;
                        $koneksi = mysqli_connect("localhost", "root", "", "e-prom");
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE nama_pengirim='Aldiyunan07@gmail.com' AND status='draft'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr class="<?php if ($d['status_penerima'] == "belum") {
                                            echo "unread";
                                        } else if ($d['status_penerima'] == "sudah") {
                                            echo " ";
                                        }
                                        ?>">
                                <td><input type="checkbox" style='margin-right:3px;'></td>
                                <td><a style='color:red;'> Draft </a></td>
                                <td><a style='margin-left:40px;' href="lihat.php?id=<?= $d['id'] ?>">
                                        <?php echo substr($d['isi'], 0, $num) . '...'; ?></a></td>
                                <td></td>
                                <td class="text-right mail-date"><?php echo $d['tanggal'] ?></td>
                            </tr> <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>