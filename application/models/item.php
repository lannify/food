<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item extends CI_Model {

	public function add_to_cart($item)
	{
		$this->cart->insert($item);
	}
	public function update_item($item_id)
	{
		
	}

}