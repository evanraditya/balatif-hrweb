<div class="content-wrapper">
    <section class="content-header" style="background-image:url(<?= base_url('asset/image/bgphrama.jpg') ?>);">
        <div class="container-fluid">
            <div class="card container mt-3 pt-3">
                <h3><?= $title ?></h3>
                <div class="row ">
                    <div class="col-md-12">
                    <section class="content">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-body">
                            <div class="text-center">
                                <img src="https://github.com/mdo.png" width="128" height="128" alt="User profile picture" class="rounded-circle me-2 photoborder-aktif">
                            </div>

                            <h3 class="profile-username text-center pt-2"><?php echo $data_employee->Nama; ?></h3>

                            <ul class="list-group list-group-unbordered mb-1">
                                <li class="list-group-item">
                                <b>Kategori</b> <br> <p><?php echo $data_employee->Plan; ?> - <?php echo $data_employee->Kategori; ?> </p>
                                </li>
                                <li class="list-group-item">
                                <b>Nomor Induk Karyawan </b> <br> <p></p>
                                </li>
                                <li class="list-group-item">
                                <b>Departemen</b> <br> <p><?php echo $data_employee->Departemen; ?></p>
                                </li>
                                
                                <li class="list-group-item">
                                <b>Jabatan</b> <br> <p><?php echo $data_employee->Jabatan; ?></p>
                                </li>
                                <li class="list-group-item">
                                <b>Tanggal Masuk Kerja</b> <br> <p><?php echo $data_employee->TanggalMasuk; ?></p>
                                </li>
                                <li class="list-group-item">
                                <b>Awal Periode Cuti</b> <br> <p></p>
                                </li>
                                <li class="list-group-item">
                                <b>Akhir Periode Cuti</b> <br> <p></p>
                                </li>
                            </ul> 
                            </div>
                        </div>
                        </div>
                        <!-- NAV TABS -->
                        <div class="col-md-8">
                            <?php if ($this->session->flashdata('message')) :
                                echo $this->session->flashdata('message');
                            endif; ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3>Data Pribadi</h3>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Nama Ibu Kandung</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->NamaIbuKandung; ?></p>  
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>