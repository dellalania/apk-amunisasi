<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataanak_m extends CI_Model {  

    public function get ($id = null)
    {
        $this->db->from('dataanak');
        if($id !=null){
            $this->db->where('id_anak',$id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['nama']= $post['nama'];
        $params['tgl_lahir']= $post['tgl_lahir'];
        $params['tempat_lahir']= $post['tempat_lahir'];
        $params['jk']= $post['jk'];
        $params['nama_ibu']= $post['nama_ibu'];
        $params['nama_ayah']= $post['nama_ayah'];
        $this->db->insert('dataanak',$params);
    }
    public function edit($post)
    {
        $params['nama']= $post['nama'];
        $params['tgl_lahir']= $post['tgl_lahir'];
        $params['tempat_lahir']= $post['tempat_lahir'];
        $params['jk']= $post['jk'];
        $params['nama_ibu']= $post['nama_ibu'];
        $params['nama_ayah']= $post['nama_ayah'];
        $this->db->edit('dataanak',$params);
    }
    public function del ($id)
    {
        $this->db->where('id_anak',$id);
        $this->db->delete('dataanak');
    }

}

