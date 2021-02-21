 <!-- Main content -->
 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-12">
 				<div class="card shadow">
 					<!-- /.card-header -->
 					<div class="card-body">
 						<p>
 							<a href="<?php echo base_url('admin/promosi/tambah') ?>" class="btn btn-success btn-lg"><i class="fa fa-plus-square"></i> Tambah Baru</a>
 						</p>

 						<?php 
						//Notifikasi
 						if($this->session->flashdata('sukses')){
 							echo '<p class="alert alert-success">';
 							echo $this->session->flashdata('sukses');
 							echo '</div>';
 						}
 						?>

 						<table class="table table-bordered table-striped" id="example1">
 							<thead>
 								<tr>
 									<th>NO</th>
 									<th>GAMBAR</th>
 									<th>NAMA</th>
 									<!-- <th>KATEGORI</th> -->
 									<!-- <th>HARGA</th> -->
 									<th>STATUS</th>
 									<th>ACTION</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php $no=1; foreach($promosi as $promosi) { ?> 

 									<tr>
 										<td><?php echo $no ?></td>
 										<!-- ukuran gambar -->
 										<td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$promosi->gambar) ?>" class="img img-responsive img-thumbnail" width="60"></td>
 										<td><?php echo $promosi->nama_promosi ?></td>
 										<!-- <td><?php echo $promosi->nama_kategori ?></td> -->
 										<!-- <td><?php echo number_format($promosi->harga,'0',',','.') ?></td> -->
 										<td><?php echo $promosi->status_promosi ?></td>
 										<td align="center">


 											

 											<a href="<?php echo base_url('admin/promosi/edit/' .$promosi->id_promosi) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit" ></i></a>

 											<?php include('delete.php') ?>

 											<a href="<?php echo base_url('admin/promosi/gambar/' .$promosi->id_promosi) ?>" class="btn btn-success btn-xs"><i class="fa fa-image"></i> Gambar ( <?php echo $promosi->total_gambar ?> )</a>
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