<?php

class M_dashboard extends CI_Model{

    public function countAnggota(){
        return $this->db->count_all('anggota');
    }

}