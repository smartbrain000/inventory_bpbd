<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Profil
                </h2>
            </div>
            <div class="body">
                <form method="post" action="<?= base_url('dashboard/edit_profil/' . $col['id_user']) ?>">
                    <label for="nama_sumber">Nama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $col['nama'] ?>">
                        </div>
                    </div>
                    <label for="nama_sumber">Jabatan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Masukan Jabatan " value="<?= $col['jabatan'] ?>">
                        </div>
                    </div>
                    <label for="nama_sumber">Username</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username" value="<?= $col['username'] ?>">
                        </div>
                    </div>
                    <label for="nama_sumber">Ubah Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="curent_pass" name="curent_pass" class="form-control" placeholder="Masukan Password Baru">
                        </div>
                    </div>
                    <!-- <label for="nama_sumber">Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="password" name="password" class="form-control" placeholder="Password Baru">
                        </div>
                    </div>
                    <label for="nama_sumber">Confirm Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="confirm_pass" name="confirm_pass" class="form-control" placeholder="Konfirmasi Password Baru">
                        </div>
                    </div> -->
                    <button type="submit" class="btn bg-blue btn-primary m-t-15 waves-effect"> <i class="material-icons"></i>SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>