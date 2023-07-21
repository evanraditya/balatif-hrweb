<body background="<?php echo base_url().'asset/image/farmaBG.PNG'?>">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- LOGIN ERROR-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center" style="background-color:crimson">
                                        <h3 class="font-weight-light my-4" style="color: #ffff ; text-align: center ;">
                                            Login Ditolak
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Login form-->
                                        <h3 class="text-center">Username dan Password salah silahkan dicek kembali!</h3>
                                            <div class="form-group d-flex align-items-center justify-content-center pt-2 " >                                
                                                <a class=" nav-link btn btn-danger" type="submit" href="<?= site_url('auth') ?>"> Kembali </a>
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