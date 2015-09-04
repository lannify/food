<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Item');
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model('user');
		$this->load->model('Meal');
	}

	public function add_to_cart()
	{
		$meal_id = $this->input->post('meal_id');
		$quantity = $this->input->post('quantity');
		$meal = $this->Meal->get_meals_by_meal_id($meal_id);
		$add = $this->Item->add_to_cart($meal, $quantity);
		
		if ($add)
		{
			redirect('/views/cart');
		}
		else
		{
			redirect('/views/meal/'. $meal_id);
		}
	}
	
	public function remove_from_cart($id)
	{
		$this->Item->remove($id);
		redirect('/views/cart');
	}

	public function message_user()
	{
		$user_id = $this->session->userdata('user_id');
		require "twilio/Services/Twilio.php";
 
    $AccountSid = "AC459c67817ff66314a00b4faf8da66bb1";
    $AuthToken = "2a5987c31a9602f250066b9b210240be";

    $client = new Services_Twilio($AccountSid, $AuthToken);
 
 		$person = $this->user->get_user_phone_by_id($user_id);

    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    // $people = array(
    //     "+14158675309" => "Curious George",
    //     "+14158675310" => "Boots",
    //     "+14158675311" => "Virgil",
    // );
 
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    // foreach ($people as $number => $name) {
 
        $sms = $client->account->messages->sendMessage(
 
        // Step 6: Change the 'From' number below to be a valid Twilio number 
        // that you've purchased, or the (deprecated) Sandbox number
            "980-255-5588", 
 
            // the number we are sending to - Any phone number
            $person['phone'],
 
            // the sms body
            "Congrats, you just booked a meal!"
        );
 
        // Display a confirmation message on the screen
        // echo "Sent message to your phone!";
    // }
	}

	public function checkout()
	{
		$this->message_user();
		redirect('views/thankyou');
	}

}

//end of items controller