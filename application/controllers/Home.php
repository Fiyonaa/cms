<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
       
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal ', 'DESC');
        $konten = $this->db->get()->result_array();

        $data = array(
            'judul' => "Beranda | piyonaa",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten
        );
		$this->load->view('beranda',$data);
	}
    
    public function galeri(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten');
        $konten = $this->db->get()->result_array();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $data = array(
            'judul' => "Galeri | piyonaa",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten,
            'galeri' => $galeri
        );  
        $this->load->view('g2', $data);
    }

    public function artikel($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
        $this->db->join('user c', 'a.username=c.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul'     => $konten->judul. "| piyonaa",
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'konten'    => $konten,
        );
		$this->load->view('detail', $data);
    }

    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array(); 

        $this->db->from('kategori');
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $this->db->where('id_kategori',$id);

        $data = array(
            'judul'     => $nama_kategori." | piyonaa",
            'nama_kategori' => $nama_kategori,
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten
        );
        $this->load->view('kategori',$data);
	}

    public function search(){
        $judul = $this->input->post('judul');
    
        $search = $this->home_model->search($judul);
    
        // Cek apakah data ditemukan
        if (empty($search)) {
            // Jika data tidak ditemukan, beri pesan dan tetap di halaman dashboard
            $this->session->set_flashdata('message', 'Tidak ada search yang ditemukan.');
            redirect(''); 
        } else {
            // Jika data ditemukan, arahkan ke halaman hasil dan kirim data
            $data = array(
                'halaman' => 'Carbook - Search',
                'search' => $search,
            );
            // var_dump($data);
            // die;
            $this->load->view('search', $data);
        }
    }
}
