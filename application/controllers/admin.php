<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_controller {


	public function __construct() {
		parent::__construct('admin');
		
	}
	
	public function index()
	{
	
	   $this->load->view('themes/admin/index');
	}

 
	function home()
	{
		
	}
	
	function login()
	{
	   //This method will have the credentials validation
	   
	   $this->load->library('form_validation');
	   
	   $this->form_validation->set_rules('username', 'Username', 'trim|required');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		
	   $this->output->set_template('blank',1);		
	   $this->load->view('themes/admin/login');
	   }
	   else
	   {
		 //Go to private area
		 redirect('admin/home', 'refresh');
	   }	
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('admin/login');
	}
 
	function check_database($password)
	 {
	   // echo md5('indocpa2016');die;
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	   if($this->config->item('passwordadmin')==md5($password) && $this->config->item('useradmin')==$username)
	   {
		    $sess_array = array(
			 'domain' => $this->config->item('domain'),
			 'offer' => array('movie'=>array('t1'=>$this->config->item('t1'),'t2'=>$this->config->item('t2'),'itl'=>$this->config->item('itl'))),
			 'username' => $username
		    );
		    $this->session->set_userdata('logged_in', $sess_array);
		 return TRUE;
	   }
	   else
	   {
		 $this->form_validation->set_message('check_database', 'Invalid username or password');
		 return false;
	   }
	}	
}