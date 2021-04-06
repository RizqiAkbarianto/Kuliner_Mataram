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
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				
				<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-auto m-l-auto p-lr-15-sm">
					<h5 class="m-text20 p-b-24" align="center">
						Upgrade Akun (Silver)
					</h5>

					<!--  -->
					<div class="flex-w flex-sb-m p-b-12">
						<span class="s-text18 w-size19 w-full-sm">
							Harga :
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							Rp 250.000,00 / Bulan
						</span>
					</div>

					<!--  -->
					<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
						<span class="s-text18 w-size19 w-full-sm">
							Keunggulan:
						</span>

						<div class="w-size20 w-full-sm">
							<p class="s-text8 p-b-23">
								Dapat Mempromosikan Produk anda sebanyak banyaknya hingga batas yang telah di tentukan
							</p>

							<span class="s-text19">
								Data Diri :
							</span>

							<div class="size13 bo4 m-b-12">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="Email ">
							</div>

							<div class="size13 bo4 m-b-22">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Username">
							</div>

						</div>
					</div><br>

					<!--  -->
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
						<span class="m-text22 w-size19 w-full-sm">
							Total:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							Rp 250.000,00 / Bulan
						</span>
					</div>

					<div class="size15 trans-0-4">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Upgrade
						</button>
					</div>
				</div>
				
			</div>
			<div class="w-size14 p-t-30 respon5">
				<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-auto m-l-auto p-lr-15-sm">
					<h5 class="m-text20 p-b-24" align="center">
						Upgrade Akun (Gold)
					</h5>

					<!--  -->
					<div class="flex-w flex-sb-m p-b-12">
						<span class="s-text18 w-size19 w-full-sm">
							Harga :
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							Rp 2.800.000,00 / Tahun
						</span>
					</div>

					<!--  -->
					<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
						<span class="s-text18 w-size19 w-full-sm">
							Keunggulan:
						</span>

						<div class="w-size20 w-full-sm">
							<p class="s-text8 p-b-3">
								-Hemat Rp 200.000,00
							</p>
							<p class="s-text8 p-b-23">
								-Dapat Mempromosikan Produk  anda sebanyak banyaknya hingga batas yang telah di tentukan
							</p>

							<span class="s-text19">
								Data Diri :
							</span>

							<div class="size13 bo4 m-b-12">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="Email ">
							</div>

							<div class="size13 bo4 m-b-22">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Username">
							</div>

						</div>
					</div>

					<!--  -->
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
						<span class="m-text22 w-size19 w-full-sm">
							Total:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							Rp 250.000,00 / Bulan
						</span>
					</div>

					<div class="size15 trans-0-4">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Upgrade
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>