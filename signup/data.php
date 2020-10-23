<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body style="font-family: consolas;">
    <h2 style="text-align : center;">Data Akun</h2>
    <h3>Data Dokter</h3>
    <a href="../index.php"> kembali </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th>Jenis Kelamin</th>
            <th>No Telpon</th>
            <th>Spesialisasi</th>
        </tr>
        <?php
        include '../koneksi.php';

        $no = 1;
        $data = mysqli_query($Koneksi,"SELECT * FROM t_dokter");
        while($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td> <?= $no++; ?> </td>
            <td> <?= $d['nik']; ?> </td>
            <td> <?= $d['nama']; ?> </td>
            <td> <?= $d['alamat'] ?> </td>
            <td> <?= $d['usia']; ?> </td>
            <td> <?= $d['jk']; ?> </td>
            <td> <?= $d['notelp']; ?> </td>
            <td> <?= $d['spesialisasi']; ?> </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>