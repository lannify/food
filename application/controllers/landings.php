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

		// Search by either category or dates (for now) - implement both in the future
		if(isset($search_array['type']))
		{
			$results_array = $this->result->get_meals_by_category($search_array['type']);
			$this->session->set_userdata('search_results', $results_array);	
		}
		else if(isset($search_array['from_date']) && isset($search_array['to_date']))
		{
			$results_array = $this->result->get_meals_by_dates($search_array['from_date'], $search_array['to_date']);
			$this->session->set_userdata('search_results', $results_array);
		}
		else
		{
			$this->session->set_flashdata('search_errors', 'Invalid search criteria, please specify a category and/or meal dates.');
			redirect('/views');
		}
		redirect('/views/results');
	}

	public function search_category($category)
	{
		$results_array = $this->result->get_meals_by_category($category);
		$this->session->set_userdata('search_results', $results_array);
		// Populate location JSON for Google Maps
		$count = 0;
		foreach($results_array as $category)
		{
			foreach($category as $result)
			{
				$data[$count]['lat'] = $result['lat'];
				$data[$count]['lng'] = $result['lng'];
				$count++;
			}
		}
		$this->session->set_userdata('result_locations', $data);

		redirect('/views/results');
	}

	// public function results_locations_json()
	// {
	// 	$count = 0;
	// 	if($this->session->userdata('search_results'))
	// 	{
	// 		foreach($this->session->userdata('search_results') as $category)
	// 		{
	// 			foreach($category as $result)
	// 			{
	// 				$data[$count]['lat'] = $result['lat'];
	// 				$data[$count]['lng'] = $result['lng'];
	// 				$count++;
	// 			}
	// 		}
	// 	}
	// 	echo json_encode($data);
	// }
}