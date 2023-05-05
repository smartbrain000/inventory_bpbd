<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <!-- <a href="<?= base_url('dashboard/i_keluar') ?>" class="btn btn-primary"> Tambah Barang Keluar </a> -->
                <!-- <a href="<?= base_url('dashboard/print_stok') ?>" class="btn btn-primary"> <i class="material-icons"></i> PDF
                </a> -->
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
                                <th>Tanggal Kadaluwarsa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tampil as $t) :
                                if ((($t['nama_kategori'] == 'Pangan') && ($t['tgl_exp'] < date('Y-m-d')))) {
                            ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $t['nama_barang']; ?></td>
                                        <td><?= $t['jml_barang']; ?></td>
                                        <td><?= $t['satuan']; ?></td>
                                        <td><?= $t['tgl_exp']; ?></td>
                                        <!-- <td> <?php if ($t['tgl_exp'] > date('Y-m-d')) {
                                                        echo 'Berlaku';
                                                    } else {
                                                        echo 'Expired';
                                                    } ?></td> -->
                                        <td>
                                            <a href="<?= base_url('dashboard/hapus_exp/' . $t['id_masuk']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </a>
                                            <!-- <a href="<?= base_url('dashboard/edit_masuk/' . $t['id_masuk']) ?>" class="btn btn-success btn-sm">
                                            Edit
                                        </a> -->
                                        </td>
                                    </tr>
                            <?php $no++;
                                }
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