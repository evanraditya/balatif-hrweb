<div class="content-wrapper">
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="container col-md-11 pt-2 ">
                <h3><?= $title ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item "><a href="<?= base_url('superuser/presensi_update'); ?>">Log update</a></li>
                    </ol>
                </nav>
                <!-- tabel Log Kompetensi karyawan -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="tableIzin">
                                        <thead>
                                            <tr class="table-success">
                                                <th>LOG Update</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_employee as $row) : ?>
                                                <tr>
                                                    <td><?= $row->Tanggal_Update ?></td>
                                                    <td><?= $row->NIK ?></td>
                                                    <td><?= $row->NAMA ?></td>
                                                    <td>
                                                        <a href="<?= site_url('superuser/presensimodal/' . $row->KOMPE_ID) ?>" class="btn btn-warning btn-sm item-detail"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:void(0);" data="<?= $row->KOMPE_ID ?>" class="btn btn-danger btn-sm item-delete" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-times"></i> </a>
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


            <!-- Modal dialog hapus data-->
            <div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anda ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
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

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableIzin').on('click', '.item-delete', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller employee
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>superuser/delete_izin/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>