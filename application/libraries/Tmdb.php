<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * 	TMDB API v3 PHP class - wrapper to API version 3 of 'themoviedb.org
 * 	API Documentation: http://help.themoviedb.org/kb/api/about-3
 * 	Libray Documentation: http://code.octal.es/php/tmdb-api/
 *
 * 	@pakage TMDB-PHP-API
 * 	@author adangq <adangq@gmail.com>
 * 	@copyright 2012 pixelead0
 * 	@date 2012-02-12
 * 	@link http://www.github.com/pixelead
 * 	@version 0.0.2
 * 	@license BSD http://www.opensource.org/licenses/bsd-license.php
 *
 * 	Portions of this file are based on pieces of TMDb PHP API class - API 'themoviedb.org'
 * 	@Copyright Jonas De Smet - Glamorous | https://github.com/glamorous/TMDb-PHP-API
 * 	Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 * 	@date 10.12.2010
 * 	@version 0.9.10
 * 	@author Jonas De Smet - Glamorous
 * 	@link {https://github.com/glamorous/TMDb-PHP-API}
 *
 * 	Mostly code cleaning, adaptation and documentation
 * 	@Copyright Alvaro Octal | https://github.com/Alvaroctal/TMDB-PHP-API
 * 	Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 * 	@date 09/01/2015
 * 	@version 0.0.3
 * 	@author Alvaro Octal
 * 	@link {https://github.com/Alvaroctal/TMDB-PHP-API}
 */
include("data/TMDBObject.php");
include("data/Movie.php");
include("data/TVShow.php");
include("data/Season.php");
include("data/Episode.php");
include("data/Person.php");
include("data/Role.php");
include("data/roles/MovieRole.php");
include("data/roles/TVShowRole.php");
include("data/Collection.php");
include("data/Company.php");
include("data/Genre.php");
include("data/config/Configuration.php");

class tmdb extends CI_Controller{

	#@var string url of API TMDB
	const _API_URL_ = "http://api.themoviedb.org/3/";

	#@var string Version of this class
	const VERSION = '0.0.3';

	#@var string API KEY
	private $_apikey;

	#@var string Default language
	private $_lang;

	#@var array of TMDB config
    private $_configuration;

	#@var boolean for testing
	private $_debug;
	private $CI;

	private $cinmovie=0;
	/**
	 * 	Construct Class
	 *
	 * 	@param string $apikey The API key token
	 * 	@param string $lang The languaje to work with, default is english
	 */
	 public function __construct($apikey, $lang = 'en', $debug = false) {
		$this->CI=& get_instance();
		// Sets the API key
		$this->setApikey($apikey['apikey']);
	
		// Setting Language
		$this->setLang($lang);

		// Set the debug mode
		$this->_debug = $debug;

		// Load the configuration
		if (! $this->_loadConfig()){
			echo "Unable to read configuration, verify that the API key is valid";
			exit;
		}
	}

	//------------------------------------------------------------------------------
	// Api Key
	//------------------------------------------------------------------------------
         
	/** 
	 * 	Set the API key
	 *
	 * 	@param string $apikey
	 * 	@return void
	 */
	public function setApikey($apikey) {
		$this->_apikey = (string) $apikey;
	}

	/** 
	 * 	Get the API key
	 *
	 * 	@return string
	 */
	private function getApikey() {
		return $this->_apikey;
	}

	//------------------------------------------------------------------------------
	// Language
	//------------------------------------------------------------------------------

	/** 
	 *  Set the language
	 *	By default english
	 *
	 * 	@param string $lang
	 */
	public function setLang($lang = 'en') {
		$this->_lang = $lang;
	}

	/** 
	 * 	Get the language
	 *
	 * 	@return string
	 */
	public function getLang() {
		return $this->_lang;
	}

	//------------------------------------------------------------------------------
	// Config
	//------------------------------------------------------------------------------

	/**
	 * 	Loads the configuration of the API
	 *
	 * 	@return boolean
	 */
	private function _loadConfig() {
		
		//$this->_configuration = new Configuration($this->_call('configuration', ''));
		$this->_configuration = new Configuration(json_decode('{"images":{"base_url":"http://image.tmdb.org/t/p/","secure_base_url":"https://image.tmdb.org/t/p/","backdrop_sizes":["w300","w780","w1280","original"],"logo_sizes":["w45","w92","w154","w185","w300","w500","original"],"poster_sizes":["w92","w154","w185","w342","w500","w780","original"],"profile_sizes":["w45","w185","h632","original"],"still_sizes":["w92","w185","w300","original"]},"change_keys":["adult","air_date","also_known_as","alternative_titles","biography","birthday","budget","cast","certifications","character_names","created_by","crew","deathday","episode","episode_number","episode_run_time","freebase_id","freebase_mid","general","genres","guest_stars","homepage","images","imdb_id","languages","name","network","origin_country","original_name","original_title","overview","parts","place_of_birth","plot_keywords","production_code","production_companies","production_countries","releases","revenue","runtime","season","season_number","season_regular","spoken_languages","status","tagline","title","translations","tvdb_id","tvrage_id","type","video","videos"]}',true));

		return ! empty($this->_configuration);
	}

	/**
	 * 	Get Configuration of the API (Revisar)
	 *
	 * 	@return Configuration
	 */
	public function getConfig(){
		return $this->_configuration;
	}

	//------------------------------------------------------------------------------
	// Get Variables
	//------------------------------------------------------------------------------

	/** 
	 *	Get the URL images
	 * 	You can specify the width, by default original
	 *
	 * 	@param String $size A String like 'w185' where you specify the image width
	 * 	@return string
	 */
	public function getImageURL($size = 'original') {
		return $this->_configuration->getImageBaseURL() . $size;
	}

	/**
	 * 	Get Movie Info
	 * 	Gets part of the info of the Movie, mostly used for the lazy load
	 *
	 * 	@param int $idMovie The Movie id
	 *  @param string $option The request option
	 * 	@param string $append_request additional request
	 * 	@return array
	 *	@deprecated Will be removed in 0.0.4, do not get used to use this method
	 */
	public function getMovieInfo($idMovie, $option = '', $append_request = ''){
		$option = (empty($option)) ? '' : '/' . $option;
		$params = 'movie/' . $idMovie . $option;
		$result = $this->_call($params, $append_request);
			
		return $result;
	}

	//------------------------------------------------------------------------------
	// API Call
	//------------------------------------------------------------------------------

	public function getGenre(){

			$response = file_get_contents("http://api.themoviedb.org/3/genre/movie/list?api_key=".$this->getApikey()."&language=".$this->getLang()."");
			$genre=json_decode($response,true);

			foreach($genre['genres'] as $gnr){
				$genre2[$gnr['id']]=$gnr['name'];
			}
			unset($genre);
		return $genre2;
	}
	

	public function getMovieUpcoming($page=1){
		//pr($page);die();
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/upcoming?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($response);
	}
	/**
	 * 	Makes the call to the API and retrieves the data as a JSON
	 *
	 * 	@param string $action	API specific function name for in the URL
	 * 	@param string $appendToResponse	The extra append of the request
	 * 	@return string
	 */
	private function _call($action, $appendToResponse,$array=true){

		$url = self::_API_URL_.$action .'?api_key='. $this->getApikey() .'&language='. $this->getLang() .'&'.$appendToResponse;
		  // echo $url.'<br>';die;
		/*if($action=='tv/'){
			echo $url; die();
		}
		if ($this->_debug) {
			//echo '<pre><a href="' . $url . '">check request</a></pre>';
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);

		$results = curl_exec($ch);

		curl_close($ch);*/
		$results=file_get_contents($url);
		return (array) json_decode(($results), $array);
	}
	public function getSimilarDB($genre=0, $title='',$type='movie'){
		shuffle($genre);
		shuffle($genre);
		shuffle($genre);
		$datasave=$this->CI->db->query("SELECT original FROM movie_data WHERE id_genre LIKE '%".$genre[0]['id']."%' AND type='movie' LIMIT 10")->result_array();
		// $datasave=$this->CI->db->query("SELECT original FROM movie_data WHERE type='movie' ORDER BY rand() LIMIT 10")->result_array();
		foreach($datasave as $ori){
			$cvb['results'][]=json_decode($ori['original'],false);
		}
		 // pr((object)$cvb);die;
		// $original = new Movie((object)$cvb);
		
		return (object)$cvb;
	}
	public function getSimilar($id=0,$type='movie'){
		//pr($page);die();
		$appendToResponse="append_to_response=trailers,images,credits,translations,runtime";
		$url = 'http://api.themoviedb.org/3/'.$type.'/'.$id.'/similar?api_key='. $this->getApikey() .'&language='. $this->getLang() .'&'.$appendToResponse;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);

		$results = curl_exec($ch);

		curl_close($ch);
		
		
		
		
		return json_decode($results);
	}
	public function getReview($id=0,$type='movie'){
		//pr($page);die();
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/".$type."/".$id."/reviews?api_key=".$this->getApikey()."&language=".$this->getLang()."");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($response);
	}
	public function getMovieTop_rated($page=1){
		//pr($page);die();
		/*$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/top_rated?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);*/
		$response=file_get_contents("http://api.themoviedb.org/3/movie/top_rated?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		return json_decode($response);
	}
	public function getMoviePopular($page=1){
		//pr($page);die();
		/*$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/popular?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);*/
		$response=file_get_contents("http://api.themoviedb.org/3/movie/popular?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		return json_decode($response);
	}
	public function getMovieNowPlay($page=1){
		//pr($page);die();
		/*$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/now_playing?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);*/
		$response=file_get_contents("http://api.themoviedb.org/3/movie/now_playing?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		return json_decode($response);
	}
	public function getMovieLatest($page=1){
		//pr($page);die();
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/latest?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($response);
	}
	public function getMovieByGenreDb($id=28,$page=1){
		
		$page=$page-1;
		$per_page=20;
		$start=$page*$per_page;
		$get_data_sqlc="SELECT count(*) c FROM movie_data WHERE id_genre  LIKE '%".$id."%' AND type='movie'";					
		$hc=$this->CI->db->query($get_data_sqlc)->result_array();
		
		$out['total_data']=$hc[0]['c'];

		$get_data_sql="SELECT original FROM movie_data s WHERE id_genre  LIKE '%".$id."%' AND type='movie' LIMIT ".$start.",".$per_page."";					
		$h=$this->CI->db->query($get_data_sql)->result_array();
		// echo $this->CI->db->last_query();
		// pr($h);die;
		$data=array();
		foreach($h as $dd=>$dth){
			$data[]=@json_decode($dth['original']);
		}
		$out['results']=$data;	
		return $out;
	}
	public function getMovieDbById($id){
		
		$datasave=$this->CI->db->query("SELECT * FROM movie_data WHERE id_tmdb=".$id." AND type='movie'")->result_array();
		if(empty($datasave)){ //echo 22;
			$original = $this->getMovie($id);
			$originals=$original->getdata();

			if(isset($originals->original_title)){$keywords=$originals->original_title;}elseif(isset($originals['original_title'])){$keywords=$originals['original_title'];}
			$sqlinsert="INSERT IGNORE INTO movie_data SET id_tmdb=?, id_genre='', original=?, seasons=0,episodes=0,date=?,type='movie', keywords=?";
			$this->CI->db->query($sqlinsert,array($id,json_encode($originals),date('Y-m-d H:i:s'),$this->clean($keywords)));
		}else{//echo 33;
			$original = new Movie(json_decode($datasave[0]['original'],true), $id);
		}
		
		return $original;
	}
	public function getMovieDb($page=1){
		
		//$page=$page-1;
		$per_page=10;
		$start=($page*$per_page)-$per_page;
		
		$get_data_sql="SELECT * FROM movie_data LIMIT ".$start.",".$per_page."";	
		// echo $get_data_sql;
		
		$data=$this->CI->db->query($get_data_sql)->result_array();
		// pr($data);
		// $out['results']=$data;	
		return $data;
	}
	public function getTvs($id=1,$season=1,$episodes=1){

		$get_data_sql="SELECT original FROM movie_data s WHERE id_tmdb=".$id."";					
		$h=$this->CI->db->query($get_data_sql)->result_array();
		$data=array();
		foreach($h as $dd=>$dth){
			$data[]=@json_decode($dth['original']);
		}
		return $data;
		
	}
	public function getMovies($id=1){

		$get_data_sql="SELECT original FROM movie_data s WHERE id_tmdb=".$id."";					
		$h=$this->CI->db->query($get_data_sql)->result_array();
		$data=array();
		foreach($h as $dd=>$dth){
			$data[]=@json_decode($dth['original']);
		}
		return $data;
		
	}
	public function getMovieByGenre($id=28,$page=1){
		//pr($page);die();
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/genre/".$id."/movies?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($response);
	}

	//------------------------------------------------------------------------------
	// Get Data Objects
	//------------------------------------------------------------------------------

	/**
	 * 	Get a Movie
	 *
	 * 	@param int $idMovie The Movie id
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return Movie
	 */
	public function getMovie($idMovie, $appendToResponse = 'append_to_response=trailers,images,credits,translations'){
		return new Movie($this->_call('movie/' . $idMovie, $appendToResponse));
	}

	/**
	 * 	Get a TVShow
	 *
	 * 	@param int $idTVShow The TVShow id
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return TVShow
	 */
	public function getTVShow($idTVShow, $appendToResponse = 'append_to_response=trailers,images,credits,translations,keywords,external_ids'){
		return new TVShow($this->_call('tv/' . $idTVShow, $appendToResponse));
	}
	
	public function getTVShowDb($idTVShow, $appendToResponse = 'append_to_response=trailers,images,credits,translations,keywords,external_ids'){
		$datasave=$this->CI->db->query("SELECT * FROM movie_data WHERE id_tmdb=".$idTVShow." AND type='tv'")->result_array();
		if(empty($datasave)){ //echo 22;
			$original = new TVShow($this->_call('tv/' . $idTVShow, $appendToResponse));
			$originals=(object)$original->getdata();

			$keywords=$originals->name;
			$sqlinsert="INSERT IGNORE INTO movie_data SET id_tmdb=?, id_genre='', original=?, seasons=0,episodes=0,date=?,type='tv', keywords=?";
			$this->CI->db->query($sqlinsert,array($idTVShow,json_encode($originals),date('Y-m-d H:i:s'),$this->clean($keywords)));
		}else{//echo 33;
			$original = new TVShow((array)json_decode($datasave[0]['original']), $idTVShow);
		}
		
		return $original;
	}

	/**
	 * 	Get a Season
	 *
	 *  @param int $idTVShow The TVShow id
	 *  @param int $numSeason The Season number
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return Season
	 */
	public function getSeason($idTVShow, $numSeason, $appendToResponse = 'append_to_response=trailers,images,credits,translations'){
		return new Season($this->_call('tv/'. $idTVShow .'/season/' . $numSeason, $appendToResponse), $idTVShow);
	}

	/**
	 * 	Get a Episode
	 *
	 *  @param int $idTVShow The TVShow id
	 *  @param int $numSeason The Season number
	 *  @param int $numEpisode the Episode number
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return Episode
	 */
	public function getEpisode($idTVShow, $numSeason, $numEpisode, $appendToResponse = 'append_to_response=trailers,images,credits,translations'){
		return new Episode($this->_call('tv/'. $idTVShow .'/season/'. $numSeason .'/episode/'. $numEpisode, $appendToResponse), $idTVShow);
	}
	public function getEpisodeDb($idTVShow, $numSeason, $numEpisode, $appendToResponse = 'append_to_response=trailers,images,credits,translations'){
		$datasave=$this->CI->db->query("SELECT * FROM movie_data WHERE id_tmdb=".$idTVShow.$numSeason.$numEpisode." AND seasons=".$numSeason." AND episodes=".$numEpisode." AND type='tv'")->result_array();
		if(empty($datasave)){
			/*$url = self::_API_URL_.'tv/'. $idTVShow .'/season/'. $numSeason .'/episode/'. $numEpisode .'?api_key='. $this->getApikey() .'&language='. $this->getLang() .'&'.$appendToResponse;
			$results=file_get_contents($url);
			$original=json_decode(($results), false);*/
			$originals = new Episode($this->_call('tv/'. $idTVShow .'/season/'. $numSeason .'/episode/'. $numEpisode, $appendToResponse), $idTVShow);
			$original=$originals->getdata();

			$keywords=$originals->getTitle();
			$datacurrent=$this->CI->db->query("SELECT count(*) as cnt FROM movie_data WHERE parent_id_tmdb=".$idTVShow." AND seasons=".$numSeason." AND episodes=".$numEpisode." AND type='tv'")->result_array();
			if($datacurrent[0]['cnt']==0){
				$sqlinsert="INSERT IGNORE INTO movie_data SET id_tmdb=?, parent_id_tmdb=?, id_genre='', original=?, seasons=?,episodes=?,date=?,type='tv', keywords=?";
				$this->CI->db->query($sqlinsert,array($idTVShow.$numSeason.$numEpisode,$idTVShow,json_encode($original),$numSeason,$numEpisode,date('Y-m-d H:i:s'),$this->clean($keywords)));
			}
		}else{
			$originals = new Episode(json_decode($datasave[0]['original'],true), $idTVShow);
			// $original=json_decode($datasave[0]['original']);
		}
		// pr($originals);die;
		return $originals;
	}

	/**
	 * 	Get a Person
	 *
	 * 	@param int $idPerson The Person id
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return Person
	 */
	public function getPerson($idPerson, $appendToResponse = 'append_to_response=tv_credits,movie_credits'){
		return new Person($this->_call('person/' . $idPerson, $appendToResponse));
	}

	/**
	 * 	Get a Collection
	 *
	 * 	@param int $idCollection The Person id
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return Collection
	 */
	public function getCollection($idCollection, $appendToResponse = 'append_to_response=images'){
		return new Collection($this->_call('collection/' . $idCollection, $appendToResponse));
	}

	/**
	 * 	Get a Company
	 *
	 * 	@param int $idCompany The Person id
	 * 	@param string $appendToResponse The extra append of the request, by default all
	 * 	@return Company
	 */
	public function getCompany($idCompany, $appendToResponse = 'append_to_response=movies'){
		return new Company($this->_call('company/' . $idCompany, $appendToResponse));
	}

	//------------------------------------------------------------------------------
	// Searches
	//------------------------------------------------------------------------------

	/**
	 *  Search Movie
	 *
	 * 	@param string $movieTitle The title of a Movie
	 * 	@return Movie[]
	 */
	public function searchMovies($movieTitle,$page=1,$type='movie'){
		$ch = curl_init();
		$movieTitle=str_replace(" ","+",$this->clean($movieTitle));
		// echo "http://api.themoviedb.org/3/search/".$type."?query=$movieTitle&api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."";
		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/search/".$type."?query=$movieTitle&api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		$out=json_decode($response);
		// pr($out);die();
		// foreach($out->results as $yy=>$datan){
			// $mdb=json_decode(file_get_contents('http://api.themoviedb.org/3/movie/'.$datan->id.'?api_key='.$this->getApikey().''));
			// $out->results[$yy]->imdb_id=$mdb->imdb_id;
		// }
		 return $out;
	}
	public function searchMovie($movieTitle){

		$movies = array();

		$result = $this->_call('search/movie', 'query='. urlencode($movieTitle), $this->getLang());

		foreach($result['results'] as $data){
			$movies[] = new Movie($data);
		}

		return $movies;
	}

	/**
	 *  Search TVShow
	 *
	 * 	@param string $tvShowTitle The title of a TVShow
	 * 	@return TVShow[]
	 */
	public function searchTVShow($tvShowTitle){

		$tvShows = array();

		$result = $this->_call('search/tv', 'query='. urlencode($tvShowTitle), $this->getLang());

		foreach($result['results'] as $data){
			$tvShows[] = new TVShow($data);
		}

		return $tvShows;
	}

	/**
	 *  Search Person
	 *
	 * 	@param string $personName The name of the Person
	 * 	@return Person[]
	 */
	public function searchPerson($personName){

		$persons = array();

		$result = $this->_call('search/person', 'query='. urlencode($personName), $this->getLang());

		foreach($result['results'] as $data){
			$persons[] = new Person($data);
		}

		return $persons;
	}

	/**
	 *  Search Collection
	 *
	 * 	@param string $collectionName The name of the Collection
	 * 	@return Collection[]
	 */
	public function searchCollection($collectionName){

		$collections = array();

		$result = $this->_call('search/collection', 'query='. urlencode($collectionName), $this->getLang());

		foreach($result['results'] as $data){
			$collections[] = new Collection($data);
		}

		return $collections;
	}

	/**
	 *  Search Company
	 *
	 * 	@param string $companyName The name of the Company
	 * 	@return Company[]
	 */
	public function searchCompany($companyName){

		$companies = array();

		$result = $this->_call('search/company', 'query='. urlencode($companyName), $this->getLang());

		foreach($result['results'] as $data){
			$companies[] = new Company($data);
		}

		return $companies;
	}

	//------------------------------------------------------------------------------
	//
	// Get Lists 
	//
	//------------------------------------------------------------------------------

	//------------------------------------------------------------------------------
	// Get Lists of Movies
	//------------------------------------------------------------------------------

	/**
	 * 	Get the latest Movie 
	 *
	 * 	@return Movie
	 */
	public function getLatestMovie() {
		return new Movie($this->_call('movie/latest',''));
	}

	/**
	 *  Get the upcoming Movies
	 *
	 * 	@param integer $page The page number of the results
	 * 	@return Movie[]
	 */
	public function getUpcomingMovies($page = 1) {

		$movies = array();

		$result = $this->_call('movie/upcoming', 'page='. $page);

		foreach($result['results'] as $data){
			$movies[] = new Movie($data);
		}

		return $movies;
	}

	/**
	 *  Get now playing Movies
	 *
	 * 	@param integer $page The page number of the results
	 * 	@return Movie[]
	 */
	public function getNowPlayingMovies($page = 1) {

		$movies = array();

		$result = $this->_call('movie/now-playing', 'page='. $page);

		foreach($result['results'] as $data){
			$movies[] = new Movie($data);
		}

		return $movies;
	}

	/**
	 *  Get popular Movies
	 *
	 * 	@param integer $page The page number of the results
	 * 	@return Movie[]
	 */
	public function getPopularMovies($page = 1) {

		$movies = array();

		$result = $this->_call('movie/popular', 'page='. $page);
		
		foreach($result['results'] as $jj=>$data){
			$data['api_key']=$this->getApikey();
			$movies[] = new Movie($data);
		}

		return $movies;
	}
	
	public function getImdbId($id_tmdb=0) {
		$mdb=json_decode(file_get_contents('http://api.themoviedb.org/3/movie/'.$id_tmdb.'?api_key='.$this->getApikey().''));
		return $mdb->imdb_id;
	}
	/**
	 *  Get top rated Movies
	 *
	 * 	@param integer $page The page number of the results
	 * 	@return Movie[]
	 */
	public function getTopRatedMovies($page = 1) {

		$movies = array();

		$result = $this->_call('movie/top_rated', 'page='. $page);

		foreach($result['results'] as $data){
			$movies[] = new Movie($data);
		}

		return $movies;
	}

	//------------------------------------------------------------------------------
	// Get Lists of TVShows
	//------------------------------------------------------------------------------


	public function getTv($page=1,$type='popular'){
		//pr($page);die();
		switch($type){
			case "latest":
				$urlcurl="http://api.themoviedb.org/3/movie/latest?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."&append_to_response=external_ids";
			break;
			case "on_the_air":
				$urlcurl="http://api.themoviedb.org/3/tv/on_the_air?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."&append_to_response=external_ids";
			break;
			case "airing_today":
				$urlcurl="http://api.themoviedb.org/3/tv/airing_today?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."&append_to_response=external_ids";
			break;
			case "top_rated":
				$urlcurl="http://api.themoviedb.org/3/tv/top_rated?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."&append_to_response=external_ids";
			break;
			case "popular":
				$urlcurl="http://api.themoviedb.org/3/tv/popular?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."&append_to_response=external_ids";
			break;
		}
		$ch = curl_init();

		
		curl_setopt($ch, CURLOPT_URL, $urlcurl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($response);
	}	
	
	
	/**
	 * 	Get latest TVShow
	 *
	 * 	@return TVShow
	 */
	public function getLatestTVShow() {
		return new TVShow($this->_call('tv/latest',''));
	}

	/**
	 * 	Get popular TVShows
	 *
	 * 	@return TVShow[]
	 */
	public function getPopularTVShows($page = 1) {
		$tvShows = array();

		$result = $this->_call('tv/popular','page='. $page);

		foreach($result['results'] as $data){
			$tvShows[] = new TVShow($data);
		}

		return $tvShows;
	}

	/**
	 * 	Get on the air TVShows
	 *
	 * 	@return TVShow[]
	 */
	public function getOnTheAirTVShows($page = 1) {
		$tvShows = array();

		$result = $this->_call('tv/on_the_air','page='. $page);

		foreach($result['results'] as $data){
			$tvShows[] = new TVShow($data);
		}

		return $tvShows;
	}

	/**
	 * 	Get airing today TVShows
	 *
	 * 	@return TVShow[]
	 */
	public function getAiringTodayTVShows($page = 1) {
		$tvShows = array();

		$result = $this->_call('tv/airing_today','page='. $page);

		foreach($result['results'] as $data){
			$tvShows[] = new TVShow($data);
		}

		return $tvShows;
	}

	/**
	 * 	Get top rated TVShows
	 *
	 * 	@return TVShow[]
	 */
	public function getTopRatedTVShows($page = 1) {
		$tvShows = array();

		$result = $this->_call('tv/top_rated','page='. $page);

		foreach($result['results'] as $data){
			$tvShows[] = new TVShow($data);
		}

		return $tvShows;
	}

	//------------------------------------------------------------------------------
	// Get Lists of Persons
	//------------------------------------------------------------------------------

	/**
	 * 	Get latest Person
	 *
	 * 	@return Person
	 */
	public function getLatestPerson() {
		return new Person($this->_call('person/latest',''));
	}

	/**
	 * 	Get Popular Persons
	 *
	 * 	@return Person[]
	 */
	public function getPopularPersons($page = 1) {
		$persons = array();

		$result = $this->_call('person/popular','page='. $page);

		foreach($result['results'] as $data){
			$persons[] = new Person($data);
		}

		return $persons;
	}

	//------------------------------------------------------------------------------
	// Find
	//------------------------------------------------------------------------------

	/**
	 *	Get a Movie by an external ID (f.e.: imdb)
	 *
	 *	@return Movie[]
	 */
	public function findMovie($movieID, $externalSource = 'imdb_id'){
		$movies = array();

		$result = $this->_call('find/' . $movieID, 'external_source=' . $externalSource);

		foreach ($result['movie_results'] as $data) {
			$movies[] = new Movie($data);
		}

		return $movies;
	}

	/**
	 *	Get a Person by an external ID (f.e.: imdb)
	 *
	 *	@return Person[]
	 */
	public function findPerson($personID, $externalSource = 'imdb_id'){
		$persons = array();

		$result = $this->_call('find/' . $personID, 'external_source=' . $externalSource);

		foreach ($result['person_results'] as $data) {
			$persons[] = new Person($data);
		}

		return $persons;
	}

	/**
	 *	Get a TVShow by an external ID (f.e.: imdb)
	 *
	 *	@return TVShow[]
	 */
	public function findTVShow($tvShowID, $externalSource = 'imdb_id'){
		$tvShows = array();

		$result = $this->_call('find/' . $tvShowID, 'external_source=' . $externalSource);

		foreach ($result['tv_results'] as $data) {
			$tvShows[] = new TVShow($data);
		}

		return $tvShows;
	}

	/**
	 *	Get a Season by an external ID (f.e.: imdb)
	 *
	 *	@return Season[]
	 */
	public function findSeason($seasonID, $externalSource = 'tvdb_id'){
		$seasons = array();

		$result = $this->_call('find/' . $seasonID, 'external_source=' . $externalSource);

		foreach ($result['tv_season_results'] as $data) {
			$seasons[] = new Season($data);
		}

		return $seasons;
	}

	/**
	 *	Get a Episode by an external ID (f.e.: imdb)
	 *
	 *	@return Episode[]
	 */
	public function findEpisode($episodeID, $externalSource = 'imdb_id'){
		$episodes = array();

		$result = $this->_call('find/' . $episodeID, 'external_source=' . $externalSource);

		foreach ($result['tv_episode_results'] as $data) {
			$episodes[] = new Episode($data);
		}

		return $episodes;
	}
	
	
	public function getBlankImage(){
		return base_url().'/assets/themes/'.THEMESET.'/images/noback.gif';
	}
	public function getbackdtv($movies){
		if($movies->getPoster()!=''){
			$backd=$this->getImageURL('w1000').$movies->getPoster();
		}elseif($movies->getPoster()==''){ 
			$backd=base_url().'/assets/img/noback.gif';
		}
		return $backd;
	}
	public function getbackd($movies){
		if($movies->getBackdrop()=='' && $movies->getPoster()!=''){ 
			$backd=$this->getImageURL('w1000').$movies->getPoster();
		}elseif($movies->getBackdrop()=='' && $movies->getPoster()==''){ 
			$backd=base_url().'/assets/img/noback.gif';
		}else{
			$backd=$this->getImageURL('w1000').$movies->getBackdrop();
		}
		return $backd;
	}
	public function getContTvByKeyword(){
		$keywordmovie=file_get_contents('searchtermstv.txt');
		$keywordmovie=explode("\n",$keywordmovie);
		// pr($keywordmovie[rand(0,count($keywordmovie)-1)]);die();
		$tv=$this->searchMovies($keywordmovie[rand(0,count($keywordmovie)-1)],1,'tv');
		// if(empty($tv)){
			// $this->getContTvByKeyword();
			// die();
		// }
		return $tv;
	}
	public function getRandTvMovie($type='movie'){
		$data=array();							
		$get_data_sql="SELECT original FROM movie_data WHERE  type='".$type."' AND parent_id_tmdb=0  ORDER BY RAND() LIMIT 25";
		 // echo $get_data_sql.'<br />';
		$h=$this->CI->db->query($get_data_sql)->result_array();

		foreach($h as $dd=>$dth){
			$data[]=@json_decode($dth['original']);
		}
		$out['results']=$data;	
		return $out;
	}
	public function getContMovieByKeyword(){
		
		//movie------------
		// $keywordmovie=file_get_contents('searchtermsmovie.txt');
		// $keywordmovie=explode("\n",$keywordmovie);
		// $movies=$this->searchMovie($keywordmovie[rand(0,count($keywordmovie)-1)]);
		// pr($keywordmovie[rand(0,count($keywordmovie)-1)]);
		// if(count($movies)<12){
		 // pr($movies);
		 // die();
			// $this->getContMovieByKeyword();
			// die();
		// }
		/* //tv------------
		$keywordtv=file_get_contents('searchtermstv.txt');
		$keywordtv=explode("\n",$keywordtv);
		shuffle(array_unique($keywordtv));
		
		$resultstv=array();
		 foreach($keywordtv as $kym=>$datam){
			$tvs=$this->searchMovies($datam,1,'tv');
			$resultstv=array_merge($resultstv,$tvs->results);
			shuffle($resultstv);	
		 }
		 shuffle($resultstv);
		 $tvs->results=$resultstv;*/

		 // return $movies;
		// $keywordtv=file_get_contents('searchtermstv.txt');
		// $keywordtv=explode("\n",$keywordtv);
		// shuffle($keywordtv);
		
		
	}
	public function getKeywordsmovie($id){
		$ch = curl_init();
		// http://api.themoviedb.org/3/movie/id/keywords
		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id."/keywords?api_key=".$this->getApikey()."&language=".$this->getLang()."");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		$key1=json_decode($response,true);
		$dtt='';
		if(isset($key1['keywords'])){
			foreach($key1['keywords'] as $dtk){
				$dtt.=$dtk['name'].' ';
			}
		}
		return $dtt;
	}
	private function searches($terms='',$type='movie',$page=1){
		$terms=str_replace('-',' ',$terms);
		$terms=str_replace('.html','',$terms);
		if($type=='movie'){
			$results=$this->searchMovies($terms,$page,'movie');
		}elseif($type=='tv'){
			$results=$this->searchMovies($terms,$page,'tv');
			
		}else{
			$results=$this->searchMovies($terms,$page,'movie');
		}	

		return $results;
	}
	public function noduplicate($text) {
		$words = array_unique(explode(' ',strtolower($text)));
		return implode(' ',$words);
	}
	public function clean($temsnya) {
	    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $temsnya);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", ' ', $clean);
		return $this->noduplicate($clean);
	}
	
	private function filterminchar($terms='',$minchar=3){
		$expterms=explode(' ',$terms);
		$out='';
		$rr=array();
		if(!empty($expterms)){
			foreach($expterms as $temsnya){
				if(strlen($temsnya)>$minchar){
					$rr[]=$temsnya;
					$jjs .='"'.$temsnya.'",';
				}
			}
			$out['string']=implode(' ',$rr);
			$out['array']=$rr;
			$out['in']=substr($jjs,0,-1);
		}
		return $out;
	}
	public function savehasilterms($termsx='',$type='movie',$page=1,$self=0){
		//cek exist terms
		$termsx = $this->clean($termsx);
		$termsx = $this->filterminchar($termsx);
		$terms =$termsx['string'];
		if($termsx['in']==''){$termsx['in']='""';}
		$existterms=$this->CI->db->query('SELECT COUNT(*) as cnt FROM movie_terms WHERE k_name IN('.$termsx['in'].')')->result_array();
		if($existterms[0]['cnt']==0){//echo 1;
			// if($page==1){$page=rand(1,30);}
			$results=$this->searches($terms,$type,$page);
			if($self==0){
				$expterms=explode(' ',$terms);
				if(!empty($expterms)){
					foreach($expterms as $temsnya){
						// if(strlen($temsnya)>3){
							// $clean = $this->clean($temsnya);
							$this->savetermsnofile($temsnya,$type);
						// }
					}
				}
			}
			// pr($results->results);die;
			foreach($results->results as $datasave){
				// $imgurl=$datasave->poster_path;
				
				if($this->cinmovie<10){
					//$keywords='';
					if($type=='movie'){
						$original = $this->getMovie($datasave->id);
						//$keywords=$this->getKeywordsmovie($datasave->id).' '.$datasave->original_title.' '.$terms;
						$keywords=$datasave->original_title.' '.$terms;
						$sqlinsert="INSERT IGNORE INTO movie_data SET id_tmdb=?, id_genre=?, original=?,date=?, type=?, keywords=?";
						$this->CI->db->query($sqlinsert,array($datasave->id,implode(' ',$datasave->genre_ids),json_encode($original->getdata()),date('Y-m-d H:i:s'),$type,$this->clean($keywords)));
					}elseif($type=='tv'){
						$appendToResponse = 'append_to_response=trailers,images,credits,translations,keywords,external_ids';
						$original = new TVShow($this->_call('tv/' . $datasave->id, $appendToResponse));
						$originals=(object)$original->getdata();
						//pr(json_encode($originals));die;
						//$keywords=$this->getKeywordsmovie($datasave->id).' '.$datasave->name.' '.$terms;
						
						$keywords=$datasave->name.' '.$terms;
						
						
						$sqlinsert="INSERT IGNORE INTO movie_data SET id_tmdb=?, id_genre=?, original=?,date=?, type=?, keywords=?";	
						$this->CI->db->query($sqlinsert,array($datasave->id,implode(' ',$datasave->genre_ids),json_encode($originals),date('Y-m-d H:i:s'),$type,$this->clean($keywords)));
					}
					
				}
				$this->cinmovie++;
			}
			$this->cinmovie=0;
			return $results->total_pages;	
		}
	}
	public function getDataByTerm($terms='',$type='movie'){
		$terms=$this->clean($terms);
		// $this->savetermsnofile($terms,$type);
		$like='';
		$terms=str_replace('.html','',$terms);
		$data=array();
		if(empty($data)){
			$terms=str_replace(' ','-',$terms);
			$pecahkey=explode('-',$terms);
			  // pr($pecahkey);die();
			foreach($pecahkey as $iix=>$terms2){
				if(strlen($terms2)>=3){
				if($iix<=2){
					$terms2=$this->clean($terms2);
					$jml_page=$this->savehasilterms($terms2,$type,1);
					
					/*$p=2;
					if($jml_page>3){
						// $jml_page=rand(3,$jml_page);
						// $p=$jml_page-1;
						$jml_page=4;
					}
					 // echo $p.'==>'.$jml_page;
					for($p;$p<=$jml_page;$p++){
						 $this->savehasilterms($terms2,$type,$p);
					}*/
				 $like .="s.keywords LIKE '%".$terms2."%' OR ";
				}
				}
			}
			$like=substr($like,0,-3).'';
			if($like==''){$lkk='';}else{$lkk="(".$like.") AND";}
			
			
			$get_data_sql="SELECT * FROM movie_data s WHERE ".$lkk." type='".$type."' GROUP BY s.id";
							
			// $get_data_sql="SELECT original FROM movie_data WHERE keywords LIKE '%".str_replace('-',' ',$terms)."%' AND type='".$type."' ORDER BY RAND() LIMIT 30";
			// echo $get_data_sql.'<br />';
			$h=$this->CI->db->query($get_data_sql)->result_array();

			foreach($h as $res){
				$data[]=json_decode($res['original']);
			}
		}
		
		

	    
		return $data;
	}
	
	public function getterms($type='movie'){
		// $get_data_sql="SELECT * FROM movie_terms WHERE type='".$type."' ORDER BY RAND() LIMIT 30";
		$get_data_sql="SELECT * FROM movie_terms ORDER BY RAND() LIMIT 30";
			   //s echo $get_data_sql.'<br />';
			$data=$this->CI->db->query($get_data_sql)->result_array();
			return $data;
	}
	public function savetermsnofile($keywdata='',$type='movie'){
		$slug=str_replace(' ','-',$keywdata).'.html';
		//if($keywdata!='' && $this->cekexistterms($slug,$type)==0){
		$sql="INSERT IGNORE INTO movie_terms SET k_name=?, k_slug=?, 	k_date=?, 	k_count_view='0',type=?,source='key_search'";
		// echo $sql;
		return $this->CI->db->query($sql,array($keywdata,$slug,date('Y-m-d H:i:s'),$type));
		//}else{
		//	return false;
		//}
	}
	private function cekexistterms($slug='',$type='movie'){
		$get_data_sql="SELECT count(*) as c FROM movie_terms  WHERE k_slug IN('".$slug."') AND type='".$type."'";
		// echo $get_data_sql;
		$h=$this->CI->db->query($get_data_sql)->result_array();
		return $h[0]['c'];
	}
	public function saveterms($type='movie'){
		//insert data by movie keyword
		if($type=='movie'){
			$file='keywordsmovie.txt';
			$handle = fopen($file, "r");
		}elseif($type=='tv'){
			$file='keywordstv.txt';
			$handle = fopen($file, "r");
		}else{
			$file='keywordsmovie.txt';
			$handle = fopen($file, "r");
		}
		
		if ($handle && filesize($file)>1) {
			$cnt=0;$filew='';
			while (($keywdata = fgets($handle)) !== false) {
				$keywdata=trim($keywdata);
				$slug=str_replace(' ','-',$keywdata).'.html';
				if($keywdata!='' && $this->cekexistterms($slug,$type)==0){
					$this->CI->db->query("INSERT IGNORE INTO movie_terms SET k_name=?, k_slug=?,k_date=?, 	k_count_view='0',type='".$type."',source='keywordinject'",array($keywdata,$slug,date('Y-m-d H:i:s')));
					// echo $sql;
					$this->savehasilterms($keywdata,$type,1,1);
					$cnt++;
					if($cnt>500){
						$filew .=$keywdata;
					}
				}
			}
			fclose($handle);
			file_put_contents($file,$filew);
		} else {
			//echo 'error opening the file';die();
		} 	
		
	}

	private function word_fliter($content) {
		$badwords = file_get_contents('badwords.txt');
		$badwords=explode("\n",$badwords);

	   $wordreplace = array (""); 
	   $count = count($badwords);
	   
	   $countfilter = count($wordreplace);
	   // Loop through the badwords array
    	      for ($n = 0; $n < $count; ++$n, next ($badwords)) {
		   //Create random replace characters
		   $x = 2;
		   $y = rand(3,5);
		   $filter = "";
		      while ($x<="$y") {
			$f = rand(0,$countfilter);
			@$filter .="$wordreplace[$f]";
		      $x++;
		      }

		   //Search for badwords in content
		   $search = trim($badwords[$n]);
		   $content = preg_replace("'$search'i","$filter",$content);

              }
	   return $content;
	}	

	public function searchterms(){
		if(isset($_GET['s']) && isset($_GET['type']) ){
			$_GET['s']=$this->word_fliter($_GET['s']);
			if($_GET['s']==''){
				$_GET['s']="action";
			}
			if($_GET['type']=='movie' && $_GET['s']!=''){
				// $searchterms=file_get_contents('keywordsmovie.txt');
				// if(strpos($searchterms,$_GET['s'])!== false){
					// $searchterms .="\n".$_GET['s'];
					// if($searchterms!="\n")
					// file_put_contents('keywordsmovie.txt',$searchterms);
					// $this->savetermsnofile($_GET['s'],'movie');
					$this->getDataByTerm($_GET['s'],$type='movie');
				// }		
			}elseif($_GET['type']=='tv' && $_GET['s']!=''){
				// $searchterms=file_get_contents('keywordstv.txt');
				
				// if(strpos($searchterms,$_GET['s']) == false){
					// $searchterms .="\n".$_GET['s'];
					// if($searchterms!="\n")
					// file_put_contents('keywordstv.txt',$searchterms);
					// $this->savetermsnofile($_GET['s'],'tv');
					$this->getDataByTerm($_GET['s'],'tv');
				// }
			}
			
			// $searchtermskey=file_get_contents('keywords.txt');
			// if(!strpos($searchtermskey,$_GET['s'])){
				// $searchtermskey .="\n".$_GET['s'];
				// file_put_contents('keywords.txt',$searchtermskey);
			// }
		}	
	}

	//GET IP
	function get_ip(){
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			return $ip;
	}	
	public function set_detail($id=0,$type='movie',$season=0,$episodes=0){

		//SET ZONE

		$DefaultIDImdb =false;
		// OFFER T1
		$t1=$this->CI->config->item('t1');
				  
		// OFFER T2		  
		$t2=$this->CI->config->item('t2');
				  
		// OFFER ITL		  
		$itl=$this->CI->config->item('itl');
				   
		//AFF LINK
		$url1 = 'http://watch.vid-id.me/aff_c?offer_id='.$t1['offer_id'].'&aff_id='.$t1['aff_id'].'&aff_sub='.$t1['aff_sub'].''; // 4,20
		$url2 = 'http://watch.vid-id.me/aff_c?offer_id='.$t2['offer_id'].'&aff_id='.$t2['aff_id'].'&aff_sub='.$t2['aff_sub'].''; // 6,24
		$urlItl = 'http://watch.vid-id.me/aff_c?offer_id='.$itl['offer_id'].'&aff_id='.$itl['aff_id'].'&aff_sub='.$itl['aff_sub'].''; // 2,22				   
		
		//URL Error
		$urlErrors = 'http://www.indocpa.com/';



		if(empty($this->CI->session->userdata('CountryCode'))){
			$CountryCodex = @file_get_contents('http://api.apigurus.com/iplocation/v1.8/locateip?key=SAKXG8M5UG6M7Y6ZP67Z&ip='.$this->get_ip().'&format=json');
			$CountryCodex1=json_decode($CountryCodex,true);
			$this->CI->session->set_userdata('CountryCode', @$CountryCodex1['geolocation_data']['country_code_iso3166alpha2']);
			$CountryCode=$this->CI->session->userdata('CountryCode');
		}else{
			$CountryCode=$this->CI->session->userdata('CountryCode');
		}

		switch ($CountryCode) {
			//URL 1 Australia, Canada, Germany, Italy, Spain, United Kingdom, United States, Sweden
			//      AU         CA      DE       IT     ES     UK              US             SE
			case "AU":
				$aff_link = $url1;
				break;
			case "CA":
				$aff_link = $url1;
				break;
			case "DE":
				$aff_link = $url1;
				break;
			case "IT":
				$aff_link = $url1;
				break;
			case "ES":
				$aff_link = $url1;
				break;
			case "UK":
				$aff_link = $url1;
				break;
			case "GB":
				$aff_link = $url1;
				break;
			case "US":
				$aff_link = $url1;
				break;
			case "SE":
				$aff_link = $url1;
				break;
				
				
			//URL 2   France Sweden United_Kingdom
			//        FR     SE     UK
			case "FR":
				$aff_link = $url2;
				break;
			//Stream4Stream 129
			case "SE":
				$aff_link = $url2;
				break;
			case "GB":
				$aff_link = $url2;
				break;
			case "UK":
				$aff_link = $url2;
				break;
				
			//URL 3   INTERNATIONAL
			default:
				$aff_link = $urlItl;
		}
		//FREE TRIAL DATE
		$TrialDate = 'Jul 22, 2015';
		$DateTrial = date('M d, Y', strtotime(''.$TrialDate.' days', strtotime(date('M d, Y'))));

		/*function FilterUrl($url=""){
			$parts = parse_url($url);
			if($parts['host']==$Domain){
				return true;
			}else{
				return false;
			}
		}*/
		//LINK VALID AFF
		$LinkValid = array('vid-id.me','play.vid-id.me','watch.vid-id.me','stream.vid-id.me','go.vid-id.org');

		$Linkurl1 = explode('/',$url1);
		$Linkurl2 = explode('/',$url2);
		$LinkurlItl = explode('/',$urlItl);

		if(!in_array($Linkurl1[2],$LinkValid)) {
			header('Location: '.$urlErrors);
		}elseif(!in_array($Linkurl2[2],$LinkValid)){
			header('Location: '.$urlErrors);	
		}elseif(!in_array($LinkurlItl[2],$LinkValid)){
			header('Location: '.$urlErrors);	
		}

		//GET ID
		if(!isset($_GET['id'])){
			if($DefaultIDImdb == FALSE){
				$imdbID = '1502712';
			}else{
				$imdbID = $DefaultIDImdb;
			}
		}else{
			$imdbID = $_GET['id'];
		}		
		

		//SET DETAIL
		$playerback=array('movie_back.png','20thFox.png','1280x720-6sr.jpg','paramount_intro_sample_by_icepony64-d88n81s.jpg','fox_video_2010_by_charmedpiper1973-d429owp.png.jpg');
		$ky=array_rand($playerback);
		$usmg=$playerback[$ky];
		$seasson=array();
				
		if(@$type=='tv' /*OR $season!=0 AND $episodes!=0*/ ){

			if($season!=0 AND $episodes!=0){
				$movies=$this->getEpisodeDb($id,$season,$episodes);
				$tvs=$this->getTVShowDb($id);
				$sess=$tvs->getSeasonob();
				
				unset($sess[0]);
				if(!empty($sess)){
					foreach($sess as $ises=>$dtssn){
						if(isset($dtssn->episode_count)){$spcnt=$dtssn->episode_count;}elseif(isset($dtssn['episode_count'])){$spcnt=$dtssn['episode_count'];}
						for($eps=1;$eps<=$spcnt;$eps++){
							$seasson[$ises][$eps]=$eps;
						}
					}		
				}		
				
				$backd=$this->getbackdtv($movies);
				$this->savehasilterms($tvs->getTitle(),$type,1);
				// file_get_contents(base_url().''.$type.'-tag/'.$tvs->getTitle().'');
			}else{
				$movies=$this->getTVShow($id);
				/*$numseason=$movies->getNumSeasons();
				for($ises=1;$ises<=$numseason;$ises++){
					$seassonlist=$this->getSeason($id,$ises);
					$seasson[$ises]=$seassonlist->getEpisodesdata();
				}
				$lastEpisodes=end(end($seasson));*/
				$backd=$this->getbackd($movies);
				$this->savehasilterms($movies->getTitle(),$type,1);
				// file_get_contents(base_url().''.$type.'-tag/'.$movies->getTitle().'');
			}
		
		}elseif(@$type=='movie'){
			
			$movies=$this->getMovieDbById($id);
			
			$backd=$this->getbackd($movies);
			$this->savehasilterms($movies->getTitle(),$type,1);
				// file_get_contents(base_url().''.$type.'-tag/'.$movies->getTitle().'');
		}else{
			$movies=$this->getMovieDbById($id);
			// pr($movies);die();
			$backd=$this->getbackd($movies);
			$this->savehasilterms($movies->getTitle(),$type,1);
				// file_get_contents(base_url().''.$type.'-tag/'.$movies->getTitle().'');
		}
		
		// $redirect_url='http://'.$domain_name.'/watch_download/'.$type.'/'.str_replace(' ','-',$movies->getTitle()); 
		
		  
		  $trailer=$movies->getTrailers();
		  // pr($trailer);die;
		  if(isset($trailer->youtube[0]->source)){$trail=$trailer->youtube[0]->source;}elseif(isset($trailer['youtube'][0]['source'])){$trail=$trailer['youtube'][0]['source'];}
	      if(isset($trail) && $trail!=''){
				$trailer='http://www.youtube.com/v/'.$trail;
		  }else{
		  //Backsound area
		  $Title=$movies->getTitle();
		  require_once (getcwd().'/application/libraries/youtubeapi/google-api-php-client/src/Google_Client.php');
		  require_once (getcwd().'/application/libraries/youtubeapi/google-api-php-client/src/contrib/Google_YouTubeService.php');

		  /* Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
		  Google APIs Console <http://code.google.com/apis/console#access>
		  Please ensure that you have enabled the YouTube Data API for your project. */
		  $DEVELOPER_KEY = 'AIzaSyAHA7MyBqL-v0iAUwAXUZ1Tpx-i4aYofys';

		  $client = new Google_Client();
		  $client->setDeveloperKey($DEVELOPER_KEY);

		  $youtube = new Google_YoutubeService($client);
			
		  try {
			$datavids = $youtube->search->listSearch('id,snippet', array(
			  'q' => "".str_replace(' ','+',$Title)."+Official+Trailer",
			  'maxResults' => 20,
			));

			$videos = '';
			$channels = '';
			$comparetitle=array();
			$title=$Title.' Official Trailer';
			
			foreach($datavids['items'] as $keyr=>$datavid){
				if(isset($datavid['id']['videoId'])){
					similar_text($title,$datavid['snippet']['title'],$percent);
					$comparetitle[$keyr]=$percent;	
				}
			}
			$mx=array_keys($comparetitle, max($comparetitle));
			$keymax=$mx[0];
		   } catch (Google_ServiceException $e) {
			$htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
			  htmlspecialchars($e->getMessage()));
		  } catch (Google_Exception $e) {
			$htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
			  htmlspecialchars($e->getMessage()));
		  }
			$trailer='http://www.youtube.com/v/'.$datavids['items'][$keymax]['id']['videoId'];
			// define('TRAILER', $trailer . "&vq=small");
		}
		
		return array('trailer'=>$trailer."&vq=small",'movies'=>$movies,'backd'=>$backd,'seasson'=>$seasson,'tvs'=>@$tvs,'aff_link'=>@$aff_link);
	}
	
	function generate_meta($setting=array()){
		//pr($setting);die;
		$out['domain']			=$setting['domain'];
		$out['webTitle']		=$setting['webTitle'];
		$out['metaDesc']		=$setting['metaDesc'];
		$out['metaKeywords']	=$setting['metaKeywords'];
		
		return $out;
		
	}
}
?>
