<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_status extends CI_Model
{
    private $table = 'tabel_status';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Status',
                'label' => 'Status',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_status');
        $this->db->order_by("StatusId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Status" => $this->input->post('Status'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("StatusId" => $id));
    }
    
}