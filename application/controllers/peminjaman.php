<?php

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peminjaman');
    }
    public function index()
    {
        $isi['content'] = 'peminjaman/v_peminjaman';
        $isi['judul'] = 'Data Peminjaman';
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_peminjaman()
    {
        $isi['content']         = 'peminjaman/t_peminjaman';
        $isi['judul']           = 'Form Tambah Peminjaman';
        $isi['id_peminjaman']   = $this->m_peminjaman->id_peminjaman();
        $isi['peminjam']        = $this->db->get('anggota')->result();
        $isi['buku']        = $this->db->get('buku')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function jumlah_buku()
    {
        $id = $this->input->post('id');
        $data = $this->m_peminjaman->jumlah_buku($id);
        echo json_encode($data);
    }
}
