<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databidan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Databidan_m');
	}
	public function index()
	{
		$data['row'] = $this->Databidan_m->get();
		$this->template->load('template','databidan/databidan',$data);
	}
    public function add()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama','nama','required');
	
			
			if ($this->form_validation->run() == FALSE){
				$this->template->load('template','databidan/add_databidan');
			} else {
				$post= $this->input->post(null,TRUE);
				$this->Databidan_m->add($post);
				if($this->db->affected_rows()> 0 ){
					echo"<script>alert('data berhasil disimpan')</script>";
				}
					echo "<script>window.location='".site_url('databidan')."'</script>";
				}
			}

	public function edit()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama','nama','required');
	
			
			if ($this->form_validation->run() == FALSE){
				$this->template->load('template','databidan/edit_databidan');
			} else {
				$post= $this->input->post(null,TRUE);
				$this->Databidan_m->edit($post);
				if($this->db->affected_rows()> 0 ){
					echo"<script>alert('data berhasil disimpan')</script>";
				}
					echo "<script>window.location='".site_url('databidan')."'</script>";
				}
		}
	public function del()
	{
		$id = $this->input->post('id_bidan');
		$this->Databidan_m->del($id);

		if($this->db->affected_rows()> 0 ){
			echo"<script>alert('data berhasil dihapus')</script>";
		}
			echo "<script>window.location='".site_url('databidan')."'</script>";
		}

}