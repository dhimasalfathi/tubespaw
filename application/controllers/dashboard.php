<?php
<<<<<<< HEAD
 
class Dashboard extends CI_Controller{
    
    public function index(){
=======

class Dashboard extends CI_Controller
{

    public function index()
    {
>>>>>>> 12914f24fbc54a5b7dd2102b6ffbb413efdd8918
        $this->m_squirty->getSquirty();
        $isi['content'] = 'v_home';
        $isi['judul'] = 'Dashboard';

        $this->load->model('m_dashboard');
        $isi['anggota'] = $this->m_dashboard->countAnggota();
<<<<<<< HEAD
        $isi['buku'] = $this->m_dashboard->countBuku();
        $isi['pinjam'] = $this->m_dashboard->countPinjam();
        $isi['kembali'] = $this->m_dashboard->countKembali();
=======
>>>>>>> 12914f24fbc54a5b7dd2102b6ffbb413efdd8918
        $this->load->view('v_dashboard', $isi);
    }
}
