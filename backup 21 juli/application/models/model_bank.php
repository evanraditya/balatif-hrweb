<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_bank extends CI_Model
{
    private $table = 'tabel_bank';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Bank',
                'label' => 'Bank',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_bank');
        $this->db->order_by("BankId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Bank" => $this->input->post('Bank'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("BankId" => $id));
    }
    
}