<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url('dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/dashboard'); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/barang'); ?>" class="nav-link">Barang</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-warning btn-sm" href="<?= base_url('/logout'); ?>" role="button">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('/dashboard') ?>" class="brand-link">
                <img src="<?= base_url('dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Toko Sepeda Kembar</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <?php

                        echo session()->get('userdata')["nama"];

                        ?>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard'); ?>" class="nav-link <?= $aktif; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?= $aktif2; ?>">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/barang'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/databarangkeluar') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Barang Keluar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <?= $this->renderSection('content') ?>


        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.js'); ?>"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?= base_url('plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
    <script src="<?= base_url('plugins/raphael/raphael.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('plugins/chart.js/Chart.min.js'); ?>"></script>

    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?= base_url('dist/js/demo.js'); ?>"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?= base_url('dist/js/pages/dashboard2.js'); ?>"></script> -->

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

    <?php if (@$ajak) : ?>
        <script type="text/javascript">
            $(document).ready(function() {

                $("#kode_barang").change(function() {
                    var kode = $(this).val();
                    $.ajax({
                        url: "<?= base_url('tampilKode/') ?>",
                        method: "POST",
                        data: {
                            kode: kode,
                        },
                        dataType: 'json',
                        success: function(data) {
                            var obj = data.barang
                            // $("#kolBarang").css('display', 'inline')
                            // $("#nama_barang").val(obj.nama_barang)
                            $("input[name='nama']").val(obj.nama_barang);
                            $("input[name='harga']").val(obj.harga);
                            $("input[name='merk']").val(obj.merk);
                            $("input[name='supplier']").val(obj.supplier);
                            $("input[name='jenis']").val(obj.jenis_barang);
                            // $("input[name='merk']").val(obj.merk);
                            $("#juml").html(`
                        <div class="form-group row">
                                    <label for="stok" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="number" placeholder="Max ` + obj.stok + `" name="stok" class="form-control" max="` + obj.stok + `">
                                    </div>
                                </div>
                        `);

                        }
                    })
                })

            });
        </script>
    <?php endif; ?>
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'right'
            }, function(start, end, label) {
                $("#daterange").change(function() {
                    var tanggal = $(this).val();
                    $.ajax({
                        url: "<?= base_url('tampilKode/') ?>",
                        method: "POST",
                        data: {
                            tanggal: daterange,
                        },
                        dataType: 'json',
                        success: function(data) {
                            var obj = data.barang
                            // $("#kolBarang").css('display', 'inline')
                            // $("#nama_barang").val(obj.nama_barang)
                            $("input[name='nama']").val(obj.nama_barang);
                            $("input[name='harga']").val(obj.harga);
                            $("input[name='merk']").val(obj.merk);
                            $("input[name='supplier']").val(obj.supplier);
                            $("input[name='jenis']").val(obj.jenis_barang);
                            // $("input[name='merk']").val(obj.merk);
                            $("#juml").html(`
                        <div class="form-group row">
                                    <label for="stok" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="number" placeholder="Max ` + obj.stok + `" name="stok" class="form-control" max="` + obj.stok + `">
                                    </div>
                                </div>
                        `);

                        }
                    })
                })
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>