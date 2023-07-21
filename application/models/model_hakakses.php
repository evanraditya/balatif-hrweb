<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_hakakses extends CI_Model
{
    private $table = 'tabel_hakakses';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'HakAkses',
                'label' => 'HakAkses',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_hakakses');
        $this->db->order_by("HakAksesId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "HakAkses" => $this->input->post('HakAkses'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("HakAksesId" => $id));
    }
    
}