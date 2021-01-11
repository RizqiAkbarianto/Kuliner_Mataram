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
 						echo form_open(base_url('admin/user/tambah'),' class="form-horizontal"');

 						?>

 						

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Email</label>

 							<div class="col-sm-10">
 								<input type="email" name="email" class="form-control"  placeholder="email Produk" value="<?php echo set_value('email') ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Nama Pengguna</label>

 							<div class="col-sm-10">
 								<input type="text" name="nama" class="form-control"  placeholder="Nama Pengguna" value="<?php echo set_value('nama') ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Username</label>

 							<div class="col-sm-10">
 								<input type="text" name="username" class="form-control"  placeholder="username" value="<?php echo set_value('username') ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Password</label>

 							<div class="col-sm-10">
 								<input type="password" name="password" class="form-control"  placeholder="password" value="<?php echo set_value('password') ?>" required> 
 							</div>
 						</div>

 						<div class="form-group row">
 							<label  class="col-sm-2 control-form-label">Level Hak Akses</label>

 							<div class="col-sm-10">
 								<select name="akses_level" class="form-control">
 									<option value="Admin">Admin</option>
 									<option value="User">User</option>
 								</select>
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