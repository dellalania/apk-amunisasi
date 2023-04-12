<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datagurupns_m extends CI_Model {


	public function get($id = null)
	{
		$this->db->from('tbl_gurupns');
		if($id != null) {
			$this->db->where('id_gurupns', $id);
		}
		$query = $this->db->get('');
		return $query;
	}

	public function add($post)
    {
		$params = [
			'nama' => $post['nama'],
        	'nip' => $post['nip'],
			'pangkat' => $post['pangkat'],
			'jabatan' => $post['jabatan'],
        	'masa_gol' => $post['masa_gol'],
			'jenis_kelamin' => $post['jenis_kelamin'],
			'pendidikan' => $post['pendidikan'],
        	'ttl' => $post['ttl'],
			'jurusan' => $post['jurusan'],
        	'th_lulus' => $post['th_lulus'],
			
        	
		];
        $this->db->insert('tbl_gurupns',$params);
	}
	
	public function edit($post)
    {
		$params = [
			'nama' => $post['nama'],
        	'nip' => $post['nip'],
			'pangkat' => $post['pangkat'],
			'jabatan' => $post['jabatan'],
        	'masa_gol' => $post['masa_gol'],
			'jk' => $post['jk'],
			'pendidikan' => $post['pendidikan'],
        	'ttl' => $post['ttl'],
			'jurusan' => $post['jurusan'],
        	'th_lulus' => $post['th_lulus'],
		];
		$this->db->where('id_gurupn', $post['id_gurupns']);
        $this->db->update('tbl_gurupns',$params);
    }

	public function del($id)
	{
		$this->db->where('id_gurupns', $id);
		$this->db->delete('tbl_gurupns');
	}
}