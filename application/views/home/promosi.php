
<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="m-text5 t-center">
				Promo
			</h3>
		</div>
		
			<div class="row"><?php foreach ($promosi as $promosi) {
	# code...
			?>
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->


					<div class="item-slick2 p-l-15 p-r-15">
						<!-- form untuk memproses belajaan -->
						
						<div class="block3">
							<a href="<?php echo base_url('promosi/detail/'.$promosi->slug_promosi) ?>" class="block3-img dis-block hov-img-zoom">
								<img src="<?php echo base_url('assets/upload/image/'.$promosi->gambar) ?>" alt="<?php echo $promosi->nama_promosi ?>" alt="IMG-BLOG">
							</a>

							<div class="block3-txt p-t-14">
								<h4 class="p-b-7">
									<a href="<?php echo base_url('promosi/detail/'.$promosi->slug_promosi) ?>" class="m-text11">
										<?php echo $promosi->nama_promosi ?>
									</a>
								</h4>
								<span class="s-text6"></span> <span class="s-text7"><?php echo $promosi->instagram ?></span>
							</div>
						</div>
						
					</div>
					
				</div>
			<?php } ?></div>
		
	</div>
</section>

