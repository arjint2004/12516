<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends My_controller {

	function __construct()
	{
		parent::__construct();
		
	}


	public function index()
	{
		$this->load->view('themes/'.THEMESET.'/movie/home');
	}
	public function home()
	{
		$this->load->view('themes/'.THEMESET.'/movie/home');
	}
	public function genre($id_genre=0,$Page=1)
	{
		
		$data['genre']=$this->tmdb->getMovieByGenreDb($id_genre,$Page);
		$this->load->view('themes/'.THEMESET.'/movie/genre',$data);
	}
}
