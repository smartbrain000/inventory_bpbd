<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>

        <li>
            <a href="<?= base_url('dashboard') ?>">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('dashboard/profil') ?>">
                <i class="material-icons">perm_identity</i>
                <span>Profil</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Barang</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?= base_url('dashboard/barang') ?>">
                        <span>Data Barang</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/sumber') ?>">
                        <span>Data Sumber Barang</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/kategori') ?>">
                        <span>Data Kategori Barang</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">swap_calls</i>
                <span>Keluar Masuk Barang</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?= base_url('dashboard/masuk') ?>">
                        <span>Barang Masuk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/keluar') ?>">
                        <span>Barang Keluar</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">widgets</i>
                <span>Inventorisasi</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?= base_url('dashboard/stok') ?>">
                        <span>Stok Barang</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/exp') ?>">
                        <span>Barang Kadaluwarsa</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('auth/logout') ?>">
                <i class="material-icons">exit_to_app</i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>