<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gurupns extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Datagurupns_m');
	}
	public function index()
	{
		$data['row'] = $this->Datagurupns_m->get();
		$this->template->load('template','datasekolah/data_gurupns.php', $data);
	}

	public function add()
    {
		$tbl_gurupns = new stdClass();
		$tbl_gurupns->id_gurupns = null;
		$tbl_gurupns->nama= null;
		$tbl_gurupns->nip= null;
		$tbl_gurupns->pangkat = null;
		$tbl_gurupns->jabatan= null;
		$tbl_gurupns->masa_gol= null;
		$tbl_gurupns->pendidikan = null;
		$tbl_gurupns->jurusan= null;
		$tbl_gurupns->th_lulus= null;
		$tbl_gurupns->gender = null;
		$tbl_gurupns->ttl= null;
		$data = array(
			'page' => 'add',
			'row' => $tbl_gurupns 
		);
		$this->template->load('template','tambah_guru', $data);
	}

	public function edit($id)
	{
		$query = $this->Datagurupns_m->get($id);
		if($query->num_rows() > 0){
			$tbl_gurupns = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $tbl_gurupns 
			);
			$this->template->load('template','tambah_guru', $data);	
		} else {
			echo "<script>alert('Data Tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('gurupns')."';</script>";
		}
	}
	
	public function process ()
	{
		$post = $this->input->post(null, TRUE);
		$this->Datagurupns_m->add($post);
		if(isset($_POST['edit'])) {
			$this->Datagurupns_m->edit($post);
		}
		
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('gurupns')."';</script>";
	}

	public function del($id)
	{
		$this->Datagurupns_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('gurupns')."';</script>";
	}
}

