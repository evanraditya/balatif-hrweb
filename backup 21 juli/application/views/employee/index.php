<div class="content-wrapper">
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="card container col-md-11 mt-3 ">
                <h3 class="pt-3">Dashboard</h3>
                <div class="row">
                    <div class="card-body row pt-4">
                        <div class="col-md-12">
                            <!-- small card -->
                            <div class="small-box bg-light">
                                <div class="inner">
                                    <h3>Total Karyawan</h3>
                                    <div class="pl-2 row">
                                        <h4>Total:</h4> <h4 class="pl-2"><?= $TotalKaryawan?></h4>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- small card -->
                            <div class="small-box bg-image text-light" style="background-image:url(<?= base_url('asset/image/Balatif.jpg') ?>);">  
                                <div class="inner">
                                    <h4>Plant Tenaga / Industri Farmasi</h4>
                                    <div class="pl-2 row">
                                        <h5>Balatif:</h5> <h5 class="pl-2"><?= $JumlahKaryawanBalatifT?></h5>
                                    </div>
                                    <div class="pl-2 row">
                                        <h5>Outshoutching:</h5> <h5 class="pl-2"><?= $JumlahOutshourchingT?></h5>
                                    </div>
                                    <div class="pl-2 row">
                                        <h5>Borongan:</h5> <h5 class="pl-2"><?= $JumlahBoronganT?></h5>
                                    </div>
                                    <div class="pl-2 row">
                                        <h5>Total Karyawan:</h5> <h5 class="pl-2"><?= $JumlahKaryawanT?></h5>
                                    </div>
                
                                    <div class="icon ">
                                        <i class="fas fa-user-circle text-light"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- small card -->
                            <div class="small-box bg-image text-light" style="background-image:url(<?= base_url('asset/image/Balatif.jpg') ?>);">
                                <div class="inner">
                                    <h4>Plant Pakis / Industri OT</h4>
                                    <div class="pl-2 row">
                                        <h5>Balatif:</h5> <h5 class="pl-2"><?= $JumlahKaryawanBalatifP?></h5>
                                    </div>
                                    <div class="pl-2 row">
                                        <h5>Outshoutching:</h5> <h5 class="pl-2"><?= $JumlahOutshourchingP?></h5>
                                    </div>
                                    <div class="pl-2 row">
                                        <h5>Borongan:</h5> <h5 class="pl-2"><?= $JumlahBoronganP?></h5>
                                    </div>
                                    <div class="pl-2 row">
                                        <h5>Total Karyawan:</h5> <h5 class="pl-2"><?= $JumlahKaryawanP?></h5>
                                    </div>
                                    <div class="icon ">
                                        <i class="fas fa-user-circle text-light"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <!-- small card -->
                            <div class="small-box bg-light">
                                <div class="inner">
                                    <h3 class="pt-3">Pengajuan Ketidakhadiran Karyawan  <?= date("d-m-Y")?></h3>
                                    <!-- <div class="pl-2 row">
                                        <h5>Total karyawan tidak hadir:</h5><h5 class="pl-2"><?= $TotalCutiHariIni?></h5>                          
                                    </div> -->
                                    <div class="icon ">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover " id="tableIzin">
                                                    <thead>
                                                        <tr class="table-success">
                                                            <th>Tanggal</th>
                                                            <th>Nama</th>
                                                            <th>Departemen</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data_cuti as $row) : ?>
                                                            <tr>
                                                            <td><?= $row->CutiAwal?></td>
                                                            <td><?= $row->Nama?></td> 
                                                            <td><?= $row->Departemen?></td>   
                                                            <td>
                                                                <a href="<?= site_url('employee/modalcuti/' . $row->CutiId) ?>" class="btn btn-warning btn-sm item-detail"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>

<!-- script -->
<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableIzin').DataTable();
</script>