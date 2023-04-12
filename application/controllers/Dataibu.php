<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataibu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Dataibu_m');
	}
	public function index()
	{
		$data['row'] = $this->Dataibu_m->get();
		$this->template->load('template','dataibu/dataibu',$data);
	}
	public function add()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_ibu','nama_ibu','required');
	
			
			if ($this->form_validation->run() == FALSE){
				$this->template->load('template','dataibu/add_dataibu');
			} else {
				$post= $this->input->post(null,TRUE);
				$this->Dataibu_m->add($post);
				if($this->db->affected_rows()> 0 ){
					echo"<script>alert('data berhasil disimpan')</script>";
				}
					echo "<script>window.location='".site_url('dataibu')."'</script>";
				}
			}

	public function edit()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_ibu','nama_ibu','required');
	
			
			if ($this->form_validation->run() == FALSE){
				$this->template->load('template','dataibu/edit_dataibu');
			} else {
				$post= $this->input->post(null,TRUE);
				$this->Dataibu_m->edit($post);
				if($this->db->affected_rows()> 0 ){
					echo"<script>alert('data berhasil disimpan')</script>";
				}
					echo "<script>window.location='".site_url('dataibu')."'</script>";
				}
		}
	public function del()
	{
		$id = $this->input->post('id_ibu');
		$this->Dataibuk_m->del($id);

		if($this->db->affected_rows()> 0 ){
			echo"<script>alert('data berhasil dihapus')</script>";
		}
			echo "<script>window.location='".site_url('dataibu')."'</script>";
		}

}
	

