<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Meal extends CI_Model {

	public function all()
	{
		return $this->db->query("SELECT * FROM meals")->result_array();
	}
	public function validate($meal)
	{
		$this->load->library('form_validation');		
		$this->form_validation->set_rules("name", "Name", "trim|min_length[3]|required");
		// Have changed min length of description to be 10 for ease of testing
		$this->form_validation->set_rules("description", "Description", "trim|min_length[10]|required");
		$this->form_validation->set_rules("location", "Location", "trim|required");

		$this->form_validation->set_rules("meal_date", "Date of Meal", "required");
		$this->form_validation->set_rules("quantity", "Quantity/Serving", "required|greater_than[1]");
		$result = array();
		if($this->form_validation->run() === FALSE)
		{
			$result[] = FALSE;
			$result[] = validation_errors();
			return $result;

		}
		else 
		{
			$result[] = TRUE;
			$result[] = "Successfully created new meal!";
			return $result;
		}
	}

	public function create($meal)
	{



		$query = "INSERT INTO meals (name, description,location, price, quantity, meal_date, created_at, updated_at) VALUES (?,?,?,?,?,?, NOW(), NOW())";
		$values = array($meal['name'],$meal['description'],$meal['location'],$meal['price'],$meal['quantity'],$meal['meal_date']);

		$this->db->query($query, $values);
		$meal_id = $this->db->insert_id();
		$query2 = "INSERT INTO categories(name) VALUES(?)";
		$values2 = array($meal['category']);
		$this->db->query($query2, $values2);
		return TRUE;
	}
	
	public function delete($id)
	{
		$this->db->where('meal_id', $id);
		$this->db->delete('meals');
	}

	public function find($id)
	{
		return $this->db->query("SELECT * FROM meals WHERE meal_id = ?", array($id))->row_array();
	}
	public function get_meals_by_user_id($id)
	{
		return $this->db->query("SELECT * FROM meals WHERE user_id = ?", array($id))->result_array();
	}
	public function get_future_meals_by_user_id($id)
	{
		return $this->db->query("SELECT * FROM meals WHERE user_id = ? ORDER BY meal_id AND date(meal_date) > CURRENT_DATE", array($id))->result_array();
	}
	public function get_past_meal_by_user_id($id)
	{

		return $this->db->query("SELECT * FROM meals WHERE user_id = ? AND date(meal_date) < CURRENT_DATE ORDER BY meal_id DESC LIMIT 1", array($id))->row_array();
	}

	public function get_meals_by_meal_id()
	{
		return $this->db->query("SELECT *, meals.name as meal_name, users.name AS user_name, meals.description as meal_description, users.description as user_description FROM meals LEFT JOIN users ON users.user_id = meals.user_id WHERE meal_id = 3")->row_array();

	}
	public function all_categories()
	{
		return $this->db->query("SELECT * FROM categories")->result_array();
	}

	public function upload_image($meal)
	{
		$query = "INSERT INTO meals(meal_images) VALUES (?)";
		$values = array($meal['meal_images']);
		$this->db->query($query, $values);
	
		return TRUE;
	}

	public function image_name()
	{
		return $this->db->query("SELECT meal_images FROM meals")->row_array();
	}


}