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
						echo form_open_multipart(base_url('admin/produk/gambar/'.$produk->id_produk),' class="form-horizontal"');

						?>


						<div class="form-group row ">
							<label  class="col-sm-2 control-form-label">Judul Gambar </label>

							<div class="col-sm-10">
								<input type="text" name="judul_gambar" class="form-control"  placeholder="Judul Gambar" value="<?php echo set_value('judul_gambar') ?>" required> 
							</div>
						</div>

						<div class="form-group row ">
							<label  class="col-sm-2 control-form-label">Unggah Gambar </label>

							<div class="col-sm-4">
								<input type="file" name="gambar" class="form-control"  placeholder="Gambar Produk" value="<?php echo set_value('gambar') ?>" required> 
							</div>
							<div class="col-sm-6">
								<button class="btn btn-success btn-lg" name="submit" type="submit">
									<i class="fa fa-save"></i> Simpan dan Unggah Gambar
								</button>
								<button class="btn btn-info btn-lg" name="reset" type="reset">
									<i class="fa fa-times"></i> Reset
								</button>
							</div>
						</div>


						<?php echo form_close(); ?>

						<?php 
//Notifikasi
						if($this->session->flashdata('Sukses')){
							echo '<p class="alert alert-success">';
							echo $this->session->flashdata('Sukses');
							echo '</div>';
						}
						?>

						<table class="table table-bordered" id="example1">
							<thead>
								<tr>
									<th>NO</th>
									<th>GAMBAR</th>
									<th>JUDUL</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<!-- ukuran gambar -->
									<td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60"></td>
									<td><?php echo $produk->nama_produk ?></td>

									<td align="center">


									</td> 

								</tr>

								<?php $no=2; foreach($gambar as $gambar) { ?> 

									<tr>
										<td><?php echo $no ?></td>
										<!-- ukuran gambar -->
										<td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$gambar->gambar) ?>" class="img img-responsive img-thumbnail" width="60"></td>
										<td><?php echo $gambar->judul_gambar ?></td>

										<td align="center">

											<a href="<?php echo base_url('admin/produk/delete_gambar/' .$produk->id_produk.'/'.$gambar->id_gambar) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin menghapus gambar ini ?')"><i class="fa fa-trash-o"></i> Hapus</a>
										</td> 

									</tr>

									<?php $no++; } ?>
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>