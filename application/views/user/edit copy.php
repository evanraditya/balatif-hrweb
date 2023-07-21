<body background="<?php echo base_url().'asset/image/bgphrama.jpg'?>">
<div class="">
    <div class="card container col-md-10 ">
        <div class="col-xl-auto ml-xl-5">
            <div class="col-md-12">
                    <div class="card-body ml-xl-3">
                        <?php
                        //create form
                        $attributes = array('id' => 'FrmEditEmployee', 'method' => "post", "autocomplete" => "off");
                        echo form_open('', $attributes);
                        ?>
                        <div class="col-md-12 text-light bg-danger">
                            <h1>Edit Profil</h2>
                        </div>
                        <!-- Edit Data Pribadi -->
                        <h2 class="pt-3">DATA PRIBADI</h2>

                        <div class="form-group row">
                            <label for="NIK" class="col-sm-6 col-form-label"><b>Nomor Induk Karyawan <small>contoh: BF40469420</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input readonly class="form-control-plaintext" class="form-control" id="NIK" name="NIK" value=" <?= $data_employee->NIK; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NIK') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NAMA" class="col-sm-6 col-form-label"><b>Nama <small>(Nama Lengkap)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NAMA" name="NAMA" value=" <?= $data_employee->NAMA; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NAMA') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tempat_Lahir" class="col-sm-6 col-form-label"><b>Tempat Lahir <small>(Tempat Lahir sesuai dengan KTP)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tempat_Lahir" name="Tempat_Lahir" value=" <?= $data_employee->Tempat_Lahir; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tempat_Lahir') ?>
                                </small>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Tanggal_Lahir" class="col-sm-6 col-form-label"><b>Tanggal Lahir <small>(Tanggal Lahir Sesuai dengan KTP)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" value=" <?= $data_employee->Tanggal_Lahir; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tanggal_Lahir') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="GENDER" class="col-sm-3 col-form-label"><b>Gender</b></label>
                            <div class="col-sm-12">
                                <select class="form-control" id="GENDER" name="GENDER">
                                <option value="-" selected disabled>Pilih Gender</option>
                                    <option value="Laki-Laki" <?php if ($data_employee->GENDER == "Laki-Laki") : echo "selected";
                                                            endif; ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php if ($data_employee->GENDER == "Perempuan") : echo "selected";
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
                                    <option value="Gudang" <?php if ($data_employee->BAGIAN == "Gudang") : echo "selected";
                                                            endif; ?>>Gudang</option>
                                    <option value="IT" <?php if ($data_employee->BAGIAN == "IT") : echo "selected";
                                                            endif; ?>>IT</option>
                                    <option value="WEB dev" <?php if ($data_employee->BAGIAN == "WEB dev") : echo "selected";
                                                                endif; ?>>WEB dev</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('BAGIAN') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tanggal_Bergabung" class="col-sm-6 col-form-label"><b>Tanggal Bergabung</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tanggal_Bergabung" name="Tanggal_Bergabung" value=" <?= $data_employee->Tanggal_Bergabung; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tanggal_Bergabung') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tanggal_Pensiun" class="col-sm-6 col-form-label"><b>Tanggal Pensiun</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tanggal_Pensiun" name="Tanggal_Pensiun" value=" <?= $data_employee->Tanggal_Pensiun; ?>">
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
                            <label for="PENDIDIKAN" class="col-sm-3 col-form-label"><b>Pendidikan Terakhir</b></label>
                            <div class="col-sm-12">
                                <select class="form-control" id="PENDIDIKAN" name="PENDIDIKAN">
                                    <option value="-" selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option value="TK" <?php if ($data_employee->PENDIDIKAN == "TK") : echo "selected";
                                                            endif; ?>>TK</option>
                                    <option value="SD" <?php if ($data_employee->PENDIDIKAN == "SD") : echo "selected";
                                                            endif; ?>>SD</option>
                                    <option value="SMP" <?php if ($data_employee->PENDIDIKAN == "SMP") : echo "selected";
                                                            endif; ?>>SMP</option>
                                    <option value="SMA" <?php if ($data_employee->PENDIDIKAN == "SMA") : echo "selected";
                                                            endif; ?>>SMA</option>
                                    <option value="SMK" <?php if ($data_employee->PENDIDIKAN == "SMK") : echo "selected";
                                                                endif; ?>>SMK</option>
                                    <option value="S1" <?php if ($data_employee->PENDIDIKAN == "S1") : echo "selected";
                                                            endif; ?>>S1</option>
                                    <option value="S2" <?php if ($data_employee->PENDIDIKAN == "S2") : echo "selected";
                                                            endif; ?>>S2</option>
                                    <option value="D1" <?php if ($data_employee->PENDIDIKAN == "D1") : echo "selected";
                                                            endif; ?>>D1</option>
                                    <option value="D2" <?php if ($data_employee->PENDIDIKAN == "D2") : echo "selected";
                                                            endif; ?>>D2</option>                        
                                    <option value="D3" <?php if ($data_employee->PENDIDIKAN == "D3") : echo "selected";
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
                                    <option value="Sudah Menikah" <?php if ($data_employee->STATUS == "Sudah Menikah") : echo "selected";
                                                            endif; ?>>Sudah Menikah</option>
                                    <option value="Belum Menikah" <?php if ($data_employee->STATUS == "Belum Menikah") : echo "selected";
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
                                    <option value="A" <?php if ($data_employee->GOLDAR == "A") : echo "selected";
                                                            endif; ?>>A</option>
                                    <option value="A+" <?php if ($data_employee->GOLDAR == "A+") : echo "selected";
                                                                endif; ?>>A+</option>
                                    <option value="B" <?php if ($data_employee->GOLDAR == "B") : echo "selected";
                                                            endif; ?>>B</option>
                                    <option value="B+" <?php if ($data_employee->GOLDAR == "B+") : echo "selected";
                                                            endif; ?>>B+</option>
                                    <option value="O" <?php if ($data_employee->GOLDAR == "O") : echo "selected";
                                                            endif; ?>>O</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('GOLDAR') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="TINGGI" class="col-sm-6 col-form-label"><b>Tinggi Badan (Cm)</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="TINGGI" name="TINGGI" value=" <?= $data_employee->TINGGI; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('TINGGI') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="BERAT" class="col-sm-6 col-form-label"><b>Berat Badan (Kg)</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="BERAT" name="BERAT" value=" <?= $data_employee->BERAT; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('BERAT') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Anak_Ke" class="col-sm-6 col-form-label"><b>Anak ke-</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Anak_Ke" name="Anak_Ke" value=" <?= $data_employee->Anak_Ke; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Anak_Ke') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jumlah_Saudara" class="col-sm-6 col-form-label"><b>Jumlah Saudara</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Jumlah_Saudara" name="Jumlah_Saudara" value=" <?= $data_employee->Jumlah_Saudara; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Jumlah_Saudara') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="KK" class="col-sm-6 col-form-label"><b>Nomor KK <small>(16 digit)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="KK" name="KK" value=" <?= $data_employee->KK; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('KK') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="KTP" class="col-sm-6 col-form-label"><b>Nomor KTP <small>(16 digit)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="KTP" name="KTP" value=" <?= $data_employee->KTP; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('KTP') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NPWP" class="col-sm-6 col-form-label"><b>Nomor NPWP <small>(16 digit)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NPWP" name="NPWP" value=" <?= $data_employee->NPWP; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NPWP') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="BPJSK" class="col-sm-6 col-form-label"><b>Nomor BPJS Kesehatan <small>(11 digit)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="BPJSK" name="BPJSK" value=" <?= $data_employee->BPJSK; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('BPJSK') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="BPJSTK" class="col-sm-6 col-form-label"><b>Nomor BPJS Tenaga Kerja <small>(11 digit)</small></b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="BPJSTK" name="BPJSTK" value=" <?= $data_employee->BPJSTK; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('BPJSTK') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Alamat_Asal" class="col-sm-6 col-form-label"><b>Alamat Asal</b></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="Alamat_Asal" name="Alamat_Asal" rows="3"><?= $data_employee->Alamat_Asal; ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('Alamat_Asal') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NOHP_Asal" class="col-sm-6 col-form-label"><b>Nomor HP Alamat Asal</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NOHP_Asal" name="NOHP_Asal" value=" <?= $data_employee->NOHP_Asal; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NOHP_Asal') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Alamat_Sekarang" class="col-sm-6 col-form-label"><b>Alamat Sekarang</b></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="Alamat_Sekarang" name="Alamat_Sekarang" rows="3"><?= $data_employee->Alamat_Sekarang; ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('Alamat_Sekarang') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NOHP_Sekarang" class="col-sm-6 col-form-label"><b>Nomor HP Alamat Sekarang</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NOHP_Sekarang" name="NOHP_Sekarang" value=" <?= $data_employee->NOHP_Sekarang; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NOHP_Sekarang') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="EMAIL" class="col-sm-6 col-form-label"><b>Email</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="EMAIL" name="EMAIL" value=" <?= $data_employee->EMAIL; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('EMAIL') ?>
                                </small>
                            </div>
                        </div>

                        <!-- Edit Data Keluarga -->
                        <h2 class="pt-3">Data Keluarga</h2>

                        <div class="form-group row pt-3">
                            <label for="HUBUNGAN" class="col-sm-6 col-form-label"><b>Hubungan Keluarga</b></label>
                            <div class="col-sm-12">
                                <select class="form-control" id="HUBUNGAN" name="HUBUNGAN">
                                    <option value="-" selected disabled>Pilih Hubungan Keluarga</option>
                                    <option value="Suami" <?php if ($data_employee->HUBUNGAN == "Suami") : echo "selected";
                                                            endif; ?>>Suami</option>
                                    <option value="Istri" <?php if ($data_employee->HUBUNGAN == "Istri") : echo "selected";
                                                                endif; ?>>Istri</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->HUBUNGAN == "Tidak Ada") : echo "selected";
                                                            endif; ?>>Tidak Ada</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('HUBUNGAN') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NAMAKEL" class="col-sm-6 col-form-label"><b>Nama</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NAMAKEL" name="NAMAKEL" value=" <?= $data_employee->NAMAKEL; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NAMAKEL') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tempat_LahirKEL" class="col-sm-6 col-form-label"><b>Tempat Lahir</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tempat_LahirKEL" name="Tempat_LahirKEL" value=" <?= $data_employee->Tempat_LahirKEL; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tempat_LahirKEL') ?>
                                </small>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Tanggal_LahirKEL" class="col-sm-6 col-form-label"><b>Tanggal Lahir</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tanggal_LahirKEL" name="Tanggal_LahirKEL" value=" <?= $data_employee->Tanggal_LahirKEL; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tanggal_LahirKEL') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="AGAMAKEL" class="col-sm-3 col-form-label"><b>Agama</b></label>
                            <div class="col-sm-12">
                                <select class="form-control" id="AGAMAKEL" name="AGAMAKEL">
                                    <option value="-" selected disabled>Pilih AgamaKEL</option>
                                    <option value="Islam" <?php if ($data_employee->AGAMAKEL == "Islam") : echo "selected";
                                                            endif; ?>>Islam</option>
                                    <option value="Protestan" <?php if ($data_employee->AGAMAKEL == "Protestan") : echo "selected";
                                                                endif; ?>>Protestan</option>
                                    <option value="Katolik" <?php if ($data_employee->AGAMAKEL == "Katolik") : echo "selected";
                                                            endif; ?>>Katolik</option>
                                    <option value="Hindu" <?php if ($data_employee->AGAMAKEL == "Hindu") : echo "selected";
                                                            endif; ?>>Hindu</option>
                                    <option value="Buddha" <?php if ($data_employee->AGAMAKEL == "Buddha") : echo "selected";
                                                            endif; ?>>Buddha</option>
                                    <option value="Khonghucu" <?php if ($data_employee->AGAMAKEL == "Khonghucu") : echo "selected";
                                                                endif; ?>>Khonghucu</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->AGAMAKEL == "Tidak Ada") : echo "selected";
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
                                    <option value="-" selected disabled>Pilih PendidikanKEL Terakhir</option>
                                    <option value="TK" <?php if ($data_employee->PENDIDIKANKEL == "TK") : echo "selected";
                                                            endif; ?>>TK</option>
                                    <option value="SD" <?php if ($data_employee->PENDIDIKANKEL == "SD") : echo "selected";
                                                            endif; ?>>SD</option>
                                    <option value="SMP" <?php if ($data_employee->PENDIDIKANKEL == "SMP") : echo "selected";
                                                            endif; ?>>SMP</option>
                                    <option value="SMA" <?php if ($data_employee->PENDIDIKANKEL == "SMA") : echo "selected";
                                                            endif; ?>>SMA</option>
                                    <option value="SMK" <?php if ($data_employee->PENDIDIKANKEL == "SMK") : echo "selected";
                                                                endif; ?>>SMK</option>
                                    <option value="S1" <?php if ($data_employee->PENDIDIKANKEL == "S1") : echo "selected";
                                                            endif; ?>>S1</option>
                                    <option value="S2" <?php if ($data_employee->PENDIDIKANKEL == "S2") : echo "selected";
                                                            endif; ?>>S2</option>
                                    <option value="D1" <?php if ($data_employee->PENDIDIKANKEL == "D1") : echo "selected";
                                                            endif; ?>>D1</option>
                                    <option value="D2" <?php if ($data_employee->PENDIDIKANKEL == "D2") : echo "selected";
                                                            endif; ?>>D2</option>                        
                                    <option value="D3" <?php if ($data_employee->PENDIDIKANKEL == "D3") : echo "selected";
                                                            endif; ?>>D3</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->PENDIDIKANKEL == "Tidak Ada") : echo "selected";
                                                            endif; ?>>Tidak Ada</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('PENDIDIKANKEL') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="PEKERJAANKEL" class="col-sm-6 col-form-label"><b>Pekerjaan</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="PEKERJAANKEL" name="PEKERJAANKEL" value=" <?= $data_employee->PEKERJAANKEL; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('PEKERJAANKEL') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ALAMATKEL" class="col-sm-6 col-form-label"><b>Alamat</b></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="ALAMATKEL" name="ALAMATKEL" rows="3"><?= $data_employee->ALAMATKEL; ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('ALAMATKEL') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NOHP_KEL" class="col-sm-6 col-form-label"><b>Nomor HP</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NOHP_KEL" name="NOHP_KEL" value=" <?= $data_employee->NOHP_KEL; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NOHP_KEL') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="JUMLAH_ANAK" class="col-sm-6 col-form-label"><b>Jumlah Anak</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="JUMLAH_ANAK" name="JUMLAH_ANAK" value=" <?= $data_employee->JUMLAH_ANAK; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('JUMLAH_ANAK') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="USIA_ANAK1" class="col-sm-6 col-form-label"><b>Usia Anak Ke-1</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="USIA_ANAK1" name="USIA_ANAK1" value=" <?= $data_employee->USIA_ANAK1; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('USIA_ANAK1') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="USIA_ANAK2" class="col-sm-6 col-form-label"><b>Usia Anak Ke-2</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="USIA_ANAK2" name="USIA_ANAK2" value=" <?= $data_employee->USIA_ANAK2; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('USIA_ANAK2') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="USIA_ANAK3" class="col-sm-6 col-form-label"><b>Usia Anak Ke-3</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="USIA_ANAK3" name="USIA_ANAK3" value=" <?= $data_employee->USIA_ANAK3; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('USIA_ANAK3') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="USIA_ANAK4" class="col-sm-6 col-form-label"><b>Usia Anak Ke-4</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="USIA_ANAK4" name="USIA_ANAK4" value=" <?= $data_employee->USIA_ANAK4; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('USIA_ANAK4') ?>
                                </small>
                            </div>
                        </div>

                        <!-- Edit Data Orang Tua -->
                        <h2 class="pt-3">Data Orang Tua</h2>

                        <div class="form-group row">
                            <label for="AYAH" class="col-sm-6 col-form-label"><b>Nama Ayah</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="AYAH" name="AYAH" value=" <?= $data_employee->AYAH; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('AYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tempat_LahirAYAH" class="col-sm-6 col-form-label"><b>Tempat Lahir Ayah</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tempat_LahirAYAH" name="Tempat_LahirAYAH" value=" <?= $data_employee->Tempat_LahirAYAH; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tempat_LahirAYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tanggal_LahirAYAH" class="col-sm-6 col-form-label"><b>Tanggal Lahir Ayah</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tanggal_LahirAYAH" name="Tanggal_LahirAYAH" value=" <?= $data_employee->Tanggal_LahirAYAH; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tanggal_LahirAYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="AGAMA_AYAH" class="col-sm-3 col-form-label"><b>Agama Ayah</b></label>
                            <div class="col-sm-12">
                                <select class="form-control" id="AGAMA_AYAH" name="AGAMA_AYAH">
                                    <option value="-" selected disabled>Pilih Agama_AYAH</option>
                                    <option value="Islam" <?php if ($data_employee->AGAMA_AYAH == "Islam") : echo "selected";
                                                            endif; ?>>Islam</option>
                                    <option value="Protestan" <?php if ($data_employee->AGAMA_AYAH == "Protestan") : echo "selected";
                                                                endif; ?>>Protestan</option>
                                    <option value="Katolik" <?php if ($data_employee->AGAMA_AYAH == "Katolik") : echo "selected";
                                                            endif; ?>>Katolik</option>
                                    <option value="Hindu" <?php if ($data_employee->AGAMA_AYAH == "Hindu") : echo "selected";
                                                            endif; ?>>Hindu</option>
                                    <option value="Buddha" <?php if ($data_employee->AGAMA_AYAH == "Buddha") : echo "selected";
                                                            endif; ?>>Buddha</option>
                                    <option value="Khonghucu" <?php if ($data_employee->AGAMA_AYAH == "Khonghucu") : echo "selected";
                                                                endif; ?>>Khonghucu</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->AGAMA_AYAH == "Tidak Ada") : echo "selected";
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
                                    <option value="-" selected disabled>Pilih Pendidikan_AYAH Terakhir</option>
                                    <option value="TK" <?php if ($data_employee->PENDIDIKAN_AYAH == "TK") : echo "selected";
                                                            endif; ?>>TK</option>
                                    <option value="SD" <?php if ($data_employee->PENDIDIKAN_AYAH == "SD") : echo "selected";
                                                            endif; ?>>SD</option>
                                    <option value="SMP" <?php if ($data_employee->PENDIDIKAN_AYAH == "SMP") : echo "selected";
                                                            endif; ?>>SMP</option>
                                    <option value="SMA" <?php if ($data_employee->PENDIDIKAN_AYAH == "SMA") : echo "selected";
                                                            endif; ?>>SMA</option>
                                    <option value="SMK" <?php if ($data_employee->PENDIDIKAN_AYAH == "SMK") : echo "selected";
                                                                endif; ?>>SMK</option>
                                    <option value="S1" <?php if ($data_employee->PENDIDIKAN_AYAH == "S1") : echo "selected";
                                                            endif; ?>>S1</option>
                                    <option value="S2" <?php if ($data_employee->PENDIDIKAN_AYAH == "S2") : echo "selected";
                                                            endif; ?>>S2</option>
                                    <option value="D1" <?php if ($data_employee->PENDIDIKAN_AYAH == "D1") : echo "selected";
                                                            endif; ?>>D1</option>
                                    <option value="D2" <?php if ($data_employee->PENDIDIKAN_AYAH == "D2") : echo "selected";
                                                            endif; ?>>D2</option>                        
                                    <option value="D3" <?php if ($data_employee->PENDIDIKAN_AYAH == "D3") : echo "selected";
                                                            endif; ?>>D3</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->PENDIDIKAN_AYAH == "Tidak Ada") : echo "selected";
                                                            endif; ?>>Tidak Ada</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('PENDIDIKAN_AYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="PEKERJAAN_AYAH" class="col-sm-6 col-form-label"><b>Pekerjaan Ayah</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="PEKERJAAN_AYAH" name="PEKERJAAN_AYAH" value=" <?= $data_employee->PEKERJAAN_AYAH; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('PEKERJAAN_AYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ALAMAT_AYAH" class="col-sm-6 col-form-label"><b>Alamat Ayah</b></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="ALAMAT_AYAH" name="ALAMAT_AYAH" rows="3"><?= $data_employee->ALAMAT_AYAH; ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('ALAMAT_AYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NOHP_AYAH" class="col-sm-6 col-form-label"><b>Nomor HP Ayah</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NOHP_AYAH" name="NOHP_AYAH" value=" <?= $data_employee->NOHP_AYAH; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NOHP_AYAH') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="IBU" class="col-sm-6 col-form-label"><b>Nama Ibu</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="IBU" name="IBU" value=" <?= $data_employee->IBU; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('IBU') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tempat_LahirIBU" class="col-sm-6 col-form-label"><b>Tempat Lahir Ibu</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tempat_LahirIBU" name="Tempat_LahirIBU" value=" <?= $data_employee->Tempat_LahirIBU; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tempat_LahirIBU') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tanggal_LahirIBU" class="col-sm-6 col-form-label"><b>Tanggal Lahir Ibu</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="Tanggal_LahirIBU" name="Tanggal_LahirIBU" value=" <?= $data_employee->Tanggal_LahirIBU; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Tanggal_LahirIBU') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="AGAMA_IBU" class="col-sm-3 col-form-label"><b>Agama Ibu</b></label>
                            <div class="col-sm-12">
                                <select class="form-control" id="AGAMA_IBU" name="AGAMA_IBU">
                                    <option value="-" selected disabled>Pilih Agama_IBU</option>
                                    <option value="Islam" <?php if ($data_employee->AGAMA_IBU == "Islam") : echo "selected";
                                                            endif; ?>>Islam</option>
                                    <option value="Protestan" <?php if ($data_employee->AGAMA_IBU == "Protestan") : echo "selected";
                                                                endif; ?>>Protestan</option>
                                    <option value="Katolik" <?php if ($data_employee->AGAMA_IBU == "Katolik") : echo "selected";
                                                            endif; ?>>Katolik</option>
                                    <option value="Hindu" <?php if ($data_employee->AGAMA_IBU == "Hindu") : echo "selected";
                                                            endif; ?>>Hindu</option>
                                    <option value="Buddha" <?php if ($data_employee->AGAMA_IBU == "Buddha") : echo "selected";
                                                            endif; ?>>Buddha</option>
                                    <option value="Khonghucu" <?php if ($data_employee->AGAMA_IBU == "Khonghucu") : echo "selected";
                                                                endif; ?>>Khonghucu</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->AGAMA_IBU == "Tidak Ada") : echo "selected";
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
                                    <option value="-" selected disabled>Pilih Pendidikan Terakhir ibu</option>
                                    <option value="TK" <?php if ($data_employee->PENDIDIKAN_IBU == "TK") : echo "selected";
                                                            endif; ?>>TK</option>
                                    <option value="SD" <?php if ($data_employee->PENDIDIKAN_IBU == "SD") : echo "selected";
                                                            endif; ?>>SD</option>
                                    <option value="SMP" <?php if ($data_employee->PENDIDIKAN_IBU == "SMP") : echo "selected";
                                                            endif; ?>>SMP</option>
                                    <option value="SMA" <?php if ($data_employee->PENDIDIKAN_IBU == "SMA") : echo "selected";
                                                            endif; ?>>SMA</option>
                                    <option value="SMK" <?php if ($data_employee->PENDIDIKAN_IBU == "SMK") : echo "selected";
                                                                endif; ?>>SMK</option>
                                    <option value="S1" <?php if ($data_employee->PENDIDIKAN_IBU == "S1") : echo "selected";
                                                            endif; ?>>S1</option>
                                    <option value="S2" <?php if ($data_employee->PENDIDIKAN_IBU == "S2") : echo "selected";
                                                            endif; ?>>S2</option>
                                    <option value="D1" <?php if ($data_employee->PENDIDIKAN_IBU == "D1") : echo "selected";
                                                            endif; ?>>D1</option>
                                    <option value="D2" <?php if ($data_employee->PENDIDIKAN_IBU == "D2") : echo "selected";
                                                            endif; ?>>D2</option>                        
                                    <option value="D3" <?php if ($data_employee->PENDIDIKAN_IBU == "D3") : echo "selected";
                                                            endif; ?>>D3</option>
                                    <option value="Tidak Ada" <?php if ($data_employee->PENDIDIKAN_IBU == "Tidak Ada") : echo "selected";
                                                            endif; ?>>Tidak Ada</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('PENDIDIKAN_IBU') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="PEKERJAAN_IBU" class="col-sm-6 col-form-label"><b>Pekerjaan Ibu</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="PEKERJAAN_IBU" name="PEKERJAAN_IBU" value=" <?= $data_employee->PEKERJAAN_IBU; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('PEKERJAAN_IBU') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ALAMAT_IBU" class="col-sm-6 col-form-label"><b>Alamat Ibu</b></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="ALAMAT_IBU" name="ALAMAT_IBU" rows="3"><?= $data_employee->ALAMAT_IBU; ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('ALAMAT_IBU') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NOHP_IBU" class="col-sm-6 col-form-label"><b>Nomor HP Ibu</b></label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="EMP_ID" name="EMP_ID" value=" <?= $data_employee->EMP_ID; ?>">
                                <input type="text" class="form-control" id="NOHP_IBU" name="NOHP_IBU" value=" <?= $data_employee->NOHP_IBU; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('NOHP_IBU') ?>
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