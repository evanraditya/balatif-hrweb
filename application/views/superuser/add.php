<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="container pt-5">
                <h3><?= $title ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a>Employee</a></li>
                        <li class="breadcrumb-item "><a href="<?= base_url('superuser/listkaryawan'); ?>">List Data Karyawan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Data</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                //create form
                                $attributes = array('id' => 'FrmAddEmployee', 'method' => "post", "autocomplete" => "off");
                                echo form_open('', $attributes);
                                ?>
                                <!-- Data Pribadi -->
                                <h2>DATA KARYAWAN</h2>

                                <!-- Nomor Induk Karyawan (NIK) -->
                                <div class="form-group row pt-3">
                                    <label for="NIK" class="col-sm-6 col-form-label">Nomor Induk Karyawan <small>Contoh: BF00069420</small> </label>
                                    
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="NIK" name="NIK" value="<?=set_value('NIK'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NIK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="DIVISI" class="col-sm-6 col-form-label">Divisi </label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="DIVISI" name="DIVISI">
                                        <option value="-" selected disabled>Pilih DIVISI</option>
                                            <option value="Balatif Tenaga" <?php if (set_value('DIVISI') == "Balatif Tenaga") : echo "selected";
                                                                    endif; ?>>Balatif Tenaga</option>
                                            <option value="Balatif Pakis" <?php if (set_value('DIVISI') == "Balatif Pakis") : echo "selected";
                                                                        endif; ?>>Balatif Pakis</option>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('DIVISI') ?>
                                        </small>
                                    </div>
                                </div>

                                <!-- Nomor nama karyawan (NAMA) -->
                                <div class="form-group row">
                                    <label for="NAMA" class="col-sm-6 col-form-label">Nama <small>(Nama Lengkap)</small></label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="NAMA" name="NAMA" value="<?=set_value('NAMA'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NAMA') ?>
                                        </small>
                                    </div>
                                </div>

                                <!-- user name (USERNAME) -->
                                <div class="form-group row pt-3">
                                    <label for="USERNAME" class="col-sm-6 col-form-label">User Name</label>
                                    
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="USERNAME" name="USERNAME" value="<?=set_value('USERNAME'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('USERNAME') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row pt-3">
                                    <label for="PASSWORD" class="col-sm-6 col-form-label">Password</label>
                                    
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="PASSWORD" name="PASSWORD" value="<?=set_value('PASSWORD'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('PASSWORD') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row pt-3">
                                    <label for="HAK_AKSES" class="col-sm-6 col-form-label">Hak Akses</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="HAK_AKSES" name="HAK_AKSES">
                                            <option value="-" selected disabled>Pilih Hak Akses</option>
                                            <option value="1" <?php if (set_value('HAK_AKSES') == "1") : echo "selected";
                                                                    endif; ?>>Admin</option>
                                            <option value="2" <?php if (set_value('HAK_AKSES') == "2") : echo "selected";
                                                                        endif; ?>>Super User</option>
                                            <option value="3" <?php if (set_value('HAK_AKSES') == "3") : echo "selected";
                                                                        endif; ?>>User</option>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('HAK_AKSES') ?>
                                        </small>
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