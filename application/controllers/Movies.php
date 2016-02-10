<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends My_controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tmdb');
		$this->tmdb->setApikey($this->config->item('tmdb_api_key'));
		
	}


	public function index()
	{
		$this->load->view('themes/'.THEMESET.'/movie/home');
	}
	public function home()
	{
		$this->load->view('themes/'.THEMESET.'/movie/home');
	}
	public function dmca()
	{
		echo "shfshdhfkdsjf";
	}
	public function genre($id_genre=0,$Page=1)
	{
		
		$data['genre']=$this->tmdb->getMovieByGenreDb($id_genre,$Page);
		$this->load->view('themes/'.THEMESET.'/movie/genre',$data);
	}
}
