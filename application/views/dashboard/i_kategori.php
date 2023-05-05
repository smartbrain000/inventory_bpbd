<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Kategori Barang
                </h2>
            </div>
            <div class="body">
                <form method="post" action="<?= base_url('dashboard/i_kategori') ?>">
                    <label for="nama_kategori">Kategori Barang</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Kategori Barang">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>