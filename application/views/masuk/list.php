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
	<!--===============================================================================================-->		<link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/'.$site->icon) ?>"/> 
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/main.css">
	<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			
			<div class="wrap-login100">
				<form class="login100-form" 

				<?php  

      // Form buka login
				echo form_open(base_url('masuk'));

				?> 
				<div>
					<?php 

					echo validation_errors('<div class="alert alert_success">','</div>');

						// display notif erroe login
					if ($this->session->flashdata('warning')) {
						echo '<div class="alert alert-warning">';
						echo $this->session->flashdata('warning');
						echo '</div>';
					}

					if($this->session->flashdata('sukses')) {
						echo '<div class="alert alert-warning">';
						echo $this->session->flashdata('sukses');
						echo '</div>';
					}
					 ?></div>
					<span class="login100-form-title p-b-43">
						<?php echo $title ?>
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="email" value="<?php echo set_value('email') ?>"required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password" value="<?php echo set_value('password') ?>"required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<br>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div><p class="txt1"> Belum Memeliki Akun ? Silahkan  
							<a href=" <?php echo base_url('daftar') ?> " class="txt1 btn btn-success text-white">
								Daftar Disini
							</a>
						</p>
					</div>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Masuk
					</button>

				</div>
				<br>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="reset">
						Reset
					</button>
				</div>

				</form <?php echo form_close(); ?>

				<div class="login100-more" style="background-image: url('<?php echo base_url() ?>assets/login/images/bg-login.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/js/main.js"></script>

</body>
</html>