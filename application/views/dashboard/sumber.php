<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <a href="<?= base_url('dashboard/i_sumber') ?>" class="btn btn-primary"> <i class="material-icons"></i> Tambah Data Sumber Barang </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover tabel_basic dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sumber Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($tampil as $t) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $t['nama_sumber']; ?></td>
                                    <td>
                                        <a href="<?= base_url('dashboard/hapus_sumber/' . $t['id_sumber']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href="<?= base_url('dashboard/edit_sumber/' . $t['id_sumber']) ?>" class="btn btn-success btn-sm">
                                            <i class="material-icons">mode_edit</i>
                                        </a>
                                    </td>
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