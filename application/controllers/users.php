<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->model('user');
	}

	public function index()
	{
        $this->load->helper('form');
        $this->load->view('/');
	}

    public function register()
    {          
        $register_details = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'level' => $this->input->post('level'),
                'password' => $this->input->post('password'));
        $add_user = $this->user->add_user($register_details);
        $register_dash = array('first_login' => TRUE, 'name' => $this->input->post('name'), 'email' => $this->input->post('email'));
        $this->session->set_flashdata('first_login', $register_dash);
        redirect('/users/dashboard');
    }

    public function user_login(){
 
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->user->get_user_by_email($email);
   
        if($user['password'] == $password)
        {
            $this->session->set_userdata('current_user',array(
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'level' => $user['level'],
                'user_id' => $user['id'],
                'is_logged_in' => TRUE));

            // var_dump($this->session->userdata('current_user'));
            $user_login = $this->session->userdata('current_user');

            if($user_login['is_logged_in'] === TRUE)
            {
                $this->session->set_userdata('display_name', $this->session->userdata('current_user'));
                redirect('/users/dashboard/');
            }          
        }else
            {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect('/');
            }
    }

    public function dashboard(){
        $this->load->view('dashboard');
    }

    public function logout(){
        $this->session->sess_destroy();
        // $this->session->unset_userdata('current_user');
        redirect('/');
    }

}