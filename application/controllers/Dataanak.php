<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataanak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Dataanak_m');
	}
	public function index()
	{
		$data['row'] = $this->Dataanak_m->get();
		$this->template->load('template','dataanak/dataanak',$data);
	}
	public function add()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama','nama','required');
	
			
			if ($this->form_validation->run() == FALSE){
				$this->template->load('template','dataanak/add_dataanak');
			} else {
				$post= $this->input->post(null,TRUE);
				$this->Dataanak_m->add($post);
				if($this->db->affected_rows()> 0 ){
					echo"<script>alert('data berhasil disimpan')</script>";
				}
					echo "<script>window.location='".site_url('dataanak')."'</script>";
				}
			}

	public function edit()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama','nama','required');
	
			
			if ($this->form_validation->run() == FALSE){
				$this->template->load('template','dataanak/edit_dataanak');
			} else {
				$post= $this->input->post(null,TRUE);
				$this->Dataanak_m->edit($post);
				if($this->db->affected_rows()> 0 ){
					echo"<script>alert('data berhasil disimpan')</script>";
				}
					echo "<script>window.location='".site_url('dataanak')."'</script>";
				}
		}
	public function del()
	{
		$id = $this->input->post('id_anak');
		$this->Dataanak_m->del($id);

		if($this->db->affected_rows()> 0 ){
			echo"<script>alert('data berhasil dihapus')</script>";
		}
			echo "<script>window.location='".site_url('dataanak')."'</script>";
		}

}
	

