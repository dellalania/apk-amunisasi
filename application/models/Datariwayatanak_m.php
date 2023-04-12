<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datariwayatanak_m extends CI_Model {  

    public function get ($id = null)
    {
        $this->db->from('datariwayatanak');
        if($id !=null){
            $this->db->where('id_anak',$id);
        }
        $query = $this->db->get();
        return $query;
    }
}