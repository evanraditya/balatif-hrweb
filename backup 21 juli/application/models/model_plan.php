<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_plan extends CI_Model
{
    private $table = 'tabel_plan';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Plan',
                'label' => 'Plan',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_plan');
        $this->db->order_by("PlanId", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Plan" => $this->input->post('Plan'),

        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("PlanId" => $id));
    }
    
}