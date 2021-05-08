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
                                <h2>Konsultasi Penyakit</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Home' ?>">Home</a></li>
                                        <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Form_data_user' ?>">Konsultasi Penyakit</a></li>
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
        <form action="<?php echo base_url()?>member/form_data_user/insert_jawaban" method="post">
            <div class="about-me">
                <div class="container">
                    <div class="row">
                        <div>
                            <label><b>Pilih Gejala Sesuai Dengan Tingkat Keyakinan Yang Dirasakan :</b></label>
                        </div>
                    </div><br>
                    <?php $no=1; foreach ($this->M_Pertanyaan->get_pertanyaan()->result() as $value){ ?>
                        <div class="row" id="gelaja1">
                        <div>
                            <label><?php echo $no++;?>. <?php echo $value->nama_pertanyaan;?></label><br>
                                <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="1">
                                <label><?php echo $value->jawaban_sangat_yakin;?></label>
                                <br>
                                <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.8">
                                <label><?php echo $value->jawaban_yakin;?></label>
                                <br>
                                <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.6">
                                <label><?php echo $value->jawaban_cukup_yakin;?></label>
                                <br>
                                <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.4">
                                <label><?php echo $value->jawaban_sedikit_yakin;?></label>
                                <br>
                                <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.2">
                                <label><?php echo $value->jawaban_kurang_yakin;?></label>
                                <br>
                                <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0">
                                <label><?php echo $value->jawaban_tidak_yakin;?></label>
                                <br>
                                </div>
                        </div><br>
                    <?php } ?>
                    <div>
                        <button type="submit" class="btn btn-info" style="margin-bottom:10px;"></i>Selesai</button>
                    </div>
                </div>
            </div>
        </form>
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