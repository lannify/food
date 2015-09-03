<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Result extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

	public function get_meals_by_category($category)
	{
    $meals = array();

    // Check if multiple categories passed in
    if(! is_array($category))
    {
      $query = "SELECT * FROM meals_categories c LEFT JOIN meals ON c.meal_id = meals.meal_id WHERE category_id = ?";
      $meals[] = $this->db->query($query, $category)->result_array();
    }
    else
    {
      foreach($category as $id)
      {
        $query = "SELECT * FROM meals_categories c LEFT JOIN meals ON c.meal_id = meals.meal_id WHERE category_id = ?";
        $meals[] = $this->db->query($query, $id)->result_array();
      }
    }

    // Check if any meals exist
    if(! count($meals) > 0) {
      $meals[] = false;
      $meals[] = "No results found! Please try your search again."; 
    }
	  return $meals;
	}

}