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
                <form method="post" action="<?= base_url('dashboard/edit_keluar/' . $col['id_keluar']) ?>">
                    <label for="tgl_keluar">Tanggal Keluar</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" id="tgl_keluar" class="form-control" placeholder="Tanggal Barang Keluar">
                        </div>
                    </div>
                    <label for="nama_barang">Nama Barang</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nama_barang" class="form-control" placeholder="Nama Barang">
                        </div>
                    </div>
                    <label for="jml_barang">Jumlah</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="jml_barang" class="form-control" placeholder="Jumlah Barang">
                        </div>
                    </div>
                    <label for="satuan">Satuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="satuan" class="form-control" placeholder="Satuan Barang">
                        </div>
                    </div>
                    <label for="tujuan">Posko / Tujuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="tujuan" class="form-control" placeholder="Tujuan Barang Keluar">
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>