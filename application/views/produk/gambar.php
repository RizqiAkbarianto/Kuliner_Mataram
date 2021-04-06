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
								<i class="fa fa-user"></i> Profil
							</a>
						</li>
						<?php if ($this->session->userdata('email')) { ?>
							<?php if ($this->session->userdata('akses') == "Produsen") { ?>
								<li class="p-t-4">
									<a href="<?php echo base_url('dashboard/produk') ?>" class="s-text13 active1">
										<i class="fa fa-shopping-cart"></i> Produk Anda
									</a>
								</li>
							<?php }else{ ?>
							<?php } ?>
						<?php }else{ ?>
						<?php } ?>

						<li class="p-t-4">
							<a href="<?php echo base_url('dashboard/tersimpan') ?>" class="s-text13 active1">
								<i class="fa fa-shopping-cart"></i> Produk Tersimpan
							</a>
						</li>

						<li class="p-t-4">
							<a href="<?php echo base_url('dashboard/pengaturan') ?>" class="s-text13 active1">
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

				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<h4 class="m-text14 p-b-7">
							Tambah Gambar - <?php echo $produk->nama_produk ?>
						</h4>
					</div>

					<span class="s-text8 p-t-5 p-b-5">
						<div class="pos-relative bo11 of-hidden bo4">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</span>
				</div>



				<!-- Product -->
				<div class="row">

					<?php 
 				// error upload
					if(isset($error)){
						echo '<p class="alert alert-warning">';
						echo $error;
						echo '</p>';
					}
 				//notofikasi error
					echo validation_errors('<div class="alert alert-warning">','</div>');

 				// Form Open
					echo form_open_multipart(base_url('produk/gambar/'.$produk->id_produk),' class="form-horizontal"');

					?>


					<div class="form-group row ">
						<label  class="col-sm-2 control-form-label">Judul Gambar </label>

						<div class="col-sm-10">
							<input type="text" name="judul_gambar" class="form-control"  placeholder="Judul Gambar" value="<?php echo set_value('judul_gambar') ?>" required> 
						</div>
					</div>

					<div class="form-group row ">
						<label  class="col-sm-2 control-form-label">Unggah Gambar </label>

						<div class="col-sm-4">
							<input type="file" name="gambar" class="form-control"  placeholder="Gambar Produk" value="<?php echo set_value('gambar') ?>" required> 
						</div>
						<div class="col-sm-6">
							<button class="btn btn-success btn-lg" name="submit" type="submit">
								<i class="fa fa-save"></i> Simpan
							</button>
							<button class="btn btn-info btn-lg" name="reset" type="reset">
								<i class="fa fa-times"></i> Reset
							</button>
						</div>
					</div><br><hr><br>
					<?php echo form_close(); ?>

					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">

								<img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">

								<div class="block2-overlay trans-0-4">

									<div class="block2-btn-addcart w-size1 trans-0-4">
										
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<span class="block2-txt p-r-5">
									<?php echo $produk->nama_produk ?>
								</span>
							</div>
						</div>
					</div>



					<?php foreach ($gambar as $gambar) { ?>						
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative ">
									
									<img src="<?php echo base_url('assets/upload/image/thumbs/'.$gambar->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">

									<div class="block2-overlay trans-0-4">

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="<?php echo base_url('produk/delete_gambar/' .$produk->id_produk.'/'.$gambar->id_gambar) ?>" onclick="return confirm('Yakin anda ingin menghapus data ini ?')" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												<i class="fa fa-ban"> Hapus</i>
											</a>

										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-txt p-r-5">
										<?php echo $gambar->judul_gambar ?>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>