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
                                    <i class="fa fa-book-medical"></i>
                                </div>
                                <div>
                                    Pengetahuan
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
                                    Edit Pengetahuan
                                </div>
                                <div class="card-body">
                                    <!-- Form -->
                                    <form name="tambah_pengetahuan" method="POST" action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Kode Penyakit</label>
                                                <select name="nama_penyakit" id="" class="form-control form-control-sm" required>
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($penyakit as $key => $value) { ?>
                                                        <option value="<?= $value->nama_penyakit ?>" <?php if(strtoupper($value->nama_penyakit) == strtoupper($pengetahuan['nama_penyakit'])) echo "selected";?>><?= $value->nama_penyakit ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Kode Gejala</label>
                                                <select name="nama_gejala" id="" class="form-control form-control-sm" required>
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($gejala as $key => $value) { ?>
                                                        <option value="<?= $value->nama_gejala ?>" <?php if(strtoupper($value->nama_gejala) == strtoupper($pengetahuan['nama_gejala'])) echo "selected";?>><?= $value->nama_gejala ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="" class="pull-left">Kode Pengetahuan</label>
                                                    <input type="text" value="<?php echo $pengetahuan['kode_pengetahuan'] ?>" name="kode_pengetahuan" class="form-control form-control-sm" placeholder="Masukkan Kode Pengetahuan" required readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group-inner">
                                                    <label for="" class="pull-left">MB</label>
                                                    <input type="text" value="<?php echo $pengetahuan['nilai_cf_pakar'] ?>" name="mb" class="form-control form-control-sm" placeholder="Masukkan MB" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="<?php echo base_url() . 'index.php/admin/pengetahuan' ?>" class=" btn btn-danger btn-sm"></i>Batal</a>
                                                <!--<button type="reset" class="btn btn-danger btn-sm">Reset</button>-->
                                                <button type="submit" name="edit_pengetahuan" id="simpan_pengetahuan" value="" class="btn btn-sm btn-primary mr-1">Simpan</button>
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