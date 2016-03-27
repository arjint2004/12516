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
		$this->load->view('themes/'.THEMESET.'/movie/home');
	}
	public function play($id=0,$tag_title='')
	{
		$out=$this->tmdb->set_detail($id,'movie');
		$data['movies']=$out['movies'];
		// $data['images']=$out['movies']->loadImage();
		$data['trailer']=$out['trailer'];
		$data['backd']=$out['backd'];
		$data['type']='movie';
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
		$data['genrenya']=$genre;
		$data['genre']=$this->tmdb->getMovieByGenreDb($id_genre,$Page);
		$this->load->view('themes/'.THEMESET.'/movie/genre',$data);
	}
	public function search()
	{

		$this->tmdb->searchterms();
		if($_GET['type']=='movie'){
			$movies['movies']=$this->tmdb->searchMovies($_GET['s'],$_GET['page'],'movie');
		}elseif($_GET['type']=='tv'){
			$movies['movies']=$this->tmdb->searchMovies($_GET['s'],$_GET['page'],'tv');
		}else{
			$movies['movies']=$this->tmdb->searchMovies($_GET['s'],$_GET['page'],'movie');
		}
		$this->load->view('themes/'.THEMESET.'/movie/search',$movies);
	}
}
