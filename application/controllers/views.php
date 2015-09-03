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
		$this->load->view('landing');
	}

	public function mockup()
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

	public function meal($id)
	{
		$meal = $this->Meal->find($id);
		$this->load->view('meal', array('meal'=>$meal));
	}
	public function cart()
	{
		$this->load->view('cart');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function new_meal()
	{
		$this->load->view('new_meal');
	}
}

//end of main controller