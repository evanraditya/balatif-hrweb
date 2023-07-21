<?php
defined('BASEPATH') or exit('No direct script access allowed');

class super_presensi extends CI_Model
{
    private $table = 'tabel_presensi';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'NIK',
                'label' => 'NIK',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Tanggal_Update',
                'label' => 'Tanggal_Update',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'AKREDITASI',
                'label' => 'AKREDITASI',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'LEMBUR',
                'label' => 'LEMBUR',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'BONUS',
                'label' => 'BONUS',
            ],
            [
                'field' => 'GAJI',
                'label' => 'GAJI',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'TOTAL_GAJI',
                'label' => 'TOTAL_GAJI',
            ],
            [
                'field' => 'TERLAMBAT',
                'label' => 'TERLAMBAT',
                'rules' => 'trim|required'
            ]
            
            
            
        ];
    }

    //menampilkan data izin berdasarkan NIK (belum work)
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('dataemp');
        $this->db->join('tabel_presensi','dataemp.NIK=tabel_presensi.NIK');
        $this->db->where('tabel_presensi.KOMPE_ID',$id);
        return $this->db->get()->row();
        // return $this->db->get_where($this->table, ["KOMPE_ID" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from izin where IZIN_ID'$id'
    }
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('dataemp');
        $this->db->join('tabel_presensi','dataemp.NIK=tabel_presensi.NIK');
        $this->db->order_by("KOMPE_ID", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from employee order by EMP_ID desc
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "NIK" => $this->input->post('NIK'),
            "Tanggal_Update" => $this->input->post('Tanggal_Update'),
            "AKREDITASI" => $this->input->post('AKREDITASI'),
            "LEMBUR" => $this->input->post('LEMBUR'),
            "BONUS" => $this->input->post('BONUS'),
            "GAJI" => $this->input->post('GAJI'),
            "TOTAL_GAJI" => $this->input->post('TOTAL_GAJI'),
            "TERLAMBAT" => $this->input->post('TERLAMBAT'),

        );
        $this->db->insert($this->table, $data);
        return $this->db->update($this->table, $data, array('KOMPE_ID' => $this->input->post('KOMPE_ID')));
    }

    // public function save($data)
    // {
    //     $this->db->insert($this->table, $data);
    //     return $this->db->update($this->table, $data, array('KOMPE_ID' => $this->input->post('KOMPE_ID')));
    // }

    
    public function hitung($LEMBUR, $TERLAMBAT, $GAJI){
        $BONUS = $LEMBUR - $TERLAMBAT;
        $TOTAL_GAJI= $GAJI + $BONUS;
        return $TOTAL_GAJI;
    }
    public function update($data){
        $data = array(
            "NIK" => $this->input->post('NIK'),
            "Tanggal_Update" => $this->input->post('Tanggal_Update'),
            "LEMBUR" => $this->input->post('LEMBUR'),
            "BONUS" => $this->input->post('BONUS'),
            "GAJI" => $this->input->post('GAJI'),
            "TOTAL_GAJI" => $this->input->post('TOTAL_GAJI'),
            "TERLAMBAT" => $this->input->post('TERLAMBAT'),
        );
        return $this->db->update($this->table, $data, array('KOMPE_ID' => $this->input->post('KOMPE_ID')));
     // return $this->db->update($this->table, $data, array('EMP_ID' => $this->input->post('EMP_ID')));
    }


    //hapus data izin
    public function delete($id)
    {
        return $this->db->delete($this->table, array("IZIN_ID" => $id));
    }
}