<div class="content-wrapper" style="background-image:url(<?= base_url('asset/image/bgphrama.jpg') ?>);">
    <section class="content-header">
        <div class="container-fluid">
            <div class="card container mt-3 pt-3">
                <h3><?= $title ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item "><a href="<?= base_url('superuser/kompetensi_update'); ?>">Log data</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail kompetensi Karyawan</li>
                    </ol>
                </nav>
                <div class="row">
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

                                        <h3 class="profile-username text-center pt-2"><?php echo $data_employee->NAMA; ?></h3>

                                        <p class="text-muted text-center"><?php echo $data_employee->BAGIAN; ?></p>

                                        <ul class="list-group list-group-unbordered mb-1">
                                            <li class="list-group-item">
                                            <b>Divisi</b> <br> </p>
                                            </li>
                                            <li class="list-group-item">
                                            <b>Tanggal Bergabung</b> <br> <p><?php echo $data_employee->Tanggal_Bergabung; ?></p>
                                            </li>
                                            <li class="list-group-item">
                                            <b>Tanggal Pensiun</b> <br> <p><?php echo $data_employee->Tanggal_Pensiun; ?></p>
                                            </li>
                                            <li class="list-group-item">
                                            <b>Alamat Email</b> <br> <a href="#"><?php echo $data_employee->EMAIL; ?></a>
                                            </li>
                                        </ul> 
                                        </div>
                                    </div>
                                </div>
                                <!-- NAV TABS -->
                                <div class="col-md-8">
                                    <?php
                                        //create form
                                        $attributes = array('id' => 'FrmKompetensi', 'method' => "post", "autocomplete" => "off");
                                        echo form_open('', $attributes);
                                    ?>
                                    <h3>Data Kompetensi Karyawan</h3>

                                    <div class="form-group row pt-2">
                                        <label for="NIK" class="col-sm-6 col-form-label">Nomor Induk Karyawan</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control" id="NIK" name="NIK" value=" <?= $data_employee->NIK;?>">
                                            <small class="text-danger">
                                                <?php echo form_error('NIK') ?>
                                            </small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Tanggal_Update" class="col-sm-6 col-form-label">Tanggal Mengisi Data</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control"id="Tanggal_Update" name="Tanggal_Update" value="<?=$data_employee->Tanggal_Update;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Tanggal_Update') ?>
                                        </small>
                                        </div>
                                    </div>

                                    <div class="form-group row pt-2">
                                        <label for="AKREDITASI" class="col-sm-6 col-form-label">Akreditasi Karyawan</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control" id="AKREDITASI" name="AKREDITASI" value="<?=$data_employee->AKREDITASI;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AKREDITASI') ?>
                                        </small>
                                        </div>
                                    </div>

                                    <div class="form-group row pt-2">
                                        <label for="LEMBUR" class="col-sm-6 col-form-label">Total Jam Lembur Karyawan</label>
                                        <div class="col-sm-12">
                                            <input readonly class="form-control-plaintext" class="form-control" id="LEMBUR" name="LEMBUR" value="<?=$data_employee->LEMBUR;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('LEMBUR') ?>
                                        </small>
                                        </div>
                                    </div>

                                    <div class="form-group row pt-2">
                                        <label for="TERLAMBAT" class="col-sm-6 col-form-label">Total Terlambat Karyawan</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control"id="TERLAMBAT" name="TERLAMBAT" value="<?=$data_employee->TERLAMBAT;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TERLAMBAT') ?>
                                        </small>
                                        </div>
                                    </div>

                                    <div class="form-group row pt-2">
                                        <label for="BONUS" class="col-sm-6 col-form-label">Bonus Karyawan</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control" id="BONUS" name="BONUS" value="<?=$data_employee->BONUS;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('BONUS') ?>
                                        </small>
                                        </div>
                                    </div>

                                    <div class="form-group row pt-2">
                                        <label for="GAJI" class="col-sm-6 col-form-label">Gaji Karyawan</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control" id="GAJI" name="GAJI" value="<?=$data_employee->GAJI;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('GAJI') ?>
                                        </small>
                                        </div>
                                    </div>

                                    <div class="form-group row pt-2">
                                        <label for="TOTAL_GAJI" class="col-sm-6 col-form-label">Total Gaji Karyawan</label>
                                        <div class="col-sm-12">
                                        <input readonly class="form-control-plaintext" class="form-control" id="TOTAL_GAJI" name="TOTAL_GAJI" value="<?=$data_employee->TOTAL_GAJI;?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TOTAL_GAJI') ?>
                                        </small>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                        <div class="col-sm-12 offset pt-4 d-flex justify-content-center">
                                            <a class="btn btn-secondary mr-1 ml-1" href="javascript:history.back()">Kembali</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>