<!-- Title Page -->
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


					<h4 class="m-text14 p-b-7">
						Kategori Produk
					</h4>

					<ul class="p-b-54">
						<!-- di looping foreach -->
						<?php foreach($listing_kategori as $listing_kategori) { ?>
							<li class="p-t-4">
								<a href="<?php echo base_url('produk/kategori/'.$listing_kategori->slug_kategori) ?>" class="s-text13 active1">
									<?php echo $listing_kategori->nama_kategori; ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
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
							

							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative ">
									<a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>" class="block3-img dis-block hov-img-zoom">
										<img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">

										<div class="block2-overlay trans-0-4">

											<?php 
 // error upload
 // Form Open
											echo form_open_multipart(base_url('simpan/tambah'),' class="leave-comment"');

											?>

											
													<input type="hidden" name="id_produk" class="hidden"value="<?php echo $produk->id_produk ?>" > 
												
											
													<input type="hidden" name="nama_produk" class="hidden"  placeholder="Nama Produk" value="<?php echo $produk->nama_produk ?>" required> 
												
											
													<input type="hidden" name="gambar" class="hidden"  placeholder="Nama Produk" value="<?php echo $produk->gambar ?>" required> 
												
											

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button type="submit" value="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Simpan
												</button>
											</div>
											<?php echo form_close(); ?>
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