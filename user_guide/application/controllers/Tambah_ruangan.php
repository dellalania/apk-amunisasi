<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_ruangan extends CI_Controller {


	public function index()
	{
		$this->template->load('template','ruangan_tambah.php');
	}
}
