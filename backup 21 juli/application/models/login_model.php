<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    //untuk validasi username dan password
	function cek_login($Email,$PASSWORD){		
		$result = $this->db->query("SELECT * FROM tabel_karyawan WHERE Email='$Email' AND PASSWORD='$PASSWORD' LIMIT 1");
        return $result;
	}	

    //untuk mendapatkan id
	public function getById($id)
    {
        return $this->db->get_where($this->table, ["KaryawanId" => $id])->row();
    }


}