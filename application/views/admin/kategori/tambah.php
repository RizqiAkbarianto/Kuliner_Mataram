 <!-- Main content -->
 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-12">
 				<div class="card shadow">
 					<!-- /.card-header -->
 					<div class="card-body">

 						<?php 
 //notofikasi error
 						echo validation_errors('<div class="alert alert-warning">','</div>');

 // Form Open
 						echo form_open(base_url('admin/kategori/tambah'),' class="form-horizontal"');

 						?>


 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Nama Kategori</label>

 							<div class="col-sm-10">
 								<input type="text" name="nama_kategori" class="form-control"  placeholder="Nama Kategori" value="<?php echo set_value('nama kategori') ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Urutan</label>

 							<div class="col-sm-10">
 								<input type="number" name="urutan" class="form-control"  placeholder="Urutan Kategori" value="<?php echo set_value('urutan') ?>" required> 
 							</div>
 						</div>


 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label"></label>

 							<div class="col-sm-10">
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