<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meals extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Meal');
		$this->load->library('Session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Item');
		$this->load->library('cart');

	}

	public function index()
	{
		$meal = $this->Meal->get_meals_by_meal_id();
		$this->load->view('meal', array('meal' => $meal));
	}
	public function new_meal()
	{
		$categories = $this->Meal->all_categories();
		$this->load->view('new_meal', array("categories"=> $categories));
	}
	public function create()
	{	

		$validate = $this->Meal->validate($this->input->post());

	
		if ($validate[0]=== TRUE)
		{
			$meal_id = $this->Meal->create($this->input->post());
			// We need this after the image is uploaded to load the appropriate meal page after
			$this->session->set_userdata('meal_id', $meal_id);

			if ($meal_id)
			{
				// redirect('views/meal/'.$meal_id);
				$this->load->view('add_meal_image');
			}
			else
			{
				redirect('new_meal');
			}
		}
		else
		{
			$this->session->set_flashdata('errors',$validate[1]);
			redirect('/meals/new_meal');
		}
	}
}

//end of meal controller