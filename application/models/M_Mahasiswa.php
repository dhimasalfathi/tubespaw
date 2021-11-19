<?php
defined('BASEPATH') or exit('no direct Script access allowed');

class M_Mahasiswa extends CI_model
{

    function getDataMahasiswa()
    {
        $query = $this->db->get('tb_mahasiswa');
        return $query->result();
    }

    function insertDataMahasiswa($data)
    {
        $this->db->insert('tb_mahasiswa', $data);
    }

    function getDataMahasiswaDetail($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('tb_mahasiswa');
        return $query->row();
    }

    function UpdateDataMahasiswa($nim, $data)
    {
        $this->db->where('nim', $nim);
        $this->db->update('tb_mahasiswa', $data);
    }

    function DeleteDataMahasiswa($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('tb_mahasiswa');
    }
}
