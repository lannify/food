<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function validate_login($login_array)
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $result = array();

        if($this->form_validation->run() === FALSE) 
        {
            $result[] = false;
            $result[] = validation_errors();
        }
        else 
        {   
            $query = $this->db->get_where('users', array('email' => $login_array['email']));
            $count = $query->num_rows();
            
            // Check if email exists
            if($count > 0) {
                $query = "SELECT password, salt FROM users WHERE email = ?";
                $value = $login_array['email'];
                $user = $this->db->query($query, $value)->row_array();

                $encrypted_password = md5($login_array['password'] . $user['salt']);

                // Check password match
                if($user['password'] === $encrypted_password)
                {
                    $result[] = true;
                    $result[] = "Successfully registered user";
                }
                else 
                {
                    $result[] = false;
                    $result[] = "Invalid login credentials"; 
                }
            }
            // No email exists
            else 
            {
                $result[] = false;
                $result[] = "Email not registered"; 
            }
        }   
        return $result;
    }  // End function validate_login

    function validate_register($register_array)
    {
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email|required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('level', 'User Level', 'required');
        $result = array();

        if($this->form_validation->run() === FALSE) 
        {
            $result[] = false;
            $result[] = validation_errors();
        }
        else 
        {
            $salt = bin2hex(openssl_random_pseudo_bytes(15));
            $encrypted_password = md5($register_array['password'] . $salt);

            $query = "INSERT INTO users (name, email, phone, password, salt, level, created_at, updated_at) VALUES (?,?,?,?,?,?, NOW(), NOW())";
            $values = array($register_array['name'], $register_array['email'], $register_array['phone'], $encrypted_password, $salt, $register_array['level']);
            $this->db->query($query, $values);

            $result[] = true;
            $result[] = "Successfully registered user"; 
        }
        return $result; 
    }  // End function validate_register

    function get_user_by_email($email)
    {
        $query = "SELECT user_id, name, email, level FROM users WHERE email = ?";
        return $this->db->query($query, $email)->row_array();
    }
    
    function get_user_by_id($id)
    {
        $query = "SELECT user_id, name, email FROM users WHERE user_id = ?";
        return $this->db->query($query, $id)->row_array();
    }

    function get_all_users()
    {
        $query = "SELECT user_id, name, email FROM users";
        return $this->db->query($query)->result_array();
    }

    function add_details($post)
    {
        $query = "UPDATE users SET description = ?, photo = ?, updated_at = NOW() WHERE user_id = ?";
        $values = array($post['description'], $post['pic'], $post['id']);
        return $this->db->query($query,$values); 
    }
}