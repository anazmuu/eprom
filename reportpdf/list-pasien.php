<?php
include '../koneksi.php';
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
// $judul = "Data Doctor";
$judul = $_GET['judul'];



// $html = "<center><h3>" . $Judul . "</h3></center><hr/><br/>";
$html = "<center><h3>Daftar " . $judul . "</h3></center><hr/><br/>";

$html .= "  <table border='1' width='100%' cellspacing='0' cellpadding='4'>
<thead>
  <tr>
    <th>No Antrian</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>No Telepon</th>
    <th>Riwayat Penyakit</th>
    <th>Usia</th>
  </tr>
</thead>
<tbody>";

include '../koneksi.php';
$data = mysqli_query($Koneksi, "SELECT * FROM t_pasien ");
while ($d = mysqli_fetch_array($data)) {
    $html .= "
    <tr>
      <td> " . $d['no_antrian'] . " </td>
      <td> " . $d['nik'] . "</td>
      <td> " . $d['nama'] . "</td>
      <td> " . $d['alamat'] . "</td>
      <td> " . $d['jk'] . "</td>
      <td> " . $d['notelp'] . "</td>
      <td> " . $d['r_penyakit'] . "</td>
      <td> " . $d['usia'] . "</td>
    </tr>
    ";
}


$html .= "</tbody></table>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan ' . $judul . '.pdf');
