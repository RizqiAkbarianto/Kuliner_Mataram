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

<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Tentang Kami
			</h3>
		</div>
		<div class="row">
			<div class="col-md-4 p-b-30">
				<div class="hov-img-zoom">
					<img src="<?php echo base_url() ?>assets/upload/image/Dhina.jpg" alt="IMG-ABOUT">
				</div>
				<h3 class="m-text27 p-t-10" align="center">
					Dhina Muflihana
				</h3>
				<h3 class="s-text7 p-t-5" align="center">
					Founder and Owner of Kuliner.Mataram
				</h3>
			</div>

			<div class="col-md-8 p-b-30">
				<h3 class="m-text26 p-t-15 p-b-16">
					Cerita Kami
				</h3>

				<p class="p-b-28">
					Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.
				</p>

				<div class="bo13 p-l-29 m-l-9 p-b-10">
					<p class="p-b-11">
						Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
					</p>

					<span class="s-text7">
						- Steve Job’s
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Saran dan Masukan
			</h3>
		</div>
		<div class="row">
			<div class="col-md-6 p-b-30">
				<div class="p-r-20 p-r-0-lg">
					<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
				</div>
			</div>

			<div class="col-md-6 p-b-30">
				<form class="leave-comment">
					<h4 class="m-text26 p-b-36 p-t-15">
						Berikan Kami Pesan atau Saran
					</h4>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
					</div>

					<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

					<div class="w-size25">
						<!-- Button -->
						<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

