<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_jabatan extends CI_Model
{
    private $table = 'tabel_jabatan';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Jabatan',
                'label' => 'Jabatan',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_jabatan');
        $this->db->order_by("JabatanId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Jabatan" => $this->input->post('Jabatan'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("JabatanId" => $id));
    }
    
}