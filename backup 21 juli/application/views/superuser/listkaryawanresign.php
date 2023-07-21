<div class="content-wrapper">
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="container col-md-11 pt-2">
                <h3><?= $title ?></h3>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <a class="btn btn-primary mb-2" href="<?= base_url('superuser/add'); ?>">Tambah Data</a> -->
                        <div mb-2>
                            <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                            <?php if ($this->session->flashdata('message')) :
                                echo $this->session->flashdata('message');
                            endif; ?>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="tableEmployee">
                                        <thead>
                                            <tr class="table-success">
                                                <th>Nama</th>
                                                <th>Kategori 1</th>
                                                <th>Departemen</th>
                                                <th>Jabatan</th>
                                                <th>Status</th>
                                                <th>Tanggal</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_employee as $row) : ?>
                                                <tr>
                                                    <td><?= $row->Nama?></td>
                                                    <td><?= $row->Plan?></td>
                                                    <td><?= $row->Departemen?></td>
                                                    <td><?= $row->Jabatan?></td>
                                                    <td><?= $row->StatusKaryawan?></td>
                                                    <td><?= $row->TanggalResign?></td>
                                                    <td class="row justify-content-center">
                                                        <a href="<?= site_url('superuser/view/' . $row->KaryawanId) ?>" class="btn btn-warning btn-sm ml-1 mr-1 mt-1 mb-1"><i class="fa fa-eye"></i> </a>
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

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableEmployee').DataTable();
</script>