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
                                    <i class="fas fa-question"></i>
                                </div>
                                <div>
                                    Pertanyaan
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
                                    Tambah Pertanyaan
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
                                    <form name="tambah_pertanyaan" method="POST" action="<?php echo site_url('admin/pertanyaan/tambah') ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="kode_pertanyaan" class="pull-left">Kode Pertanyaan</label>
                                                    <input type="text" name="kode_pertanyaan" class="form-control form-control-sm <?php echo form_error('kode_pertanyaan') ? 'is-invalid':''?>" placeholder="Masukkan Kode Pertanyaan" required>
                                                    <div class="invalid-feedback">
									                    <?php echo form_error('kode_pertanyaan') ?>
								                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="" class="pull-left">Pertanyaan</label>
                                                    <input type="text" name="nama_pertanyaan" class="form-control form-control-sm <?php echo form_error('nama_pertanyaan') ? 'is-invalid':''?>" placeholder="Masukkan Pertanyaan" required>
                                                </div>
                                                <div class="invalid-feedback">
									                    <?php echo form_error('nama_pertanyaan') ?>
								                </div>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="jawaban_sangat_yakin" class="pull-left">Jawaban Sangat Yakin (1) </label>
                                                    <input type="text" name="jawaban_sangat_yakin" class="form-control form-control-sm <?php echo form_error('jawaban_sangat_yakin') ? 'is-invalid':''?>" placeholder="Masukkan Jawaban Sangat Yakin" required>
                                                    <div class="invalid-feedback">
									                    <?php echo form_error('jawaban_sangat_yakin') ?>
								                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="jawaban_yakin" class="pull-left">Jawaban Yakin (0,8)</label>
                                                    <input type="text" name="jawaban_yakin" class="form-control form-control-sm <?php echo form_error('jawaban_yakin') ? 'is-invalid':''?>" placeholder="Masukkan Jawaban Yakin" required>
                                                </div>
                                                <div class="invalid-feedback">
									                    <?php echo form_error('jawaban_yakin') ?>
								                </div>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="jawaban_cukup_yakin" class="pull-left">Jawaban Cukup Yakin (0,6)</label>
                                                    <input type="text" name="jawaban_cukup_yakin" class="form-control form-control-sm <?php echo form_error('jawaban_cukup_yakin') ? 'is-invalid':''?>" placeholder="Masukkan Jawaban Cukup Yakin" required>
                                                    <div class="invalid-feedback">
									                    <?php echo form_error('jawaban_cukup_yakin') ?>
								                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="jawaban_sedikit_yakin" class="pull-left">Jawaban Sedikit Yakin (0,4)</label>
                                                    <input type="text" name="jawaban_sedikit_yakin" class="form-control form-control-sm <?php echo form_error('jawaban_sedikit_yakin') ? 'is-invalid':''?>" placeholder="Masukkan Jawaban Sedikit Yakin" required>
                                                </div>
                                                <div class="invalid-feedback">
									                    <?php echo form_error('jawaban_sedikit_yakin') ?>
								                </div>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="jawaban_kurang_yakin" class="pull-left">Jawaban Kurang Yakin (0,2)</label>
                                                    <input type="text" name="jawaban_kurang_yakin" class="form-control form-control-sm <?php echo form_error('jawaban_kurang_yakin') ? 'is-invalid':''?>" placeholder="Masukkan Jawaban Kurang Yakin" required>
                                                    <div class="invalid-feedback">
									                    <?php echo form_error('jawaban_kurang_yakin') ?>
								                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="jawaban_tidak_yakin" class="pull-left">Jawaban Tidak Yakin (0)</label>
                                                    <input type="text" name="jawaban_tidak_yakin" class="form-control form-control-sm <?php echo form_error('jawaban_tidak_yakin') ? 'is-invalid':''?>" placeholder="Masukkan Jawaban Tidak Yakin   " required>
                                                </div>
                                                <div class="invalid-feedback">
									                    <?php echo form_error('nama_pertanyaan') ?>
								                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="<?php echo base_url() . 'index.php/admin/pertanyaan' ?>" class=" btn btn-danger btn-sm"></i>Batal</a>
                                                <!--<button type="reset" class="btn btn-danger btn-sm">Reset</button>-->
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