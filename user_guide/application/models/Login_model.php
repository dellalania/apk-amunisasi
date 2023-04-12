<?php 
class Login_model extends CI_Model{
 
	public function __construct(){
		parent::__construct();	
	}
 
	public function check_user($username, $password) {
		$query = $this->db->query("SELECT * FROM tbl_user where username='$username' AND password='$password'");
		return $query;
	}
}