<?php 
// loading konfigurasi website
$site = $this->konfigurasi_model->listing();

 ?>



<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-navy elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>assets/admin3/index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/admin3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $site->namaweb ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/admin3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('admin/dasbor')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                KATEGORI
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA KATEGORI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TAMBAH KATEGORI</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-luggage-cart"></i>
              <p>
                PRODUK
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/produk')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA PRODUK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/produk/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TAMBAH PRODUK</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                PENGGUNA
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA PENGGUNA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/user/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TAMBAH PENGGUNA</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                KONFIGURASI
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONFIGURASI UMUM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi/logo')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONFIGURASI LOGO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi/icon')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONFIGURASI ICON</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi/slider')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONFIGURASI SLIDER</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi/login')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONFIGURASI LOGIN</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dasbor') ?>">Beranda</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
    <!-- /.content-header -->