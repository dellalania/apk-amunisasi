<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

//
	function __construct()
	{
		parent::__construct();
		$this->load->model('Datasiswa_m');
	}
	public function index()
	{
		$data['row'] = $this->Datasiswa_m->get();
		$this->template->load('template','datasekolah/data_siswa.php', $data);
	}

	public function add()
    {
		$tbl_siswa = new stdClass();
		$tbl_siswa->id_siswa = null;
		$tbl_siswa->nama= null;
		$tbl_siswa->nis= null;
		$tbl_siswa->tempat_lahir = null;
		$tbl_siswa->tanggal_lahir= null;
		$tbl_siswa->jenis_kelamin= null;
		$tbl_siswa->no_tlp = null;
		$tbl_siswa->alamat= null;
		$data = array(
			'page' => 'add',
			'row' => $tbl_siswa 
		);
		$this->template->load('template','tambah_siswa', $data);
	}

	public function edit($id)
	{
		$query = $this->Datasiswa_m->get($id);
		if($query->num_rows() > 0){
			$tbl_siswa = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $tbl_siswa
			);
			$this->template->load('template','tambah_siswa', $data);	
		} else {
			echo "<script>alert('Data Tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('siswa')."';</script>";
		}
	}
	
	public function process ()
	{
		$post = $this->input->post(null, TRUE);
		$this->Datasiswa_m->add($post);
		if(isset($_POST['edit'])) {
			$this->Datasiswa_m>edit($post);
		}
		
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('siswa')."';</script>";
	}


	public function del($id)
	{
		$this->Datasiswa_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('siswa')."';</script>";
	}

	
}