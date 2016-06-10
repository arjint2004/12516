<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends My_controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->library('tmdb');
		// $this->tmdb->setApikey($this->config->item('tmdb_api_key'));
		
	}


	public function index()
	{
		$this->home();
	}
	public function errordb()
	{
	
	}
	public function watch_download($aff_link)
	{
		if($this->session->userdata('aff_link')!=''){
			$red=$this->session->userdata('aff_link');
		}else{
			$red=base64_decode($aff_link);
		}
		redirect($red);
	}
	public function artist($id)
	{
		$person=$this->tmdb->getPerson($id);
		$data['person']=$person->get_data();
		$this->load->view('themes/'.THEMESET.'/movie/person',$data);
	}
	public function play($id=0,$tag_title='')
	{
		$out=$this->tmdb->set_detail($id,'movie');
		$this->session->set_userdata('aff_link', $out['aff_link']);
		$data['movies']=$out['movies'];
		// $data['images']=$out['movies']->loadImage();
		$data['trailer']=$out['trailer'];
		$data['backd']=$out['backd'];
		$data['type']='movie';
		$data['aff_link']=base64_encode($out['aff_link']);
		$data['artist']=$out['movies']->getCastArray();
		
		$this->load->section('player', 'themes/'.THEMESET.'/layout/player',$data);
		$this->output->set_template('single');
		$this->load->view('themes/'.THEMESET.'/movie/play',$data);
	}
	public function about_us()
	{
		
		$this->load->view('themes/'.THEMESET.'/movie/about_us');
	}
	public function dmca()
	{
		$this->load->view('themes/'.THEMESET.'/movie/dmca');
	}
	public function home()
	{
		$data['movie']=$this->tmdb->getRandTvMovie();
		$data['tv']=$this->tmdb->getRandTvMovie('tv');
		$this->load->view('themes/'.THEMESET.'/movie/home',$data);
	}
	public function nowplaying($page=1)
	{
		$data['title']='Now Playing';
		$data['nowplay']=$this->tmdb->getMovieNowPlay($page);
		$this->load->view('themes/'.THEMESET.'/movie/now_palying',$data);
	}
	public function popular($page=1)
	{
		$data['title']='Popular';
		$data['nowplay']=$this->tmdb->getMoviePopular($page);
		$this->load->view('themes/'.THEMESET.'/movie/now_palying',$data);
	}
	public function toprated($page=1)
	{
		$data['title']='Top rated';
		$data['nowplay']=$this->tmdb->getMovieTop_rated($page);
		$this->load->view('themes/'.THEMESET.'/movie/now_palying',$data);
	}
	public function upcoming($page=1)
	{
		$data['title']='Upcoming';
		$data['nowplay']=$this->tmdb->getMovieUpcoming($page);
		$this->load->view('themes/'.THEMESET.'/movie/now_palying',$data);
	}
	public function genre($id_genre=0,$Page=1,$genre='')
	{
		if($id_genre==0 && $genre!=''){
		
			if(empty($this->session->userdata('genre'))){
				$this->session->set_userdata('genre', $this->tmdb->getGenre());
				$listGenre=$this->session->userdata('genre');
			}else{
				$listGenre=$this->session->userdata('genre');
			}
			$id_genre=array_search($genre,$listGenre);
		}
		$this->tmdb->savehasilterms($genre,'movie',1);
		$data['genrenya']=$genre;
		$data['genre']=$this->tmdb->getMovieByGenreDb($id_genre,$Page);
		$this->load->view('themes/'.THEMESET.'/movie/genre',$data);
	}
	public function search($type='',$page='',$s='')
	{
		$s=str_replace('.html','',$s);
		if($s!=''){$_GET['s']=$s;}
		if($page!=''){$_GET['page']=$page;}
		if($type!=''){$_GET['type']=$type;}
		$this->tmdb->searchterms();
		$_GET['s']=str_replace('-',' ',$_GET['s']);
		
		if($_GET['type']=='movie'){
			$movies['movies']=$this->tmdb->searchMovies($_GET['s'],$_GET['page'],'movie');
			$movies['type']='movie';
		}elseif($_GET['type']=='tv'){
			$movies['movies']=$this->tmdb->searchMovies($_GET['s'],$_GET['page'],'tv');
			$movies['type']='tv';
		}else{
			$movies['movies']=$this->tmdb->searchMovies($_GET['s'],$_GET['page'],'movie');
			$movies['type']='movie';
		}
		$this->load->view('themes/'.THEMESET.'/movie/search',$movies);
	}
}
