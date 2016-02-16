<?php
class My_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('tmdb',array('apikey'=>$this->config->item('tmdb_api_key')));
		// $this->tmdb->setApikey($this->config->item('tmdb_api_key'));
		$this->_init();
    }
	
	private function _init()
	{
		$this->output->set_template('default');
		$sidebar=array(
						'datasidebar'=>''
		);
		$this->load->section('sidebar', 'themes/'.THEMESET.'/layout/sidebar',$sidebar);
		$slider=array(
						'dataslider'=>''
		);
		
		if(empty($this->session->userdata('genre'))){
			$genre=$this->tmdb->getGenre();
			$this->session->set_userdata('genre', $genre);
			pr($this->session->userdata('genre'));
		}
		
		$toprated=$this->tmdb->getMovieTop_rated(rand(1,10));
		$toprated=$toprated->results;
		shuffle($toprated);
		shuffle($toprated);
		$toprated['toprated']=array($toprated[1],$toprated[2],$toprated[3],$toprated[4],$toprated[5],$toprated[6]);
		$this->load->section('slider', 'themes/'.THEMESET.'/layout/slider',$slider);
		$this->load->section('header', 'themes/'.THEMESET.'/layout/header');
		$this->load->section('toprated', 'themes/'.THEMESET.'/layout/toprated',$toprated);
		$this->load->section('search', 'themes/'.THEMESET.'/layout/search');
		$this->load->section('upcoming', 'themes/'.THEMESET.'/layout/upcoming');
		$this->load->section('footer', 'themes/'.THEMESET.'/layout/footer');
	}

	
}