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
			redirect('admin/admin');
		}elseif($this->session->userdata('level_user') == '2'){
			redirect('bpm/bpm');
		}elseif($this->session->userdata('level_user') == '3'){
			redirect('yayasan/yayasan');
		}elseif($this->session->userdata('level_user') == '4'){
			redirect('biroadm/biroadm');
		}elseif($this->session->userdata('level_user') == '5'){
			redirect('user/user');
		}
	}
}

public function index(){
	$data = array('error'=> '');
	$this->load->view('login', $data);
}

//function for processing login from
public function login_pricess(){
	$username		= $this->input->post('username');
	$password	= md5($this->input->post('password'));
	//calling chech_user() function in Login_model.php 
	$result = $this->login_model->check_user($username, $password);

	if($result->num_rows() > 0){
		foreach ($result->result() as $row) {
			$id_user			= $row->id_user;
			$username			= $row->username;
			$nama_lengkap		= $row->nama_lengkap;
			$level_user			= $row->level_user;
		}

		$newdata = array(
			'id_user'			=> $id_user,
			'username'			=> $username,
			'nama_lengkap'		=> $nama_lengkap,
			'level_user'		=> $level_user,
			'logged_in'			=> TRUE
		);

		//set up session data
		$this->session->set_userdata($newdata);
		if ($this->session->userdata('level_user') == '1'){
			redirect('admin/admin');
		}elseif($this->session->userdata('level_user') == '2'){
			redirect('bpm/bpm');
		}elseif($this->session->userdata('level_user') == '3'){
			redirect('yayasan/yayasan');
		}elseif($this->session->userdata('level_user') == '4'){
			redirect('biroadm/biroadm');
		}elseif($this->session->userdata('level_user') == '5'){
			redirect('user/user');
		}	
	}else {
		?>
		<script type="text/javascript">alert("Maaf email atau password anda salah.");
window.location.href="<?php echo base_url();?>index.php/login"</script> <?php 
		}
	}
}