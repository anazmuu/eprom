<?php
// $koneksi = mysqli_connect("localhost", "root", "", "e-prom");

// $makanan = $_POST['pilih'];
// $jumlah_dipilih = count($makanan);

// for ($x = 0; $x < $jumlah_dipilih; $x++) {
//     mysqli_query($koneksi, "DELETE FROM tb_inbox WHERE id_inbox='$makanan[$x]'");
// }
function koneksi()
{
    $koneksi = mysqli_connect("localhost", "root", "", "e-prom");
    return $koneksi;
}
// function kirim($to,$subject,$pesan)
// {
//     $conn=koneksi();
//     $data=mysql_query($conn,"INSERT INTO `tb_inbox` (`id_inbox`, `nama_pengirim`, `nama_tujuan`, `isi`, `status`, `tanggal`, `subject`, `status_penerima`, `tgl_hapus`) VALUES (NULL, 'Aldiyunan07@gmail.com', '$to', '$pesan', '', 'NOW()', '$subject', 'sudah', '00-00-0000')")

// }

function hapus($id)
{
    $conn = koneksi();
    $jumlah_dipilih = count($id);
    for ($x = 0; $x < $jumlah_dipilih; $x++) {
        mysqli_query($conn, "UPDATE tb_inbox SET status='trash', status_penerima='trash',tgl_hapus=NOW() WHERE id_inbox='$id[$x]'");
    }
    for ($x = 0; $x < $jumlah_dipilih; $x++) {
        mysqli_query($conn, "DELETE FROM tb_inbox WHERE id_inbox='$id[$x]'  AND  DATEDIFF(CURDATE(), tgl_hapus) > 30 ");
    }

    return mysqli_affected_rows($conn);
}
function arsip($id)
{
    $conn = koneksi();
    $jumlah_dipilih = count($id);
    for ($x = 0; $x < $jumlah_dipilih; $x++) {
        mysqli_query($conn, "UPDATE tb_inbox SET status='arsip' WHERE id_inbox='$id[$x]'");
    }

    return mysqli_affected_rows($conn);
}
function terbaca($id)
{

    $conn = koneksi();
    $jumlah_dipilih = count($id);
    for ($x = 0; $x < $jumlah_dipilih; $x++) {
        mysqli_query($conn, "UPDATE tb_inbox SET status='arsip', status_penerima='sudah' WHERE id_inbox='$id[$x]'");
    }

    return mysqli_affected_rows($conn);
}



function num_inbox()
{
    $koneksi = koneksi();
    $hasil = array();
    $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE nama_tujuan='Aldiyunan07@gmail.com' AND status='masuk'");
    if (!$data) {
        $hasil = 0;
    } else {
        while ($d = mysqli_fetch_array($data)) {
            $numm[] = $d;
        }
        $hasil = count($numm);
    }
    echo $hasil;
}
function num_terkirim()
{
    $koneksi = koneksi();
    $hasil = array();
    $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE nama_pengirim='Aldiyunan07@gmail.com' AND status='terkirim'");
    if (!$data) {
        $hasil = 0;
    } else {
        while ($d = mysqli_fetch_array($data)) {
            $numm[] = $d;
        }
        $hasil = count($numm);
    }
    echo $hasil;
}
function num_draft()
{
    $koneksi = koneksi();
    $hasil = array();
    $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE nama_pengirim='Aldiyunan07@gmail.com' AND status='draft'");
    while ($d = mysqli_fetch_array($data)) {
        $numm[] = $d;
    }
    $hasil = count($numm);
    echo $hasil;
}
$conn = koneksi();
$a = mysqli_query($conn, "SELECT * FROM tb_inbox WHERE nama_tujuan='Aldiyunan07@gmail.com' AND status='masuk'");
$num_inbox = mysqli_num_rows($a);

$b = mysqli_query($conn, "SELECT * FROM `tb_inbox` where status='arsip'");
$num_arsip = mysqli_num_rows($b);

$c = mysqli_query($conn, "SELECT * FROM `tb_inbox` where status='draft'");
$num_draft = mysqli_num_rows($c);

$d = mysqli_query($conn, "SELECT * FROM `tb_inbox` where status='trash'");
$num_trash = mysqli_num_rows($d);

$e = mysqli_query($conn, "SELECT * FROM tb_inbox WHERE nama_pengirim='Aldiyunan07@gmail.com' AND status='terkirim'");
$num_sent = mysqli_num_rows($e);

function num_arsip()
{

    // $koneksi = koneksi();
    // $hasil = array();
    // $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE status='arsip'");
    // if (!$data) {
    //     $hasil = 0;
    // } else {
    //     while ($d = mysqli_fetch_array($data)) {
    //         $numm[] = $d;
    //     }
    //     $hasil = count($numm);
    // }
    // echo $hasil;
}
function num_trash()
{
    $koneksi = koneksi();
    $hasil = array();
    $data = mysqli_query($koneksi, "SELECT * FROM tb_inbox WHERE status='trash'");
    if (!$data) {
        $hasil = 0;
    } else {
        while ($d = mysqli_fetch_array($data)) {
            $numm[] = $d;
        }
        $hasil = count($numm);
    }
    echo $hasil;
}



if (isset($_POST['hapus'])) {
    if (!isset($_POST['pilih'])) {
        echo "<script> alert('Belum ada data yang di pilih ! '); </script>";
    } else {
        $id = $_POST['pilih'];
        if (hapus($id) > 0) {
            echo "
		<script>
			alert('data berhasil dihapus!');
		</script>
	";
        } else {
            echo "
		<script>
			alert('data gagal dihapus!');
		</script>
    ";
        }
    }
}
if (isset($_POST['sembunyikan'])) {
    if (!isset($_POST['pilih'])) {
        echo "<script> alert('Belum ada data yang di pilih ! '); </script>";
    } else {

        $id = $_POST['pilih'];
        if (arsip($id) > 0) {
            echo "
		<script>
			alert('data berhasil diarsipkan!');
		</script>
	";
        } else {
            echo "
		<script>
			alert('data gagal diarsipkan!');
		</script>
	";
        }
    }
}
if (isset($_POST['sudah_dibaca'])) {
    if (!isset($_POST['pilih'])) {
        echo "<script> alert('Belum ada data yang di pilih ! '); </script>";
    } else {

        $id = $_POST['pilih'];
        terbaca($id);
    }
}
