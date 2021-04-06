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
							<a href="<?php echo base_url('dashboard/profil') ?>" class="s-text13 active1">
								Profil
							</a>
						</li>
						<?php if ($this->session->userdata('email')) { ?>
							<?php if ($this->session->userdata('akses') == "Produsen") { ?>
								<li class="p-t-4">
									<a href="<?php echo base_url('dashboard/produk') ?>" class="s-text13 active1">
										Produk Anda
									</a>
								</li>
							<?php }else{ ?>
							<?php } ?>
						<?php }else{ ?>
						<?php } ?>

						<li class="p-t-4">
							<a href="<?php echo base_url('dashboard/tersimpan') ?>" class="s-text13 active1">
								Produk Tersimpan
							</a>
						</li>

						<li class="p-t-4">
							<a href="<?php echo base_url('dashboard/pengaturan') ?>" class="s-text13 active1">
								Pengaturan Akun
							</a>
						</li>
						
						<li class="p-t-4">
							<a href="<?php echo base_url('masuk/logout') ?>" class="s-text13 active1">
								Logout
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
							<td class="" width="30%"><?php echo $this->session->userdata('name'); ?></td>
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
	</div>
</section>