<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_kategori extends CI_Model
{
    private $table = 'tabel_kategori';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Kategori',
                'label' => 'Kategori',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_kategori');
        $this->db->order_by("KategoriId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Kategori" => $this->input->post('Kategori'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("KategoriId" => $id));
    }
    
}