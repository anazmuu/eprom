<?php include 'template/header.php';
include 'inbox/aksi.php';
?>
<script src='jquery.js' type='text/javascript'></script>
<script type='text/javascript'>
    $(document).ready(function() {
        $('body').on('click', '#selectAll', function() {
            if ($(this).hasClass('allChecked')) {
                $('input[type="checkbox"]', '#myTable').prop('checked', false);
            } else {
                $('input[type="checkbox"]', '#myTable').prop('checked', true);
            }
            $(this).toggleClass('allChecked');
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var id = 1;
        $("#refres").click(function() {
            $.ajax({
                url: "text.php",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('.badan').html(data);
                    alert('Berhasil Refresh');
                }
            });
        });

    });
</script>


<!-- Mobile Menu end -->
<style>
    .klik_menu {
        cursor: pointer;
    }
</style>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome shadow-ct">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <i class="fa fa-inbox fa-3x"><span style="font-family: 'Montserrat', sans-serif; font-size:27px;"> | INBOX</span></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="index.php" style='color:blue;'>Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Lihat Pesan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="mailbox-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel responsive-mg-b-30 shadow-ct">
                    <div class="panel-body">
                        <a id='buat' class="klik_menu btn btn-success compose-btn btn-block m-b-md">Tulis</a>
                        <ul class="mailbox-list">
                            <li>
                                <a href="inbox.php">
                                    <span class="pull-right"><?php num_inbox(); ?></span>
                                    <i class="fa fa-envelope"></i> Inbox
                                </a>
                            </li>
                            <li>
                                <a href="inbox.php">
                                    <span class="pull-right"><?php num_terkirim(); ?></span>
                                    <i class="fa fa-paper-plane"></i> Sent</a>
                            </li>
                            <li>
                                <a href="inbox.php">
                                    <span class="pull-right"><?php num_draft(); ?></span>
                                    <i class="fa fa-pencil"></i> Draft</a>
                            </li>
                            <li>
                                <a href="inbox.php">
                                    <span class="pull-right"><?php num_arsip(); ?></span>
                                    <i class="fa fa-archive"></i>Arsip</a>
                            </li>

                            <li>
                                <a class='klik_menu' id='trash'>
                                    <span class="pull-right"><?php num_trash(); ?></span>
                                    <i class="fa fa-trash"></i> Trash</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="mailbox-list">
                            <li>
                                <a href="inbox.php">
                                    <i class="fa fa-gears"></i> Settings</a>
                            </li>
                            <li>
                                <a href="inbox.php">
                                    <i class="fa fa-info-circle"></i> Support</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="badan ">
                <?php
                $koneksi = mysqli_connect("localhost", "root", "", "e-prom");
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE id_inbox='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">

                                    </small> Email view

                                </div>
                            </div>
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">

                                    <div>
                                        <span class="font-extra-bold">Subject: </span> <?php echo $d['subject'] ?>
                                    </div>
                                    <div>
                                        <span class="font-extra-bold">From: </span>
                                        <a href="#"><?php echo $d['nama_pengirim'] ?></a>
                                    </div>
                                    <div>
                                        <span class="font-extra-bold">Date: </span> <?php echo $d['tanggal'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <p> <?php echo $d['isi'] ?> </p>
                                </div>
                            </div>

                        </div>


                        <div class="panel-footer text-right ft-pn">
                            <div class="btn-group active-hook">
                                <a href='inbox.php' class="btn btn-default"><i class="fa fa-reply"></i> Reply</a>
                            </div>
                        </div>
                    </div>
            </div>
            <?php
                    mysqli_query($koneksi, "UPDATE tb_inbox SET status_penerima='sudah' WHERE id_inbox='$id'");
            ?>
        <?php } ?>
        </div>

    </div>
</div>
</div>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<?php include 'template/footer.php'; ?>