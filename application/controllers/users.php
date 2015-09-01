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
        redirect("/");  
    }

    public function user_login(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->user->get_user_by_email($email);
        if($user && $user['password'] == $password)
        {
            $current_user = $this->session->set_userdata(array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'level' => $this->input->post('level'),
                'password' => $this->input->post('password')));
            if($this->session->userdata('is_logged_in') === TRUE){
                $this->session->set_flashdata('display_name', $current_user['alias']);
                redirect("/friends");
                }          
        }else
            {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect('/');
            }
    }
}