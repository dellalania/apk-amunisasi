<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataibu_m extends CI_Model {  

    public function get ($id = null)
    {
        $this->db->from('dataibu');
        if($id !=null){
            $this->db->where('id_ibu',$id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['nama_ibu']= $post['nama_ibu'];
        $params['tgl_lahir']= $post['tgl_lahir'];
        $this->db->insert('dataibu',$params);
    }
    public function edit($post)
    {
        $params['nama_ibu']= $post['nama_ibu'];
        $params['tgl_lahir']= $post['tgl_lahir'];
        $this->db->insert('dataibu',$params);
    }
    public function del ($id)
    {
        $this->db->where('id_ibu',$id);
        $this->db->delete('dataibu');
    }

}

