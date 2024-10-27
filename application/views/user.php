<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar User</title>
    <link rel="stylesheet" href="<?= base_url('assets/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/template/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
</head>
<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2 d-flex justify-content-end mr-auto">
                    <div class="ml-auto">
                        <a href="<?= base_url('user/add'); ?>" class="btn btn-success">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar data User</h3>
                            </div>
                            <div class="card-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($users)): ?>
                                            <?php foreach ($users as $key => $user): ?>
                                                <tr>
                                                    <td><?= $key + 1; ?></td>
                                                    <td><?= $user->nama; ?></td>
                                                    <td><?= $user->username; ?></td>
                                                    <td><?= $user->email; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="4">Data tidak tersedia</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Custom JS -->
    <script src="<?= base_url('assets/template/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/template/plugins/select2/js/select2.full.min.js') ?>"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2({
                theme: 'bootstrap4'
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>
</body>
</html>
