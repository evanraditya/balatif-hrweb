<?php
defined('BASEPATH') or exit('No direct script access allowed');

class super_cuti_model extends CI_Model
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
            [
                'field' => 'StatusCuti',
                'label' => 'StatusCuti',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Penolakan',
                'label' => 'Penolakan',
            ]
            
            
            
        ];
    }
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->where('tabel_cuti.CutiId',$id);
        return $this->db->get()->row();   
        // return $this->db->get_where($this->table, ["CutiId" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from izin where CutiId'$id'
    }

    //menampilkan semua data izin dari Nama (belum work)
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->order_by("CutiId", "desc");
        $query = $this->db->get();
        return $query->result();
        // $this->db->order_by("CutiId", "desc");
        // $query = $this->db->get();
        // return $query->result();
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
            "StatusCuti" => $this->input->post('StatusCuti'),

        );
         
        return $this->db->insert($this->table, $data);
    }

    

    public function update(){
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisCuti" => $this->input->post('JenisCuti'),
            "Tanggal" => $this->input->post('Tanggal'),
            "CutiAwal" => $this->input->post('CutiAwal'),
            "CutiAkhir" => $this->input->post('CutiAkhir'),
            "AlasanCuti" => $this->input->post('AlasanCuti'),
            "StatusCuti" => $this->input->post('StatusCuti'),
            "Penolakan" => $this->input->post('Penolakan'),
        );
        return $this->db->update($this->table, $data, array('CutiId' => $this->input->post('CutiId')));
     // return $this->db->update($this->table, $data, array('EMP_ID' => $this->input->post('EMP_ID')));
    }

    public function jumlahDiterima()
    {
        $this->db->where('StatusCuti', 'Diterima');
        $query = $this->db->get('tabel_cuti');
        return $query->num_rows();
    }

    public function jumlahDitolak()
    {
        $this->db->where('StatusCuti', 'Ditolak');
        $query = $this->db->get('tabel_cuti');
        return $query->num_rows();
    }

    public function JenisCuti()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_jeniscuti');
        return $query->result();
    }
    public function CutiHariIni()
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->where('CutiAwal',date('Y-m-d'));
        // $this->db->where('StatusCuti',('Diterima'));
        $query = $this->db->get();
        return $query->result();
    }
    public function TotalCutiHariIni()
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->where('CutiAwal',date('Y-m-d'));
        // $this->db->where('StatusCuti',('Diterima'));
        $query = $this->db->get();
        return $query->num_rows();
    }
    

    //hapus data izin
    public function delete($id)
    {
        return $this->db->delete($this->table, array("CutiId" => $id));
    }
}