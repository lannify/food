<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meals extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('Meal');
		$this->load->library('Session');
	}

	public function index()
	{
		$this->load->view('new_meal');
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
			$meal = $this->Meal->create($this->input->post());
			if ($meal)
			{
				redirect('views/chef');
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