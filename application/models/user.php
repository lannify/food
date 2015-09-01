<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

    public function add_user($post){
    	$this->load->library("form_validation");
        $this->form_validation->set_rules("name", "Name", "required|max_length[12]");
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('level', 'Cook or Eat?!', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_error_delimiters(' ', ' ');
            if($this->form_validation->run() === FALSE){
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('/');
            }else{
				$query = "INSERT into users(name, email, phone, level, password, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
				$values = array($post['name'], $post['email'], $post['phone'], $post['level'], $post['password']);
				return $this->db->query($query,$values);
	           }
            }

        public function get_user_by_email($email){
            $query = "SELECT * from users where email = ?";
            return $this->db->query($query, array($email))->row_array();
    }
}