<body style="background-image: url('asset/image/farmaBG.PNG');">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- LOGIN FORM-->
                                <div class="card shadow-lg mt-5">
                                    <div class="card-header justify-content-center" style="background-color:crimson">
                                        <h3 class="font-weight-light my-4" style="color: #ffff ; text-align: center ;">
                                            Login <br> BALATIF HR MANAGEMENT
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Login form-->
                                        <form method="post" action="<?php echo base_url('auth/aksi_login'); ?>">
                                            <!-- Email -->
                                            <div class="form-group">
                                                <label for="Email" class="small mb-1" >Email</label >
                                                <input class="form-control py-4" id="Email" type="text" name="Email">
                                                <small class="text-danger">
                                                    <?php echo form_error('Email') ?>
                                                </small>
                                            </div>
                                            <!-- Password-->
                                            <div class="form-group">
                                                <label class="small mb-1" for="PASSWORD" >Password</label>
                                                <input class="form-control py-4" id="PASSWORD" type="text" name="PASSWORD">
                                                <small class="text-danger">
                                                    <?php echo form_error('PASSWORD') ?>
                                                </small>
                                            </div>

                                            <!-- Button login-->
                                            <div class="form-group d-flex align-items-center justify-content-center pt-4 " >                                
                                                <button class=" nav-link btn btn-danger" type="submit" value="Login"> Login </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- footer card -->
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col">
                                                <small style="color: gray"> Belum memiliki akun? silahkan hubungi admin! </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
</body>