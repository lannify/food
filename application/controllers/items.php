<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Item');
	}

	public function index()
	{
		$this->load->view('cart');
	}
	

}

//end of items controller