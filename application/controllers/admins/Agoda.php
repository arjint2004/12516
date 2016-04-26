<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agoda extends My_controller {

	public function __construct() {
		parent::__construct('admin');
		
	}
 
	function index()
	{
		
		$this->output->set_template('white',1);		
		$this->load->view('themes/admin/movies/index');
	}
	
}