<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->model('Meal');
		$this->load->library('cart');
		$this->load->model('Item');
		// $this->output->enable_profiler();
	}
	
	public function index()
	{
		// $this->session->sess_destroy();
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
		$image_name = $this->Meal->image_name();
		$past_meal = $this->Meal->get_past_meal_by_user_id($id);
		$this->load->view('chef', array("chef"=> $chef, "future_meals"=>$future_meals, "past_meal"=>$past_meal));
	}
	public function meal($id)
	{
		$cart = $this->cart->contents();	
		$meal = $this->Meal->get_meals_by_meal_id($id);
		$this->load->view('meal', array("meal"=> $meal, "cart"=>$cart));
	}

	public function customer($id)
	{
		$customer = $this->User->get_user_by_id($id);
		$this->load->view('customer', array("customer"=>$customer));
	}

	public function add_meal_image()

	{
		$this->load->view('add_meal_image');
	}

	public function cart()
	{
		$cart = $this->cart->contents();	
		$this->load->view('cart', array("cart"=>$cart));
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function new_meal()
	{
		$categories = $this->Meal->all_categories();
		$this->load->view('new_meal', array("categories"=>$categories));
	}

	public function how_it_works()
	{
		$this->load->view('how_it_works');
	}

	public function checkout()
	{
		$cart = $this->cart->contents();	
		$this->load->view('checkout', array ("cart" =>$cart));
	}

	public function reviews()
	{
		$this->load->view('reviews');
	}
	public function chefs_all()
	{
		$chefs = $this->User->get_all_chefs();
		$this->load->view('all_chefs', array("chefs"=>$chefs));
	}
	public function thankyou()
	{
		$this->load->view('thankyou');
	}
	public function user_profile()
	{
		$id = $this->session->userdata('user_id');
		if($this->session->userdata('level')==2)
		{
			
			redirect('/views/chef/'.$id);
		}
		else if($this->session->userdata('level')==3)
		{
			redirect('/views/csutomer/'.$id);
		}
	}
}

//end of main controller