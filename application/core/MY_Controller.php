<?php
class My_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
		
		$this->load->helper('url');
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
		$toprated['toprated']=$this->tmdb->getMovieTop_rated(rand(1,10));
		$this->load->section('slider', 'themes/'.THEMESET.'/layout/slider',$slider);
		$this->load->section('header', 'themes/'.THEMESET.'/layout/header');
		$this->load->section('toprated', 'themes/'.THEMESET.'/layout/toprated',$toprated);
		$this->load->section('search', 'themes/'.THEMESET.'/layout/search');
		$this->load->section('upcoming', 'themes/'.THEMESET.'/layout/upcoming');
		$this->load->section('footer', 'themes/'.THEMESET.'/layout/footer');
	}

	
}