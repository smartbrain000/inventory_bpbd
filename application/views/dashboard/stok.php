<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <!-- <a href="<?= base_url('dashboard/i_keluar') ?>" class="btn btn-primary"> Tambah Barang Keluar </a> -->
                <a href="<?= base_url('dashboard/print_stok') ?>" class="btn btn-primary"> <i class="material-icons">print</i> Cetak PDF
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover tabel_basic dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Satuan Barang</th>
                                <!-- <th>Stok</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tampil as $t) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $t['nama_barang']; ?></td>
                                    <td><?= $t['jml']; ?></td>
                                    <td><?= $t['satuan']; ?></td>

                                    <!-- <td>
                                        <a href="<?= base_url('dashboard/hapus_keluar/' . $t['id_keluar']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </a>
                                        <a href="<?= base_url('dashboard/edit_keluar/' . $t['id_keluar']) ?>" class="btn btn-success btn-sm">
                                            Edit
                                        </a>
                                    </td> -->
                                </tr>
                            <?php $no++;
                            endforeach; ?>
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination float-right"></ul>
                                </td>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>