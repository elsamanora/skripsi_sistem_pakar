<!doctype html>
<html lang="en">
<!-- Head -->

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Navbar -->
        <div class="app-header header-shadow">
            <?php $this->load->view("admin/_partials/navbar.php") ?>
        </div>

        <!-- Pengaturan Tema Warna Aplikasi -->
        <div class="ui-theme-settings">
            <?php $this->load->view("admin/_partials/tema.php") ?>
        </div>

        <!-- Sidebar-->
        <div class="app-main">
            <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <!-- Main breadcrumb -->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa fa-user fa-lg"></i>
                                </div>
                                <div>
                                    Admin
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Isi -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Datatable -->
                                <div class="card-header">
                                    Data Admin 
                                </div>
                                <!-- Alert Success -->
                                <div class="card-body">
                                <?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
				                <?php endif; ?>
                                <!-- End Alert -->
                                    <!-- Form -->
                                    <form name="tambah_admin" method="POST" action="<?php echo site_url('admin/admin/tambah') ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="username" class="pull-left">Username</label>
                                                    <input type="text" name="username" class="form-control form-control-sm <?php echo form_error('username') ? 'is-invalid':''?>" placeholder="Masukkan Username" required>
                                                    <div class="invalid-feedback">
									                    <?php echo form_error('Username') ?>
								                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="password" class="pull-left">Password</label>
                                                    <input type="text" name="password" class="form-control form-control-sm <?php echo form_error('password') ? 'is-invalid':''?>" placeholder="Masukkan Password" required>
                                                </div>
                                                <div class="invalid-feedback">
									                    <?php echo form_error('password') ?>
								                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="<?php echo base_url() . 'index.php/admin/admin' ?>" class=" btn btn-danger btn-sm"></i>Batal</a>
                                                <button type="submit" name="" id="" value="tambah" class="btn btn-sm btn-primary mr-1">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
    </div>

    <!-- Js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/scripts/main.js"></script>
</body>

</html>