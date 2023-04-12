<?php 
class Login_m extends CI_Model{
 
	public function __construct(){
		parent::__construct();	
	}
 
	public function check_user($username, $password) {
		$query = $this->db->query("select * from tbl_user where username='$username' AND password='$password' limit 1");
		return $query;
	}
}