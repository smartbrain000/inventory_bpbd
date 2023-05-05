<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Sumber Barang
                </h2>
            </div>
            <div class="body">
                <form method="post" action="<?= base_url('dashboard/i_sumber') ?>">
                    <label for="nama_sumber">Sumber Barang</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nama_sumber" name="nama_sumber" class="form-control" placeholder="Sumber Barang">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>