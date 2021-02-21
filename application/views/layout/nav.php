<?php 
// Ambil data menu dari konfigurasi
$nav_produk			= $this->konfigurasi_model->nav_produk();
$nav_produk_mobile	= $this->konfigurasi_model->nav_produk();

?>

<div class="wrap_header">
	<!-- Logo -->
	<a href="index.html" class="logo">
		<!-- Kυʅιɳҽɾ LσɱႦσƙ -->

		<img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="<?= $site->namaweb ?> | <?= $site->tagline ?> ">
	</a>

	<!-- Menu -->
	<div class="wrap_menu">
		<nav class="menu">
			<ul class="main_menu">

				<!-- Menu Home -->
				<li>
					<a href="<?= base_url() ?>">Beranda</a>
				</li>

				<!-- Menu Produk dan kategori -->
				<li>
					<a href="<?= base_url('produk') ?>">Produk</a>
					<ul class="sub_menu">

						<?php foreach ($nav_produk as $nav_produk) {
							# code...
							?>
							<li><a href="<?= base_url('produk/kategori/'.$nav_produk->slug_kategori) ?>"><?= $nav_produk->nama_kategori ?></a></li>

						<?php } ?>
					</ul>
				</li>

				<li>
					<a href="<?= base_url('kontak')?>">Kontak</a>
				</li>
			</ul>
		</nav>
	</div>

	<!-- Header Icon -->
	<div class="header-icons">

		<?php if ($this->session->userdata('email')) { ?>

			<a href="<?php echo base_url('dasbor') ?>" class="header-wrapicon1 dis-block">
				<?php echo $this->session->userdata('nama'); ?> 
			<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1" alt="ICON"> 
		</a>

		<?php }else{ ?>
		<a href="<?php echo base_url('masuk') ?>" class="header-wrapicon1 dis-block">
			<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1" alt="ICON">
		</a>

		<?php } ?>

		<!-- <span class="linedivide1"></span> -->

		
	</div>
</div>
</div>

<!-- Header Mobile -->
<div class="wrap_header_mobile">
	<!-- Logo moblie -->
	<a href="index.html" class="logo-mobile">
		<img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="<?= $site->namaweb ?> | <?= $site->tagline ?> ">
	</a>

	<!-- Button show menu -->
	<div class="btn-show-menu">
		<!-- Header Icon mobile -->
		<div class="header-icons-mobile">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide2"></span>

			<div class="header-wrapicon2">

				<?php 
			// cehck data keranjang ada atau tidak
				$keranjang_mobile = $this->cart->contents();

				?>

				<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti"><?php echo count($keranjang_mobile) ?></span>

				<!-- Header cart noti -->
				<div class="header-cart header-dropdown">
					<ul class="header-cart-wrapitem">
						<?php 
						if(empty($keranjang_mobile)) { ?>
							<li class="header-cart-item">
								<p class="alert alert-success">Keranjang Belanja Kosong</p>
							</li>

							<!-- jika ada -->
							<?php 
						}else{ 

						// total belanjaan
							$total_belanja = "Rp. ".number_format($this->cart->total(),'0',',','.');



						// tampilkan data belajaan
							foreach ($keranjang_mobile as $keranjang_mobile) {
								$id_produk_mobile = $keranjang_mobile['id'];
							// ambil data produk
							$produk_mobile = $this->produk_model->detail($id_produk_mobile);
							# code...

								?>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk_mobile->gambar) ?>" alt="<?php echo $keranjang_mobile['name'] ?>">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<?php echo $keranjang_mobile['name'] ?>
										</a>

										<span class="header-cart-item-info">
											<?php echo $keranjang_mobile['qty'] ?> x  Rp. <?php echo number_format($keranjang_mobile['price'],'0',',','.') ?> : Rp. <?php echo number_format($keranjang_mobile['subtotal'],'0',',','.') ?>
										</span>
									</div>
								</li>

								<?php } } ?>
							</ul>

							<div class="header-cart-total">
								Total: <?php echo $total_belanja ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url('belanja') ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url('belanja/checkout') ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							<?= $site->alamat ?>
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								<?= $site->email ?>
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option><?= $site->telepon ?></option>

								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">

							<a href="<?= $site->instagram ?>" class="topbar-social-item fa fa-instagram">  @Kuliner.Mataram</a>

						</div>
					</li>

					<!-- Menu mobile beranda -->
					<li class="item-menu-mobile">
						<a href="<?= base_url() ?>">Beranda</a>
					</li>
					<!-- menu mobile prodik -->
					<li class="item-menu-mobile">
						<a href="<?= base_url('produk') ?>">Produk &amp; Belanja</a>
						<ul class="sub-menu">

							<?php foreach ($nav_produk_mobile as $nav_produk_mobile) {
							# code...
								?>
								<li><a href="<?= base_url('produk/kategori/'.$nav_produk_mobile->slug_kategori) ?>"><?= $nav_produk_mobile->nama_kategori ?></a></li>

							<?php } ?>

						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>



					<!-- emnu kontak mobile -->
					<li class="item-menu-mobile">
						<a href="<?= base_url('kontak') ?>">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>