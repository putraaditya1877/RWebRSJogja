<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo APP_NAME ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <script src="<?= base_url('assets/'); ?>js/plugin/webfont/webfont.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fonts.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/demo.css">
    <?php if (isset($style)) echo $style; ?>
</head>

<body>

    <?php if (isset($contents)) echo $contents; ?>

</body>
<script src="<?= base_url('assets/'); ?>js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('assets/'); ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets/'); ?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="<?= base_url('assets/'); ?>js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url('assets/'); ?>js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url('assets/'); ?>js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/'); ?>js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url('assets/'); ?>js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url('assets/'); ?>js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url('assets/'); ?>js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url('assets/'); ?>js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url('assets/'); ?>js/setting-demo.js"></script>
<?php if (isset($script)) echo $script; ?>

</html>