<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databidan_m extends CI_Model {  

    public function get ($id = null)
    {
        $this->db->from('databidan');
        if($id !=null){
            $this->db->where('id_bidan',$id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['nama']= $post['nama'];
        $params['tgl_lahir']= $post['tgl_lahir'];
        $params['alamat']= $post['alamat'];
        $params['no_hp']= $post['no_hp'];
        $this->db->insert('databidan',$params);
    }
    public function edit($post)
    {
        $params['nama']= $post['nama'];
        $params['tgl_lahir']= $post['tgl_lahir'];
        $params['alamat']= $post['alamat'];
        $params['no_hp']= $post['no_hp'];
        $this->db->edit('databidan',$params);
    }
    public function del ($id)
    {
        $this->db->where('id_bidan',$id);
        $this->db->delete('databidan');
    }

}