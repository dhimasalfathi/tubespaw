<!-- Untuk halaman penerbit  -->
<?php

class Penerbit Extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_penerbit');
    }

    //Halaman depan pertama klik Penerbit
    public function index(){
        $isi['content'] = 'penerbit/v_penerbit';
        $isi['judul']   = 'Data Penerbit';
        $isi['data']    = $this->db->get('penerbit')->result();
        $this->load->view('v_dashboard', $isi);
    }

    //Halaman untuk menambah penerbit
    public function tambah_penerbit(){
        $isi['content'] = 'penerbit/form_penerbit';
        $isi['judul']   = 'Form Tambah Penerbit';
        $this->load->view('v_dashboard', $isi);
    }

    //Fungsi menyimpan data penerbit
    public function simpan(){
        $data['nama_penerbit'] = $this->input->post('nama_penerbit');
        $query = $this->db->insert('penerbit', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data telah di simpan');
            redirect('penerbit'); //Back 2 index()
        }
    }

    //Fungsi mengedit nama penerbit
    public function edit($id){
        $isi['content'] = 'penerbit/edit_penerbit';
        $isi['judul']   = 'Form Edit Penerbit';
        $isi['data']    = $this->m_penerbit->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    //Fungsi update penerbit
    public function update(){
        $id_penerbit = $this->input->post('id_penerbit');
        $data['nama_penerbit'] = $this->input->post('nama_penerbit');
        $query = $this->m_penerbit->update($id_penerbit, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data telah di Update');
            redirect('penerbit');
        }
    }

    //Fungsi buang penerbit (that's sad)
    public function hapus($id){
        $query = $this->m_penerbit->hapus($id);
        if($query = true){
            $this->session->set_flashdata('info', 'Data telah dihapus');
            redirect('penerbit');
        }
    }
}