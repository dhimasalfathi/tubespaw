<?php

class M_peminjaman extends CI_Model
{
    public function id_peminjaman()
    {
        $this->db->select('RIGHT(peminjaman.id_pm,3) as kode', FALSE);
        $this->db->order_by('id_pm', 'DESC');
        $this->db->limit(1);
        $quert = $this->db->get('peminjaman');
        if ($quert->num_rows() <> 0) {
            $data = $quert->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PM" . $kodemax;
        return $kodejadi;
    }

    public function jumlah_buku($id)
    {
        $this->db->select('jumlah');
        $this->db->from('buku');
        $this->db->where('id_buku', $id);
        return $this->db->get()->row_array();
    }
}
