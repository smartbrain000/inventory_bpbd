<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <!-- <a href="<?= base_url('dashboard/i_barang') ?>" class="btn btn-primary"> Tambah Barang </a> -->
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover tabel_basic dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Satuan Barang</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($tampil as $t) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $t['nama_barang']; ?></td>
                                    <td><?= $t['satuan']; ?></td>
                                    <!-- <td>
                                        <a href="<?= base_url('dashboard/hapus_barang/' . $t['id_masuk']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </a>
                                        <a href="<?= base_url('dashboard/edit_barang/' . $t['id_masuk']) ?>" class="btn btn-success btn-sm">
                                            Edit
                                        </a>
                                    </td> -->
                                </tr>
                            <?php $no++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>