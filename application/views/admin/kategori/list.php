 <!-- Main content -->
 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-12">
 				<div class="card shadow">
 					<!-- /.card-header -->
 					<div class="card-body">

 						<p>
 							<a href="<?php echo base_url('admin/kategori/tambah') ?>" class="btn btn-success btn-lg"><i class="fa fa-plus-square"></i>Tambah Baru</a>
 						</p>

 						<?php 
//Notifikasi
 						if($this->session->flashdata('sukses')){
 							echo '<p class="alert alert-success">';
 							echo $this->session->flashdata('sukses');
 							echo '</div>';
 						}
 						?>

 						<table class="table table-bordered table-striped " id="example1">
 							<thead>
 								<tr>
 									<th>NO</th>
 									<th>NAMA</th>
 									<th>SLUG</th>
 									<th>URUTAN</th>
 									<th>ACTION</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php $no=1; foreach($kategori as $kategori) { ?> 

 									<tr>
 										<td><?php echo $no ?></td>
 										<td><?php echo $kategori->nama_kategori ?></td>
 										<td><?php echo $kategori->slug_kategori ?></td>
 										<td><?php echo $kategori->urutan ?></td>
 										<td align="center">
 											<a href="<?php echo base_url('admin/kategori/edit/' .$kategori->id_kategori) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

 											<a href="<?php echo base_url('admin/kategori/delete/' .$kategori->id_kategori) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin anda ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i>Hapus</a>
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
