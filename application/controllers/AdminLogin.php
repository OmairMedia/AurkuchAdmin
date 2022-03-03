<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("function_helper");
		$this->load->model('AdminModel');
    }

	public function index()
	{	
	   // echo "landing on index;";exit();

		if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] == 'yes')
		{
			redirect('admin');
		}
		else
		{
			$data['settings'] = $this->AdminModel->getSetting();
			$this->load->view('admin_pages/login_view',$data);
		}

	}
	public function authenticate_login()
	{
		$username     = $this->input->post('username');
		$pass         = md5($this->input->post('password'));
		$userData 	  = $this->AdminModel->validateLogin($username,$pass);
               // print_r($userData);
		if($userData)
		{
			
			$this->session->set_userdata('logged_in','yes');
			$this->session->set_userdata($userData);
		 	//print_r($this->session->get_userdata());
		 	redirect('admin/index');
                        
		}
		else
		{
               
			$this->session->set_flashdata('alert_data', array(
				'type' => 'info', 
				'details' => " Incorrect username or password"
				));
			 	redirect('adminlogin');
		}
			
			

	}



	public function logout() 

	{

		/*echo '<pre>';

		  print_r($this->session);

		  exit;*/

		$session_data = array(

				'logged_in'	        => '',	

				'user_id'      		=> '',

				'username'       	=> '',

				'user_pass'       	=> '',

				'_config:protected' => '',

				);



		$this->session->unset_userdata('logged_in');

		$this->session->unset_userdata('user_data', $session_data);



		redirect('adminlogin');

	}



}

