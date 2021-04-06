<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Produk Terbaru
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<?php foreach ($produk as $produk) {
	# code...
					?>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- form untuk memproses belajaan -->
						
						

						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>" class="block3-img dis-block hov-img-zoom">
									<img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">


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
											<!-- Button belanja-->
											<button type="submit" value="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Simpan
											</button>
										</div>
										<?php echo form_close(); ?>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>" class="block2-name dis-block s-text3 p-b-5">
										<b><?php echo $produk->nama_produk ?></b>

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
			</div>
		</div>
	</section><br>
