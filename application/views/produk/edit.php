<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo base_url() ?>assets/upload/image/slider1.jpg);">
	<h2 class="l-text2 t-center">
		<?php echo $title ?>
	</h2>
	<p class="m-text13 t-center">
		<?php echo $site->namaweb ?> | <?php echo $site->tagline ?>
	</p>
</section>

<!-- Main content -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<!-- /.card-header -->
					<div class="card-body">
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
						echo form_open_multipart(base_url('produk/edit/'.$produk->id_produk),' class="form-horizontal"');

						?>


						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Nama Produk</label>

							<div class="col-sm-10 bo4 of-hidden sizefull">
								<input type="text" name="nama_produk" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull"  placeholder="Nama Produk" value="<?php echo $produk->nama_produk ?>" required> 
							</div>
						</div>

						

						<div class="form-group row ">
							<label  class="col-sm-2 control-form-label">Kategori Produk</label>

							<div class="col-sm-10 bo4 of-hidden rs1-select2 p-t-5 p-b-5">
								<select name="id_kategori" class="bo4 p-l-22 p-r-22 p-t-5 p-b-5 selection-1">
									<?php foreach($kategori as $kategori) {  ?>
										<option value=" <?php echo $kategori->id_kategori ?> " <?php if($produk->id_kategori==$kategori->id_kategori) {echo "selected"; } ?>>
											<?php echo $kategori->nama_kategori ?>
										</option>
									<?php } ?>
								</select>
							</div>
						</div>




						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Instagram</label>

							<div class="col-sm-10 bo4 of-hidden sizefull">
								<input type="text" name="instagram" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull"  placeholder="Instagram" value="<?php echo $produk->instagram ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Link Instagram</label>

							<div class="col-sm-10 bo4 of-hidden sizefull">
								<input type="text" name="link_instagram" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull"  placeholder="Link Instagram" value="<?php echo $produk->link_instagram ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Alamat</label>

							<div class="col-sm-10 bo4 of-hidden sizefull">
								<input type="text" name="alamat" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull"  placeholder="Alamat" value="<?php echo $produk->alamat ?>" required> 
							</div>
						</div>
					</div>
				</div><br>

				<div class="card shadow">
					<!-- /.card-header -->
					<div class="card-body">

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Maps</label>

							<div class="col-sm-10  ">
								<textarea name="maps" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull" cols="119" rows="4" placeholder="Copi dari Gmaps Lalu pastekan disini" ><?php echo $produk->maps ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Keterangan Produk</label>

							<div class="col-sm-10  ">
								<textarea name="keterangan" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull" placeholder="Keterangan" id="editor"><?php echo $produk->keterangan ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Keyword (Untuk SEO Google)</label>

							<div class="col-sm-10  ">
								<textarea name="keywords" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull" cols="119" rows="4" id="editor" placeholder="Keyword (Untuk SEO Google)"><?php echo $produk->keywords ?></textarea>
							</div>
						</div>
					</div>
				</div><br>

				<div class="card shadow">
					<!-- /.card-header -->
					<div class="card-body">

						<div class="form-group row ">
							<label  class="col-sm-2 control-form-label">Upload Gambar Produk</label>

							<div class="col-sm-10 bo4 of-hidden sizefull">
								<input type="file" name="gambar" class="s-text3 bo4 p-l-22 p-r-22 p-t-5 p-b-5 sizefull" required="required">
							</div>
						</div>
					</div>
				</div><br>

				<div class="form-group row ">
					<label  class="col-sm-2 control-form-label"></label>

					<div class="col-sm-5">
						<button class="btn btn-success btn-lg" name="submit" type="submit">
							<i class="fa fa-save"></i> Simpan
						</button>
						<button class="btn btn-info btn-lg" name="reset" type="reset">
							<i class="fa fa-times"></i> Reset
						</button>
					</div>
				</div>
						
				<?php echo form_close(); ?>

			</div>
		</div>
	</div>
</section>
