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
                                    <i class="fa fa-file-medical-alt"></i>
                                </div>
                                <div>
                                    Gejala
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
                                    Data Gejala
                                </div>
                                <div class="card-body">
                                    <!-- button -->
                                    <a href="<?php echo base_url() . 'index.php/admin/gejala/tambah' ?>" class=" btn btn-primary btn-sm float-left" style="margin-bottom:10px;"></i> Tambah</a>
                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="mb-0 table table-striped">
                                            <thead align="center">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Gejala</th>
                                                    <th>Nama Gejala</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody align="center">
                                            <?php 
                                            $no = 1;
                                            foreach ($gejala as $data_gejala): ?> 
                                                <tr>
                                                     <td><?php echo $no++ ?></td>
                                                    <td>
                                                        <?php echo $data_gejala->kode_gejala ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data_gejala->nama_gejala ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/admin/gejala/edit'?>/<?=$data_gejala->id_gejala?>" class=" btn btn-info" style="margin-bottom:10px;"></i> Edit</a>
                                                        <a onclick="return confirm('Apakah anda yakin ?');" href="<?php echo base_url() . 'index.php/admin/Gejala/delete'?>/<?=$data_gejala->id_gejala?>" class=" btn btn-danger" style="margin-bottom:10px;"></i> Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
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