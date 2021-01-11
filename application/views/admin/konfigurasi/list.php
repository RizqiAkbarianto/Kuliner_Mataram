<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<!-- /.card-header -->
					<div class="card-body">

						<?php 
//Notifikasi
						if($this->session->flashdata('sukses')){
							echo '<p class="alert alert-success">';
							echo $this->session->flashdata('sukses');
							echo '</div>';
						}
						?>

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
						echo form_open_multipart(base_url('admin/konfigurasi'),' class="form-horizontal"');

						?>


						<div class="form-group row row">
							<label  class="col-sm-2 control-form-label">Nama Website</label>

							<div class="col-sm-10">
								<input type="text" name="namaweb" class="form-control"  placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Tagline/Moto</label>

							<div class="col-sm-10">
								<input type="text" name="tagline" class="form-control"  placeholder="Tagline/Moto" value="<?php echo $konfigurasi->tagline ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Email</label>

							<div class="col-sm-10">
								<input type="email" name="email" class="form-control"  placeholder="Email" value="<?php echo $konfigurasi->email ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Website</label>

							<div class="col-sm-10">
								<input type="text" name="website" class="form-control"  placeholder="Website" value="<?php echo $konfigurasi->website ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Alamat Facebook</label>

							<div class="col-sm-10">
								<input type="text" name="facebook" class="form-control"  placeholder="Alamat Facebook" value="<?php echo $konfigurasi->facebook ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Alamat Instagram</label>

							<div class="col-sm-10">
								<input type="text" name="instagram" class="form-control"  placeholder="Alamat Instagram" value="<?php echo $konfigurasi->instagram ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Telepon/HP</label>

							<div class="col-sm-10">
								<input type="text" name="telepon" class="form-control"  placeholder="Telepon" value="<?php echo $konfigurasi->telepon ?>" required> 
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Alamat Kantor</label>

							<div class="col-sm-10">
								<textarea name="alamat" class="form-control" placeholder="Alamat Kantor"><?php echo $konfigurasi->alamat ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Keyword (Untuk SEO Google)</label>

							<div class="col-sm-10">
								<textarea name="keywords" class="form-control" placeholder="Keyword (Untuk SEO Google)"><?php echo $konfigurasi->keywords ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Kode Metatext</label>

							<div class="col-sm-10">
								<textarea name="metatext" class="form-control" placeholder="Metatext"><?php echo $konfigurasi->metatext ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Rekening Pembayaran</label>

							<div class="col-sm-10">
								<textarea name="rekening_pembayaran" class="form-control" placeholder="Rekening Pembayaran"><?php echo $konfigurasi->rekening_pembayaran ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-2 control-form-label">Deskripsi Website</label>

							<div class="col-sm-10">
								<textarea name="deskripsi" class="form-control" placeholder="Deskripsi Website"><?php echo $konfigurasi->deskripsi ?></textarea>
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
	</div>
</section>