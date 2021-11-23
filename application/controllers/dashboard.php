<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->m_squirty->getSquirty();
        $isi['content'] = 'v_home';
        $isi['judul'] = 'Home';
        $this->load->view('v_dashboard',$isi);
        
    }
}
