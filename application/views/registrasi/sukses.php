<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<h2><?php echo $title ?> : </h2>
		<div class="clearfix"></div>
		<br>


		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			

			
				<?php if($this->session->flashdata('sukses')) {
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
				} ?>

				<p class="alert alert-success">Registrasi Berhasil <a href="<?php echo base_url('masuk') ?> " class="btn btn-success">Masuk Disini</a>
					Anda jUga dapat melakukan Check out <a href="<?php echo base_url('belanja/checkout') ?> " class="btn btn-warning fa fa-shopping-cart"> Chekout Disini</a></p>
				
				
			
			
		</div>
		<div class="flex-w flex-sb-m p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm pull-right">
			<div class="flex-w flex-m w-full-sm">
				
			</div>

			
		</div>
		<br><br><br>
	</div>
</section>