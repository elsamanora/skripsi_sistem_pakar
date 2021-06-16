<?php $id_user = $this->uri->segment(4); 
$user = $this->M_user->getDetail($id_user)->row_array();?>

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
                                            <label><?php echo $user['nama_user']?></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Jenis Kelamin : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><?php echo $user['jenis_kelamin']?></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Alamat :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><?php echo $user['alamat']?></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Usia : </label>
                                        </div>
                                        <div class="col-md-6">
                                              <label><?php echo $user['umur']?> Tahun</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Nomor Telepon : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><?php echo $user['no_telp']?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                    <div>
                        <label><b>Perhitungan dilakukan disetiap gejala yang dialami pd masing2 rule : </b></label>
                    </div>
                </div>
                <?php 
                if($this->ModelPerhitungan->get_cek_kuisioner($id_user)->num_rows() < 33){?>
                    <h3>Belum Mengisi Kuisioner</h3>
                <?php }else{ ?>
                
                <div class="row">
                    <div class="col-4">
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                            <th>R1</th>
                            <th>User</th>
                            <th>Pakar</th>
                            <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $arDialami = array();?>
                            <?php $arR1 = array();
                             foreach($this->ModelPerhitungan->get_pengetahuan("DEMAM BERDARAH")->result() as $DB) { ?>
                                <tr>
                                    <td>
                                        <?php 
                                            $gejala = $this->ModelPerhitungan->get_nilai_user($id_user, $DB->kode_pengetahuan)->row_array();
                                            @$r = $gejala["nilai"] * $DB->nilai_cf_pakar;
                                            array_push($arR1, $r);
                                            echo $gejala["kode_gejala"];
                                            if (@$r > 0) {
                                                array_push($arDialami, $gejala["kode_gejala"]);
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $gejala["nilai"];?></td>
                                    <td><?php echo $DB->nilai_cf_pakar;?></td>
                                    <td><?php echo @$r;?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-4">
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                            <th>R2</th>
                            <th>User</th>
                            <th>Pakar</th>
                            <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $arR2 = array();
                            foreach($this->ModelPerhitungan->get_pengetahuan("MALARIA")->result() as $DB) { ?>
                                <tr>
                                    <td>
                                        <?php 
                                            $gejala = $this->ModelPerhitungan->get_nilai_user($id_user, $DB->kode_pengetahuan)->row_array();
                                            @$r = $gejala["nilai"] * $DB->nilai_cf_pakar;
                                            array_push($arR2, $r);
                                            echo $gejala["kode_gejala"];
                                            if (@$r > 0) {
                                                array_push($arDialami, $gejala["kode_gejala"]);
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $gejala["nilai"];?></td>
                                    <td><?php echo $DB->nilai_cf_pakar;?></td>
                                    <td><?php echo @$r;?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-4">
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                            <th>R3</th>
                            <th>User</th>
                            <th>Pakar</th>
                            <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $arR3 = array();
                            foreach($this->ModelPerhitungan->get_pengetahuan("THYPOID")->result() as $DB) { ?>
                                <tr>
                                <td>
                                        <?php 
                                            $gejala = $this->ModelPerhitungan->get_nilai_user($id_user, $DB->kode_pengetahuan)->row_array();
                                            @$r = $gejala["nilai"] * $DB->nilai_cf_pakar;
                                            array_push($arR3, $r);
                                            echo $gejala["kode_gejala"];
                                            if (@$r > 0) {
                                                array_push($arDialami, $gejala["kode_gejala"]);
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $gejala["nilai"];?></td>
                                    <td><?php echo $DB->nilai_cf_pakar;?></td>
                                    <td><?php echo @$r;?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-4">
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                            <th colspan="2">CFC(R1)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cfcr1 = $arR1[0]+$arR1[1] * (1-$arR1[0]); ?>
                            <tr>
                                <td><?php echo round($cfcr1, 2);?></td>
                            </tr>
                            <?php 
                                for ($i=2; $i < sizeof($arR1); $i++) { 
                                    $cfcr = $cfcr1 + $arR1[$i] * (1-$cfcr1);
                                    $cfcr1 = $cfcr; ?>
                                <tr>
                                    <td><?php echo round($cfcr1, 2);?></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-4">
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                            <th colspan="2">CFC(R2)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cfcr2 = $arR2[0]+$arR2[1] * (1-$arR2[0]); ?>
                            <tr>
                                <td><?php echo round($cfcr2,2);?></td>
                            </tr>
                            <?php 
                                for ($i=2; $i < sizeof($arR2); $i++) { 
                                    $cfcr = $cfcr2 + $arR2[$i] * (1-$cfcr2);
                                    $cfcr2 = $cfcr; ?>
                                <tr>
                                    <td><?php echo round($cfcr2, 2);?></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-4">
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                            <th colspan="2">CFC(R3)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cfcr3 = $arR3[0]+$arR3[1] * (1-$arR3[0]); ?>
                            <tr>
                                <td><?php echo round($cfcr3, 2);?></td>
                            </tr>
                            <?php 
                                for ($i=2; $i < sizeof($arR3); $i++) { 
                                    $cfcr = $cfcr3 + $arR3[$i] * (1-$cfcr3);
                                    $cfcr3 = $cfcr; ?>
                                <tr>
                                    <td><?php echo round($cfcr3, 2);?></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div><br>

                <div class="row">
                    <div>
                        <label><b>Gejala yang dialami : </b></label>
                    </div>
                </div>
                <div class="row">
                <table class="table table-striped">
                    <thead class="table-danger">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Gejala</th>
                        <th scope="col">Nama Gejala</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0; $i < sizeof($arDialami); $i++) { ?>
                        <tr>
                        <th scope="row"><?php echo $i + 1;?></th>
                        <td><?php echo $arDialami[$i]; ?></td>
                        <td><?php echo $this->ModelPerhitungan->get_gejala($arDialami[$i])->row_array()["nama_gejala"]; ?></td>
                        <tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div><br>
                <!-- End gejala yang dialami -->

                <!-- Start Hasil Konsultasi -->
                <div class="row">
                    <div>
                        <label><b>Hasil Konsultasi : </b></label>
                    </div>
                </div>
                <div class="row">
                <table class="table table-striped danger">
                    <thead class="table-danger">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Penyakit</th>
                        <th scope="col">Nama Penyakit</th>
                        <th scope="col">Nilai Kepastian CF</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    // if($cfcr1 >= $cfcr2 && $cfcr1 >= $cfcr3){ 
                        ?>
                        <tr>
                        <th scope="row">1</th>
                        <td>P01</td>
                        <td>Demam Berdarah</td>
                        <td><?php echo round($cfcr1 * 100, 2);?>%</td>
                    <?php 
                    // }elseif($cfcr2 >= $cfcr3 && $cfcr2 >= $cfcr1){ 
                    ?>
                        <tr>
                        <th scope="row">1</th>
                        <td>P02</td>
                        <td>Malaria</td>
                        <td><?php echo round($cfcr2 * 100,2);?>%</td>
                    <?php 
                    // }else{ 
                        ?>
                        <tr>
                        <th scope="row">1</th>
                        <td>P03</td>
                        <td>Thypoid</td>
                        <td><?php echo round($cfcr3 * 100, 2);?>%</td>
                    <?php 
                    // } 
                    ?>
                    </tbody>
                </table>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }; ?>
                <!-- footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
    </div>

    <!-- Js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/scripts/main.js"></script>
</body>

</html>