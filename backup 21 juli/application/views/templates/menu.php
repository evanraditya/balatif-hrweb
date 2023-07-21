<!-- Nav LAMA -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url().'asset/image/logo.png'?>" width="30" height="30" class="d-inline-block align-top" alt="">
    Balatif HR 
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('employee'); ?>">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('employee/listkaryawan'); ?>">LIST KARYAWAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('employee/cuti'); ?>">CUTI</a>
      </li>
    </ul>
  </div>
  <div>
    <b class="d-flex justify-content-end mr-3"><a href="<?php echo base_url('auth/logout'); ?>" class="text-secondary">selamat datang admin,<?php echo $this->session->userdata('NAMA'); ?></a></b>
  </div>
</nav> -->


<!-- NAV BARU -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </nav>

  <aside class="main-sidebar main-sidebar-custom sidebar-light-primary elevation-4">
    <a href="<?= site_url('employee/index')?>" class="brand-link">
      <img src="<?php echo base_url().'asset/image/logo.png'?>" alt="Logo" width="30" height="30" class="brand-image img-circle">
                
      <h5 class="brand-text font-weight-light">Balatif HR</h5>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="r">
          <li class="nav-item">
            <a href="<?= site_url('employee/index')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                HOME
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('employee/listkaryawan')?>" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Data Karyawan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('employee/cuti')?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Ketidakhadiran
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= site_url('employee/presensi_update')?>" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                LOG Presensi
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
    </div>

    <div class="sidebar-custom">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="user-panel d-flex">
            <div class="image mt-1">
            <img src="https://github.com/mdo.png" alt="" width="35" height="35" class="rounded-circle me-2">
            </div>
            <div class="info mt-1">
              <h6 class="text-secondary"><?php echo $this->session->userdata('Nama'); ?></h6>
            </div>
          </div>
        </a>
        <div class="dropdown-menu col-md-11 ml-1" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item text-center" href="<?php echo base_url('employee/view/').$this->session->userdata('id');?>">Profil</a>
          <a class="dropdown-item text-center" href="<?php echo base_url('employee/edit/').$this->session->userdata('id');?>">Edit Profil</a>
          <a class="dropdown-item text-center" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </aside>
</div>
</body>