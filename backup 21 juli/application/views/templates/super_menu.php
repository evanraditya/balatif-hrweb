<!-- NAV LAMA -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url().'asset/image/logo.png'?>" width="30" height="30" class="d-inline-block align-top" alt="">
    Balatif HR 
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('superuser'); ?>">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('superuser/listkaryawan'); ?>">LIST KARYAWAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('superuser/cuti'); ?>">CUTI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('superuser/presensi_update'); ?>">LOG Presensi</a>
      </li>
    </ul>
  </div>

  <div class="dropdown d-flex justify-content-end mr-3">
  <button class="btn btn-outline-light text-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    selamat datang admin, <?php echo $this->session->userdata('NAMA'); ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="<?= site_url('superuser/view/').$this->session->userdata('id')?>">Profile</a>
    <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
  </div>
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
    <a href="<?= site_url('superuser/index')?>" class="brand-link">
      <img src="<?php echo base_url().'asset/image/logo.png'?>" alt="Logo" width="30" height="30" class="brand-image img-circle">
                
      <h5 class="brand-text font-weight-light">Balatif HR</h5>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="r">
          <li class="nav-item">
            <a href="<?= site_url('superuser/index')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                HOME
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('superuser/listkaryawan')?>" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Karyawan Aktif
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('superuser/listkaryawanresign')?>" class="nav-link">
              <i class="nav-icon fas fa-user-slash"></i>
              <p>
                Karyawan non-Aktif
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('superuser/cuti')?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Ketidakhadiran
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= site_url('superuser/presensi_update')?>" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                LOG Presensi
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_agama')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Agama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_gender')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Gender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_pendidikan')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_pendidikankhs')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_plan')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Plan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_kategori')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_departemen')?>"  class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Departemen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('superuser/data_jabatan')?>" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Deskripsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= site_url('superuser/data_bank')?> class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Jenis Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= site_url('superuser/data_goldarah')?> class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Golongan Darah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= site_url('superuser/data_status')?> class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Status Hidup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= site_url('superuser/data_hakakses')?> class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Hak Akses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= site_url('superuser/data_jeniscuti')?> class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Data Jenis Cuti</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= site_url('superuser/data_statuskaryawan')?> class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Status karyawan</p>
                </a>
              </li>
            </ul>
          </li>
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
          <a class="dropdown-item text-center" href="<?php echo base_url('superuser/view/').$this->session->userdata('id');?>">Profil</a>
          <a class="dropdown-item text-center" href="<?php echo base_url('superuser/edit/').$this->session->userdata('id');?>">Edit Profil</a>
          <a class="dropdown-item text-center" href="<?php echo base_url('superuser/add_cuti/').$this->session->userdata('id');?>">Tambah Cuti</a>
          <a class="dropdown-item text-center" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </aside>
</div>
</body>


