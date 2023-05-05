<!-- Widgets -->
<div class="row clearfix">
    <?php
    $ds1 = $this->Model_barang->dash_barang();
    $ds2 = $this->Model_barang->dash_barangmasuk();
    $ds3 = $this->Model_barang->dash_barangkeluar();
    ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">shopping_cart</i>
            </div>
            <div class="content">
                <div class="text">DATA BARANG</div>
                <h6 class="text-white"><?= (isset($ds1)) ? number_format($ds1) : '0' ?></h6>
                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="material-icons">input</i>
            </div>
            <div class="content">
                <div class="text">BARANG MASUK</div>
                <h6 class="text-white"><?= (isset($ds2['jml_barang'])) ? number_format($ds2['jml_barang']) : '0' ?></h6>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">new_releases</i>
            </div>
            <div class="content">
                <div class="text">BARANG KELUAR</div>
                <h6 class="text-white"><?= (isset($ds3['jml_barang_keluar'])) ? number_format($ds3['jml_barang_keluar']) : '0' ?></h6>
                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</div>