<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<h2><?php echo $title ?> : </h2>
		<div class="clearfix"></div>
		<br>


		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			

			<div class="wrap-table-shopping-cart bgwhite">
				<?php if($this->session->flashdata('sukses')) {
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
				} ?>
				
				<table class="table-shopping-cart table-striped">
					<tr class="table-head"> 
						<th class="column-1">GAMBAR</th>
						<th class="column-2">PRODUK</th>
						<th class="column-3">HARGA</th>
						<th class="column-4 p-l-70" width="10%">JUMLAH</th>
						<th class="column-5" width="10%"> SUB TOTAL</th>
						<th class="column-6 " width="15%">ACTION</th>
					</tr>
					<!-- looping data keranjang belanja -->
					<?php 

					// form update
					echo form_open(base_url('belanja/update_cart'));

					foreach($keranjang as $keranjang){ 
						// ambil data produknya
						$id_produk 	= $keranjang['id'];
						$produk 	= $this->produk_model->detail($id_produk);

						// hidden input
						echo form_hidden('cart['.$keranjang['id'].']', $keranjang['id']);
						echo form_hidden('cart['.$keranjang['id'].']', $keranjang['rowid']);
						echo form_hidden('cart['.$keranjang['id'].']', $keranjang['name']);
						echo form_hidden('cart['.$keranjang['id'].']', $keranjang['price']);
						echo form_hidden('cart['.$keranjang['id'].']', $keranjang['qty']);

						?>

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar)?>" alt="<?php echo $keranjang['name'] ?>">
								</div>
							</td>
							<td class="column-2"><?php echo $keranjang['name'] ?></td>
							<td class="column-3">Rp. <?php echo number_format($keranjang['price'],'0',',','.') ?></td>
							<td class="column-4 ">
								<div class="flex-w bo5 of-hidden w-size17 " >
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="qty" value="<?php echo $keranjang['qty'] ?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">Rp. <?php echo number_format($keranjang['subtotal'],'0',',','.') ?></td>
							<td class="column-6">
								<button type="submit" name="update" class="btn btn-outline-secondary btn-sm"><i class="fa fa-edit"> Update</i></button>

								<a href=" <?php echo base_url('belanja/hapus/'.$keranjang['rowid']) ?> " class="btn btn-outline-secondary  btn-sm"><i class="fa fa-trash-o"> Hapus</i></a>
							</td>
						</tr>

						<!-- end foreach -->
					<?php } 
					// echo form close
					echo form_close();
					?>

					

				</table>
			</div>
			
		</div>

		<br><br>

		<div class="container-table-cart pos-relative">

			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart table-striped">
					<tr class="table-row ">
						
						
						<td class="column-5 text-right"><b>Total Belanja : </b> Rp. <?php echo number_format($this->cart->total(),'0',',','.')?></td>
					</tr>
				</table>
			</div>
		</div>



		<div class="flex-w flex-sb-m p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm pull-right">
			<div class="flex-w flex-m w-full-sm">
				
			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10 ">
				<!-- Button -->
				<a href="<?php echo base_url('belanja/hapus') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 btn-lg"><i class="fa fa-trash-o"> Bersihkan</i></a>

				

			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10">

				<a href="<?php echo base_url('belanja/checkout') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 btn-lg"><i class="fa fa-shopping-cart"> Checkout</i></a>

			</div>
		</div>
		<br><br><br>


		
	</div>
</section>