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
		$this->load->view('mockup');
	}


	public function landing()
	{
		$this->load->view('landing');
	}

	public function chefs()
	{
		$this->load->view('chefs');
	}

	public function results()
	{
		$this->load->view('results');
	}

	public function chef()
	{
		$this->load->view('chef');
	}
	public function customer()
	{
		$this->load->view('customer');
	}
	public function cart()
	{
		$this->load->view('cart');
	}


}

//end of main controller