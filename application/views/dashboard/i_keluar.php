<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Barang Keluar
                </h2>
            </div>
            <div class="body">
                <form method="post" action="<?= base_url('dashboard/i_keluar') ?>">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover tabel_basic dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Stok Barang</th>
                                    <th>Satuan Barang</th>
                                    <th>Jumlah Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($tampil as $t) :
                                    if ((($t['nama_kategori'] == 'Pangan') && ($t['tgl_exp'] > date('Y-m-d')))
                                        || $t['nama_kategori'] == 'Sandang' || $t['nama_kategori'] == 'Papan'
                                    ) {
                                ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $t['nama_barang']; ?></td>
                                            <td><?= $t['jml_barang']; ?></td>
                                            <td><?= $t['satuan']; ?></td>
                                            <td class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="qty[]" class="form-control">
                                                    <input type="hidden" name="id_masuk[]" class="form-control" value="<?= $t['id_masuk']; ?>">
                                                </div>
                                            </td>
                                        </tr>

                                <?php }
                                    $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                        <label for="tgl_keluar">Tanggal Keluar</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" name="tgl_keluar" id="tgl_keluar" class="form-control" placeholder="Tanggal Barang Keluar">
                            </div>
                        </div>
                        <label for="tujuan">Posko / Tujuan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Tujuan Barang Keluar">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>