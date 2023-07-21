<div class="content-wrapper">
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="container pt-2">
                <h3><?=$title ?></h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                //create form
                                $attributes = array('id' => 'FrmEditEmployee', 'method' => "post", "autocomplete" => "off");
                                echo form_open('', $attributes);
                                ?>
                                <!-- Edit Data Pribadi -->
                                <h2>DATA PRIBADI</h2>

                                <div class="form-group row">
                                    <label for="Nama" class="col-sm-6 col-form-label">Nama</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="Nama" name="Nama" value="<?=$data_employee->Nama; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Nama') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="StatusKaryawan" class="col-sm-6 col-form-label">Status Karyawan</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input readonly class="form-control-plaintext" class="form-control" id="StatusKaryawan" name="StatusKaryawan" value="<?=$data_employee->StatusKaryawan; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('StatusKaryawan') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Departemen" class="col-sm-6 col-form-label">Departemen</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Departemen" name="Departemen" value="<?=$data_employee->Departemen; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Departemen') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Plan" class="col-sm-6 col-form-label">Kategori 1</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Plan" name="Plan" value="<?=$data_employee->Plan; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Plan') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Kategori" class="col-sm-6 col-form-label">Kategori 2</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Kategori" name="Kategori" value="<?=$data_employee->Kategori; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Kategori') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Jabatan" class="col-sm-6 col-form-label">Jabatan</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input readonly class="form-control-plaintext" class="form-control" id="Jabatan" name="Jabatan" value="<?=$data_employee->Jabatan; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Jabatan') ?>
                                        </small>
                                    </div>
                                </div>       

                                <div class="form-group row">
                                    <label for="TanggalMasuk" class="col-sm-6 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input readonly class="form-control-plaintext" class="form-control" id="TanggalMasuk" name="TanggalMasuk" value="<?=$data_employee->TanggalMasuk; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalMasuk') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="KTP" class="col-sm-6 col-form-label">Nomor NIK KTP</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="KTP" name="KTP" value="<?=$data_employee->KTP; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('KTP') ?>
                                        </small>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="KartuKeluarga" class="col-sm-6 col-form-label">Nomor Kartu Keluarga</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="KartuKeluarga" name="KartuKeluarga" value="<?=$data_employee->KartuKeluarga; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('KartuKeluarga') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NPWP" class="col-sm-6 col-form-label">NPWP</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NPWP" name="NPWP" value="<?=$data_employee->NPWP; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NPWP') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="BPJSK" class="col-sm-6 col-form-label">BPJSK</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="BPJSK" name="BPJSK" value="<?=$data_employee->BPJSK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('BPJSK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="BPJSTK" class="col-sm-6 col-form-label">BPJSTK</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="BPJSTK" name="BPJSTK" value="<?=$data_employee->BPJSTK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('BPJSTK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NomorRekening" class="col-sm-6 col-form-label">NomorRekening</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NomorRekening" name="NomorRekening" value="<?=$data_employee->NomorRekening; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NomorRekening') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Bank" class="col-sm-3 col-form-label">Jenis Bank</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="Bank" name="Bank">
                                            <?php foreach($Bank as $row) : ?>
                                                <option value="<?= $row->Bank?>"<?php if($row->Bank==$data_employee->Bank):echo"selected";endif;?>><?= $row->Bank?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('Bank') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AtasNamaRekening" class="col-sm-6 col-form-label">AtasNamaRekening</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AtasNamaRekening" name="AtasNamaRekening" value="<?=$data_employee->AtasNamaRekening; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AtasNamaRekening') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Agama" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="Agama" name="Agama">
                                            <?php foreach($Agama as $row) : ?>
                                                <option value="<?= $row->Agama?>"<?php if($row->Agama==$data_employee->Agama):echo"selected";endif;?>><?= $row->Agama?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('Agama') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PendidikanTerakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="PendidikanTerakhir" name="PendidikanTerakhir">
                                            <?php foreach($Pendidikan as $row) : ?>
                                                <option value="<?= $row->PendidikanTerakhir?>"<?php if($row->PendidikanTerakhir==$data_employee->PendidikanTerakhir):echo"selected";endif;?>><?= $row->PendidikanTerakhir?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('PendidikanTerakhir') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PendidikanKhs" class="col-sm-3 col-form-label">Jurusan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="PendidikanKhs" name="PendidikanKhs">
                                            <?php foreach($PendidikanKhs as $row) : ?>
                                                <option value="<?= $row->PendidikanKhs?>"<?php if($row->PendidikanKhs==$data_employee->PendidikanKhs):echo"selected";endif;?>><?= $row->PendidikanKhs?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('PendidikanKhs') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NomorTelepon" class="col-sm-6 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NomorTelepon" name="NomorTelepon" value="<?=$data_employee->NomorTelepon; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NomorTelepon') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Email" class="col-sm-6 col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="Email" name="Email" value="<?=$data_employee->Email; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('Email') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahir" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahir" name="TempatLahir" value="<?=$data_employee->TempatLahir; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahir') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahir" name="TanggalLahir" value="<?=$data_employee->TanggalLahir; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahir') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TinggiBadan" class="col-sm-6 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TinggiBadan" name="TinggiBadan" value="<?=$data_employee->TinggiBadan; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TinggiBadan') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="BeratBadan" class="col-sm-6 col-form-label">Berat Badan</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="BeratBadan" name="BeratBadan" value="<?=$data_employee->BeratBadan; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('BeratBadan') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="GolDarah" class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="GolDarah" name="GolDarah">
                                            <?php foreach($GolDarah as $row) : ?>
                                                <option value="<?= $row->GolDarah?>"<?php if($row->GolDarah==$data_employee->GolDarah):echo"selected";endif;?>><?= $row->GolDarah?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('GolDarah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AnakKe" class="col-sm-6 col-form-label">Anak Ke-</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AnakKe" name="AnakKe" value="<?=$data_employee->AnakKe; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AnakKe') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="JumlahSaudara" class="col-sm-6 col-form-label">Jumlah Saudara</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="JumlahSaudara" name="JumlahSaudara" value="<?=$data_employee->JumlahSaudara; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('JumlahSaudara') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AlamatAsal" class="col-sm-6 col-form-label">Alamat Asal</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AlamatAsal" name="AlamatAsal" value="<?=$data_employee->AlamatAsal; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AlamatAsal') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AlamatDomisili" class="col-sm-6 col-form-label">Alamat Domisili</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AlamatDomisili" name="AlamatDomisili" value="<?=$data_employee->AlamatDomisili; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AlamatDomisili') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Status" class="col-sm-3 col-form-label">Status Hubungan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="Status" name="Status">
                                            <?php foreach($Status as $row) : ?>
                                                <option value="<?= $row->Status?>"<?php if($row->Status==$data_employee->Status):echo"selected";endif;?>><?= $row->Status?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('Status') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NamaIbuKandung" class="col-sm-6 col-form-label">Nama Ibu Kandung</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaIbuKandung" name="NamaIbuKandung" value="<?=$data_employee->NamaIbuKandung; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaIbuKandung') ?>
                                        </small>
                                    </div>
                                </div>

                                <!-- Edit Data Keluarga -->
                                <h2 class="pt-3">Data Keluarga</h2>

                                <div class="form-group row">
                                    <label for="NamaKeluarga" class="col-sm-6 col-form-label">Nama Keluarga (Suami / Istri)</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaKeluarga" name="NamaKeluarga" value="<?=$data_employee->NamaKeluarga; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaKeluarga') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahirK" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahirK" name="TempatLahirK" value="<?=$data_employee->TempatLahirK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahirK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahirK" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahirK" name="TanggalLahirK" value="<?=$data_employee->TanggalLahirK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahirK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AgamaK" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="AgamaK" name="AgamaK">
                                            <?php foreach($AgamaK as $row) : ?>
                                                <option value="<?= $row->Agama?>"<?php if($row->Agama==$data_employee->AgamaK):echo"selected";endif;?>><?= $row->Agama?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('AgamaK') ?>
                                        </small>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="PekerjaanK" class="col-sm-6 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="PekerjaanK" name="PekerjaanK" value="<?=$data_employee->PekerjaanK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('PekerjaanK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoTeleponK" class="col-sm-6 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NoTeleponK" name="NoTeleponK" value="<?=$data_employee->NoTeleponK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NoTeleponK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AlamatK" class="col-sm-6 col-form-label">Alamat</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AlamatK" name="AlamatK" value="<?=$data_employee->AlamatK; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AlamatK') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NamaAnakPertama" class="col-sm-6 col-form-label">Nama Anak Pertama</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaAnakPertama" name="NamaAnakPertama" value="<?=$data_employee->NamaAnakPertama; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaAnakPertama') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahirA1" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahirA1" name="TempatLahirA1" value="<?=$data_employee->TempatLahirA1; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahirA1') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahirA1" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahirA1" name="TanggalLahirA1" value="<?=$data_employee->TanggalLahirA1; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahirA1') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NamaAnakKedua" class="col-sm-6 col-form-label">Nama Anak ke-dua</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaAnakKedua" name="NamaAnakKedua" value="<?=$data_employee->NamaAnakKedua; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaAnakKedua') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahirA2" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahirA2" name="TempatLahirA2" value="<?=$data_employee->TempatLahirA2; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahirA2') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahirA2" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahirA2" name="TanggalLahirA2" value="<?=$data_employee->TanggalLahirA2; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahirA2') ?>
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="NamaAnakKetiga" class="col-sm-6 col-form-label">Nama Anak ke-tiga</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaAnakKetiga" name="NamaAnakKetiga" value="<?=$data_employee->NamaAnakKetiga; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaAnakKetiga') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahirA3" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahirA3" name="TempatLahirA3" value="<?=$data_employee->TempatLahirA3; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahirA3') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahirA3" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahirA3" name="TanggalLahirA3" value="<?=$data_employee->TanggalLahirA3; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahirA3') ?>
                                        </small>
                                    </div>
                                </div>

                                <!-- Edit Data Orang Tua -->
                                <h2 class="pt-3">Data Orang Tua</h2>

                                <div class="form-group row">
                                    <label for="NamaAyah" class="col-sm-6 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaAyah" name="NamaAyah" value="<?=$data_employee->NamaAyah; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahirAyah" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahirAyah" name="TempatLahirAyah" value="<?=$data_employee->TempatLahirAyah; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahirAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahirAyah" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahirAyah" name="TanggalLahirAyah" value="<?=$data_employee->TanggalLahirAyah; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahirAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AlamatDomisiliAyah" class="col-sm-6 col-form-label">Alamat Domisili Ayah</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AlamatDomisiliAyah" name="AlamatDomisiliAyah" value="<?=$data_employee->AlamatDomisiliAyah; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AlamatDomisiliAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AgamaAyah" class="col-sm-3 col-form-label">AgamaAyah</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="AgamaAyah" name="AgamaAyah">
                                            <?php foreach($AgamaAyah as $row) : ?>
                                                <option value="<?= $row->Agama?>"<?php if($row->Agama==$data_employee->AgamaAyah):echo"selected";endif;?>><?= $row->Agama?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('AgamaAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PendidikanTerakhirAyah" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="PendidikanTerakhirAyah" name="PendidikanTerakhirAyah">
                                            <?php foreach($PendidikanAyah as $row) : ?>
                                                <option value="<?= $row->PendidikanTerakhir?>"<?php if($row->PendidikanTerakhir==$data_employee->PendidikanTerakhirAyah):echo"selected";endif;?>><?= $row->PendidikanTerakhir?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('PendidikanTerakhirAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TeleponAyah" class="col-sm-6 col-form-label">Nomor Telepon Ayah</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TeleponAyah" name="TeleponAyah" value="<?=$data_employee->TeleponAyah; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TeleponAyah') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NamaIbu" class="col-sm-6 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="NamaIbu" name="NamaIbu" value="<?=$data_employee->NamaIbu; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('NamaIbu') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TempatLahirIbu" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TempatLahirIbu" name="TempatLahirIbu" value="<?=$data_employee->TempatLahirIbu; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TempatLahirIbu') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TanggalLahirIbu" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="date" class="form-control" id="TanggalLahirIbu" name="TanggalLahirIbu" value="<?=$data_employee->TanggalLahirIbu; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TanggalLahirIbu') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AlamatDomisiliIbu" class="col-sm-6 col-form-label">Alamat Domisili Ibu</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="AlamatDomisiliIbu" name="AlamatDomisiliIbu" value="<?=$data_employee->AlamatDomisiliIbu; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('AlamatDomisiliIbu') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="AgamaIbu" class="col-sm-3 col-form-label">AgamaIbu</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="AgamaIbu" name="AgamaIbu">
                                            <?php foreach($AgamaIbu as $row) : ?>
                                                <option value="<?= $row->Agama?>"<?php if($row->Agama==$data_employee->AgamaIbu):echo"selected";endif;?>><?= $row->Agama?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('AgamaIbu') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PendidikanTerakhirIbu" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="PendidikanTerakhirIbu" name="PendidikanTerakhirIbu">
                                            <?php foreach($PendidikanIbu as $row) : ?>
                                                <option value="<?= $row->PendidikanTerakhir?>"<?php if($row->PendidikanTerakhir==$data_employee->PendidikanTerakhirIbu):echo"selected";endif;?>><?= $row->PendidikanTerakhir?></option>
                                            <?php endforeach;  ?>
                                        </select>
                                        <small class="text-danger">
                                            <?php echo form_error('PendidikanTerakhirIbu') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="TeleponIbu" class="col-sm-6 col-form-label">Nomor Telepon Ibu</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="form-control" id="KaryawanId" name="KaryawanId" value="<?=$data_employee->KaryawanId; ?>">
                                        <input type="text" class="form-control" id="TeleponIbu" name="TeleponIbu" value="<?=$data_employee->TeleponIbu; ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('TeleponIbu') ?>
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