<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_jeniscuti extends CI_Model
{
    private $table = 'tabel_jeniscuti';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'JenisCuti',
                'label' => 'JenisCuti',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_jeniscuti');
        $this->db->order_by("JenisCutiId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "JenisCuti" => $this->input->post('JenisCuti'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("JenisCutiId" => $id));
    }
    
}