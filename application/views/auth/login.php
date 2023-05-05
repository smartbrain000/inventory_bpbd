<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Informasi Manajemen Logistik BPBD Majalengka</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url('AdminBSBMaterialDesign/') ?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/animate-css/animate.css" rel="stylesheet" />
    <script src="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <!-- Custom Css -->
    <link href="<?= base_url('AdminBSBMaterialDesign/') ?>css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?= base_url('auth') ?>">

                    <!-- <?= $this->session->flashdata('message'); ?> -->

                    <div class="image" style="margin-bottom: 5%;">
                        <img class="m-l-125" src="<?= base_url() ?>assets/images/logo.png" width="65" height="65" alt="Login" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"> person </i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"> lock </i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 text-center">
                            <button class="btn btn-block bg-blue waves-effect" type="submit"> SIGN IN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Jquery Core Js-->

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url('AdminBSBMaterialDesign/') ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('AdminBSBMaterialDesign/') ?>js/pages/examples/sign-in.js"></script>
    <?php if (isset($_SESSION['notifikasi'])) { ?>
        <script type="text/javascript">
            toastr.options.closeButton = true;
            toastr.<?= $_SESSION['warna'] ?>('<?= $_SESSION['judul'] ?>',
                '<?= $_SESSION['pesan'] ?> ');
        </script>
    <?php } ?>

</body>

</html>