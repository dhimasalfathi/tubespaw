<?php

class Laporan extends CI_Controller{

    public function peminjaman()
    {
        $isi['content'] = 'laporan/v_peminjaman';
        $isi['judul'] = 'Laporan Peminjaman';
        $this->load->view('v_dashboard',$isi);
    }
}