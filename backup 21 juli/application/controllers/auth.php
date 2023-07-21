<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model"); //load model login
		$this->load->model("super_emp_model"); //load model employee
    }

    public function index()
    {
		if($this->session->userdata('status') !=TRUE){ //cek status = salah maka status tidak login
			$data["title"] = "Login";
        	$this->load->view('templates/login_header', $data);
       		$this->load->view('login_karyawan/login');
		}
    }

	//login
    function aksi_login(){
		$Email = $this->input->post('Email');
		$PASSWORD = $this->input->post('PASSWORD');
		$cek = $this->login_model->cek_login($Email,$PASSWORD); //cek inputan Username dan Password
		if($cek->num_rows()>0){ // jika login berhasil
			$user = $cek->row_array();
			$this->session->set_userdata('status',TRUE); //status =  true = login
			$id = $this->super_emp_model; //id ambil dari model employee
			$id=$user['KaryawanId'];
			if($user['HakAkses']=='Kadep'){ //Hak akses = admin
				$nama = $user['Nama'];
				$HAK = $user['HakAkses'];
				$DEPARTEMEN = $user['Departemen'];
                $this->session->set_userdata('id',$id); //set sesi id dari model employee
				$this->session->set_userdata('Nama',$nama); // set sesi nama dari model employee
				$this->session->set_userdata('HakAkses',$HAK);
				$this->session->set_userdata('Departemen',$DEPARTEMEN);
                redirect('employee');
			}
			if($user['HakAkses']=='HR'){ //Hak akses = admin
				$nama = $user['Nama'];
				$HAK = $user['HakAkses'];
                $this->session->set_userdata('id',$id); //set sesi id dari model employee
				$this->session->set_userdata('Nama',$nama); // set sesi nama dari model employee
				$this->session->set_userdata('HakAkses',$HAK);
                redirect('superuser');
			}
			if($user['HakAkses']=='Karyawan'){ //hak akses = user
				$nama = $user['Nama'];
				$HAK = $user['HakAkses'];
                $this->session->set_userdata('id',$id); //set seis id dari model employee
				$this->session->set_userdata('Nama',$nama); // set sesi nama dari model employee
				$this->session->set_userdata('HakAkses',$HAK);
                redirect('user');
			}
			if($user['StatusKaryawan']=='Resign'){
				$data["title"] = "Login Gagal :(";
				$this->load->view('templates/login_header', $data);
				$this->load->view('login_karyawan/resigncaution'); 
			}
		}
		else{ // jika login gagal
			$data["title"] = "Login Gagal :(";
			$this->load->view('templates/login_header', $data);
			$this->load->view('login_karyawan/loginerror'); 
		}
		
	}
	
	//logout
	function logout(){ 
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}