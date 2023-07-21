<div class="content-wrapper" >
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="container pt-5">
                <h3><?= $title ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <p>Pengajuan ketidakhadiran <?= $data_employee->Nama; ?>, <?= $data_employee->Plan; ?>-<?= $data_employee->Kategori; ?></p>
                    </ol>
                </nav>
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                //create form
                                $attributes = array('id' => 'FrmAddCuti', 'method' => "post", "autocomplete" => "off");
                                echo form_open('', $attributes);
                                ?>
                                <!-- Data Cuti Karyawan -->
                                <h2>Cuti Karyawan</h2>

                                <div class="form-group row pt-3">
                                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Nama" name="Nama" value=" <?= $data_employee->Nama; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Nama') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Departemen" class="col-sm-2 col-form-label">Departemen</label>
                                    <div class="col-sm-10">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Departemen" name="Departemen" value=" <?= $data_employee->Departemen; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Departemen') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Jabatan" name="Jabatan" value=" <?= $data_employee->Jabatan; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Jabatan') ?>
                                        </small>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="JenisCuti" class="col-sm-2 col-form-label">Jenis Ketidakhadiran</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="JenisCuti" name="JenisCuti">
                                            <?php foreach($JenisCuti as $row) : ?>
                                                <option value="<?= $row->JenisCuti?>"<?php if(set_value('JenisCuti') ==$row->JenisCuti):echo"selected"; elseif($data_employee->Jabatan != "Borongan" && $row->JenisCuti == "Off")  : echo"disabled";endif;?>><?= $row->JenisCuti?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('JenisCuti') ?>
                                        </small>
                                    </div>
                                </div>

                                <!-- <div class="form-group row pt-3">
                                    <label for="TANGGAL" class="col-sm-2 col-form-label">Tanggal Mengajukan Cuti</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="TANGGAL" name="TANGGAL" value=" <?= set_value('TANGGAL'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TANGGAL') ?>
                                        </small>
                                    </div>
                                </div> -->

                                <div class="form-group row pt-3">
                                    <label for="CutiAwal" class="col-sm-2 col-form-label">Tanggal Memulai</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="CutiAwal" name="CutiAwal" value=" <?= set_value('CutiAwal'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('CutiAwal') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row pt-3">
                                    <label for="CutiAkhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="CutiAkhir" name="CutiAkhir" value=" <?= set_value('CutiAkhir'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('CutiAkhir') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AlasanCuti" class="col-sm-2 col-form-label">Alasan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="AlasanCuti" name="AlasanCuti" rows="3"><?= set_value('AlasanCuti'); ?></textarea>
                                        <small class="text-danger">
                                            <?php echo form_error('AlasanCuti') ?>
                                        </small>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pic_file" class="col-sm-2 col-form-label">Pilih Gambar*:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="pic_file" id="pic_file">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12 offset pt-4 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mr-1 ml-1">Simpan</button>
                                        <a class="btn btn-secondary mr-1 ml-1" href="javascript:history.back()">Kembali</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


