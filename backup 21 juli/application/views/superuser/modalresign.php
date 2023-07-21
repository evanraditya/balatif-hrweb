<div class="content-wrapper" style="background-image:url(<?= base_url('asset/image/bgphrama.jpg') ?>);">
    <section class="content-header">
        <div class="container-fluid">
            <div class="container col-8 pt-3">
                <div class="card shadow p-3 mb-5">
                    <div class="card-body">
                        <?php
                            //create form
                            $attributes = array('id' => 'FrmEditEmp', 'method' => "post", "autocomplete" => "off");
                            echo form_open('', $attributes);
                        ?>
                        <h3>Perubahan status karyawan</h3>
                        <div class="pt-3">
                            <div class="form-group row">
                                <label for="Nama" class="col-sm-6 col-form-label">Nama</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                    <input readonly class="form-control-plaintext"  class="form-control" id="Nama" name="Nama" value="<?=$data_employee->Nama; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Nama') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Plan" class="col-sm-6 col-form-label">Kategori 1</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                    <input readonly class="form-control-plaintext"  class="form-control" id="Plan" name="Plan" value="<?=$data_employee->Plan; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Plan') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Kategori" class="col-sm-6 col-form-label">Kategori 2</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                    <input readonly class="form-control-plaintext"  class="form-control" id="Kategori" name="Kategori" value="<?=$data_employee->Kategori; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Kategori') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Departemen" class="col-sm-6 col-form-label">Departemen</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                    <input readonly class="form-control-plaintext"  class="form-control" id="Departemen" name="Departemen" value="<?=$data_employee->Departemen; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Departemen') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Jabatan" class="col-sm-6 col-form-label">Jabatan</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                    <input readonly class="form-control-plaintext"  class="form-control" id="Jabatan" name="Jabatan" value="<?=$data_employee->Jabatan; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Jabatan') ?>
                                    </small>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="StatusKaryawan" class="col-sm-3 col-form-label">Status Karyawan</label>
                                <div class="col-sm-12">
                                    <select class="form-control" id="StatusKaryawan" name="StatusKaryawan">>
                                        <?php foreach($resign as $row) : ?>
                                            <option value="<?= $row->StatusKaryawan?>"<?php if($row->StatusKaryawan==$data_employee->StatusKaryawan):echo"selected";endif;?>><?= $row->StatusKaryawan?></option>
                                        <?php endforeach;  ?>
                                    </select>
                                    <small class="text-danger">
                                        <?php echo form_error('StatusKaryawan') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="TanggalResign" class="col-sm-6 col-form-label">Tanggal Terakhir Masa Kerja</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                    <input type="date" class="form-control"  class="form-control" id="TanggalResign" name="TanggalResign" value="<?=$data_employee->TanggalResign; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('TanggalResign') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 offset pt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mr-1 ml-1 ">Simpan</button>
                                    <a class="btn btn-secondary mr-1 ml-1 " href="javascript:history.back()">Kembali</a>
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