<?php
class M_pengarang Extends CI_Model{
    //Script php yg jalan saat ingin edit
    public function edit($id){
        $this->db->where('id_pengarang', $id);
        return $this->db->get('pengarang')->row_array();
    }

    //Script php yg jalan saat ingin update setelah edit
    public function update($id_pengarang, $data){
        $this->db->where('id_pengarang', $id_pengarang);
        $this->db->update('pengarang', $data);
    }

    //Script pe-ha-pe yg jalan saat ingin buang data
    public function hapus($id){
        $this->db->where('id_pengarang', $id);
        $this->db->delete('pengarang');
    }

}