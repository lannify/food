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
        $register_array = $this->input->post();
        $result = $this->user->validate_register($register_array);

        if($result[0])
        {
            $user = $this->user->get_user_by_email($register_array['email']);
            $this->session->set_userdata('user_name', $user['name']);
            $this->session->set_userdata('user_id', $user['user_id']);           
            $this->session->set_userdata('current_user', $user);
            $this->session->set_userdata('first_login', TRUE);
            $this->session->set_userdata('logged_in', TRUE);
            redirect('/views/dashboard');
        } 
        else 
        {
            $this->session->set_flashdata('reg_errors', $result[1]);
            redirect('/');
        }
    }

    public function login()
    {
        $login_array = $this->input->post();
        $result = $this->user->validate_login($login_array);

        if($result[0])
        {
            $user = $this->user->get_user_by_email($this->input->post('email'));
            $this->session->set_userdata('user_name', $user['name']);
            $this->session->set_userdata('user_id', $user['user_id']);
            $this->session->set_userdata('current_user', $user);
            $this->session->set_userdata('logged_in', TRUE);
            redirect('/views/dashboard');
        } 
        else 
        {
            $this->session->set_flashdata('login_errors', $result[1]);
            redirect('/');
        }    
    }

    public function description_image()
    {
        $description_image = array(
            'description' => $this->input->post('description'),
            'pic' => $this->input->post('profile'),
            'id' => $this->session->userdata('current_user')['user_id']);
        
        $this->user->add_details($description_image);
        redirect('/users/skip/');
    }

    public function dashboard(){
        redirect('/views/dashboard/');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }

    public function skip(){
        $this->session->unset_userdata('first_login');
        redirect('/views/dashboard/');
    }
}