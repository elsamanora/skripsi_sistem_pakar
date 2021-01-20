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
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="hero-cap">
                                <h2>Form Data User</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Home' ?>">Home</a></li>
                                        <li class="breadcrumb-item"> <a href="<?= base_url() . 'index.php/member/Konsultasi' ?>">Form Data User</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- Form Start-->
            <br><br>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-me-img mb-10">
                        <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukan nama lengkap">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-me-caption">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                </div><br>  
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-me-img mb-10">
                        <label for="alamat">Alamat</label>
                            <textarea name="alamat" cols="20" rows="3" placeholder="Masukan Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-me-caption">
                        <label for="no_telp">No Telepon</label>
                            <input type="number" class="form-control" placeholder="Masukan No Telepon">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-me-img mb-10">
                        <label for="usia">Usia</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="number" class="form-control" placeholder="Masukan Usia">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Tahun</div>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary">Mulai Konsultasi</button>
                    </div>
                    
                </div>
            </div>
           
            <br><br>
        <!-- <div class="row">
            <div class="container-fluid">
                <form name="" method="" action="">
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                        </div>
                </form>
            </div>
        </div> -->
        
        <!-- Form End -->

        <!-- About Me Start -->
        <!-- <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-img mb-30">
                            
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-caption">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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