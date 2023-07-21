<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_cuti_model extends CI_Model
{
    private $table = 'tabel_cuti';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'JenisCuti',
                'label' => 'JenisCuti',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Tanggal',
                'label' => 'Tanggal',
                'rules' => 'trim'
            ],
            [
                'field' => 'CutiAwal',
                'label' => 'CutiAwal',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'CutiAkhir',
                'label' => 'CutiAkhir',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'AlasanCuti',
                'label' => 'AlasanCuti',
                'rules' => 'trim|required'
            ],
            
            
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["CutiId" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from izin where CutiId'$id'
    }

    // menampilkan semua data izin dari NIK
    public function getAll($nama)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->order_by("CutiId", "desc");
        $this->db->where("tabel_karyawan.Nama", $nama);
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from izin order by CutiId desc
    }
    
    //menambahkan data izin
    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisCuti" => $this->input->post('JenisCuti'),
            "CutiAwal" => $this->input->post('CutiAwal'),
            "CutiAkhir" => $this->input->post('CutiAkhir'),
            "AlasanCuti" => $this->input->post('AlasanCuti'),
            
        );
        
        $this->db->set('Tanggal', 'NOW()', FALSE);
        return $this->db->insert($this->table, $data);
    }
    public function foto($data){
        
	    $insert_data['pic_file'] = $data['pic_file'];
        $this->db->insert($this->table, $insert_data);
    }

    //hapus data izin
    public function delete($id)
    {
        return $this->db->delete($this->table, array("CutiId" => $id));
    }
}