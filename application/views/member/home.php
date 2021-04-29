<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $this->load->view("member/_partials/head.php") ?>
</head>

<body>
    <!-- Preloader Start -->
    <?php $this->load->view("member/_partials/loader_page.php") ?>
    <!-- Preloader Start -->
    <header>
        <?php $this->load->view("member/_partials/navbar.php") ?>
    </header>
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <h1>Sistem Pakar
                                        Penyakit Demam Berdarah
                                    </h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <!-- <a href="industries.html" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Learn More</a> -->
                                        <a href="<?= base_url() . 'member/Form_data_user' ?>" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Mulai Konsultasi</a>
                                        <!-- <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Mulai Konsultasi</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End -->
    </main>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/vendor/jquery-1.12.4.min.js"></script>
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