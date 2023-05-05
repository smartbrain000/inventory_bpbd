<script>
    window.print();
</script>

<html dir="ltr" lang="en">

<head>
    <title>
        <?= $judul ?>
    </title>

    <!-- JQuery DataTable Css -->
    <link href="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?= base_url('AdminBSBMaterialDesign/') ?>css/style.css" rel="stylesheet">
    <style>
        @media print {

            .no-print,
            .card-header {
                display: none !important;
            }

            .cnt {
                padding-top: 0px !important;
                margin-left: 0px !important;
            }

            @page {
                size: landscape;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-body">
            <h3 class="text-center" align="center">Laporan Barang Masuk BPBD Majalengka <?= $this->uri->segment("3") ?></h3>
            <table class="table table-bordered table-hover" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal Expired</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($join_barangmasuk_kategori as $data) {  ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $data['tgl_masuk'] ?></td>
                            <td><?= $data['nama_sumber'] ?></td>
                            <td><?= $data['nama_barang'] ?></td>
                            <td><?= $data['jml_barang'] ?></td>
                            <td><?= $data['satuan'] ?></td>
                            <td><?= $data['nama_kategori'] ?></td>
                            <td><?= $data['tgl_exp'] ?></td>
                            <td><?php
                                if ($data['tgl_exp'] > date('Y-m-d')) {
                                    echo 'Berlaku';
                                } else {
                                    echo 'Expired';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>