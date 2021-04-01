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
                                    <i class="fa fa-sliders-h"></i>
                                </div>
                                <div>
                                    Aturan
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
                                    Edit Aturan
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
                                    <form name="edit_aturan" method="POST" action="">
                                    <input type="hidden" name="id_aturan" value="<?php echo $aturan->id_aturan?>" />
                                            <div class="col-md-3">
                                                <div class="form-group-inner">
                                                    <label for="kode_aturan" class="pull-left">Kode Aturaa</label>
                                                    <input type="text" name="kode_aturan" class="form-control form-control-sm <?php echo form_error('kode_aturan') ? 'is-invalid':''?>" placeholder="Masukkan Kode Aturan" value = "<?php echo $aturan->kode_aturan ?>" readonly>
                                                    <div class="invalid-feedback">
									                    <?php echo form_error('kode_aturan') ?>
								                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group-inner">
                                                    <label for="" class="pull-left">Nama Aturan</label>
                                                    <input type="text" name="nama_aturan" class="form-control form-control-sm <?php echo form_error('nama_aturan') ? 'is-invalid':''?>" placeholder="Masukkan Nama Aturan" value = "<?php echo $aturan ->nama_aturan?>" required>
                                                </div>
                                                <div class="invalid-feedback">
									                    <?php echo form_error('nama_aturan') ?>
								                </div>
                                            </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="<?php echo base_url() . 'index.php/admin/aturan' ?>" class=" btn btn-danger btn-sm"></i>Batal</a>
                                                <!--<button type="reset" class="btn btn-danger btn-sm">Reset</button>-->
                                                <button type="submit" name="edit_aturan" id="simpan_aturan" value="" class="btn btn-sm btn-primary mr-1">Simpan</button>
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