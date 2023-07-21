<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_departemen extends CI_Model
{
    private $table = 'tabel_departemen';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Departemen',
                'label' => 'Departemen',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_departemen');
        $this->db->order_by("DepartemenId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Departemen" => $this->input->post('Departemen'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("DepartemenId" => $id));
    }
    
}