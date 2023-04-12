<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataruangan_m extends CI_Model {


	public function get($id = null)
	{
		$this->db->from('tbl_ruangan');
		if($id != null) {
			$this->db->where('id_ruangan', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
    {
		$params = [
			'nama_ruangan' => $post['nama_ruangan'],
        	'jumlah_ruangan' => $post['jumlah_ruangan'],
			'kondisi_ruangan' => $post['kondisi_ruangan'],
		];
        $this->db->insert('tbl_ruangan',$params);
	}
	//
	public function edit($post)
    {
		$params = [
			'nama_ruangan' => $post['nama_ruangan'],
        	'jumlah_ruangan' => $post['jumlah_ruangan'],
			'kondisi_ruangan' => $post['kondisi_ruangan'],
		];
		$this->db->where('id_ruangan', $post['id_ruangan']);
        $this->db->update('tbl_ruangan',$params);
    }

	public function del($id)
	{
		$this->db->where('id_ruangan', $id);
		$this->db->delete('tbl_ruangan');
	}
}