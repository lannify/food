<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Item');
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model('Meal');
	}

	public function add_to_cart()
	{
		$meal_id = $this->input->post('meal_id');
		$quantity = $this->input->post('quantity');
		$meal = $this->Meal->get_meals_by_meal_id($meal_id);
		$add = $this->Item->add_to_cart($meal, $quantity);
		
		if ($add)
		{
			redirect('/views/cart');
		}
		else
		{
			redirect('/views/meal/'. $meal_id);
		}
	}
	
	public function remove_from_cart($id)
	{
		$this->Item->remove($id);
		redirect('/views/cart');
	}

}

//end of items controller