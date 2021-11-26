<?php

class Dashboard extends CI_Controller{
    
    public function index(){
        $this->m_squirty->getSquirty();
        $isi['content'] = 'v_home';
        $isi['judul'] = 'Dashboard';

        $this->load->model('m_dashboard');
        $isi['anggota'] = $this->m_dashboard->countAnggota();
        $this->load->view('dashboard', $isi);
    }
}