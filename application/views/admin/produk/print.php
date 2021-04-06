<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
</head>
<body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            <img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="" style="max-height: 50px">
            <small class="float-right">Tanggal: <?php echo $tanggal ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <hr>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
          <address>
            <h3><strong><?php echo $title ?></strong></h3>
            Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= nl2br($site->alamat) ?><br>
            Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $site->email ?><br>
            Telepon &nbsp;&nbsp;&nbsp;: <?= $site->telepon ?><br>
            Instagram  :  @Kuliner.Mataram
          </address>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-bordered table-striped" id="example2">
           <thead>
            <tr>
              <th align="center">NO</th>
              <th>GAMBAR</th>
              <th>NAMA PRODUK</th>
              <th>INSTAGRAM</th>
              <th>TANGGAL POST</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($print as $print) { ?> 

              <tr>
                <td align="center"><?php echo $no ?></td>
                <!-- ukuran gambar -->
                <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$print->gambar) ?>" class="img img-responsive img-thumbnail" width="60"></td>
                <td><?php echo $print->nama_produk ?></td>
                <td><?php echo $print->instagram ?></td>
                <td><?php echo $print->tanggal_post ?> </td>
              </tr>
              <?php $no++; } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
  <!-- Page specific script -->
</body>
</html>
