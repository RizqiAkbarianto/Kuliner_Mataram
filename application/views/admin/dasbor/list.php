 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card shadow">
          <!-- /.card-header -->
          <div class="card-body">

           <!-- Main content -->
           <section class="content">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3><?php echo $total_produk; ?><sup style="font-size: 20px">  Produk</sup></h3>


                      <p>Jumlah produk yang tersedia</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3><?php echo $total_kategori; ?><sup style="font-size: 20px">  Kategori</sup></h3>
                      <!-- 53<sup style="font-size: 20px">%</sup> -->
                      <p>Jumlah kategori yang tersedia</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box" style="background-color: #8F8D00">
                    <div class="inner text-white">
                      <h3><?php echo $total_user; ?><sup style="font-size: 20px">  User</sup></h3>

                      <p>Jumlah user yang terdaftar</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                  </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>

                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card shadow">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-luggage-cart mr-1"></i>
            Tabel Produk
          </h3>
          <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="<?= base_url('admin/produk')?>">Lihat detail..</a>
              </li>
            </ul>
          </div>
        </div><!-- /.card-header -->
        <div class="card-body">
         <table class="table table-bordered table-striped" id="example2">
          <thead>
            <tr>
              <th>NO</th>
              <th>GAMBAR</th>
              <th>NAMA</th>
              <th>KATEGORI</th>


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
              </tr>

              <?php $no++; } ?>
            </tbody>

          </table>
        </div><!-- /.card-body -->
      </div>
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

      <!-- Map card -->
      <div class="card shadow">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-plus-square mr-1"></i>
            Tabel Kategori
          </h3>
          <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="<?= base_url('admin/kategori')?>">Lihat detail..</a>
              </li>
            </ul>
          </div>
        </div><!-- /.card-header -->
        <div class="card-body">
         <table class="table table-bordered table-striped " id="example2">
          <thead>
            <tr>
              <th>NO</th>
              <th>NAMA</th>
              <th>SLUG</th>
              <th>URUTAN</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($kategori as $kategori) { ?> 

              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $kategori->nama_kategori ?></td>
                <td><?php echo $kategori->slug_kategori ?></td>
                <td><?php echo $kategori->urutan ?></td>
              </tr>

              <?php $no++; } ?>
            </tbody>

          </table>
        </div><!-- /.card-body -->
      </div>

      <!-- /.card -->

      <div class="card shadow">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-user-alt mr-1"></i>
            Tabel User
          </h3>
          <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="<?= base_url('admin/user')?>">Lihat detail..</a>
              </li>
            </ul>
          </div>
          </div><!-- /.card-header -->
          <div class="card-body">
           <table class="table table-bordered table-striped" id="example2">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>LEVEL</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($user as $user) { ?> 

                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $user->nama ?></td>
                  <td><?php echo $user->email ?></td>
                  <td><?php echo $user->akses_level ?></td>
                </tr>

                <?php $no++; } ?>
              </tbody>

            </table>
          </div><!-- /.card-body -->
        </div>

      </section>
    </div>
  </div>
</section>
