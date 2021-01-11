<?php 
// loading konfigurasi website
$site = $this->konfigurasi_model->listing();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/'.$site->icon) ?>"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginadmin/css/main.css">
  <!--===============================================================================================-->
</head>
<body>

  <div class="limiter">
    <div class="container-login100">
      <div><?php 
// <!-- notifikasi error -->
      echo validation_errors('<div class="alert alert_success">','</div>');

    // Notikasi gagal login
      if($this->session->flashdata('warning')){
        echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('warning');
        echo '</div>';
      }

      // notifikasi logout
      if($this->session->flashdata('sukses')){
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '</div>';
      }
      ?>
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(<?php echo base_url() ?>assets/loginadmin/images/bg-01.jpg);">
          <span class="login100-form-title-1">
            <b><?php echo $title ?></b>
          </span>
        </div>


        <form class="login100-form"
        <?php  

      // Form buka login
        echo form_open(base_url('login'));

        ?> 
        <div class="wrap-input100  m-b-26" >
          <span class="label-input100">Username</span>
          <input class="input100" type="text" name="username" placeholder="Masukan username">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100  m-b-18" >
          <span class="label-input100">Password</span>
          <input class="input100" type="password" name="password" placeholder="Masukan password">
          <span class="focus-input100"></span>
        </div>

        <div class="flex-sb-m w-full p-b-30">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit">
            Login
          </button>
        </div>
        
      </form <?php echo form_close(); ?>

    </div>
  </div>  
</div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/loginadmin/js/main.js"></script>

</body>
</html>