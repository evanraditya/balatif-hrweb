<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_gender extends CI_Model
{
    private $table = 'tabel_gender';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'JenisKelamin',
                'label' => 'JenisKelamin',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_gender');
        $this->db->order_by("GenderId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "JenisKelamin" => $this->input->post('JenisKelamin'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("GenderId" => $id));
    }
    
}