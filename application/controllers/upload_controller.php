<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Meal');
	}

	public function do_upload()	
	{

		$config = array(

				'upload_path' => "./assets/uploads/",
				'allowed_types'   => "gif|jpg|png|jpeg|pdf",
				'overwrite'       => TRUE,
				'max_size'        => "2048000",  
				'max_height'      => "768",
				'max_width'       => "1024"  
			);

		$this->load->library('upload', $config);
		$image_name = $this->Meals->upload_image($this->input->post());

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			redirect('views/chef/' . $this->session->userdata('user_id'), $data);
		}
	}
}

//end of meal controller