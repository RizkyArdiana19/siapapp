<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>
<style>
    .main-navbar {
        background-color: red;
    }

    /* Gaya untuk menu utama di sidebar */
    .sidebar-menu li>a {
        color: inherit;
        /* Warna default */
        transition: color 0.3s ease;
        /* Transisi halus untuk perubahan warna */
    }

    /* Gaya untuk menu utama yang aktif dan saat di-hover */
    .sidebar-menu li.active>a,
    .sidebar-menu li>a:hover {
        color: red !important;
        /* Warna merah untuk teks aktif atau saat di-hover */
    }

    /* Gaya untuk submenu di dropdown */
    .sidebar-menu li .dropdown-menu li>a {
        color: inherit;
        /* Warna default */
        transition: color 0.3s ease;
        /* Transisi halus untuk perubahan warna */
    }

    /* Gaya untuk submenu yang aktif dan saat di-hover */
    .sidebar-menu li .dropdown-menu li.active>a,
    .sidebar-menu li .dropdown-menu li>a:hover {
        color: red !important;
        /* Warna merah untuk teks submenu aktif atau saat di-hover */
    }
</style>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            
            <!-- Navbar -->
             <?= $this->include('templates/navbar'); ?>

            <!-- Sidebar -->
            <?= $this->include('templates/sidebar'); ?>

            <!-- Main Content -->
            <?= $this->renderSection('page-content'); ?>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y'); ?></a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>/assets/modules/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/modules/popper.js"></script>
    <script src="<?= base_url(); ?>/assets/modules/tooltip.js"></script>
    <script src="<?= base_url(); ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>/assets/modules/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom.js"></script>
</body>

</html>