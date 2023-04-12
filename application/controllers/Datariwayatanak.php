<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datariwayatanak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Datariwayatanak_m');
	}
	public function index()
	{
		$data['row'] = $this->Datariwayatanak_m->get();
		$this->template->load('template','datariwayatanak',$data);
	}
}