<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Barang Masuk BPBD Majalengka</title>
</head>

<body>
    <h3>
        <center>Laporan Barang Masuk BPBD Majalengka</center>
    </h3>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal Masuk</th>
                <th>Sumber</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Tanggal Expired</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($barang_masuk as $data) {
                $no++;
                echo "<tr>";
                echo "<td><center>" . $no . "</center></td>";
                echo "<td>" . $data['tgl_masuk'] . "</td>";
                echo "<td>" . $data['nama_sumber'] . "</td>";
                echo "<td>" . $data['nama_barang'] . "</td>";
                echo "<td>" . $data['jml_barang'] . "</td>";
                echo "<td>" . $data['satuan'] . "</td>";
                echo "<td>" . $data['nama_kategori'] . "</td>";
                echo "<td>" . $data['tgl_exp'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>