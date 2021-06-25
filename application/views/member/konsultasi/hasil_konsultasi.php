<?php
$id_user = $_SESSION['id_user'];
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <?php $this->load->view("member/_partials/head.php") ?>
  <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/vendor/jquery-1.12.4.min.js"></script>
</head>

<body>
  <!-- Preloader Start -->
  <?php $this->load->view("member/_partials/loader_page.php") ?>
  <!-- Preloader Start -->
  <header>
    <?php $this->load->view("member/_partials/navbar.php") ?>
  </header>
  <main>
    <div class="slider-area ">
      <div class="slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap">
                <h2>Hasil Konsultasi</h2>
                <nav aria-label="breadcrumb ">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Home' ?>">Home</a></li>
                    <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Konsultasi' ?>">Hasil Konsultasi Penyakit</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->
    <!-- About Me Start -->
    <br><br>
    <div class="about-me">
      <div class="container">
        <div class="row">
          <div>
            <label><b>Perhitungan dilakukan disetiap gejala yang dialami pd masing2 rule : </b></label>
          </div>
        </div>
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
            <?php
            $dataPenyakit = array($cfcr1, $cfcr2, $cfcr3);
            $namaPenyakit = array('Demam Berdarah', 'Malaria', 'Thypoid');
            $temp = 0;
            $tempnama = "";
            for ($i=0; $i < sizeof($dataPenyakit); $i++) {
              $temp = $dataPenyakit[$i];
              for ($j=$i; $j < sizeof($dataPenyakit); $j++) {
                if ($dataPenyakit[$i] < $dataPenyakit[$j]) {
                  $temp = $dataPenyakit[$i];
                  $dataPenyakit[$i] = $dataPenyakit[$j];
                  $dataPenyakit[$j] = $temp;
                  $tempnama = $namaPenyakit[$i];
                  $namaPenyakit[$i] = $namaPenyakit[$j];
                  $namaPenyakit[$j] = $tempnama;
                }
              }
            }
            ?>
            <div class="row">
              <label><b>Berdasarkan hasil konsultasi dengan melakukan pemillihan gejala yang sedang dialami, maka anda di deteksi dini mengalami penyakit :</b></label>
              <label><b><h4><?php echo $namaPenyakit[0] ?> </h4></b></label>
            </div>
            
            <div class="row">
            <label><b>Dengan persentase keyakinan sebesar : <h4><?php echo round($dataPenyakit[0] * 100, 2) ?> %</b></label><br>
            </div>

            <br>

            <!-- Start Hasil Konsultasi -->
            <div class="row">
              <div>
                <label>Kemungkinan lain penyakit yang dialami  :</label>
              </div>
            </div>
            <div class="row">
              <table class="table table-striped danger">
                <thead class="table-danger">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Penyakit</th>
                    <th scope="col">Persentase Kepastian</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // if($cfcr1 >= $cfcr2 && $cfcr1 >= $cfcr3){
                  ?>
                  <tr>
                    <th scope="row">2</th>
                    <td><?php echo $namaPenyakit[1] ?></td>
                    <td><?php echo round($dataPenyakit[1] * 100, 2);?>%</td>
                    <?php
                    // }elseif($cfcr2 >= $cfcr3 && $cfcr2 >= $cfcr1){
                    ?>
                    <tr>
                      <th scope="row">3</th>
                      <td><?php echo $namaPenyakit[2] ?></td>
                      <td><?php echo round($dataPenyakit[2] * 100,2);?>%</td>
                      <?php
                      // }else{
                      ?>
                      </tbody>
                    </table>
                  </div><br>
                  <!-- End Hasil Konstultasi-->


                  <!-- saran -->
                  <div class="row">
                    <label><b>Saran : Kunjungi dokter untuk melakukan pemeriksaan lebih lanjut </b></label>
                  </div>
                </div>
              </div>
            </main>
            <br>
            <footer>
              <!-- Footer Start-->
              <?php $this->load->view("member/_partials/footer.php") ?>
              <!-- Footer End-->
            </footer>
            <!-- Scroll Up -->
            <div id="back-top">
              <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
            </div>

            <!-- JS here -->
            <!-- All JS Custom Plugins Link Here here -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/popper.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/bootstrap.min.js"></script>

            <!-- Jquery Mobile Menu -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/owl.carousel.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/slick.min.js"></script>

            <!-- One Page, Animated-HeadLin -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/wow.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/animated.headline.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.magnific-popup.js"></script>


            <!-- Nice-select, sticky -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.nice-select.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.sticky.js"></script>

            <!-- contact js -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/contact.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.form.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/mail-script.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/jquery.ajaxchimp.min.js"></script>

            <!-- Jquery Plugins, main Jquery -->
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/plugins.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/main.js"></script>

          </body>

          </html>
