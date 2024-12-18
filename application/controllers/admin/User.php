<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        // if($this->session->userdata('level')<>'admin'){
        //     redirect('Auth');
        // }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
		$this->template->load('template_admin','admin/user_index', $data);
	}

    public function recent_login(){
        $this->db->from('user');
        if ($login_success) {
            // Ambil ID pengguna atau username
            $user_id = $user['id_user']; // Sesuaikan dengan cara Anda mendapatkan ID pengguna
        
            // Update waktu login terakhir
            $this->db->set('recent_login', 'NOW()', FALSE);
            $this->db->where('id_user', $id_user);
            $this->db->update('user'); // Ganti dengan nama tabel Anda
        }
    }

    public function simpan(){
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                            Username Sudah Ada.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            ');
            redirect('admin/user');
        }
        $this->user_model->simpan();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                        User Berhasil Disimpan.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
        ');
        redirect('admin/user');
    }
    public function delete_data($id){
        $where = array(
            'id_user'  => $id
        );
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                        User Berhasil Dihapus.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
        ');
        redirect('admin/user');
    }
    public function update(){
        $this->user_model->update();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                        User Berhasil Diperbarui.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
        ');
        redirect('admin/user');
    }
}
    