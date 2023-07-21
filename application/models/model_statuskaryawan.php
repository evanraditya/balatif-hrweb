<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_statuskaryawan extends CI_Model
{
    private $table = 'tabel_statuskaryawan';
    private $table2 = 'tabel_karyawan';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'StatusKaryawan',
                'label' => 'StatusKaryawan',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_statuskaryawan');
        $this->db->order_by("StatKarId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function update()
    {
        $data = array(
            "StatusKaryawan" => $this->input->post('StatusKaryawan'),
        );
        return $this->db->update($this->table2, $data, array('KaryawanId' => $this->input->post('KaryawanId')));
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "StatusKaryawan" => $this->input->post('StatusKaryawan'),

        );
        return $this->db->insert($this->table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table2, ["KaryawanId" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from employee where KaryawanId'$id'
    }
    public function StatusKaryawan()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_statuskaryawan');
        return $query->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("StatKarId" => $id));
    }
    
}