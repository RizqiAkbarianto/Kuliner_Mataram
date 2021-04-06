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

				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<h4 class="m-text14 p-b-7">
						Produk Tersimpan
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
					<?php foreach ($produk as $produk) {
						# code...
						?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- form untuk memproses belajaan -->
							<?php 
							echo form_open(base_url('belanja/add')); 
						// elemen yang dibawa
							echo form_hidden('id', $produk->id_produk);
							echo form_hidden('qty',1 );
							echo form_hidden('name', $produk->nama_produk);
						// elemen redirect unntuk kembali kehalaman yang tadi di akses
							echo form_hidden('redirect_page', str_replace('index.php/','', current_url()));
							?>

							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative ">
									<a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>" class="block3-img dis-block hov-img-zoom">
									<img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">

									<div class="block2-overlay trans-0-4">

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button type="submit" value="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												<i class="fa fa-ban"> Hapus</i>
											</button>
										</div>
									</div>
									
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $produk->nama_produk ?>

									</a>


									<span class="block2-txt p-r-5">
										<?php echo $produk->instagram ?>
									</span>
								</div>
							</div>
							<!-- closing form -->
							<?= form_close(); ?>
						</div>
					<?php } ?>

				</div>

				<!-- Pagination -->
				<div class="pagination flex-m flex-w p-t-26">
					<?php echo $pagin; ?>
				</div>
			</div>
			</div>
		</div>
	</section>