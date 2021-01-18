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
                                    Data User
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
                                                    <th>Nama User</th>
                                                    <th>Umur</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>alamat</th>
                                                    <th>No Telepon</th>
                                                </tr>
                                            </thead>
                                            <tbody align="center">
                                            <?php 
                                            $no = 1;
                                            foreach ($user as $data_user): ?> 
                                                <tr>
                                                     <td><?php echo $no++ ?></td>
                                                    <td>
                                                        <?php echo $data_user->nama_user ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data_user->umur ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data_user->jenis_kelamin ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data_user->alamat ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data_user->no_telp ?>
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