<div class="content-wrapper">
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="container col-md-11 pt-2 ">
            <div class="row ml-1">
                <h3><?= $title ?></h3>
                <div class="col-sm-10 ml-3 offset d-flex justify-content-end">
                    <a class="btn btn-secondary" href="<?= site_url('user/add_cuti/')?>">Tambah pengajuan</a>
                </div>
            </div>
            <div class="pt-2">
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>
                <!-- tabel cuti -->
                <div class="row">
                    <div class="col-md-12 pt-2">
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
                                                        <a href="<?= site_url('user/modalcuti/' . $row->CutiId) ?>" class="btn btn-warning btn-sm item-detail"><i class="fa fa-eye"></i></a>
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
    $('#tableIzin').DataTable();
</script>