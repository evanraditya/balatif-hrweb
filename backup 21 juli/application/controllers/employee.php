    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("emp_model"); //load model employee
        $this->load->model("super_emp_model"); //load model employee
        $this->load->model("super_cuti_model"); //load model employee
        $this->load->model("cuti_model"); //load model cuti
        if($this->session->userdata('status') != "login"){
			redirect('auth');
        }
        if($this->session->userdata('HakAkses') != "Kadep"){
            redirect('auth/logout');
        }
    }

    //tampilan awal
    public function index($DEPARTEMEN=null)
    {
        
        $DEPARTEMEN=$this->session->userdata('Departemen');
        $data["title"] = "List cuti karyawan";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_cuti"] = $this->cuti_model->CutiHariIni($DEPARTEMEN);
        $data['TotalCutiHariIni'] = $this->cuti_model->TotalCutiHariIni();
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
        $this->load->view('templates/menu');
        //load view index.php pada folder views/employee
        $this->load->view('employee/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('employee');

        $Employee = $this->emp_model;
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());

        if ($validation->run()) {
            $Employee->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data employee berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect("employee/listkaryawan");
        }
        $data["title"] = "Edit Data employee";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('employee/edit', $data);
        $this->load->view('templates/footer');
    }
    public function listkaryawan($DEPARTEMEN=null)
    {
        $DEPARTEMEN=$this->session->userdata('Departemen');
        $data["title"] = "Data Karyawan";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_employee"] = $this->emp_model->getAll($DEPARTEMEN);
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        //load view index.php pada folder views/employee
        $this->load->view('employee/listkaryawan', $data);
        $this->load->view('templates/footer');
    }
    
    //view detail tada karyawan
    public function view($id = null)
    {
        if (!isset($id)) redirect('employee');
        $Employee = $this->emp_model; //objek model
        $data["title"] = "Detail Data employee";
        $data["data_employee"] = $Employee->getById($id);
        if (!$data["data_employee"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('employee/view', $data);
        $this->load->view('templates/footer');
    }

    //hapus data
    public function delete()   
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->emp_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data employee berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }

    public function cuti($DEPARTEMEN=null)
    {
        
        $DEPARTEMEN=$this->session->userdata('Departemen');
        $data["title"] = "Ketidakhadiran karyawan";
        //ambil fungsi getAll untuk menampilkan semua data employee
        $data["data_employee"] = $this->emp_model->getUserCuti($DEPARTEMEN);
        $data['Diterima'] = $this->cuti_model->jumlahDiterima();
        $data['Ditolak'] = $this->cuti_model->jumlahDitolak();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        //load view index.php pada folder views/employee
        $this->load->view('employee/cuti', $data);
        $this->load->view('templates/footer');
    }

    //tampilan cuti
    public function cuti_karyawan($id = null)
    {
        if (!isset($id)) redirect('employee');
        $Employee = $this->emp_model; //objek model
        $data["title"] = "Detail Data employee";
        $data["data_cuti"] = $Employee->CutiKaryawan($id);
        $data['TotalCuti'] = $this->emp_model->hitungtotalcuti($id);
        $data['Cuti'] = $this->emp_model->hitungcuti($id);
        if($this->emp_model->hitungcuti($id) >= 12){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Total Cuti karyawan ini sudah mencapai batas maksimal silahkan bisa direview ulang. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('employee/cuti_karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function modalcuti($id = null)
    {
        if (!isset($id)) redirect('employee');

        $Employee = $this->cuti_model;
        $data["data_cuti"] = $Employee->getById($id);
        $validation = $this->form_validation;
        $validation->set_rules($Employee->rules());
        
        if ($validation->run()) {
            $Employee->update();
            redirect("employee/cuti");
        }
        $data["title"] = "Edit Data employee";
        if (!$data["data_cuti"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('employee/modalcuti', $data);
        $this->load->view('templates/footer');
    }
    //tambah cuti

    public function delete_cuti()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->cuti_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data employee berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    } 
}
?>