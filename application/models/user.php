<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model {

	public function all()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}
	public function find($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
	}
	public function get_user_by_email($email)
	{
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}

	public function approve($id)
	{
		return $this->db->query("UPDATE users SET user_level = ? WHERE id = ?", array(4,$id));
		$user= find($id);
		$to = $user['email'];
		$password = $user['password'];
		$subject = "Welcome to LINK! Your membership has been approved!";
		$message = "Congratulations! You are now officially a Rescue Team Member. You can login with your email. Your temporrary password is {$password}. Please change it when you first log into your account.";
		mail($to, $subject, $message);
	}

	public function validate($user)
	{
		$this->load->library('form_validation');		
		$this->form_validation->set_rules("first_name", "First Name", "trim|min_length[3]|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|min_length[3]|required");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required|is_unique[users.email]");
		$this->form_validation->set_rules("instistution", "Institution", "required");
		$this->form_validation->set_rules("motivation", "Motivation", "required");
		$this->form_validation->set_rules("team", "Team", "required");
		$result = array();
		if($this->form_validation->run() === FALSE)
		{
			$result = FALSE;
			$result[] = validation_errors();
			return FALSE;
		}
		else 
		{
			$result[] = "Successfully request Membership!";
			return TRUE;
		}
	}

	public function create($user)
	{
		$get_word = array_merge(range('a', 'z'), range('0', '9'));
		$password = substr(implode($get_word), rand(1,18));
		$query_1 = "INSERT INTO users (first_name, last_name, email,password, phone, institution, motivation, user_level, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,NOW(), NOW())";
		$values_1 = array($user['first_name'],$user['last_name'],$user['email'],$password,$user['phone'],$user['institution'],$user['motivation'],5);
		return $this->db->query($query_1, $values_1);

		
	}
	
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}

	public function login($user)
	{
		$email = $user['email'];
		$check = $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();

		if (($user['password'])=== $check['password'])
		{
			return $check;
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function change_password($id, $new_password)
	{
		return $this->db->query("UPDATE users SET password = ? WHERE id = ?", array(md5($new_password),$id));


	}


}