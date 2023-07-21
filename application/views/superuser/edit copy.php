<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Employee</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('employee'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditEmployee', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="NAMA" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                            <input type="text" class="form-control" id="NAMA" name="NAMA" value=" <?= $data_employee->NAMA; ?>">
                            <small class="text-danger">
                                <?php echo form_error('NAMA') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JK" name="JK" value="Laki-laki" <?php if ($data_employee->JK == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JK">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JK2" name="JK" value="Perempuan" <?php if ($data_employee->JK == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JK2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('JK') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="ALAMAT" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="ALAMAT" name="ALAMAT" rows="3"><?= $data_employee->ALAMAT; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('ALAMAT') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="AGAMA" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="AGAMA" name="AGAMA">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_employee->AGAMA == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_employee->AGAMA == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_employee->AGAMA == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_employee->AGAMA == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_employee->AGAMA == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_employee->AGAMA == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('AGAMA') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="HP" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="HP" name="HP" value="<?= $data_employee->HP; ?>">
                            <small class="text-danger">
                                <?php echo form_error('HP') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="EMAIL" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="EMAIL" name="EMAIL" value="<?= $data_employee->EMAIL; ?>">
                            <small class="text-danger">
                                <?php echo form_error('EMAIL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>