<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('username')=="") {
        redirect('login');
        }
       
        $this->load->model('model_user');
        $this->load->helper('url');
        }
        public function index() {
        $data = array(
        'error' => '',
        'username' => $this->session->userdata('username')
        );
        $isi['content'] = 'admin/isi';
        $isi['judul'] = 'Dashboard';
        $isi['sub_judul'] = 'Home';
        $this->load->view('dashboard.php',$isi);
        }
        public function dashboard() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level_user');
        session_destroy();
        redirect('dashboard');
        }
       }
?>