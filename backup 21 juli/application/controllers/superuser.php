<?php
defined('BASEPATH') or exit('No direct script access allowed');

class superuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("super_emp_model"); //load model employee
        $this->load->model("super_cuti_model"); //load model cuti
        $this->load->model("super_presensi"); //load model cuti
        $this->load->model("model_agama"); //load model cuti
        $this->load->model("model_gender"); //load model cuti
        $this->load->model("model_pendidikan"); //load model cuti
        $this->load->model("model_pendidikankhs"); //load model cuti
        $this->load->model("model_plan"); //load model cuti
        $this->load->model("model_kategori"); //load model cuti
        $this->load->model("model_departemen"); //load model cuti
        $this->load->model("model_jabatan"); //load model cuti
        $this->load->model("model_bank"); //load model cuti
        $this->load->model("model_goldarah"); //load model cuti
        $this->load->model("model_status"); //load model cuti
        $this->load->model("model_hakakses"); //load model cuti
        $this->load->model("model_jeniscuti"); //load model cuti
        $this->load->model("model_statuskaryawan"); //load model cuti
        $this->load->model("model_resign"); //load model cuti
        
        if($this->session->userdata('status') != "login"){
			redirect('auth');
        }
        if($this->session->userdata('HakAkses') != "HR"){
            redirect('auth/logout');
        }
    }

    //tampilan awal
    public function index()
    {

        $data["title"] = "Home";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_cuti"] = $this->super_cuti_model->CutiHariIni();
        $data['TotalCutiHariIni'] = $this->super_cuti_model->TotalCutiHariIni();
        $data['TotalKaryawan'] = $this->super_emp_model->TotalKaryawan();
        $data['JumlahKaryawanBalatifT'] = $this->super_emp_model->JumlahKaryawanBalatifT();
        $data['JumlahOutshourchingT'] = $this->super_emp_model->JumlahOutshourchingT();
        $data['JumlahBoronganT'] = $this->super_emp_model->JumlahBoronganT();
        $data['JumlahKaryawanT'] = $this->super_emp_model->JumlahKaryawanT();
        $data['JumlahKaryawanBalatifP'] = $this->super_emp_model->JumlahKaryawanBalatifP();
        $data['JumlahOutshourchingP'] = $this->super_emp_model->JumlahOutshourchingP();
        $data['JumlahBoronganP'] = $this->super_emp_model->JumlahBoronganP();
        $data['JumlahKaryawanP'] = $this->super_emp_model->JumlahKaryawanP();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        //load view index.php pada folder views/employee
        $this->load->view('superuser/index', $data);
        $this->load->view('templates/footer');
    }
    public function listkaryawan()
    {

        $data["title"] = "Data Karyawan";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_employee"] = $this->super_emp_model->getAll();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        //load view index.php pada folder views/employee
        $this->load->view('superuser/listkaryawan', $data);
        $this->load->view('templates/footer');
    }

    public function listkaryawanresign()
    {

        $data["title"] = "Data Karyawan non-Aktif";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_employee"] = $this->super_emp_model->KaryawanResign();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        //load view index.php pada folder views/employee
        $this->load->view('superuser/listkaryawanresign', $data);
        $this->load->view('templates/footer');
    }
    //tambah data employee
    public function add()
    {
        $Employee = $this->super_emp_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data employee berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/listkaryawan");
        }
        $data["title"] = "Tambah Data employee";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/add', $data);
        $this->load->view('templates/footer');
    }
    public function modalresign($id = null)
    {
        if (!isset($id)) redirect('superuser/listkaryawan');
        $Employee = $this->model_resign;
        $data["resign"] = $this->super_emp_model->resign();
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());

        if ($validation->run()) {
            $Employee->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data employee berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect("superuser/listkaryawan");
        }
        $data["title"] = "Perubahan Status Karyawan";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/modalresign', $data);
        $this->load->view('templates/footer');
    }

    //edit data karyawan
    public function edit($id = null)
    {
        
        if (!isset($id)) redirect('superuser');

        $Employee = $this->super_emp_model;
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());

        if ($validation->run()) {
            $Employee->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data employee berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect("superuser/listkaryawan");
        }
        $data["Gender"] = $Employee->Gender();
        $data["Departemen"] = $Employee->Departemen();
        $data["Plan"] = $Employee->Plan();
        $data["Kategori"] = $Employee->Kategori();
        $data["Jabatan"] = $Employee->Jabatan();
        $data["Bank"] = $Employee->Bank();
        $data["Agama"] = $Employee->Agama();
        $data["Pendidikan"] = $Employee->Pendidikan();
        $data["PendidikanKhs"] = $Employee->PendidikanKhs();
        $data["GolDarah"] = $Employee->GolDarah();
        $data["Status"] = $Employee->Status();
        $data["AgamaK"] = $Employee->AgamaK();
        $data["PendidikanK"] = $Employee->PendidikanK();
        $data["AgamaAyah"] = $Employee->AgamaAyah();
        $data["PendidikanAyah"] = $Employee->PendidikanAyah();
        $data["AgamaIbu"] = $Employee->AgamaIbu();
        $data["PendidikanIbu"] = $Employee->PendidikanIbu();
        $data["Hakakses"] = $Employee->Hakakses();
        $data["title"] = "Edit Data employee";
        $data["StatusKaryawan"] = $Employee->StatusKaryawan();
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/edit', $data);
        $this->load->view('templates/footer');
    }
    //view detail tada karyawan
    public function view($id = null)
    {
        if (!isset($id)) redirect('superuser');
        $Employee = $this->super_emp_model; //objek model
        $data["title"] = "Biodata Karyawan";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/view', $data);
        $this->load->view('templates/footer');
    }

    public function presensi($id=null)
    {
        if (!isset($id)) redirect('superuser/cuti');
        $Kompetensi = $this->super_presensi; //objek model
        $Employee = $this->super_emp_model;
        $data["data_employee"] = $Employee->getById($id);
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Kompetensi->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Kompetensi->save();
            redirect("superuser/listkaryawan");
        }
        $data["title"] = "Data Kompetensi Karyawan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/presensi', $data);
        $this->load->view('templates/footer');
    }

    // public function presensi($id=null)
    // {
    //     if (!isset($id)) redirect('superuser/cuti');
    //     $Kompetensi = $this->super_presensi; //objek model
    //     $Employee = $this->super_emp_model;
    //     $data["data_employee"] = $Employee->getById($id);
    //     $NIK = $this->input->post('NIK');
    //     $Tanggal_Update = $this->input->post('Tanggal_Update');
    //     $AKREDITASI = $this->input->post('AKREDITASI');
    //     $LEMBUR = $this->input->post('LEMBUR');
    //     $BONUS = $this->input->post('BONUS');
    //     $GAJI = $this->input->post('GAJI');
    //     $TOTAL_GAJI = $this->input->post('TOTAL_GAJI');
    //     $TERLAMBAT = $this->input->post('TERLAMBAT');
    //     $BONUS = $LEMBUR - $TERLAMBAT;
    //     $TOTAL_GAJI = $GAJI + $BONUS;

    //     $data = array(
    //         'NIK' => $NIK,
    //         'Tanggal_Update' => $Tanggal_Update,
    //         'AKREDITASI' => $AKREDITASI,
    //         'LEMBUR' => $LEMBUR,
    //         'BONUS' => $BONUS,
    //         'GAJI' => $GAJI,
    //         'TOTAL_GAJI' => $TOTAL_GAJI,
    //         'TERLAMBAT' => $TERLAMBAT
    //     );
    //     $Kompetensi->save($data);
    //     $data["title"] = "Data Kompetensi Karyawan";
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/super_menu');
    //     $this->load->view('superuser/presensi', $data);
    //     $this->load->view('templates/footer');
    // }

    public function hitunggaji($LEMBUR, $TERLAMBAT, $GAJI)
    {
        if (!isset($id)) redirect('superuser/cuti');
        $Kompetensi = $this->super_presensi; //objek model
        $Kompetensi->hitung($LEMBUR, $TERLAMBAT, $GAJI);
    }

    public function presensiview($id = null)
    {
        if (!isset($id)) redirect('superuser/presensi');
        $Kompetensi = $this->super_presensi; //objek model
        $Employee = $this->super_emp_model;
        $data["data_employee"] = $Employee->getByIdKompe($id);
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Kompetensi->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Kompetensi->save();
            redirect("superuser/listkaryawan");
        }
        if (!$data["data_employee"]){
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Karyawan belum memiliki data presensi!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('superuser/listkaryawan');
        }
        $data["title"] = "Data Kompetensi Karyawan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/presensiview', $data);
        $this->load->view('templates/footer');
    }

    public function presensimodal($id = null)
    {
        if (!isset($id)) redirect('superuser/cuti');
        $Employee = $this->super_presensi;
        $data["data_employee"] = $Employee->getById($id);
        $data["title"] = "Data Kompetensi Karyawan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/presensimodal', $data);
        $this->load->view('templates/footer');
    }

    public function presensi_update()
    {
        $Kompetensi = $this->super_presensi; //objek model
        $data["data_employee"] = $Kompetensi->getAll();
        $data["title"] = "LOG Data presensi karyawan";
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/presensi_update', $data);
        $this->load->view('templates/footer');
    }

    //hapus data
    public function delete()   
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->super_emp_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data employee berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }

    //tampilan cuti
    public function cuti()
    {
        $data["title"] = "Pengajuan Ketidakhadiran";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_cuti"] = $this->super_cuti_model->getAll();
        $data['Diterima'] = $this->super_cuti_model->jumlahDiterima();
        $data['Ditolak'] = $this->super_cuti_model->jumlahDitolak();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        //load view index.php pada folder views/employee
        $this->load->view('superuser/cuti', $data);
        $this->load->view('templates/footer');
    }

    public function modalcuti($id = null)
    {
        if (!isset($id)) redirect('superuser');

        $Employee = $this->super_cuti_model;
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());

        if ($validation->run()) {
            $Employee->update();
            redirect("superuser/cuti");
        }
        $data["title"] = "Edit Data employee";
        $data["data_cuti"] = $Employee->getById($id);
        if (!$data["data_cuti"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/modalcuti', $data);
        $this->load->view('templates/footer');
    }
    //tambah cuti
    public function add_cuti($id=null)
    {
        if (!isset($id)) redirect('superuser/cuti');
        $Izin = $this->super_cuti_model; //objek model
        $Employee = $this->super_emp_model;
        $data["data_employee"] = $Employee->getById($id);
        $data["JenisCuti"] = $Izin->JenisCuti();
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Izin->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Izin->save();
            redirect("superuser/cuti");
        }
        $data["title"] = "Pengajuan Ketidakhadiran";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/add_cuti', $data);
        $this->load->view('templates/footer');
    }

    public function delete_cuti()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->super_cuti_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data employee berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
    
    public function data_agama()
    {
        $Employee = $this->model_agama; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Agama berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_agama");
        }
        $data["data_employee"] = $this->model_agama->getAll();
        $data["title"] = "Data Agama";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_agama', $data);
        $this->load->view('templates/footer');
    }

    public function data_gender()
    {
        $Employee = $this->model_gender; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data gender berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_gender");
        }
        $data["data_employee"] = $this->model_gender->getAll();
        $data["title"] = "Data Jenis Kelamin";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_gender', $data);
        $this->load->view('templates/footer');
    }
    public function data_pendidikan()
    {
        $Employee = $this->model_pendidikan; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data pendidikan berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_pendidikan");
        }
        $data["data_employee"] = $this->model_pendidikan->getAll();
        $data["title"] = "Data Pendidikan Terakhir";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_pendidikan', $data);
        $this->load->view('templates/footer');
    }
    public function data_pendidikankhs()
    {
        $Employee = $this->model_pendidikankhs; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data pendidikan berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_pendidikankhs");
        }
        $data["data_employee"] = $this->model_pendidikankhs->getAll();
        $data["title"] = "Data Pendidikan Khusus";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_pendidikankhs', $data);
        $this->load->view('templates/footer');
    }
    public function data_plan()
    {
        $Employee = $this->model_plan; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data plan berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_plan");
        }
        $data["data_employee"] = $this->model_plan->getAll();
        $data["title"] = "Data Plan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_plan', $data);
        $this->load->view('templates/footer');
    }
    public function data_kategori()
    {
        $Employee = $this->model_kategori; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data kategori berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_kategori");
        }
        $data["data_employee"] = $this->model_kategori->getAll();
        $data["title"] = "Data Kategori";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_kategori', $data);
        $this->load->view('templates/footer');
    }
    public function data_departemen()
    {
        $Employee = $this->model_departemen; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data departemen berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_departemen");
        }
        $data["data_employee"] = $this->model_departemen->getAll();
        $data["title"] = "Data Departemen";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_departemen', $data);
        $this->load->view('templates/footer');
    }
    public function data_jabatan()
    {
        $Employee = $this->model_jabatan; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data jabatan berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_jabatan");
        }
        
        $data["data_employee"] = $this->model_jabatan->getAll();
        $data["title"] = "Data Jabatan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_jabatan', $data);
        $this->load->view('templates/footer');
    }
    public function data_bank()
    {
        $Employee = $this->model_bank; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data bank berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_bank");
        }
        $data["data_employee"] = $this->model_bank->getAll();
        $data["title"] = "Data Jenis Bank";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_bank', $data);
        $this->load->view('templates/footer');
    }
    public function data_goldarah()
    {
        $Employee = $this->model_goldarah; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data goldarah berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_goldarah");
        }
        $data["data_employee"] = $this->model_goldarah->getAll();
        $data["title"] = "Data Golongan Darah";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_goldarah', $data);
        $this->load->view('templates/footer');
    }
    public function data_status()
    {
        $Employee = $this->model_status; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data status berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_status");
        }
        $data["data_employee"] = $this->model_status->getAll();
        $data["title"] = "Data Jenis Status Hidup";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_status', $data);
        $this->load->view('templates/footer');
    }
    public function data_hakakses()
    {
        $Employee = $this->model_hakakses; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data hakakses berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_hakakses");
        }
        $data["data_employee"] = $this->model_hakakses->getAll();
        $data["title"] = "Data Hak Akses";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_hakakses', $data);
        $this->load->view('templates/footer');
    }
    public function data_jeniscuti()
    {
        $Employee = $this->model_jeniscuti; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data jeniscuti berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_jeniscuti");
        }
        $data["data_employee"] = $this->model_jeniscuti->getAll();
        $data["title"] = "Data Jenis Cuti";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_jeniscuti', $data);
        $this->load->view('templates/footer');
    }
    public function data_statuskaryawan()
    {
        $Employee = $this->model_statuskaryawan; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Employee->rules()); //menerapkan rules validasi pada super_emp_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada super_emp_model
        if ($validation->run()) {
            $Employee->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data statuskaryawan berhasil ditambah. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("superuser/data_statuskaryawan");
        }
        $data["data_employee"] = $this->model_statuskaryawan->getAll();
        $data["title"] = "Status Karyawan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/super_menu');
        $this->load->view('superuser/data_statuskaryawan', $data);
        $this->load->view('templates/footer');
    }
    
}
?>