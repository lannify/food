<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meals extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		// $this->load->model('meal');
	}

	public function index()
	{
		$this->load->view('new_meal');
	}
	public function new_meal()
	{
		$this->load->view('new_meal');
	}
	public function create_meal()
	{
		
	}


}

//end of meal controller