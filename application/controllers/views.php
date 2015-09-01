<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function chef()
	{
		$this->load->view('chef');
	}
}

//end of main controller