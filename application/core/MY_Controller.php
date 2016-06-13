<?php
class My_controller extends CI_Controller {
    
	public $layout='default';
	public $is_admin=0;
	public $domain=array();
	public function __construct($is_admin='') {
		$this->is_admin=$is_admin;
        parent::__construct();
		
		foreach($this->config->item('domain') as $namadomain=>$setting){
			if($setting['status']==1){
				$this->domain=$setting;
				break;
			}
		}
		
		define('THEMESET',$this->domain["theme"]);
		// if(empty($this->session->userdata('domain'))){
			// $this->session->set_userdata('meta', $this->generate_meta($this->domain));
			$this->session->set_userdata('domain', $this->domain);
			$this->session->set_userdata('namadomain', $this->domain['domain']);
		// }
		
		// $this->tmdb->setApikey($this->config->item('tmdb_api_key'));
		
		if($this->router->fetch_class()=='admin' || $this->is_admin=='admin'){
			$this->_admin();
		}else{
			$this->_init();
		}
		
    }
	function generate_meta($setting=array()){
		//pr($setting);die;
		$out['domain']			=$setting['domain'];
		$out['webTitle']		=$setting['webTitle'];
		$out['metaDesc']		=$setting['metaDesc'];
		$out['metaKeywords']	=$setting['metaKeywords'];
		
		return $out;
		
	}
	public function _auth($username='',$password=''){
		if($this->router->fetch_class().'/'.$this->router->fetch_method()!='admin/login'){
			if($this->session->userdata('logged_in')!=''){
				 
			}else{
				$this->session->unset_userdata('logged_in');
				redirect('admin/login');
			}
		}
	}
	private function _init()
	{
	
		$usedomain=$this->session->userdata('domain');
		switch($usedomain['offer']){
			case"aliexpress":
				$this->_aliexpress();
			break;
			case"alibaba":
				$this->_alibaba();
			break;
			case"agoda":
				$this->_agoda();
			break;
			case"movie":
				$this->_movie();
			break;
		}
	}
	private function _admin()
	{
		$this->_auth();
		$this->_theme();
		$sidebar='';
		$this->load->section('sidebar', 'themes/'.THEMESETADMIN.'/layout/sidebar',$sidebar);
	}
	private function _aliexpress()
	{
		$this->_theme();
	}
	private function _alibaba()
	{
		$this->_theme();
	}
	
	private function _agoda()
	{
		$this->load->library(array('AuthToken'=>$this->config->item('AuthToken')));
		$this->_theme();
	}
	private function _movie()
	{
		$this->load->library('tmdb',array('apikey'=>$this->config->item('tmdb_api_key')));
		$this->tmdb->saveterms();
		$this->tmdb->saveterms('tv');
			
		if(empty($this->session->userdata('genre'))){
				$genre=$this->tmdb->getGenre();
				$this->session->set_userdata('genre', $genre);
		}
		if($this->router->fetch_method()!='play'){

			
			
			

			/*$upcoming=$this->tmdb->getMoviePopular(rand(1,10));
			$upcoming=$upcoming->results;
			shuffle($upcoming);
			shuffle($upcoming);
			$upcoming['upcoming']=array(@$upcoming[1],@$upcoming[2],@$upcoming[3]);*/

			
			

			
			$this->load->section('sidebar', 'themes/'.THEMESET.'/layout/sidebar');
			$this->load->section('slider', 'themes/'.THEMESET.'/layout/slider');
			$this->load->section('popularmovie', 'themes/'.THEMESET.'/layout/popularmovie');
			$this->load->section('search', 'themes/'.THEMESET.'/layout/search');
			$this->load->section('tvpopular', 'themes/'.THEMESET.'/layout/tvpopular');
			// $this->load->section('upcoming', 'themes/'.THEMESET.'/layout/upcoming',$upcoming);
		}else{
			
		}
		$this->_theme();
	}


	private function _theme($theme='')
	{
	
		if($this->router->fetch_class()=='admin' || $this->is_admin=='admin'){
			// pr($this->domain['theme']);die;
			$this->load->section('header', 'themes/'.THEMESETADMIN.'/layout/header');
			$this->load->section('footer', 'themes/'.THEMESETADMIN.'/layout/footer');	
			$this->load->section('custom', 'themes/'.THEMESETADMIN.'/layout/custom');	
			$this->output->set_template($this->layout,1);	
		}else{	
			// pr($this->domain['theme']);die;
			$domain=$this->domain["theme"];
			$this->load->section('header', 'themes/'.$domain.'/layout/header');
			$this->load->section('footer', 'themes/'.$domain.'/layout/footer');
			$this->output->set_template($this->layout,0,$domain);		
		}	
	}	
}