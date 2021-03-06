<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="<?php echo base_url() ?>" class="s-text16">
		Beranda
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="<?php echo base_url('produk') ?>" class="s-text16">
		Produk
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>


	<span class="s-text17">
		<?php echo $title ?>
	</span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="slick3">
					<div class="item-slick3" data-thumb="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>">
						<div class="wrap-pic-w">
							<img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>"alt="<?php echo $produk->nama_produk ?>">
						</div>
					</div>
					<?php if($gambar)
					{foreach($gambar as $gambar) {  ?>
						<div class="item-slick3" data-thumb="<?php echo base_url('assets/upload/image/thumbs/'.$gambar->gambar) ?>">
							<div class="wrap-pic-w">
								<img src="<?php echo base_url('assets/upload/image/'.$gambar->gambar) ?>" alt="<?php echo $gambar->judul_gambar ?>">
							</div>
						</div>
					<?php } } ?>

					
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h1 class="product-detail-name m-text20 p-b-13 " >
				<?php echo $title ?>
			</h1>

			<?php 
			echo form_open(base_url('belanja/add')); 
						// elemen yang dibawa
			echo form_hidden('id', $produk->id_produk);
			// echo form_hidden('qty',1 );
			echo form_hidden('name', $produk->nama_produk);
						// elemen redirect unntuk kembali kehalaman yang tadi di akses
			echo form_hidden('redirect_page', str_replace('index.php/','', current_url()));
			?>

			<span class="m-text16">
				<!-- Rp. <?php echo number_format($produk->harga,'0',',','.') ?> -->
				<a href="<?= $produk->link_instagram ?>" class="topbar-social-item fa fa-instagram">  <?php echo $produk->instagram ?></a>
			</span>
			<br><br>
			<div class="m-text11">
				<b>Lokasi : </b>
			</div>
			<div class="m-text11">
				<?php echo $produk->alamat ?>
			</div>
			<br>
			<p class="s-text8 p-t-10 embed-responsive embed-responsive-16by9">
				<?php echo $produk->maps ?>
			</p>

			<!--  -->
			<!-- <div class="p-t-33 p-b-60">
				

				<div class="flex-r-m flex-w p-t-10">
					<div class="w-size16 flex-m flex-w">

						<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">

							<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
							</button>

							<input class="size8 m-text18 t-center num-product" type="number" name="qty" value="1">

							<button type="submit" name="submit" value="submit" class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
							</button>
						</div>

						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Add to Cart
							</button>
						</div>
					</div>
				</div>
			</div> -->

			<?= form_close(); ?>
		</div>
	</div>
</div>

<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<h3 class="product-detail-name m-text16 p-b-13 " >
			<b>Keterangan Produk :</b>
		</h3>
		<br><br>
		<p class="s-text8 p-t-10">
			<?php echo $produk->keterangan ?>
		</p>
	</div>
</div>



<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Produk Lainnya
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<?php foreach ($produk_related as $produk_related) {
	# code...
					?>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- form untuk memproses belajaan -->
						<?php 
						echo form_open(base_url('belanja/add')); 
						// elemen yang dibawa
						echo form_hidden('id', $produk_related->id_produk);
						echo form_hidden('qty',1 );
						echo form_hidden('name', $produk_related->nama_produk);
						// elemen redirect unntuk kembali kehalaman yang tadi di akses
						echo form_hidden('redirect_page', str_replace('index.php/','', current_url()));
						?>
						

						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<a href="<?php echo base_url('produk/detail/'.$produk_related->slug_produk) ?>" class="block3-img dis-block hov-img-zoom">
								<img src="<?php echo base_url('assets/upload/image/'.$produk_related->gambar) ?>" alt="<?php echo $produk_related->nama_produk ?>">

								<div class="block2-overlay trans-0-4">

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button belanja-->
										<button type="submit" value="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Simpan
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?php echo base_url('produk/detail/'.$produk_related->slug_produk) ?>" class="block2-name dis-block s-text3 p-b-5">
									<b><?php echo $produk_related->nama_produk ?></b>

								</a>

								<span class="block2-txt p-r-5">
									<?php echo $produk_related->instagram ?>
								</span>
							</div>
						</div>
						<!-- closing form -->
						<?= form_close(); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<div class="container p-t-35 p-b-80" style="background-color: #F7F6F6">
	<div class="flex-w flex-sb">
		<h3 class="product-detail-name m-text16 p-b-13 " >
			<b>Review :</b>
		</h3>
		<br><br>
		<div class="col-md-12">
			<?php echo form_open(base_url('review/tambah')); ?>

			
						<td>
							<?php  
							if ($this->session->userdata('email')) { ?>
								<textarea class="s-text3 bo4 p-l-22 p-r-22 p-t-13 " name="review" placeholder="Ketikan Review Anda Disini" cols="140" rows="4"></textarea>
								<p class="block2-name dis-block s-text3 p-b-5">*Berkomentarlah dengan baik dan bijak</p><br>

								<input type="hidden" class="hidden" name="id_produk" value="<?php echo $produk->id_produk ?>">
								<div class="w-size25">
									<!-- Button -->
									<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
										Kirim
									</button>
								</div>
							<?php }else{ ?>
								<p class="block2-name dis-block s-text3 p-b-5">*Anda Belum Login, Login Untuk Mereview &nbsp;<a href="  <?php echo base_url('masuk') ?> " class="btn btn-outline-secondary">  Login Disini</a></p><br>
							<?php } ?>
							<br>
						</td>
					
			<?php echo form_close(); ?>
		</div>
		<br><br>
		<h3 class="product-detail-name m-text16 p-b-13 " >
			<b>Review Pengguna lain :</b>
		</h3><br><br>
		<div class="col-md-12">
			<div class="container bgwhite">
				<?php 
				if(empty($review)) { ?>
					<br>
					<td>
						<p>*Jadilah Yang Pertama Mereview</p>
					</td>
					<br>

					<!-- jika ada -->
					<?php 
				}else{ 
					foreach($review as $review) { ?>
						<br>
						<div class="">
							<td><img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1" alt="ICON"></td>
							<td><?php echo $review->nama ?></td>
							<td>
								<p>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<?php echo $review->review ?>
								</p>
							</td>
						</div>
						<br>
						<hr>
					<?php } } ?>

				</div>
			</div>
		</div> 
	</div>
	<br><br>

