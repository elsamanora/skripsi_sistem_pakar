<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <?php $this->load->view("member/_partials/head.php") ?>
  <script type="text/javascript" src="<?php echo base_url(); ?>./assets/member/assets/js/vendor/jquery-1.12.4.min.js"></script>
</head>
<style>

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
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

    <form id="regForm" action="<?php echo base_url()?>member/form_data_user/insert_jawaban" method="post">
      <div class="row">
        <h2><p><b>Pilih Gejala Sesuai Dengan Tingkat Keyakinan Yang Dirasakan :</b></p></h2>
      </div>

      <!-- One "tab" for each step in the form: -->
      <div class="tab row">
        <?php $no=0; foreach ($this->M_Pertanyaan->get_pertanyaan()->result() as $value){
          $no++;
          if ($no <= 10) { ?>
            <?php echo $no;?>. <?php echo $value->nama_pertanyaan;?> <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="1" required>
            <label><?php echo $value->jawaban_sangat_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.8" required>
            <label><?php echo $value->jawaban_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.6" required>
            <label><?php echo $value->jawaban_cukup_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.4"required>
            <label><?php echo $value->jawaban_sedikit_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.2"required>
            <label><?php echo $value->jawaban_kurang_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0"required>
            <label><?php echo $value->jawaban_tidak_yakin;?></label>
            <br>
            <br>
          <?php }
        } ?>
      </div>
      <div class="tab row">
        <?php $no=0; foreach ($this->M_Pertanyaan->get_pertanyaan()->result() as $value){
          $no++;
          if ($no > 10 && $no <= 20) { ?>
            <?php echo $no;?>. <?php echo $value->nama_pertanyaan;?> <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="1" required>
            <label><?php echo $value->jawaban_sangat_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.8" required>
            <label><?php echo $value->jawaban_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.6" required>
            <label><?php echo $value->jawaban_cukup_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.4"required>
            <label><?php echo $value->jawaban_sedikit_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.2"required>
            <label><?php echo $value->jawaban_kurang_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0"required>
            <label><?php echo $value->jawaban_tidak_yakin;?></label>
            <br>
            <br>
          <?php }
        } ?>
      </div>
      <div class="tab row">
        <?php $no=0; foreach ($this->M_Pertanyaan->get_pertanyaan()->result() as $value){
          $no++;
          if ($no > 20) { ?>
            <?php echo $no;?>. <?php echo $value->nama_pertanyaan;?><br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="1" required>
            <label><?php echo $value->jawaban_sangat_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.8" required>
            <label><?php echo $value->jawaban_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.6" required>
            <label><?php echo $value->jawaban_cukup_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.4"required>
            <label><?php echo $value->jawaban_sedikit_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0.2"required>
            <label><?php echo $value->jawaban_kurang_yakin;?></label>
            <br>
            <input type="radio" name="jawaban<?php echo $value->id_pertanyaan;?>" value="0"required>
            <label><?php echo $value->jawaban_tidak_yakin;?></label>
            <br>
            <br>
          <?php }
        } ?>
      </div>

      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          <button type="submit" id="submitBtn">Submit</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
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

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("submitBtn").style.display = "inline";
      } else {
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("submitBtn").style.display = "none";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        // document.getElementById("regForm").submit();
        // return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>

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
