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
                                        <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Informasi_penyakit' ?>">Konsultasi Penyakit</a></li>
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
                        <label><b>Pilih Gejala Sesuai Dengan Tingkat Keyakinan Yang Dirasakan :</b></label>
                    </div>
                </div><br>
                <div class="row" id="gelaja1">
                    <div>
                        <label>1. Apakah anda mengalami panas tinggi mendadak ?</label><br>
                            <input type="radio" id="tiga_enam" name="gender" value="38 derajat">
                            <label>36 derajat</label><br>
                            <input type="radio" onclick="rowHide()" id="37" name="gender" value="female">
                            <label>37 derajar</label><br>
                            <input type="radio" onclick="rowHide()" id="38" name="gender" value="other">
                            <label>38 derajat</label><br>
                            <input type="radio" onclick="rowHide()" id="39" name="gender" value="other">
                            <label>39 derajat</label><br>
                            <input type="radio" onclick="rowHide()" id="35" name="gender" value="other">
                            <label>35 derajat</label>
                    </div>
                </div><br>
                <div class="row" id="gejala2" hidden="">
                    <div>
                        <label>1. Apakah anda mengalami panas tinggi mendadak ?</label><br>
                            <input type="radio" id="gejala1" name="gender" value="38 derajat">
                            <label>36 derajat</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label>37 derajar</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label>38 derajat</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label>39 derajat</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label>35 derajat</label>
                    </div>
                </div><br>
                <div class="row" hidden="" id="gejala3">
                    <div>
                        <label>1. Apakah anda mengalami panas tinggi mendadak ?</label><br>
                            <input type="radio" id="gejala1" name="gender" value="38 derajat">
                            <label>36 derajat</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label>37 derajar</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label>38 derajat</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label>39 derajat</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label>35 derajat</label>
                    </div>
                </div>
                <script type="text/javascript">
                    // $(document).ready(function() {

                    //     var gejala1 = $('#gejala1');
                    //     var gejala2 = $('#gejala2');
                        
                    //     var tiga_enam = $('#tiga_enam');
                    //     if(tiga_enam.checked){
                    //         console.log('TEST');
                    //         gejala2.removeAttr('hidden');
                    //     }else{
                    //         console.log('TOLOL');
                    //     }
                    // });
                    var gejala1 = $('#gejala1');
                        var gejala2 = $('#gejala2');
                        var tiga_enam = $('#tiga_enam');
                    $('#tiga_enam').click(function(event) {
                            gejala2.removeAttr('hidden');
                        });
                    // function rowHide() {
                        
                    //     var gejala1 = $('#gejala1');
                    //     var gejala2 = $('#gejala2');
                    //     var tiga_enam = $('#tiga_enam');
                    //     if(tiga_enam.checked){
                    //         console.log('TEST');
                    //         gejala2.removeAttr('hidden');
                    //     }else{
                    //         console.log('TOLOL');
                    //     }

                    // }

                </script>
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