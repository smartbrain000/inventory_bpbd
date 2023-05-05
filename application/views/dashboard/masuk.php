<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <a href="<?= base_url('dashboard/i_masuk') ?>" class="btn btn-primary"> <i class="material-icons">add</i> Tambah Barang Masuk
                </a>
                <a href="<?= base_url('dashboard/print_masuk') ?>" class="btn btn-primary"> <i class="material-icons">print</i> Cetak PDF
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover tabel_basic dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Masuk</th>
                                <th>Sumber Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Satuan Barang</th>
                                <th>Kategori Barang</th>
                                <th>Tanggal Kadaluwarsa</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($join_barangmasuk_kategori as $t) :
                                if ((($t['nama_kategori'] == 'Pangan') && ($t['tgl_exp'] > date('Y-m-d')))
                                    || $t['nama_kategori'] == 'Sandang' || $t['nama_kategori'] == 'Papan'
                                ) {

                            ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $t['tgl_masuk']; ?></td>
                                        <td><?= $t['nama_sumber']; ?></td>
                                        <td><?= $t['nama_barang']; ?></td>
                                        <td><?= $t['jml_barang']; ?></td>
                                        <td><?= $t['satuan']; ?></td>
                                        <td><?= $t['nama_kategori']; ?></td>
                                        <td><?= $t['tgl_exp']; ?></td>
                                        <td><?php
                                            if ($t['tgl_exp'] > date('Y-m-d')) {
                                                echo 'Berlaku';
                                            } else {
                                                echo 'Expired';
                                            }
                                            ?>
                                        </td>
                                        <td><a href="<?= base_url('dashboard/hapus_masuk/' . $t['id_masuk']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                <i class="material-icons">delete</i>
                                            </a>
                                            <a href="<?= base_url('dashboard/edit_masuk/' . $t['id_masuk']) ?>" class="btn btn-success btn-sm">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                        </td>
                                    </tr>
                            <?php $no++;
                                }

                            endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>