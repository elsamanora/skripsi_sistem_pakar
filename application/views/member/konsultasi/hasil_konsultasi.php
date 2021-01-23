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
                        <tr>
                        <th scope="row">1</th>
                        <td>G01</td>
                        <td>Panas tinggi mendadak dengan suhu 39 derajat</td>
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
                        <th scope="col">NIlai Kepastian CF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>P01</td>
                        <td>Demam Berdarah</td>
                        <td>90%</td>
                    </tbody>
                </table>
                </div><br>
                <!-- End Hasil Konstultasi-->

                <!-- Start Penanganan -->
                <div class="row">
                    <div>
                        <label><b>Penanganan : </b></label>
                    </div>
                </div>
                <div class="row">
                <table class="table table-striped danger">
                    <thead class="table-danger"> 
                        <tr>
                        <th>Penanganan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Kompres dengan air hangat, lalu apabila panas semakin tinggi lekas lakukan tes  sampel darah untuk memastikan penyakit
                            yang di derita </td>
                    </tbody>
                </table>
                </div><br>
                <!-- Hasil Penanganan-->
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