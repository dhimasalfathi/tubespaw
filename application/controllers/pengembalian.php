<?php

class pengembalian extends CI_Controller
{
    public function index()
    {
        $isi['content'] = 'pengembalian/v_pengembalian';
        $isi['judul'] = 'Data Pengembalian Buku';
        $this->load->view('v_dashboard', $isi);
    }
}