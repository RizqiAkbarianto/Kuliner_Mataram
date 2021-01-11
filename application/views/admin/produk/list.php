 <!-- Main content -->
 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-12">
 				<div class="card shadow">
 					<!-- /.card-header -->
 					<div class="card-body">
 						<p>
 							<a href="<?php echo base_url('admin/produk/tambah') ?>" class="btn btn-success btn-lg"><i class="fa fa-plus-square"></i> Tambah Baru</a>
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
 									<th>KATEGORI</th>
 									<th>HARGA</th>
 									<th>STATUS</th>
 									<th>ACTION</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php $no=1; foreach($produk as $produk) { ?> 

 									<tr>
 										<td><?php echo $no ?></td>
 										<!-- ukuran gambar -->
 										<td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60"></td>
 										<td><?php echo $produk->nama_produk ?></td>
 										<td><?php echo $produk->nama_kategori ?></td>
 										<td><?php echo number_format($produk->harga,'0',',','.') ?></td>
 										<td><?php echo $produk->status_produk ?></td>
 										<td align="center">


 											<a href="<?php echo base_url('admin/produk/gambar/' .$produk->id_produk) ?>" class="btn btn-success btn-xs"><i class="fa fa-image"></i> Gambar ( <?php echo $produk->total_gambar ?> )</a>

 											<a href="<?php echo base_url('admin/produk/edit/' .$produk->id_produk) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

 											<?php include('delete.php') ?>
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