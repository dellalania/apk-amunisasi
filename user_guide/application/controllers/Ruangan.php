<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Dataruangan_m');
	}
	public function index()
	{
		$data['row'] = $this->Dataruangan_m->get();
		$this->template->load('template','datasekolah/data_ruangan.php', $data);
	}

	public function add()
    {
		$tbl_ruangan = new stdClass();
		$tbl_ruangan->id_ruangan = null;
		$tbl_ruangan->nama_ruangan = null;
		$tbl_ruangan->jumlah_ruangan = null;
		$tbl_ruangan->kondisi_ruangan = null;
		$data = array(
			'page' => 'add',
			'row' => $tbl_ruangan 
		);
		$this->template->load('template','ruangan_tambah', $data);
	}

	public function edit($id)
	{
		$query = $this->Dataruangan_m->get($id);
		if($query->num_rows() > 0){
			$tbl_ruangan = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $tbl_ruangan 
			);
			$this->template->load('template','ruangan_tambah', $data);	
		} else {
			echo "<script>alert('Data Tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('ruangan')."';</script>";
		}
	}
	
	public function process ()
	{
		$post = $this->input->post(null, TRUE);
		$this->Dataruangan_m->add($post);
		if(isset($_POST['edit'])) {
			$this->Dataruangan_m->edit($post);
		}
		
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('ruangan')."';</script>";
	}

	public function del($id)
	{
		$this->Dataruangan_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('ruangan')."';</script>";
	}
}


	
	