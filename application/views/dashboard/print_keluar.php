<script>
    window.print();
</script>

<html dir="ltr" lang="en">

<head>
    <title><?= $judul ?></title>

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
            <h3 class="text-center" align="center">Laporan Barang Keluar BPBD Majalengka <?= $this->uri->segment("3") ?></h3>
            <table class="table table-bordered table-hover" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Keluar</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Tujuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($tampil as $data) {  ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $data['tgl_keluar']; ?></td>
                            <td><?= $data['nama_barang']; ?></td>
                            <td><?= $data['jml_barang_keluar']; ?></td>
                            <td><?= $data['satuan']; ?></td>
                            <td><?= $data['tujuan']; ?></td>
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