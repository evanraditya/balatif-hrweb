<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_goldarah extends CI_Model
{
    private $table = 'tabel_goldarah';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'GolDarah',
                'label' => 'GolDarah',
                'rules' => 'trim|required'
            ],
            
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_goldarah');
        $this->db->order_by("GolDarahId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "GolDarah" => $this->input->post('GolDarah'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("GolDarahId" => $id));
    }
    
}