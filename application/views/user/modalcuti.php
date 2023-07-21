<body background="<?php echo base_url().'asset/image/bgphrama.jpg'?>">
<div class="container col-md-11 ">
    <div class="col-xl-auto ml-xl-5">
            <div class="container col-md-11 pt-2">
                <div class="row">
                    <div class="col-md-12">
                    <div class="container col-11 pt-3">
                            <div class="card d-flex justify-content-center">
                                <div class="card-body">
                                    <h3>Cuti Karyawan</h3>
                                    <div class="pt-3">
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Nama Karyawan</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_cuti->Nama; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-4 ">
                                                <b>Departemen</b>  
                                            </div>
                                            <div class="col-md-8 ">
                                                <p><?php echo $data_cuti->Departemen; ?></p>  
                                            </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Jenis Ketidakhadiran</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                    <p><?php echo $data_cuti->JenisCuti; ?></p>  
                                                </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Tanggal Mengajukan</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                <p><?php echo $data_cuti->Tanggal; ?></p> 
                                                </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Tanggal Memulai</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                <p><?php echo $data_cuti->CutiAwal; ?></p> 
                                                </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Tanggal Berakhir</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                    <p><?php echo $data_cuti->CutiAkhir; ?></p>  
                                                </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Alasan Ketidakhadiran</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                    <p><?php echo $data_cuti->AlasanCuti; ?></p>  
                                                </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Status Pengajuan</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                    <p><?php echo $data_cuti->StatusCuti; ?></p>  
                                                </div>     
                                        </div>
                                        <div class="row" >
                                                <div class="col-md-4 ">
                                                    <b>Alasan Penolakan</b>  
                                                </div>
                                                <div class="col-md-8 ">
                                                    <p><?php echo $data_cuti->Penolakan; ?></p>  
                                                </div>     
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 offset pt-3 d-flex justify-content-center">
                                                <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
