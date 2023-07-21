<div class="content-wrapper" style="background-image:url(<?= base_url('asset/image/bgphrama.jpg') ?>);">
    <section class="content-header">
        <div class="container-fluid">
            <div class="container col-12 pt-3">
                <div class="card shadow p-3 mb-5">
                    <div class="card-body">
                        <?php
                            //create form
                            $attributes = array('id' => 'FrmEditCuti', 'method' => "post", "autocomplete" => "off");
                            echo form_open('', $attributes);
                        ?>
                        <h3>Ketidakhadiran Karyawan</h3>
                        <div class="pt-3">
                            <div class="form-group row">
                                <label for="Nama" class="col-sm-6 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="Nama" name="Nama" value="<?= $data_cuti->Nama; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Nama') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Departemen" class="col-sm-6 col-form-label">Departemen</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="Departemen" name="Departemen" value="<?= $data_cuti->Departemen; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Departemen') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Jabatan" class="col-sm-6 col-form-label">Jabatan</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="Jabatan" name="Jabatan" value="<?= $data_cuti->Jabatan; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Jabatan') ?>
                                    </small>
                                </div>
                            </div>
 
                            <div class="form-group row">
                                <label for="JenisCuti" class="col-sm-6 col-form-label">Jenis Ketidakhadiran</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="JenisCuti" name="JenisCuti" value="<?= $data_cuti->JenisCuti; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('JenisCuti') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Tanggal" class="col-sm-6 col-form-label">Tanggal Mengajukan</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="Tanggal" name="Tanggal" value="<?= date("d-m-Y", strtotime($data_cuti->Tanggal));?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Tanggal') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="CutiAwal" class="col-sm-6 col-form-label">Tanggal Memulai</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="CutiAwal" name="CutiAwal" value="<?= date("d-m-Y", strtotime($data_cuti->CutiAwal));?>">
                                    <small class="text-danger">
                                        <?php echo form_error('CutiAwal') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="CutiAkhir" class="col-sm-6 col-form-label">Tanggal Berakhir</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="CutiAkhir" name="CutiAkhir" value="<?= date("d-m-Y", strtotime($data_cuti->CutiAkhir));?>">
                                    <small class="text-danger">
                                        <?php echo form_error('CutiAkhir') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="AlasanCuti" class="col-sm-6 col-form-label">Alasan Ketidakhadiran</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="CutiId" name="CutiId" value="<?= $data_cuti->CutiId; ?>">
                                    <input readonly class="form-control-plaintext" class="form-control" id="AlasanCuti" name="AlasanCuti" value="<?= $data_cuti->AlasanCuti; ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('AlasanCuti') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="StatusCuti" class="col-sm-3 col-form-label">Status Pengajuan</label>
                                <div class="col-sm-12">
                                    <select class="form-control" id="StatusCuti" name="StatusCuti">
                                        <option value="-" selected disabled>Pilih Status Izin</option>
                                        <option value="Direview" <?php if ($data_cuti->StatusCuti == "Direview") : echo "selected";
                                                                    endif; ?>>Sedang Direview</option>
                                        <option value="Diterima" <?php if ($data_cuti->StatusCuti == "Diterima") : echo "selected"; elseif($data_cuti->JenisCuti != "Off") : echo"disabled";
                                                            endif; ?>>Diterima</option>
                                    </select>
                                    <small class="text-danger">
                                        <?php echo form_error('StatusCuti') ?>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Penolakan" class="col-sm-6 col-form-label">Alasan Penolakan</label>
                                <div class="col-sm-12">
                                    <textarea readonly class="form-control-plaintext" id="Penolakan" name="Penolakan" rows="3"><?= $data_cuti->Penolakan; ?></textarea>
                                    <small class="text-danger">
                                        <?php echo form_error('Penolakan') ?>
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