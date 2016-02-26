<?php
class My_controller extends CI_Controller {
    
	public $layout='default';
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
		$this->tmdb->saveterms();
		$this->tmdb->saveterms('tv');
		
			
		if(empty($this->session->userdata('genre'))){
				$genre=$this->tmdb->getGenre();
				$this->session->set_userdata('genre', $genre);
		}
		if($this->router->fetch_method()!='play'){
			$sidebar['termsmovie']=$this->tmdb->getterms();
			$sidebar['termstv']=$this->tmdb->getterms('tv');
			
			$sidebar['popular']=$this->tmdb->getMoviePopular(rand(1,10));
			$sidebar['tvpopular']=$this->tmdb->getTv(1,'popular');
			
			$slider=array(
							'dataslider'=>''
			);

			/*$upcoming=$this->tmdb->getMoviePopular(rand(1,10));
			$upcoming=$upcoming->results;
			shuffle($upcoming);
			shuffle($upcoming);
			$upcoming['upcoming']=array(@$upcoming[1],@$upcoming[2],@$upcoming[3]);*/

			$toprated=$this->tmdb->getMovieTop_rated(rand(1,10));		
			$toprated=$toprated->results;
			shuffle($toprated);
			shuffle($toprated);
			$toprated['toprated']=array($toprated[1],$toprated[2],$toprated[3],$toprated[4],$toprated[5],$toprated[6]);
			
			$this->load->section('sidebar', 'themes/'.THEMESET.'/layout/sidebar',$sidebar);
			$this->load->section('slider', 'themes/'.THEMESET.'/layout/slider',$slider);
			$this->load->section('toprated', 'themes/'.THEMESET.'/layout/toprated',$toprated);
			$this->load->section('search', 'themes/'.THEMESET.'/layout/search');
			// $this->load->section('upcoming', 'themes/'.THEMESET.'/layout/upcoming',$upcoming);
		}else{
			
		}
		$this->load->section('header', 'themes/'.THEMESET.'/layout/header');
		$this->load->section('footer', 'themes/'.THEMESET.'/layout/footer');
		
		$this->output->set_template($this->layout);
	}

	
}