<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$recordMhs = $this->m_mahasiswa->getDataMahasiswa();
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('home', $DATA);
	}
    
    public function formInput(){
        $this->load->view('form_input');
	}
	
	public function formEdit($id) {
		$recordMhs = $this->m_mahasiswa->getDataMahasiswaDetail($id);
		
		$DATA = array('data_mhs' =>$recordMhs);
        $this->load->view('form_edit', $DATA);
	}
	
	public function AksiInsert(){
		$nim = $this ->input ->post('nim');
		$nama = $this ->input ->post('nama');
		$jurusan = $this ->input ->post('jurusan');

		$DataInsert = array (
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
		);
		
		$this -> m_mahasiswa -> InsertDataMhs($DataInsert);
		redirect (base_url('login/home'));
	}

	public function AksiEdit(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$DataUpdate = array (
			'nama' => $nama,
			'jurusan' => $jurusan,
		);
		$this->m_mahasiswa->EditDataMhs($DataUpdate, $nim);
		redirect(base_url());
	}

	public function AksiDeleteData($nim){
		$this->m_mahasiswa->DeleteDataMhs($nim);
		redirect(base_url());
	}
}
 