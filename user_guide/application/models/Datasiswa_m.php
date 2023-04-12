<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasiswa_m extends CI_Model {


	public function get($id = null)
	{
		$this->db->from('tbl_siswa');
		if($id != null) {
			$this->db->where('id_siswa', $id);
		}
		$query = $this->db->get('');
		return $query;
	}

	public function add($post)
    {
		$params = [
			'nama' => $post['nama'],
        	'nis' => $post['nis'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tanggal_lahir' => $post['tanggal_lahir'],
        	'jenis_kelamin' => $post['jenis_kelamin'],
			'no_tlp' => $post['no_tlp'],
			'alamat' => $post['alamat'],
        	
		];
        $this->db->insert('tbl_siswa',$params);
	}
	
	public function edit($post)
    {
		$params = [
			'nama' => $post['nama'],
        	'nis' => $post['nis'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tanggal_lahir' => $post['tanggal_lahir'],
        	'jenis_kelamin' => $post['jenis_kelamin'],
			'no_tlp' => $post['no_tlp'],
			'alamat' => $post['alamat'],
		];
		$this->db->where('id_siswa', $post['id_siswa']);
        $this->db->update('tbl_siswa',$params);
    }


	public function del($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('tbl_siswa');
	}
}