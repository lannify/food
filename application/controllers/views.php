<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('User');
		$this->load->model('Meal');
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


	// public function chef()

	// 	$this->load->view('landing');
	// }
	public function chef($id)

	{
		$chef = $this->User->find($id);
		$latest_meal = $this->Meal->get_latest_meal_by_user_id($id);
		$past_meals = $this->Meal->get_past_meals_by_user_id($id);
		$this->load->view('chef', array('chef'=> $chef, 'latest_meal'=> $latest_meal, 'past_meals'=> $past_meals));
	}
	public function customer()
	{
		$this->load->view('customer');
	}
	public function cart()
	{
		$this->load->view('cart');
	}

	public function checkout()
	{
		$this->load->view('checkout');
	}
	public function thankyou()
	{
		$this->load->view('thankyou');
	}
}

//end of main controller