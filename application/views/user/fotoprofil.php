<!-- <body background="<?php echo base_url().'asset/image/bgphrama.jpg'?>"> -->
<div class="">
    <div class="card container col-md-10 ">
        <div class="col-xl-auto ml-xl-5">
            <div class="col-md-12">
                <div class="card-body ml-xl-3">
                    <div class="col-md-12 text-light bg-danger">
                        <h1>Edit Profil</h2>
                    </div>
                    <?php echo form_open_multipart('user/uploadfoto');?>
                        <div class="form-group">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label"><b>Foto Profil <small>File 2mb: JPG, JPEG, PNG</small></b></label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="FOTO" value="">
                                <small class="text-danger">
                                    <?php echo form_error('FOTO') ?>
                                </small>
                            </div>
                        </div>
                        <br /><br />

                        <button type="submit"> EDIT </button>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>