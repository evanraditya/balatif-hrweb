<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model"); //load model employee
        $this->load->model("user_cuti_model"); //load model cuti
        $this->load->model("super_presensi"); //load model cuti
        $this->load->model("super_emp_model"); //load model employee
        $this->load->model("super_cuti_model"); //load model employee
        if($this->session->userdata('status') != "login" ){ //jika status tidak login
			redirect('auth');
        }
        if($this->session->userdata('HakAkses') != "Karyawan"){
            redirect('auth/logout');
        }
    }

    public function index($id=null)
    {
        //ambil id dari sesi
        $id = $this->session->userdata('id');
        if (!isset($id)) redirect('user/index'); //validasi page
        $Employee = $this->user_model; //objek model
        $data["data_employee"] = $Employee->getById($id);
        $data["title"] = "Dashboard";
        $data['Cuti'] = $this->user_model->hitungcuti($id);
        if($this->user_model->hitungcuti($id) == 9){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Total Cuti hampir mencapai batas (sisa 3 cuti). 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        else if($this->user_model->hitungcuti($id) == 10){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Total Cuti hampir mencapai batas (sisa 2 cuti). 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        else if($this->user_model->hitungcuti($id) == 11){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Total Cuti hampir mencapai batas (sisa 1 cuti). 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        else if($this->user_model->hitungcuti($id) >= 12){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf Total Cuti sudah mencapai batas silahkan hubungi untuk mengetahui lebih lanjut. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }

        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/index', $data);
        
    }

    public function profil($id=null)
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); //validasi page
        $Employee = $this->user_model; //objek model
        $data["title"] = "Profil Karyawan";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/profil', $data);
        
    }

    public function fotoprofil($id=null)
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); //validasi page
        $Employee = $this->user_model;
        $data["title"] = "Foto Profil";
        $data["data_employee"] = $Employee->getById($id);
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/fotoprofil');
        
    }

    public function uploadfoto($data=null)
    {
        $FOTO = $_FILES['FOTO'];
        if ($FOTO=''){}else{
            $config['upload_path']          = './uploads';
            $config['allowed_types']        = 'jpg|png|gif'; 
            $config['max_size'] = '2048';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('FOTO'))
            {
                $FOTO=$this->upload->data('file_name');
                $data = array(
                    'FOTO' => $FOTO,
                );
                $this->user_model->upload($data); 
                redirect('user/index');    
            }
            else
            {
                echo "Upload gagal silahkan mengikuti ketentuan yang ada!";die();

            }

           
        } //referensi: https://www.youtube.com/watch?v=t0DXTspBDZY
    }

    //edit profil user
    public function edit($id = null)
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/edit'); // validasi page
        $Employee = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());
        if ($validation->run()) {
            $Employee->update();
            redirect("user/profil");
        }
        $data["Gender"] = $this->super_emp_model->Gender();
        $data["Departemen"] = $this->super_emp_model->Departemen();
        $data["Plan"] = $this->super_emp_model->Plan();
        $data["Kategori"] = $this->super_emp_model->Kategori();
        $data["Jabatan"] = $this->super_emp_model->Jabatan();
        $data["Bank"] = $this->super_emp_model->Bank();
        $data["Agama"] = $this->super_emp_model->Agama();
        $data["Pendidikan"] = $this->super_emp_model->Pendidikan();
        $data["PendidikanKhs"] = $this->super_emp_model->PendidikanKhs();
        $data["GolDarah"] = $this->super_emp_model->GolDarah();
        $data["Status"] = $this->super_emp_model->Status();
        $data["AgamaK"] = $this->super_emp_model->AgamaK();
        $data["PendidikanK"] = $this->super_emp_model->PendidikanK();
        $data["AgamaAyah"] = $this->super_emp_model->AgamaAyah();
        $data["PendidikanAyah"] = $this->super_emp_model->PendidikanAyah();
        $data["AgamaIbu"] = $this->super_emp_model->AgamaIbu();
        $data["PendidikanIbu"] = $this->super_emp_model->PendidikanIbu();
        $data["Hakakses"] = $this->super_emp_model->Hakakses();
        $data["title"] = "Edit Data employee";
        $data["StatusKaryawan"] = $this->super_emp_model->StatusKaryawan();
        $data["title"] = "Edit Profil karyawan";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/edit', $data);
        
    }


    //Cuti User
    public function cuti($nama=null,$id=null)
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); //validasi page
        $nama = $this->session->userdata('Nama');
        if (!isset($nama)) redirect('user/cuti'); // validasi page
        $Cuti = $this->user_cuti_model;
        $data["title"] = "Data Cuti";
        $data['Cuti'] = $this->user_model->hitungcuti($id);
        if($this->user_model->hitungcuti($id) == 9){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Total Cuti hampir mencapai batas (sisa 3 cuti). 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        else if($this->user_model->hitungcuti($id) == 10){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Total Cuti hampir mencapai batas (sisa 2 cuti). 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        else if($this->user_model->hitungcuti($id) == 11){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Total Cuti hampir mencapai batas (sisa 1 cuti). 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        else if($this->user_model->hitungcuti($id) >= 12){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf Total Cuti sudah mencapai batas silahkan hubungi untuk mengetahui lebih lanjut. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        $data["data_cuti"] = $Cuti->getAll($nama);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/cuti', $data);
        
    }
    
    //Tambah Cuti user
    public function add_cuti($id=null) 
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); // validasi page
        $Cuti = $this->user_cuti_model; //objek model
        $Employee = $this->user_model;
        $data["data_employee"] = $Employee->getById($id);
        $data["JenisCuti"] = $this->super_cuti_model->JenisCuti();
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Cuti->rules()); //menerapkan rules validasi pada emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada emp_model
        if ($validation->run()) {
            $config['upload_path']          = APPPATH. '../asset/fotoizin/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2000;
            $this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('pic_file')){
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Maaf foto tidak dapat digunakan, silahkan cek berkas yang ingin anda upload. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect("user/cuti");
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['pic_file'] = $upload_data['file_name'];

				//store pic data to the db
                $Cuti->foto($data);
                $Cuti->save();
                //referensi:    https://theonlytutorials.com/codeigniter-3-upload-file-and-insert-data-into-database/?expand_article=1
                redirect("user/cuti");
			}
        }
        $data['Cuti'] = $this->user_model->hitungcuti($id);
        if($this->user_model->hitungcuti($id) >= 12){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Total Cuti sudah mencapai batas anda sudah tidak bisa mengajukan Cuti kerja dan Cuti Khusus, jika ingin Cuti kerja dan Cuti Khusus mengajukan silahkan menghubungi . 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        
        $data["title"] = "Tambah Data Cuti employee";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/add_cuti', $data);
        
    }
    
    public function modalcuti($id=null)
    {
        $Cuti = $this->user_cuti_model; //objek model
        $data["title"] = "Detail Cuti Karyawan";
        $data["data_cuti"] = $Cuti->getById($id);
        if (!$data["data_cuti"]) show_404();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/modalcuti', $data);
        
    }
}