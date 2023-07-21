<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_resign extends CI_Model
{
    private $table = 'tabel_karyawan';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Plan',
                'label' => 'Plan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Kategori',
                'label' => 'Kategori',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Departemen',
                'label' => 'Departemen',
                'rules' => 'trim|required'  
            ],
            [
                'field' => 'StatusKaryawan',
                'label' => 'StatusKaryawan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Jabatan',
                'label' => 'Jabatan',
                'rules' => 'trim|required'
                
            ],
            [
                'field' => 'TanggalResign',
                'label' => 'TanggalResign',
                
            ],
        ];
    }

    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Plan" => $this->input->post('Plan'),
            "Kategori" => $this->input->post('Kategori'),
            "Departemen" => $this->input->post('Departemen'),
            "Jabatan" => $this->input->post('Jabatan'),
            "StatusKaryawan" => $this->input->post('StatusKaryawan'),
        );
        // $this->db->set('TanggalResign', 'NOW()', FALSE);
        return $this->db->update($this->table, $data, array('KaryawanId' => $this->input->post('KaryawanId')));
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["KaryawanId" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from employee where KaryawanId'$id'
    }
    
    
}