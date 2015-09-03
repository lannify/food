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

	public function chef($id)
	{
		$chef = $this->User->get_user_by_id($id);
		$future_meals = $this->Meal->get_future_meals_by_user_id($id);
		$past_meal = $this->Meal->get_past_meal_by_user_id($id);
		$this->load->view('chef', array("chef"=> $chef, "future_meals"=>$future_meals, "past_meal"=>$past_meal));
	}
	public function meal($id)
	{
		$meal = $this->Meal->get_meals_by_meal_id($id);
		$this->load->view('meal', array("meal"=> $meal));
	}

	public function customer()
	{
		$this->load->view('customer');
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
	public function checkout()
	{
		$this->load->view('checkout');
	}
}

//end of main controller