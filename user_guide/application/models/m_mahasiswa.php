<?php
defined('BASEPATH') OR exit('No direct script access allowd');

class m_mahasiswa extends CI_Model {

    public function getDataMahasiswa(){
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataMhs($data){
        $this->db->insert('tbl_mahasiswa', $data);
    }

    public function EditDataMhs($data, $id){
        $this->db->where('nim', $id);
        $this->db->update('tbl_mahasiswa', $data);
    }

    public function getDataMahasiswaDetail($id){
        $this->db->where('nim', $id);
        $query = $this->db->get('tbl_mahasiswa');
        return $query->row();
    }

    public function DeleteDataMhs($id){
        $this->db->where('nim', $id);
        $this->db->delete('tbl_mahasiswa');
    }
}   