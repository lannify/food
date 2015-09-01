<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
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
}

//end of main controller