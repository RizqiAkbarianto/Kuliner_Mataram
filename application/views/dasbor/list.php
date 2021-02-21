<?php 
$site = $this->konfigurasi_model->listing();
$us = $this->user_model->detail('id_user');
 ?>
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo base_url() ?>assets/upload/image/slider1.jpg);">
	<h2 class="l-text2 t-center">
		<?php echo $title ?>
	</h2>
	<p class="m-text13 t-center">
		<?php echo $site->namaweb ?> | <?php echo $site->tagline ?>
	</p>
</section>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Menu Pelanggan
					</h4>

					<ul class="p-b-54">
						
						<li class="p-t-4">
							<a href="<?php echo base_url('dasbor') ?>" class="s-text13 active1">
								<i class="fa fa-user"></i> Profil
							</a>
						</li>

						<li class="p-t-4">
							<a href="<?php echo base_url('dasbor/Keranjang') ?>" class="s-text13 active1">
								<i class="fa fa-shopping-cart"></i> Produk Tersimpan
							</a>
						</li>

						<li class="p-t-4">
							<a href="<?php echo base_url('dasbor/belanja') ?>" class="s-text13 active1">
								<i class="fa fa-check"></i> Pengaturan Akun
							</a>
						</li>
						
						<li class="p-t-4">
							<a href="<?php echo base_url('masuk/logout') ?>" class="s-text13 active1">
								<i class="fa fa-sign-out"></i> Logout
							</a>
						</li>
						
					</ul>


					
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!-- Product -->
				
				<h4 class="m-text14 p-b-7">
						Profil Anda
					</h4>
				<div class="row">


					<table class="table table-borderless">

						<tr class="table-row ">
							<td class="" width="7%">
								<div class="">
									<label for="">Nama  </label>
								</div>
							</td>
							<td class="" width="1%">:</td>
							<td class="" width="30%"><?php echo $this->session->userdata('nama'); ?></td>
						</tr>

						<tr class="table-row ">
							<td class="" width="7%">
								<div class="">
									<label for="">Email  </label>
								</div>
							</td>
							<td class="" width="1%">:</td>
							<td class="" width="30%"><?php echo $this->session->userdata('email'); ?></td>
						</tr>

						<tr class="table-row ">
							<td class="" width="7%">
								<div class="">
									<label for="">Alamat  </label>
								</div>
							</td>
							<td class="" width="1%">:</td>
							<td class="" width="30%"><?php echo $this->session->userdata('alamat'); ?></td>
						</tr>

					</table>


				</div>
			</div>
		</div>
	</section>