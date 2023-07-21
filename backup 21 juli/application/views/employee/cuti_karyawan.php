<div class="content-wrapper bg-white">
    <section class="content-header">
        <div class="container-fluid">
            <div class="container col-md-11 pt-2 ">
            <div class="row">
                <div class="col-md-12">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Ketidakhadiran Karyawan</h3>
                            <div class="pl-2 row">
                                <h4>Total Ketidakhadiran:</h4> <h4 class="pl-2"><?php echo $TotalCuti ?></h4>
                            </div>
                            <div class="pl-2 row">
                                <h4>Total Cuti Kerja:</h4> <h4 class="pl-2"><?php echo $Cuti ?></h4>
                            </div>
                            <br>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')) :
                echo $this->session->flashdata('message');
            endif; ?>
                <!-- tabel izin -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover " id="tableIzin">
                                        <thead>
                                            <tr class="table-success">
                                                <th>Departemen</th>
                                                <th>Nama</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Memulai</th>
                                                <th>Berakhir</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_cuti as $row) : ?>
                                                <tr>
                                                    <td><?= $row->Departemen?></td>
                                                    <td><?= $row->Nama?></td>
                                                    <td><?= $row->Tanggal?></td>
                                                    <td><?= $row->CutiAwal?></td>
                                                    <td><?= $row->CutiAkhir?></td>
                                                    <td><?= $row->StatusCuti?></td>
                                                    <td>
                                                        <a href="<?= site_url('employee/modalcuti/' . $row->CutiId) ?>" class="btn btn-warning btn-sm item-detail"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:void(0);" data="<?= $row->CutiId ?>" class="btn btn-danger btn-sm item-delete" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-times"></i> </a>
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
    </section>
</div>

<!-- script -->
<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableCuti').DataTable();
</script>