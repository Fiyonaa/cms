<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->library('form_validation');
    }
	public function index(){
		$this->load->view('login');
	}
    public function login(){ 
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
         $this->db->from('user');
         $this->db->where('username',$username);
         $cek = $this->db->get()->row();
         //jika cek tidak sama dengan null
         if($cek==NULL){
         $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                Yahhh username tidakk adaa !😼
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
         ');
         redirect('auth');
         } else if($password==$cek->password) {
            $data = array(
                'id_user'   => $cek->id_user,
                'nama'      => $cek->nama,
                'username'  => $cek->username,
                'level'     => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
         } else { 
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary alert-dismissible" role="alert">
                    password salah ! 😸 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            ');
            redirect('auth');
         }
	}

    public function register()
    {
        // Load the registration view
        $this->load->view('registrasi');
    }

    public function register_process()
    {
    
        // Get the form data
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');

        $hashed_password = md5($password);

        // Save the user in the database
        $user_data = [
            'username' => $username,
            'password' => $hashed_password,
            'nama' => $nama,
            'level' => $level,
        ];

        if ($this->db->insert('user', $user_data)) {
            // var_dump('p');die;
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
               Selamat Anda Berhasil Registrasi!! Silahkan Login 👌
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
         ');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
               Yahh Gagal Registrasi ☹
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
         ');
            redirect('auth/register');
        }
    }

    // public function do_login() {
    //     $username = $this->input->post('username');
    //     if ($username) {
    //         $this->User_model->insert_login($username);
    //         redirect('login/recent_login');
    //     } else {
    //         redirect('admin/user_index');
    //     }
    // }

    // public function recent_login() {
    //     $data['login'] = $this->User_model->get_recent_logins();
    //     $this->load->view('admin/user_index', $data);
    // }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth');
    }
}
