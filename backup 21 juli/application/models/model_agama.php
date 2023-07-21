<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_agama extends CI_Model
{
    private $table = 'tabel_agama';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_agama');
        $this->db->order_by("AgamaId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Agama" => $this->input->post('Agama'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("AgamaId" => $id));
    }
    
}