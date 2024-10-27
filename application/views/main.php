<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Adi Surya Sempurna</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/template/dist/img/avatar5.png'); ?>">
    
    <!-- Custom CSS -->
    <?php $this->load->view('layouts/custom/custom-css'); ?>
    <?php if (isset($custom_css)) echo $custom_css; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('layouts/wrapper/navbar'); ?>

        <!-- Sidebar -->
        <?php $this->load->view('layouts/wrapper/sidebar'); ?>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <?php if (isset($content)) echo $content; ?>
        </div>

        <!-- Footer -->
        <?php $this->load->view('layouts/wrapper/footer'); ?>
    </div>

    <!-- Custom JS -->
    <?php $this->load->view('layouts/custom/custom-js'); ?>
    <?php if (isset($custom_js)) echo $custom_js; ?>
</body>
</html>
