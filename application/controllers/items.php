<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Item');
		$this->load->library('cart');
		$this->load->model('Meal');
	}

	public function add_to_cart($id)
	{
		$meal = $this->Meal->get_meals_by_meal_id($id);
		$this->Item->add_to_cart($meal);
	}
	

}

//end of items controller