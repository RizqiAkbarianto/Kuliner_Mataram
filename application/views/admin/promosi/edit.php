<section class="content">
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
						echo form_open_multipart(base_url('admin/promosi/edit/'.$promosi->id_promosi),' class="form-horizontal"');

						?>


						<div class="form-group row row">
							<label  class="col-sm-2 control-form-label">Nama Promosi</label>

							<div class="col-sm-10">
								<input type="text" name="nama_promosi" class="form-control"  placeholder="Nama Promosi" value="<?php echo $promosi->nama_promosi ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Kode Promosi</label>

							<div class="col-sm-10">
								<input type="text" name="kode_promosi" class="form-control"  placeholder="Kode Promosi" value="<?php echo $promosi->kode_promosi ?>" required> 
							</div>
						</div>

						<!-- <div class="form-group row">
							<label  class="col-sm-2 control-form-label">Kategori Promosi</label>

							<div class="col-sm-10">
								<select name="id_kategori" class="form-control">
									<?php foreach($kategori as $kategori) {  ?>
										<option value=" <?php echo $kategori->id_kategori ?> " <?php if($promosi->id_kategori==$kategori->id_kategori) {echo "selected"; } ?>>
											<?php echo $kategori->nama_kategori ?>
										</option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Harga Promosi</label>

							<div class="col-sm-10">
								<input type="number" name="harga" class="form-control"  placeholder="Harga Promosi" value="<?php echo $promosi->harga ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Stok Promosi</label>

							<div class="col-sm-10">
								<input type="number" name="stok" class="form-control"  placeholder="Stok Promosi" value="<?php echo $promosi->stok ?>" required> 
							</div>
						</div>


						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Berat Promosi</label>

							<div class="col-sm-10">
								<input type="text" name="berat" class="form-control"  placeholder="Berat Promosi" value="<?php echo $promosi->berat ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Ukuran Promosi</label>

							<div class="col-sm-10">
								<input type="text" name="ukuran" class="form-control"  placeholder="Ukuran Promosi" value="<?php echo $promosi->ukuran ?>" required> 
							</div>
						</div>
 -->


 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Instagram</label>

 							<div class="col-sm-10">
 								<input type="text" name="instagram" class="form-control"  placeholder="Instagram" value="<?php echo $promosi->instagram ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Link Instagram</label>

 							<div class="col-sm-10">
 								<input type="text" name="link_instagram" class="form-control"  placeholder="Link Instagram" value="<?php echo $promosi->link_instagram ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Alamat</label>

 							<div class="col-sm-10">
 								<input type="text" name="alamat" class="form-control"  placeholder="Alamat" value="<?php echo $promosi->alamat ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Maps</label>

 							<div class="col-sm-10">
 								<textarea name="maps" class="form-control" placeholder="Copi dari Gmaps Lalu pastekan disini" ><?php echo $promosi->maps ?></textarea>
 							</div>
 						</div>



						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Keterangan Promosi</label>

							<div class="col-sm-10">
								<textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo $promosi->keterangan ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Keyword (Untuk SEO Google)</label>

							<div class="col-sm-10">
								<textarea name="keywords" class="form-control" placeholder="Keyword (Untuk SEO Google)"> <?php echo $promosi->keywords ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Upload Gambar Promosi</label>

							<div class="col-sm-10">
								<input type="file" name="gambar" class="form-control" >
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Status Promosi</label>

							<div class="col-sm-10">
								<select name="status_promosi" class="form-control">
									<option value="Publish">Publikasikan</option>
									<option value="Draft" <?php if($promosi->status_promosi=="Draft") {echo "selected" ;} ?>>Simpan Sebagai Draft</option>
								</select>
							</div>
						</div>


						<div class="form-group row">
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
		</div>
	</section>