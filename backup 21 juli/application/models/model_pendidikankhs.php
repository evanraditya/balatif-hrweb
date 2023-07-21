<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_pendidikankhs extends CI_Model
{
    private $table = 'tabel_pendidikankhs';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'PendidikanKhs',
                'label' => 'PendidikanKhs',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_pendidikankhs');
        $this->db->order_by("PendidikanKhsId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "PendidikanKhs" => $this->input->post('PendidikanKhs'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("PendidikanKhsId" => $id));
    }
    
}