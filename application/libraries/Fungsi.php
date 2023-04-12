<?php
class Fungsi {

    protected $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    public function count_dataanak(){
        $this->ci->load->model('Dataanak_m');
        return $this->ci->Dataanak_m->get()->num_rows();
    }

    public function count_dataibu(){
        $this->ci->load->model('Dataibu_m');
        return $this->ci->Dataibu_m->get()->num_rows();
    }

    public function count_databidan(){
        $this->ci->load->model('Databidan_m');
        return $this->ci->Databidan_m->get()->num_rows();
    }
}