 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <a href="#" class="d-block text-center" >Hai. <?php echo $this->session->userdata('username'); ?></a>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item menu-open">
            <a href="<?= base_url('login/logout')?>" class="nav-link active ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
                LOGOUT
            </a>
          </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->