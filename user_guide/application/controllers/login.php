<?php 
defined ('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
	parent::__construct();
	//load <Login_model.php
	$this->load->model('login_model');
	//check the email is already set up or not
	if ($this->session->userdata('username')){
		//if email is already set up, then check the level of email is admin or member
		if ($this->session->userdata('level_user') == '1'){
			redirect('admin');
			}
		}
	}

	public function index(){
		$db_simanse = array('error'=> '');
		$this->load->view('login', $db_simanse);
	}

	//function for processing login from
	public function login_process(){
		$username		= $this->input->post('username');
		$password		= md5($this->input->post('password'));
		//calling chech_user() function in Login_model.php 
		$tbl_user = $this->login_model->check_user($username, $password);

		if($tbl_user->num_rows() > 0){
			foreach ($tbl_user->result() as $row) {
				$id_user			= $row->id_user;
				$username			= $row->username;
				$password			= $row->password;
				$level				= $row->level;
			}

			$newdata = array(
				'id_user'			=> $id_user,
				'username'			=> $username,
				'password'			=> $password,
				'logged_in'			=> TRUE
			);

			//set up session data
			$this->session->set_userdata($newdata);
			redirect('admin');
			} else {
			redirect('login/gagallogin');
	 		}
}
function gagallogin(){
	$url=base_url('login');
	echo $this->session->set_flashdata('pesan','username atau password salah !!!');
	redirect($url);
}

function logout(){
	$this->session->sess_distory();
	$url=base_url('login');
	redirect($url);
}

}