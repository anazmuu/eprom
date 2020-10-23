<?php
include '../koneksi.php';
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
// $judul = "Data Doctor";
$judul = $_GET['judul'];



// $html = "<center><h3>" . $Judul . "</h3></center><hr/><br/>";
$html = "<center><h3>Daftar " . $judul . "</h3></center><hr/><br/>";

$html .= "         <table border='1' width='100%' cellspacing='0' cellpadding='4'>
                <thead>
                <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Usia</th>
                      <th>Jenis Kelamin</th>
                      <th>No Telepon</th>
                      <th>Spesialis</th>
                      <th>Username</th>
                </tr>
                <thead>
                    ";
$data2 = mysqli_query($Koneksi, "SELECT * FROM t_dokter ");
$no = 1;
while ($c = mysqli_fetch_array($data2)) {
    $html .= "
    <tbody>
    <tr>
                        <td> " . $no . "</td>
                        <td> " . $c['nik'] . "</td>
                        <td>" . $c['nama'] . "</td>
                        <td>" . $c['alamat'] . "</td>
                        <td>" . $c['usia'] . "</td>
                        <td>" . $c['jk'] . "</td>
                        <td>" . $c['notelp'] . "</td>
                        <td>" . $c['spesialisasi'] . "</td>
                        <td>" . $c['username'] . "</td>
                      </tr>
                      <tbody>";
    $no++;
};

$html .= " </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan ' . $judul . '.pdf');
