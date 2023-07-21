<div class="content-wrapper">
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="container col-md-11 pt-2">
                <h3><?= $title ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a>Data Status Hidup Karyawan</a></li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            //create form
                            $attributes = array('id' => 'FrmAddEmployee', 'method' => "post", "autocomplete" => "off");
                            echo form_open('', $attributes);
                        ?>
                        <div class="form-group row pt-3">
                            <label for="Status" class="col-sm-6 col-form-label">Tambah Data Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Status" name="Status" value="<?=set_value('Status'); ?>">
                                <small class="text-danger">
                                    <?php echo form_error('Status') ?>
                                </small>
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>

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
                                                <th>Status Hidup</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_employee as $row) : ?>
                                                <tr>
                                                    <td><?= $row->Status ?></td>
                                                    <td class="row justify-content-center">
                                                        <a href="javascript:void(0);" data="<?= $row->StatusId ?>" class="btn btn-danger btn-sm item-delete ml-1 mr-1"><i class="fa fa-trash"></i> </a>
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

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableEmployee').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableEmployee').on('click', '.item-delete', function() {
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
                url: '<?php echo base_url() ?>superuser/delete/',
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