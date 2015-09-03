<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('result');
	}
	
	public function index()
	{
		redirect('/views/landings');
	}

	public function search()
	{
		// Getting food type, from_date, to_date from view
		$search_array = $this->input->post();
		$search_criteria = array(
			'category' => $search_array['type'],
			'from_date' => $search_array['from_date'],
			'to_date' => $search_array['to_date']
			);
		$this->session->set_userdata('search_criteria', $search_criteria);
		redirect('/views/results');
	}

	public function search_category($category)
	{
		$results_array = $this->result->get_meals_by_category($category);
		$this->session->set_userdata('search_results', $results_array);
		redirect('/views/results');
	}
}