<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends My_controller {

	function __construct()
	{
		parent::__construct();
		
	}


	public function index()
	{
		//$this->load->view('welcome_message');
	}
	public function home()
	{
		$this->load->view('themes/'.THEMESET.'/movie/home');
	}
}
