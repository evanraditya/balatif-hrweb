<div class="container pt-5">
    <h3><?= $title ?></h3>
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
                    <h2>DATA PRIBADI</h2>

                    <!-- Nomor Induk Karyawan (NIK) -->
                    <div class="form-group row pt-3">
                        <label for="NIK" class="col-sm-6 col-form-label"><b>Nomor Induk Karyawan</b> <small>Contoh: BF00069420</small> </label>
                        
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NIK" name="NIK" placeholder="exp: BF0123456789" value=" <?= set_value('NIK'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NIK') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Nomor nama karyawan (NAMA) -->
                    <div class="form-group row pt-3">
                        <label for="NAMA" class="col-sm-3 col-form-label"><b>Nama</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NAMA" name="NAMA" value=" <?= set_value('NAMA'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NAMA') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Tempat Lahir (Tempat_Lahir) -->
                    <div class="form-group row">
                        <label for="Tempat_Lahir" class="col-sm-3 col-form-label"><b>Tempat Lahir</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Tempat_Lahir" name="Tempat_Lahir" value=" <?= set_value('Tempat_Lahir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tempat_Lahir') ?>
                            </small>
                        </div>
                    </div>
                    
                    <!-- Tanggal Lahir (Tangga_Lahir) -->
                    <div class="form-group row">
                        <label for="Tanggal_Lahir" class="col-sm-3 col-form-label"><b>Tanggal Lahir</b></label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" value=" <?= set_value('Tanggal_Lahir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tanggal_Lahir') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Gender (GENDER) -->
                    <div class="form-group row">
                        <label for="GENDER" class="col-sm-3 col-form-label"><b>GENDER</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="GENDER" name="GENDER">
                            <option value="-" selected disabled>Pilih Gender</option>
                                <option value="Laki-Laki" <?php if (set_value('GENDER') == "Laki-Laki") : echo "selected";
                                                        endif; ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if (set_value('GENDER') == "Perempuan") : echo "selected";
                                                            endif; ?>>Perempuan</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('GENDER') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Bagian / Divisi (BAGIAN) -->
                    <div class="form-group row">
                        <label for="BAGIAN" class="col-sm-3 col-form-label"><b>Bagian</b></label>      
                        <div class="col-sm-12">   
                            <select class="form-control" id="BAGIAN" name="BAGIAN">
                                <option value="-" selected disabled>Pilih Bagian</option>
                                <option value="Gudang" <?php if (set_value('BAGIAN') == "Gudang") : echo "selected";
                                                        endif; ?>>Gudang</option>
                                <option value="IT" <?php if (set_value('BAGIAN') == "IT") : echo "selected";
                                                        endif; ?>>IT</option>
                                <option value="WEB dev" <?php if (set_value('BAGIAN') == "WEB dev") : echo "selected";
                                                            endif; ?>>WEB dev</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('BAGIAN') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Tanggal Bergabung (Tanggal_Bergabung) -->
                    <div class="form-group row">
                        <label for="Tanggal_Bergabung" class="col-sm-3 col-form-label"><b>Tanggal Bergabung</b></label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="Tanggal_Bergabung" name="Tanggal_Bergabung" value=" <?= set_value('Tanggal_Bergabung'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tanggal_Bergabung') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Tanggal Pensiun (Tanggal_Pensiun) -->
                    <div class="form-group row">
                        <label for="Tanggal_Pensiun" class="col-sm-3 col-form-label"><b>Tanggal Pensiun</b></label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="Tanggal_Pensiun" name="Tanggal_Pensiun" value=" <?= set_value('Tanggal_Pensiun'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tanggal_Pensiun') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="AGAMA" class="col-sm-3 col-form-label"><b>Agama</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="AGAMA" name="AGAMA">
                                <option value="-" selected disabled>Pilih Agama</option>
                                <option value="Islam" <?php if (set_value('AGAMA') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('AGAMA') == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('AGAMA') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('AGAMA') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('AGAMA') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('AGAMA') == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('AGAMA') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PENDIDIKAN" class="col-sm-3 col-form-label"><b>Pendidikan Terakhir</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="PENDIDIKAN" name="PENDIDIKAN">
                                <option value="-" selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="TK" <?php if (set_value('PENDIDIKAN') == "TK") : echo "selected";
                                                        endif; ?>>TK</option>
                                <option value="SD" <?php if (set_value('PENDIDIKAN') == "SD") : echo "selected";
                                                        endif; ?>>SD</option>
                                <option value="SMP" <?php if (set_value('PENDIDIKAN') == "SMP") : echo "selected";
                                                        endif; ?>>SMP</option>
                                <option value="SMA" <?php if (set_value('PENDIDIKAN') == "SMA") : echo "selected";
                                                        endif; ?>>SMA</option>
                                <option value="SMK" <?php if (set_value('PENDIDIKAN') == "SMK") : echo "selected";
                                                            endif; ?>>SMK</option>
                                <option value="S1" <?php if (set_value('PENDIDIKAN') == "S1") : echo "selected";
                                                        endif; ?>>S1</option>
                                <option value="S2" <?php if (set_value('PENDIDIKAN') == "S2") : echo "selected";
                                                        endif; ?>>S2</option>
                                <option value="D1" <?php if (set_value('PENDIDIKAN') == "D1") : echo "selected";
                                                        endif; ?>>D1</option>
                                <option value="D2" <?php if (set_value('PENDIDIKAN') == "D2") : echo "selected";
                                                        endif; ?>>D2</option>                        
                                <option value="D3" <?php if (set_value('PENDIDIKAN') == "D3") : echo "selected";
                                                        endif; ?>>D3</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('PENDIDIKAN') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="STATUS" class="col-sm-3 col-form-label"><b>Status</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="STATUS" name="STATUS">
                                <option value="-" selected disabled>Pilih Status</option>
                                <option value="Sudah Menikah" <?php if (set_value('STATUS') == "Sudah Menikah") : echo "selected";
                                                        endif; ?>>Sudah Menikah</option>
                                <option value="Belum Menikah" <?php if (set_value('STATUS') == "Belum Menikah") : echo "selected";
                                                            endif; ?>>Belum Menikah</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('STATUS') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="GOLDAR" class="col-sm-3 col-form-label"><b>Golongan Darah</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="GOLDAR" name="GOLDAR">
                                <option value="-" selected disabled>Pilih Golongan Darah</option>
                                <option value="A" <?php if (set_value('GOLDAR') == "A") : echo "selected";
                                                        endif; ?>>A</option>
                                <option value="A+" <?php if (set_value('GOLDAR') == "A+") : echo "selected";
                                                            endif; ?>>A+</option>
                                <option value="B" <?php if (set_value('GOLDAR') == "B") : echo "selected";
                                                        endif; ?>>B</option>
                                <option value="B+" <?php if (set_value('GOLDAR') == "B+") : echo "selected";
                                                        endif; ?>>B+</option>
                                <option value="O" <?php if (set_value('GOLDAR') == "O") : echo "selected";
                                                        endif; ?>>O</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('GOLDAR') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="TINGGI" class="col-sm-3 col-form-label"><b>Tinggi Badan (Cm)</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="TINGGI" name="TINGGI" value=" <?= set_value('TINGGI'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('TINGGI') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="BERAT" class="col-sm-3 col-form-label"><b>Berat Badan (Kg)</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="BERAT" name="BERAT" value=" <?= set_value('BERAT'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('BERAT') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Anak_Ke" class="col-sm-3 col-form-label"><b>Anak ke-</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Anak_Ke" name="Anak_Ke" value=" <?= set_value('Anak_Ke'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Anak_Ke') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Jumlah_Saudara" class="col-sm-3 col-form-label"><b>Jumlah Saudara</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Jumlah_Saudara" name="Jumlah_Saudara" value=" <?= set_value('Jumlah_Saudara'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Jumlah_Saudara') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="KK" class="col-sm-3 col-form-label"><b>KK</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="KK" name="KK" value=" <?= set_value('KK'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('KK') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="KTP" class="col-sm-3 col-form-label"><b>KTP (NIK)</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="KTP" name="KTP" value=" <?= set_value('KTP'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('KTP') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NPWP" class="col-sm-3 col-form-label"><b>NPWP</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NPWP" name="NPWP" value=" <?= set_value('NPWP'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NPWP') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="BPJSK" class="col-sm-3 col-form-label"><b>BPJS Kesehatan</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="BPJSK" name="BPJSK" value=" <?= set_value('BPJSK'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('BPJSK') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="BPJSTK" class="col-sm-3 col-form-label"><b>BPJS Tenaga Kerja</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="BPJSTK" name="BPJSTK" value=" <?= set_value('BPJSTK'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('BPJSTK') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat_Asal" class="col-sm-3 col-form-label"><b>Alamat Asal</b></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="Alamat_Asal" name="Alamat_Asal" rows="3"><?= set_value('Alamat_Asal'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat_Asal') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NOHP_Asal" class="col-sm-3 col-form-label"><b>No.Hp Asal</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NOHP_Asal" name="NOHP_Asal" value="<?= set_value('NOHP_Asal'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NOHP_Asal') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat_Sekarang" class="col-sm-3 col-form-label"><b>Alamat Sekarang</b></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="Alamat_Sekarang" name="Alamat_Sekarang" rows="3"><?= set_value('Alamat_Sekarang'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat_Sekarang') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NOHP_Sekarang" class="col-sm-3 col-form-label"><b>No.Hp Sekarang</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NOHP_Sekarang" name="NOHP_Sekarang" value="<?= set_value('NOHP_Sekarang'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NOHP_Sekarang') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="EMAIL" class="col-sm-3 col-form-label"><b>Email</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="EMAIL" name="EMAIL" value="<?= set_value('EMAIL'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('EMAIL') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Data Keluarga-->
                    <h2 class="pt-3">DATA KELUARGA</h2>

                    <div class="form-group row pt-3">
                        <label for="HUBUNGAN" class="col-sm-3 col-form-label"><b>Hubungan Keluarga</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="HUBUNGAN" name="HUBUNGAN">
                                <option value="-" selected disabled>Pilih Hubungan Keluarga</option>
                                <option value="Suami" <?php if (set_value('HUBUNGAN') == "Suami") : echo "selected";
                                                        endif; ?>>Suami</option>
                                <option value="Istri" <?php if (set_value('HUBUNGAN') == "Istri") : echo "selected";
                                                            endif; ?>>Istri</option>
                                <option value="Tidak Ada" <?php if (set_value('HUBUNGAN') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('HUBUNGAN') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NAMAKEL" class="col-sm-3 col-form-label"><b>Nama</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NAMAKEL" name="NAMAKEL" value=" <?= set_value('NAMAKEL'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NAMAKEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tempat_LahirKEL" class="col-sm-3 col-form-label"><b>Tempat Lahir</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Tempat_LahirKEL" name="Tempat_LahirKEL" value=" <?= set_value('Tempat_LahirKEL'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tempat_LahirKEL') ?>
                            </small>
                        </div>
                    </div>

                    <!-- Tanggal Lahir Keluarga (Tanggal_Bergabung) -->
                    <div class="form-group row">
                        <label for="Tanggal_LahirKEL" class="col-sm-3 col-form-label"><b>Tanggal Lahir</b></label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="Tanggal_LahirKEL" name="Tanggal_LahirKEL" value=" <?= set_value('Tanggal_LahirKEL'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tanggal_LahirKEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="AGAMAKEL" class="col-sm-3 col-form-label"><b>Agama</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="AGAMAKEL" name="AGAMAKEL">
                                <option value="-" selected disabled>Pilih Agama</option>
                                <option value="Islam" <?php if (set_value('AGAMAKEL') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('AGAMAKEL') == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('AGAMAKEL') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('AGAMAKEL') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('AGAMAKEL') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('AGAMAKEL') == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                                <option value="Tidak Ada" <?php if (set_value('AGAMAKEL') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('AGAMAKEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PENDIDIKANKEL" class="col-sm-3 col-form-label"><b>Pendidikan Terakhir</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="PENDIDIKANKEL" name="PENDIDIKANKEL">
                                <option value="-" selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="TK" <?php if (set_value('PENDIDIKANKEL') == "TK") : echo "selected";
                                                        endif; ?>>TK</option>
                                <option value="SD" <?php if (set_value('PENDIDIKANKEL') == "SD") : echo "selected";
                                                        endif; ?>>SD</option>
                                <option value="SMP" <?php if (set_value('PENDIDIKANKEL') == "SMP") : echo "selected";
                                                        endif; ?>>SMP</option>
                                <option value="SMA" <?php if (set_value('PENDIDIKANKEL') == "SMA") : echo "selected";
                                                        endif; ?>>SMA</option>
                                <option value="SMK" <?php if (set_value('PENDIDIKANKEL') == "SMK") : echo "selected";
                                                            endif; ?>>SMK</option>
                                <option value="S1" <?php if (set_value('PENDIDIKANKEL') == "S1") : echo "selected";
                                                        endif; ?>>S1</option>
                                <option value="S2" <?php if (set_value('PENDIDIKANKEL') == "S2") : echo "selected";
                                                        endif; ?>>S2</option>
                                <option value="D1" <?php if (set_value('PENDIDIKANKEL') == "D1") : echo "selected";
                                                        endif; ?>>D1</option>
                                <option value="D2" <?php if (set_value('PENDIDIKANKEL') == "D2") : echo "selected";
                                                        endif; ?>>D2</option>                        
                                <option value="D3" <?php if (set_value('PENDIDIKANKEL') == "D3") : echo "selected";
                                                        endif; ?>>D3</option>
                                <option value="Tidak Ada" <?php if (set_value('PENDIDIKANKEL') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>                        
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('PENDIDIKANKEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PEKERJAANKEL" class="col-sm-3 col-form-label"><b>Pekerjaan</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="PEKERJAANKEL" name="PEKERJAANKEL" value=" <?= set_value('PEKERJAANKEL'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('PEKERJAANKEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ALAMATKEL" class="col-sm-3 col-form-label"><b>Alamat</b></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="ALAMATKEL" name="ALAMATKEL" rows="3"><?= set_value('ALAMATKEL'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('ALAMATKEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NOHP_KEL" class="col-sm-3 col-form-label"><b>No.Hp</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NOHP_KEL" name="NOHP_KEL" value="<?= set_value('NOHP_KEL'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NOHP_KEL') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="JUMLAH_ANAK" class="col-sm-3 col-form-label"><b>Jumlah Anak</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="JUMLAH_ANAK" name="JUMLAH_ANAK" value="<?= set_value('JUMLAH_ANAK'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('JUMLAH_ANAK') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="USIA_ANAK1" class="col-sm-3 col-form-label"><b>Usia Anak ke-1</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="USIA_ANAK1" name="USIA_ANAK1" value="<?= set_value('USIA_ANAK1'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('USIA_ANAK1') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="USIA_ANAK2" class="col-sm-3 col-form-label"><b>Usia Anak ke-2</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="USIA_ANAK2" name="USIA_ANAK2" value="<?= set_value('USIA_ANAK2'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('USIA_ANAK2') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="USIA_ANAK3" class="col-sm-3 col-form-label"><b>Usia Anak ke-3</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="USIA_ANAK3" name="USIA_ANAK3" value="<?= set_value('USIA_ANAK3'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('USIA_ANAK3') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="USIA_ANAK4" class="col-sm-3 col-form-label"><b>Usia Anak ke-4</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="USIA_ANAK4" name="USIA_ANAK4" value="<?= set_value('USIA_ANAK4'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('USIA_ANAK4') ?>
                            </small>
                        </div>
                    </div>
                    
                    <!-- Data Keluarga -->
                    <h3 class="pt-3">Data Orang Tua</h3>

                    <div class="form-group row pt-3">
                        <label for="AYAH" class="col-sm-3 col-form-label"><b>Nama Ayah</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="AYAH" name="AYAH" value=" <?= set_value('AYAH'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('AYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tempat_LahirAYAH" class="col-sm-3 col-form-label"><b>Tempat Lahir Ayah</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Tempat_LahirAYAH" name="Tempat_LahirAYAH" value=" <?= set_value('Tempat_LahirAYAH'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tempat_LahirAYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tanggal_LahirAYAH" class="col-sm-3 col-form-label"><b>Tanggal Lahir Ayah</b></label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="Tanggal_LahirAYAH" name="Tanggal_LahirAYAH" value=" <?= set_value('Tanggal_LahirAYAH'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tanggal_LahirAYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="AGAMA_AYAH" class="col-sm-3 col-form-label"><b>Agama Ayah</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="AGAMA_AYAH" name="AGAMA_AYAH">
                                <option value="-" selected disabled>Pilih Agama</option>
                                <option value="Islam" <?php if (set_value('AGAMA_AYAH') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('AGAMA_AYAH') == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('AGAMA_AYAH') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('AGAMA_AYAH') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('AGAMA_AYAH') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('AGAMA_AYAH') == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                                <option value="Tidak Ada" <?php if (set_value('AGAMA_AYAH') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('AGAMA_AYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PENDIDIKAN_AYAH" class="col-sm-3 col-form-label"><b>Pendidikan Terakhir Ayah</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="PENDIDIKAN_AYAH" name="PENDIDIKAN_AYAH">
                                <option value="-" selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="TK" <?php if (set_value('PENDIDIKAN_AYAH') == "TK") : echo "selected";
                                                        endif; ?>>TK</option>
                                <option value="SD" <?php if (set_value('PENDIDIKAN_AYAH') == "SD") : echo "selected";
                                                        endif; ?>>SD</option>
                                <option value="SMP" <?php if (set_value('PENDIDIKAN_AYAH') == "SMP") : echo "selected";
                                                        endif; ?>>SMP</option>
                                <option value="SMA" <?php if (set_value('PENDIDIKAN_AYAH') == "SMA") : echo "selected";
                                                        endif; ?>>SMA</option>
                                <option value="SMK" <?php if (set_value('PENDIDIKAN_AYAH') == "SMK") : echo "selected";
                                                            endif; ?>>SMK</option>
                                <option value="S1" <?php if (set_value('PENDIDIKAN_AYAH') == "S1") : echo "selected";
                                                        endif; ?>>S1</option>
                                <option value="S2" <?php if (set_value('PENDIDIKAN_AYAH') == "S2") : echo "selected";
                                                        endif; ?>>S2</option>
                                <option value="D1" <?php if (set_value('PENDIDIKAN_AYAH') == "D1") : echo "selected";
                                                        endif; ?>>D1</option>
                                <option value="D2" <?php if (set_value('PENDIDIKAN_AYAH') == "D2") : echo "selected";
                                                        endif; ?>>D2</option>                        
                                <option value="D3" <?php if (set_value('PENDIDIKAN_AYAH') == "D3") : echo "selected";
                                                        endif; ?>>D3</option>
                                <option value="Tidak Ada" <?php if (set_value('PENDIDIKAN_AYAH') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>                        
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('PENDIDIKAN_AYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PEKERJAAN_AYAH" class="col-sm-3 col-form-label"><b>Pekerjaan Ayah</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="PEKERJAAN_AYAH" name="PEKERJAAN_AYAH" value=" <?= set_value('PEKERJAAN_AYAH'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('PEKERJAAN_AYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ALAMAT_AYAH" class="col-sm-3 col-form-label"><b>Alamat Ayah</b></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="ALAMAT_AYAH" name="ALAMAT_AYAH" rows="3"><?= set_value('ALAMAT_AYAH'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('ALAMAT_AYAH') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NOHP_AYAH" class="col-sm-3 col-form-label"><b>No.Hp Ayah</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NOHP_AYAH" name="NOHP_AYAH" value="<?= set_value('NOHP_AYAH'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NOHP_AYAH') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="IBU" class="col-sm-3 col-form-label"><b>Nama Ibu</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="IBU" name="IBU" value=" <?= set_value('IBU'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('IBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tempat_LahirIBU" class="col-sm-3 col-form-label"><b>Tempat Lahir Ibu</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Tempat_LahirIBU" name="Tempat_LahirIBU" value=" <?= set_value('Tempat_LahirIBU'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tempat_LahirIBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tanggal_LahirIBU" class="col-sm-3 col-form-label"><b>Tanggal Lahir Ibu</b></label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="Tanggal_LahirIBU" name="Tanggal_LahirIBU" value=" <?= set_value('Tanggal_LahirIBU'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Tanggal_LahirIBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="AGAMA_IBU" class="col-sm-3 col-form-label"><b>Agama Ibu</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="AGAMA_IBU" name="AGAMA_IBU">
                                <option value="-" selected disabled>Pilih Agama</option>
                                <option value="Islam" <?php if (set_value('AGAMA_IBU') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('AGAMA_IBU') == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('AGAMA_IBU') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('AGAMA_IBU') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('AGAMA_IBU') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('AGAMA_IBU') == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                                <option value="Tidak Ada" <?php if (set_value('AGAMA_IBU') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('AGAMA_IBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PENDIDIKAN_IBU" class="col-sm-3 col-form-label"><b>Pendidikan Terakhir Ibu</b></label>
                        <div class="col-sm-12">
                            <select class="form-control" id="PENDIDIKAN_IBU" name="PENDIDIKAN_IBU">
                                <option value="-" selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="TK" <?php if (set_value('PENDIDIKAN_IBU') == "TK") : echo "selected";
                                                        endif; ?>>TK</option>
                                <option value="SD" <?php if (set_value('PENDIDIKAN_IBU') == "SD") : echo "selected";
                                                        endif; ?>>SD</option>
                                <option value="SMP" <?php if (set_value('PENDIDIKAN_IBU') == "SMP") : echo "selected";
                                                        endif; ?>>SMP</option>
                                <option value="SMA" <?php if (set_value('PENDIDIKAN_IBU') == "SMA") : echo "selected";
                                                        endif; ?>>SMA</option>
                                <option value="SMK" <?php if (set_value('PENDIDIKAN_IBU') == "SMK") : echo "selected";
                                                            endif; ?>>SMK</option>
                                <option value="S1" <?php if (set_value('PENDIDIKAN_IBU') == "S1") : echo "selected";
                                                        endif; ?>>S1</option>
                                <option value="S2" <?php if (set_value('PENDIDIKAN_IBU') == "S2") : echo "selected";
                                                        endif; ?>>S2</option>
                                <option value="D1" <?php if (set_value('PENDIDIKAN_IBU') == "D1") : echo "selected";
                                                        endif; ?>>D1</option>
                                <option value="D2" <?php if (set_value('PENDIDIKAN_IBU') == "D2") : echo "selected";
                                                        endif; ?>>D2</option>                        
                                <option value="D3" <?php if (set_value('PENDIDIKAN_IBU') == "D3") : echo "selected";
                                                        endif; ?>>D3</option>
                                <option value="Tidak Ada" <?php if (set_value('PENDIDIKAN_IBU') == "Tidak Ada") : echo "selected";
                                                        endif; ?>>Tidak Ada</option>                        
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('PENDIDIKAN_IBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="PEKERJAAN_IBU" class="col-sm-3 col-form-label"><b>Pekerjaan Ibu</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="PEKERJAAN_IBU" name="PEKERJAAN_IBU" value=" <?= set_value('PEKERJAAN_IBU'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('PEKERJAAN_IBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ALAMAT_IBU" class="col-sm-3 col-form-label"><b>Alamat Ibu</b></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="ALAMAT_IBU" name="ALAMAT_IBU" rows="3"><?= set_value('ALAMAT_IBU'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('ALAMAT_IBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NOHP_IBU" class="col-sm-3 col-form-label"><b>No.Hp Ibu</b></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NOHP_IBU" name="NOHP_IBU" value="<?= set_value('NOHP_IBU'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NOHP_IBU') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="<?= site_url('login') ?>">Kembali</a>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>