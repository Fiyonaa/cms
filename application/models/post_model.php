<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Model extends CI_Model {

    public function get_recent_posts() {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('DATE(published_date)', date('Y-m-d'));
        $query = $this->db->get();
        return $query->result();
    }
}
?>