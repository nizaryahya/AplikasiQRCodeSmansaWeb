<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("admin/_partials/head_form.php") ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Kegiatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Kegiatan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Kegiatan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php foreach($kegiatan as $k): ?>
                            <form action="<?= site_url('kegiatan/update/') ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id" placeholder="id" value="<?= $k->id_kegiatan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputKegiatan">Kegiatan</label>
                                        <input type="text" class="form-control" name="nama" placeholder="nama kegiatan" value="<?= $k->nama_kegiatan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputJenisKegiatan">Jenis Kegiatan</label>
                                        <input type="text" class="form-control" name="jns" placeholder="jenis kegiatan" value="<?= $k->jns_kegiatan ?>">
                                    </div>
                                   
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <a href="<?= site_url('Kegiatan') ?>" class="btn btn-secondary" title="back"><i class="fas fa-reply"></i></a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <?php endforeach; ?>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>


<!-- jQuery -->
<?php $this->load->view("admin/_partials/js_form.php") ?>

</body>
</html>