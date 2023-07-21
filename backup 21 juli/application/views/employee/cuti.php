<div class="content-wrapper bg-white">
    <section class="content-header">
        <div class="container-fluid">
            <div class="container col-md-11 pt-2 ">
                <h3>Ketidakhadiran Karyawan</h3> <h6>List Ketidakhadiran Karyawan yang perlu direview</h6>
                <!-- tabel izin -->
                <div class="row">
                    <div class="col-md-12 pt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="tableCuti">
                                        <thead>
                                            <tr class="table-success">
                                                <th>Nama</th>
                                                <th>Departemen</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_employee as $row) : ?>
                                                <tr>
                                                    <td><?= $row->Nama ?></td>
                                                    <td><?= $row->Departemen ?></td>
                                                    <td class="row justify-content-center">
                                                        <a href="<?= site_url('employee/cuti_karyawan/'. $row->KaryawanId) ?>" class="btn btn-warning btn-sm item-detail"><i class="fa fa-eye"></i></a>
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