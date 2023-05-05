<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table-bordered table-striped table-hover tabel_basic">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td><?= $tampil['nama']; ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?= $tampil['username']; ?></td>


                            <tr>
                                <td>
                                    <a href="<?= base_url('dashboard/edit_profil/' . $tampil['id_user']) ?>" class="btn btn-success btn-sm m-t-20 waves-effect">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>