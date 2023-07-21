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
                                <b>Tanggal Masuk Kerja</b> <br> <p><?php echo date("d-m-Y", strtotime($data_employee->TanggalMasuk)); ?></p>
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
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Tempat dan Tanggal Lahir</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->TempatLahir;?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahir));?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Jenis Kelamin</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->JenisKelamin; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Golongan Darah</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->GolDarah; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Tinggi Badan</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->TinggiBadan; ?> Cm</p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Berat Badan</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->BeratBadan; ?> Kg</p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Anak ke -</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->AnakKe; ?> dari <?php echo $data_employee->JumlahSaudara;?> Saudara</p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Agama</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->Agama; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Pendidikan Terakhir</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->PendidikanTerakhir; ?> - <?php echo $data_employee->PendidikanKhs; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>NIK (e-KTP)</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->KTP; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Nomor Kartu Keluarga</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->KartuKeluarga; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Nomor NPWP</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                        <p><?php echo $data_employee->NPWP; ?></p> 
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Nomor BPJS Kesehatan</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                        <p><?php echo $data_employee->BPJSK; ?></p> 
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Nomor BPJS Tenaga Kerja</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->BPJSTK; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Rekening Bank</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->Bank; ?> - <?php echo $data_employee->NomorRekening; ?> ( <?php echo $data_employee->AtasNamaRekening; ?> )</p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Email</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->Email; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Nomor Telepon</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->NomorTelepon; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Alamat Asal</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->AlamatAsal; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Alamat Domisili</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->AlamatDomisili; ?></p>  
                                        </div>     
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-4 ">
                                            <b>Status</b>  
                                        </div>
                                        <div class="col-md-8 ">
                                            <p><?php echo $data_employee->Status; ?></p>  
                                        </div>     
                                    </div>
                                
                                    <!-- profil data Keluarga -->
                                    <h3 class="pt-4">Data Keluarga</h3>
                                        <div class="row pt-3" >
                                            <div class="col-md-4">
                                                <b>Nama (Suami / Istri)</b>  
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php echo $data_employee->NamaKeluarga; ?></p>  
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Tempat dan Tanggal Lahir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TempatLahirK; ?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahirK)); ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Agama</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->AgamaK; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Pekerjaan</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->PekerjaanK; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nomor Telepon</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->NoTeleponK; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Alamat</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->AlamatK; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nama Anak ke-1</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->NamaAnakPertama; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Tempat dan Tanggal Lahir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TempatLahirA1; ?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahirA1));?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nama Anak Ke-2</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->NamaAnakKedua; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Tempat dan Tanggal Lahir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TempatLahirA2; ?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahirA2));?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nama Anak Ke-3</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->NamaAnakKetiga; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Tempat dan Tanggal Lahir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TempatLahirA3; ?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahirA3));?></p>  
                                            </div>     
                                        </div>

                                        <!-- profil data Orang Tua -->
                                        <h3 class="pt-4">Data Orang Tua</h3>
                                        <div class="row pt-3" >
                                            <div class="col-md-4">
                                                <b>Nama Ayah</b>  
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php echo $data_employee->NamaAyah; ?></p>  
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Tempat dan Tanggal Lahir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TempatLahirAyah;?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahirAyah));?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Agama</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->AgamaAyah; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Pendidikan Terakhir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->PendidikanTerakhirAyah; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nomor Telepon Ayah</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TeleponAyah;?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Alamat</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->AlamatDomisiliAyah;?></p>  
                                            </div>     
                                        </div>
                                        <div class="row pt-3" >
                                            <div class="col-md-4">
                                                <b>Nama Ibu</b>  
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php echo $data_employee->NamaIbu; ?></p>  
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Tempat dan Tanggal Lahir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TempatLahirIbu;?>, <?php echo date("d-m-Y", strtotime($data_employee->TanggalLahirIbu));?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Agama</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->AgamaIbu;?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Pendidikan Terakhir</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->PendidikanTerakhirIbu;?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nomor Telepon Ibu</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->TeleponIbu;?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Alamat</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->AlamatDomisiliIbu;?></p>  
                                            </div>     
                                        </div>
                                        <!-- profil data Orang Tua -->
                                        <h3 class="pt-4">Data Login</h3>
                                        <div class="row pt-3" >
                                            <div class="col-md-4">
                                                <b>Hak Akses</b>  
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php echo $data_employee->HakAkses; ?></p>  
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4">
                                                <b>Email</b>  
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php echo $data_employee->Email; ?></p>  
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Password</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_employee->PASSWORD; ?></p>  
                                            </div>     
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