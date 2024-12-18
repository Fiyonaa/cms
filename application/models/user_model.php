<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	public function simpan(){
        $data = array(
            'nama'      =>$this->input->post('nama'),
            'username'      =>$this->input->post('username'),
            'password'      =>md5($this->input->post('password')),
            'level'      =>$this->input->post('level'),
        );
        $this->db->insert('user', $data);
	}
    public function update(){
        $where = array(
            'id_user'  => $this->input->post('id_user')
        );
        $data = array(
            'nama'  => $this->input->post('nama')
        );
        $this->db->update('user',$data,$where);
    }
    public function insert_user($data){
        // Check if the username already exists
        $this->db->where('username', $data['username']);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return false; // Username already exists
        }

        // Insert the new user
        return $this->db->insert('users', $data);
    }
}
