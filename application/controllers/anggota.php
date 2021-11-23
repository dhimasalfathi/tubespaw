<?php

class Anggota extends CI_Controller{

    public function __construct()
    {
        parent ::__construct();
        $this->load->model('m_anggota');
    }

    public function index()
    {
        $isi['content'] = 'anggota/v_anggota';
        $isi['judul'] = 'Daftar Data Anggota';
        $this->load->view('v_dashboard',$isi);
    }

    public function tambah_anggota()
    {
        $isi['content'] = 'anggota/form_anggota';
        $isi['judul'] = 'Form Tambah Anggota';
        $isi['id_anggota'] = $this->m_anggota->id_anggota();
        $this->load->view('v_dashboard',$isi);
    }
}