<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item extends CI_Model {

	public function add_to_cart($meal, $quantity)
	{
		$data = array(
			'id'=> $meal['meal_id'],
			'qty'	 => $quantity,
			'price'	 => $meal['price'],
			'name' 	=> $meal['meal_name'],
			'chef' 	=> $meal['name'],
			'location' => $meal['location'],
			'meal_date' => $meal['meal_date'],
			'meal_description' => $meal['meal_description'],
			'meal_images' => $meal['meal_images']
			);
		$this->cart->insert($data);
		return TRUE;
	}
	public function update_meal($meal_id, $quantity)
	{
		$data = array(
			"rowid" => $id,
			"qty"=> $quantity
			);
		$this->cart->update($data);
	}
	public function remove($id)
	{
		$data = array(
			"rowid" => $id,
			"qty"=> 0
			);
		$this->cart->update($data);
	}


}