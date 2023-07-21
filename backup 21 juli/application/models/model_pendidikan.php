<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_pendidikan extends CI_Model
{
    private $table = 'tabel_pendidikan';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'PendidikanTerakhir',
                'label' => 'PendidikanTerakhir',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_pendidikan');
        $this->db->order_by("PendidikanId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "PendidikanTerakhir" => $this->input->post('PendidikanTerakhir'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("PendidikanId" => $id));
    }
    
}