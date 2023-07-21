<?php
defined('BASEPATH') or exit('No direct script access allowed');

class emp_model extends CI_Model
{
    private $table = 'tabel_karyawan';
    public function rules()
    {
        return [
            [
                'field' => 'PASSWORD',
                'label' => 'PASSWORD',
                'rules' => 'trim|required|min_length[8]|max_length[20]'
            ],
            [
                'field' => 'HakAkses',
                'label' => 'HakAkses',
                'rules' => 'trim|required'
            ],
            // Data Pribadi
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
                
            ],
            [
                'field' => 'JenisKelamin',
                'label' => 'JenisKelamin',
                
            ],
            [
                'field' => 'Plan',
                'label' => 'Plan',
                
            ],
            [
                'field' => 'Kategori',
                'label' => 'Kategori',
                
            ],
            [
                'field' => 'Departemen',
                'label' => 'Departemen',
                
            ],
            [
                'field' => 'Jabatan',
                'label' => 'Jabatan',
                
            ],
            [
                'field' => 'KTP',
                'label' => 'KTP',
                
            ],
            [
                'field' => 'KartuKeluarga',
                'label' => 'KartuKeluarga',
                
            ],
            [
                'field' => 'STATUS',
                'label' => 'STATUS',
                
            ],
            [
                'field' => 'TanggalMasuk',
                'label' => 'TanggalMasuk',
                
            ],
            [
                'field' => 'KTP',
                'label' => 'KTP',
                
            ],
            [
                'field' => 'KartuKeluarga',
                'label' => 'KartuKeluarga',
                
            ],
            [
                'field' => 'NPWP',
                'label' => 'NPWP',
                
            ],
            [
                'field' => 'BPJSK',
                'label' => 'BPJSK',
                
            ],
            [
                'field' => 'BPJSTK',
                'label' => 'BPJSTK',
                
            ],
            [
                'field' => 'NomorRekening',
                'label' => 'NomorRekening',
                
            ],
            [
                'field' => 'Bank',
                'label' => 'Bank',
                
            ],
            [
                'field' => 'AtasNamaRekening',
                'label' => 'AtasNamaRekening',
                
            ],
            [
                'field' => 'Agama',
                'label' => 'Agama',
                
            ],
            [
                'field' => 'PendidikanTerakhir',
                'label' => 'PendidikanTerakhir',
                
            ],
            [
                'field' => 'NomorTelepon',
                'label' => 'NomorTelepon',
                
            ],
            [
                'field' => 'Email',
                'label' => 'Email',
                
            ],
            [
                'field' => 'TempatLahir',
                'label' => 'TempatLahir',
                
            ],
            [
                'field' => 'TanggalLahir',
                'label' => 'TanggalLahir',
                
            ],
            [
                'field' => 'TinggiBadan',
                'label' => 'TinggiBadan',
                
            ],
            [
                'field' => 'BeratBadan',
                'label' => 'BeratBadan',
                
            ],
            [
                'field' => 'GolDarah',
                'label' => 'GolDarah',
                
            ],
            [
                'field' => 'AnakKe',
                'label' => 'AnakKe',
                
            ],
            [
                'field' => 'JumlahSaudara',
                'label' => 'JumlahSaudara',
                
            ],
            [
                'field' => 'AlamatAsal',
                'label' => 'AlamatAsal',
                
            ],
            [
                'field' => 'AlamatDomisili',
                'label' => 'AlamatDomisili',
                
            ],
            [
                'field' => 'Status',
                'label' => 'Status',
                
            ],
            [
                'field' => 'NamaIbuKandung',
                'label' => 'NamaIbuKandung',
                
            ],
            [
                'field' => 'NamaKeluarga',
                'label' => 'NamaKeluarga',
                
            ],
            [
                'field' => 'TempatLahirK',
                'label' => 'TempatLahirK',
                
            ],
            [
                'field' => 'TempatLahirK',
                'label' => 'TempatLahirK',
                
            ],
            [
                'field' => 'AgamaK',
                'label' => 'AgamaK',
                
            ],
            [
                'field' => 'PekerjaanK',
                'label' => 'PekerjaanK',
                
            ],
            [
                'field' => 'NomorTeleponK',
                'label' => 'NomorTeleponK',
                
            ],
            [
                'field' => 'AlamatK',
                'label' => 'AlamatK',
                
            ],
            [
                'field' => 'NamaAnakPertama',
                'label' => 'NamaAnakPertama',
                
            ],
            [
                'field' => 'TempatLahirA1',
                'label' => 'TempatLahirA1',
                
            ],
            [
                'field' => 'TempatLahirA1',
                'label' => 'TempatLahirA1',
                
            ],
            [
                'field' => 'NamaAnakKedua',
                'label' => 'NamaAnakKedua',
                
            ],
            [
                'field' => 'TempatLahirA2',
                'label' => 'TempatLahirA2',
                
            ],
            [
                'field' => 'TempatLahirA2',
                'label' => 'TempatLahirA2',
                
            ],
            [
                'field' => 'NamaAnakKetiga',
                'label' => 'NamaAnakKetiga',
                
            ],
            [
                'field' => 'TempatLahirA3',
                'label' => 'TempatLahirA3',
                
            ],
            [
                'field' => 'TempatLahirA3',
                'label' => 'TempatLahirA3',
                
            ],
            [
                'field' => 'NamaAyah',
                'label' => 'NamaAyah',
                
            ],
            [
                'field' => 'TempatLahirAyah',
                'label' => 'TempatLahirAyah',
                
            ],
            [
                'field' => 'TempatLahirAyah',
                'label' => 'TempatLahirAyah',
                
            ],
            [
                'field' => 'AlamatDomisiliAyah',
                'label' => 'AlamatDomisiliAyah',
                
            ],
            [
                'field' => 'AgamaAyah',
                'label' => 'AgamaAyah',
                
            ],
            [
                'field' => 'PendidikanTerakhirAyah',
                'label' => 'PendidikanTerakhirAyah',
                
            ],
            [
                'field' => 'TeleponAyah',
                'label' => 'TeleponAyah',
                
            ],
            [
                'field' => 'NamaIbu',
                'label' => 'NamaIbu',
                
            ],
            [
                'field' => 'TempatLahirIbu',
                'label' => 'TempatLahirIbu',
                
            ],
            [
                'field' => 'TempatLahirIbu',
                'label' => 'TempatLahirIbu',
                
            ],
            [
                'field' => 'AlamatDomisiliIbu',
                'label' => 'AlamatDomisiliIbu',
                
            ],
            [
                'field' => 'AgamaIbu',
                'label' => 'AgamaIbu',
                
            ],
            [
                'field' => 'PendidikanTerakhirIbu',
                'label' => 'PendidikanTerakhirIbu',
                
            ],
            [
                'field' => 'TeleponIbu',
                'label' => 'TeleponIbu',
                
            ],
            
            
        ];
    }

    //menampilkan data employee berdasarkan id Employee
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["KaryawanId" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from employee where KaryawanId'$id'
    }

    public function getByIdKompe($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_gender','tabel_gender.genderId=tabel_karyawan.genderId');
        $this->db->join('tabel_pendidikan','tabel_pendidikan.PendidikanId=tabel_.PendidikanId');
        $this->db->where('tabel_karyawan.KaryawanId',$id);
        return $this->db->get()->row(); 
        // return $this->db->get_where($this->table, ["KaryawanId" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from employee where KaryawanId'$id'
    }

    //menampilkan semua data employee
    public function getAll($DEPARTEMEN)
    {
        $this->db->from($this->table);
        $this->db->order_by("KaryawanId", "desc");
        $this->db->where("Departemen", $DEPARTEMEN);
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from employee order by KaryawanId desc
    }

    //menyimpan data employee
    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Email" => $this->input->post('Email'),
            "PASSWORD" => $this->input->post('PASSWORD'),
            "HakAkses" => $this->input->post('HakAkses'),


        );
        return $this->db->insert($this->table, $data);
    }

    //edit data employee
    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Plan" => $this->input->post('Plan'),
            "Kategori" => $this->input->post('Kategori'),
            "Departemen" => $this->input->post('Departemen'),
            "Jabatan" => $this->input->post('Jabatan'),
            "TanggalMasuk" => $this->input->post('TanggalMasuk'),
            "KTP" => $this->input->post('KTP'),
            "KartuKeluarga" => $this->input->post('KartuKeluarga'),
            "NPWP" => $this->input->post('NPWP'),
            "BPJSK" => $this->input->post('BPJSK'),
            "BPJSTK" => $this->input->post('BPJSTK'),
            "NomorRekening" => $this->input->post('NomorRekening'),
            "Bank" => $this->input->post('Bank'),
            "AtasNamaRekening" => $this->input->post('AtasNamaRekening'),
            "Agama" => $this->input->post('Agama'),
            "PendidikanTerakhir" => $this->input->post('PendidikanTerakhir'),
            "Email" => $this->input->post('Email'),
            "NomorTelepon" => $this->input->post('NomorTelepon'),
            "TempatLahir" => $this->input->post('TempatLahir'),
            "TanggalLahir" => $this->input->post('TanggalLahir'),
            "TinggiBadan" => $this->input->post('TinggiBadan'),
            "BeratBadan" => $this->input->post('BeratBadan'),
            "GolDarah" => $this->input->post('GolDarah'),
            "AnakKe" => $this->input->post('AnakKe'),
            "JumlahSaudara" => $this->input->post('JumlahSaudara'),
            "AlamatAsal" => $this->input->post('AlamatAsal'),
            "AlamatDomisili" => $this->input->post('AlamatDomisili'),
            "Status" => $this->input->post('Status'),
            "NamaIbuKandung" => $this->input->post('NamaIbuKandung'),
            "NamaKeluarga" => $this->input->post('NamaKeluarga'),
            "TempatLahirK" => $this->input->post('TempatLahirK'),
            "TanggalLahirK" => $this->input->post('TanggalLahirK'),
            "AgamaK" => $this->input->post('AgamaK'),
            "PekerjaanK" => $this->input->post('PekerjaanK'),
            "NoTeleponK" => $this->input->post('NoTeleponK'),
            "AlamatK" => $this->input->post('AlamatK'),
            "NamaAnakPertama" => $this->input->post('NamaAnakPertama'),
            "TempatLahirA1" => $this->input->post('TempatLahirA1'),
            "TanggalLahirA1" => $this->input->post('TanggalLahirA1'),
            "NamaAnakKedua" => $this->input->post('NamaAnakKedua'),
            "TempatLahirA2" => $this->input->post('TempatLahirA2'),
            "TanggalLahirA2" => $this->input->post('TanggalLahirA2'),
            "NamaAnakKetiga" => $this->input->post('NamaAnakKetiga'),
            "TempatLahirA3" => $this->input->post('TempatLahirA3'),
            "TanggalLahirA3" => $this->input->post('TanggalLahirA3'),
            "NamaAyah" => $this->input->post('NamaAyah'),
            "TempatLahirAyah" => $this->input->post('TempatLahirAyah'),
            "TanggalLahirAyah" => $this->input->post('TanggalLahirAyah'),
            "AlamatDomisiliAyah" => $this->input->post('AlamatDomisiliAyah'),
            "AgamaAyah" => $this->input->post('AgamaAyah'),
            "PendidikanTerakhirAyah" => $this->input->post('PendidikanTerakhirAyah'),
            "TeleponAyah" => $this->input->post('TeleponAyah'),
            "NamaIbu" => $this->input->post('NamaIbu'),
            "TempatLahirIbu" => $this->input->post('TempatLahirIbu'),
            "TanggalLahirIbu" => $this->input->post('TanggalLahirIbu'),
            "AlamatDomisiliIbu" => $this->input->post('AlamatDomisiliIbu'),
            "AgamaIbu" => $this->input->post('AgamaIbu'),
            "PendidikanTerakhirIbu" => $this->input->post('PendidikanTerakhirIbu'),
            "TeleponIbu" => $this->input->post('TeleponIbu'),
            "PASSWORD" => $this->input->post('PASSWORD'),
            "HakAkses" => $this->input->post('HakAkses'),
            
        );
        return $this->db->update($this->table, $data, array('KaryawanId' => $this->input->post('KaryawanId')));
    }
    public function Gender()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_gender');
        return $query->result();
    }

    public function Departemen()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_departemen');
        return $query->result();
    }
    

    public function Plan()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_plan');
        return $query->result();
    }
    public function Kategori()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_kategori');
        return $query->result();
    }
    public function Jabatan()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_jabatan');
        return $query->result();
    }
    public function Bank()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_bank');
        return $query->result();
    }
    public function Agama()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_agama');
        return $query->result();
    }
    public function AgamaK()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_agama');
        return $query->result();
    }
    public function AgamaAyah()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_agama');
        return $query->result();
    }
    public function AgamaIbu()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_agama');
        return $query->result();
    }

    public function Pendidikan()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_pendidikan');
        return $query->result();
    }
    public function PendidikanK()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_pendidikan');
        return $query->result();
    }
    public function PendidikanAyah()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_pendidikan');
        return $query->result();
    }
    public function PendidikanIbu()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_pendidikan');
        return $query->result();
    }
    

    public function GolDarah()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_goldarah');
        return $query->result();
    }

    public function Status()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_status');
        return $query->result();
    }
    public function Hakakses()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_hakakses');
        return $query->result();
    }
    public function TotalKaryawan()
    {
        $this->db->select('*');
        $query = $this->db->get('tabel_karyawan');
        return $query->num_rows();
    }
    

    //hapus data employee
    

    public function getUserCuti($DEPARTEMEN)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->group_by('tabel_karyawan.Nama');
        $this->db->order_by("StatusCuti", "desc");
        $this->db->where('StatusCuti', 'Direview');
        $this->db->where('Departemen', $DEPARTEMEN);
        $query = $this->db->get();
        return $query->result();
        // $this->db->order_by("CUTI_ID", "desc");
        // $query = $this->db->get();
        // return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from izin order by CUTI_ID desc
    }

    public function CutiKaryawan($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->order_by("KaryawanId", "desc");
        $this->db->where('KaryawanId', $id);
        $this->db->where('StatusCuti', 'Direview');
        $query = $this->db->get();
        return $query->result();
        // $this->db->order_by("CUTI_ID", "desc");
        // $query = $this->db->get();
        // return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from izin order by CUTI_ID desc
    }
    public function hitungcuti($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->where('KaryawanId', $id);
        $this->db->where('JenisCuti', 'Cuti Kerja');
        $this->db->where('StatusCuti', 'Diterima');
        $query = $this->db->get();
        return $query->num_rows();
        
    }
    
    public function hitungtotalcuti($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_karyawan');
        $this->db->join('tabel_cuti','tabel_karyawan.Nama=tabel_cuti.Nama');
        $this->db->where('KaryawanId', $id);
        $this->db->where('StatusCuti', 'Diterima');   
        $query = $this->db->get();
        return $query->num_rows();
    }
}