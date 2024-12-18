<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Post_Model');
    }

    public function index() {
        $data['recent_posts'] = $this->PostModel->get_recent_posts();
        $this->load->view('recent_posts_view', $data);
    }
}
?>