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
                                    <i class="fa fa-user"></i>
                                </div>
                                <div>
                                    User
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
                                    Detail Data User
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Nama : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Elsa Manora Ramadania</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Jenis Kelamin : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Alamat :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Jember</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Usia : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>20 Tahun</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Nomor Telepon : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>087678987678</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- button -->
                                    <!-- <a href="" class=" btn btn-primary btn-sm float-left" style="margin-bottom:10px;"></i> Tambah</a> -->
                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="mb-0 table table-striped">
                                            <thead align="center">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Gejala Yang Dialami</th>
                                                    <th>Gejala Yang Dialami</th>
                                                    <th>Jawaban Konsultasi</th>
                                                </tr>
                                            </thead>
                                            <tbody align="center"> 
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        G01                                                   
                                                    </td>
                                                    <td>
                                                        Demam 
                                                    </td>
                                                    <td>
                                                        Ya, saya sangat demam
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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