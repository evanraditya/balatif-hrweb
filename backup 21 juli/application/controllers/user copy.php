<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model"); //load model employee
        $this->load->model("user_izin_model"); //load model izin
        $this->load->model("super_presensi"); //load model izin
        if($this->session->userdata('status') != "login" ){ //jika status tidak login
			redirect('auth');
        }
        if($this->session->userdata('HAK_AKSES') != "3"){
            redirect('auth/logout');
        }
    }

    public function index($id=null)
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); //validasi page
        $Employee = $this->user_model; //objek model
        $data["title"] = "Detail Data employee";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function profil($id=null)
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); //validasi page
        $Employee = $this->user_model; //objek model
        $data["title"] = "Detail Data employee";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/profil', $data);
        $this->load->view('templates/footer');
    }

    //edit profil user
    public function edit($id = null)
    {
        $data['current_user'] = $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/edit'); // validasi page
        $Employee = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());
        if ($validation->run()) {
            $Employee->update();
            redirect("user/index");
        }
        if ($this->input->method() === 'post') {
            // the user id contain dot, so we must remove it
            $file_name = str_replace('.','',$data['current_user']->EMP_ID);
            $config['upload_path']          = FCPATH.'application/upload/profil/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['file_name']            = $file_name;
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB
            $config['max_width']            = 1080;
            $config['max_height']           = 1080;
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('profil')) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $uploaded_data = $this->upload->data();
    
                $new_data = [
                    'id' => $data['current_user']->EMP_ID,
                    'profil' => $uploaded_data['file_name'],
                ];
        
                if ($this->$Employee->update($new_data)) {
                    redirect(site_url('user/index'));
                }
            }
        }
        $data["title"] = "Edit Data employee";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }

    //Izin User
    public function izin($nik=null)
    {
        $nik = $this->session->userdata('NIK');
        if (!isset($nik)) redirect('user/izin'); // validasi page
        $Izin = $this->user_izin_model;
        $data["title"] = "Data Izin";
        $data["data_izin"] = $Izin->getAll($nik);
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/izin', $data);
        $this->load->view('templates/footer');
    }
    
    //Tambah Izin user
    public function add_izin($id=null) 
    {
        $id = $this->session->userdata('id'); //ambil id dari sesi
        if (!isset($id)) redirect('user/index'); // validasi page
        $Izin = $this->user_izin_model; //objek model
        $Employee = $this->user_model;
        $data["data_employee"] = $Employee->getById($id);
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Izin->rules()); //menerapkan rules validasi pada emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada emp_model
        if ($validation->run()) {
            $Izin->save();
            redirect("user/izin");
        }
        $data["title"] = "Tambah Data Izin employee";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/add_izin', $data);
        $this->load->view('templates/footer');
    }
    
    public function modalizin($id=null)
    {
        $Izin = $this->user_izin_model; //objek model
        $data["title"] = "Detail Izin Karyawan";
        $data["data_izin"] = $Izin->getById($id);
        if (!$data["data_izin"]) show_404();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_menu');
        $this->load->view('user/modalizin', $data);
        $this->load->view('templates/footer');
    }
}