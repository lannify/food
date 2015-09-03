<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Item');
		$this->load->library('cart');
	}

	public function add_to_cart()
	{
		$this->Item->add_to_cart($this->input->post());
	}
	

}

//end of items controller