<?php include 'template/header.php';
include 'inbox/aksi.php'; ?>
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

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
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
                <div class="breadcome-list single-page-breadcome shadow-ct"  style="background-color:#fff; margin-top:37px; ">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <span style="font-family: 'Montserrat', sans-serif; font-size:27px;">Inbox</span></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="index.php" style='color:blue;'>Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Inbox</span>
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
                        <a id='buat' class="klik_menu btn btn-success sbg2 compose-btn btn-block m-b-md" style="border-radius:50px;">Tulis</a>
                        <ul class="mailbox-list">
                            <li>
                                <a class='klik_menu' id='masuk'>
                                    <span class="pull-right"><?= $num_inbox; ?></span>
                                    <i class="fa fa-envelope color-custom"></i> Inbox
                                </a>
                            </li>
                            <li>
                                <a class='klik_menu' id='sent'>
                                    <span class="pull-right"><?= $num_sent; ?></span>
                                    <i class="fa fa-paper-plane color-custom"></i> Sent</a>
                            </li>
                            <li>
                                <a class='klik_menu' id='draft'>
                                    <span class="pull-right"><?= $num_draft; ?></span>
                                    <i class="fas fa-sticky-note color-custom"></i> Draft</a>
                            </li>
                            <li>
                                <a class='klik_menu' id='arsip'>
                                    <span class="pull-right"><?= $num_arsip; ?></span>
                                    <i class="fa fa-archive color-custom"></i>Arsip</a>
                            </li>

                            <li>
                                <a class='klik_menu' id='trash'>
                                    <span class="pull-right"><?= $num_trash; ?></span>
                                    <i class="fa fa-trash color-custom"></i> Trash</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="mailbox-list">
                            <li>
                                <a class='klik_menu' id='setting'>
                                    <i class="fa fa-cog color-custom"></i> Settings</a>
                            </li>
                            <li>
                                <a class='klik_menu' id='support'>
                                    <i class="fa fa-info-circle color-custom"></i> Support</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="badan "></div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.klik_menu').click(function() {
            var menu = $(this).attr('id');
            if (menu == "masuk") {
                $('.badan').load('inbox/masuk.php');
            } else if (menu == "buat") {
                $('.badan').load('inbox/buat.php');
            } else if (menu == "sent") {
                $('.badan').load('inbox/terkirim.php');
            } else if (menu == "draft") {
                $('.badan').load('inbox/draft.php');
            } else if (menu == "arsip") {
                $('.badan').load('inbox/arsip.php');
            } else if (menu == "trash") {
                $('.badan').load('inbox/trash.php');
            } else if (menu == "setting") {
                $('.badan').load('inbox/setting.php');
            } else if (menu == "support") {
                $('.badan').load('inbox/support.php');
            } else if (menu == "lihat") {
                $('.badan').load('inbox/lihat.php');
            }
        });
        // halaman yang di load default pertama kali
        $('.badan').load('inbox/masuk.php');
    });
</script>
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