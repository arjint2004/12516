<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tv extends My_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	
	public function on_the_air($page=1)
	{
		$data['title']='Ont the Air';
		$data['nowplay']=$this->tmdb->getTv($page,'on_the_air');
		$this->load->view('themes/'.THEMESET.'/tv/list',$data);
	}
	public function airing_today($page=1)
	{
		$data['title']='Airing Today';
		$data['nowplay']=$this->tmdb->getTv($page,'airing_today');
		$this->load->view('themes/'.THEMESET.'/tv/list',$data);
	}
	public function top_rated($page=1)
	{
		$data['title']='Top Rated';
		$data['nowplay']=$this->tmdb->getTv($page,'top_rated');
		$this->load->view('themes/'.THEMESET.'/tv/list',$data);
	}
	public function popular($page=1)
	{
		$data['title']='Popular';
		$data['nowplay']=$this->tmdb->getTv($page,'popular');
		$this->load->view('themes/'.THEMESET.'/tv/list',$data);
	}
}
