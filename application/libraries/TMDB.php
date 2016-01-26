<?php
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

class TMDB{

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

	private $cinmovie=0;
	/**
	 * 	Construct Class
	 *
	 * 	@param string $apikey The API key token
	 * 	@param string $lang The languaje to work with, default is english
	 */
	public function __construct($apikey, $lang = 'en', $debug = false) {

		// Sets the API key
		$this->setApikey($apikey);
	
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
	private function setApikey($apikey) {
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
		$this->_configuration = new Configuration($this->_call('configuration', ''));

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
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/genre/movie/list?api_key=".$this->getApikey()."&language=".$this->getLang()."
		");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);

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
	public function getSimilar($id=0,$type='movie'){
		//pr($page);die();
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/".$type."/".$id."/similar?api_key=".$this->getApikey()."&language=".$this->getLang()."");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Accept: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($response);
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
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/popular?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
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
	public function getMoviePopular($page=1){
		//pr($page);die();
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/popular?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
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
	public function getMovieNowPlay($page=1){
		//pr($page);die();
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/now_playing?api_key=".$this->getApikey()."&language=".$this->getLang()."&page=".$page."
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
		$hc=mysql_query($get_data_sqlc);
		$resc=mysql_fetch_assoc($hc);
		$out['total_data']=$resc['c'];
		
		$get_data_sql="SELECT original FROM movie_data s WHERE id_genre  LIKE '%".$id."' AND type='movie' LIMIT ".$start.",".$per_page."";					
		$h=mysql_query($get_data_sql);
		$data=array();
		while($res=mysql_fetch_assoc($h)){
			$data[]=unserialize($res['original']);
		}
		$out['results']=$data;	
		return $out;
	}
	public function getMovieDb($page=1){
		
		//$page=$page-1;
		$per_page=10;
		$start=$page*$per_page;
		
		$get_data_sql="SELECT * FROM movie_data LIMIT ".$start.",".$per_page."";	
		 echo $get_data_sql;
		
		$h=mysql_query($get_data_sql);
		$data=array();
		while($res=mysql_fetch_assoc($h)){
			$data[]=$res;
		}
		// $out['results']=$data;	
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
	/**
	 * 	Makes the call to the API and retrieves the data as a JSON
	 *
	 * 	@param string $action	API specific function name for in the URL
	 * 	@param string $appendToResponse	The extra append of the request
	 * 	@return string
	 */
	private function _call($action, $appendToResponse){

		$url = self::_API_URL_.$action .'?api_key='. $this->getApikey() .'&language='. $this->getLang() .'&'.$appendToResponse;
		// echo $action.'<br>';
		if($action=='tv/'){
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

		curl_close($ch);

		return (array) json_decode(($results), true);
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
		$movieTitle=str_replace(" ","+",$movieTitle);
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
							
		$get_data_sql="SELECT original FROM movie_data WHERE  type='".$type."'  ORDER BY RAND() LIMIT 52";
		// echo $get_data_sql.'<br />';
		$h=mysql_query($get_data_sql);
		$data=array();
		while($res=mysql_fetch_assoc($h)){
			$data[]=unserialize($res['original']);
		}
		return $data;
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
	private function savehasilterms($terms='',$type='movie',$page=1){
		$results=$this->searches($terms,$type,$page);
		foreach($results->results as $datasave){
			$imgurl=$datasave->poster_path;
			
			if($this->cinmovie<60){
				//$keywords='';
				if($type=='movie'){
					//$keywords=$this->getKeywordsmovie($datasave->id).' '.$datasave->original_title.' '.$terms;
					 $keywords=$datasave->original_title.' '.$terms;
					$sqlinsert="INSERT INTO movie_data SET id_tmdb='".$datasave->id."', id_genre='".implode(' ',$datasave->genre_ids)."', original='".mysql_real_escape_string(serialize($datasave))."', type='".$type."', keywords='".mysql_real_escape_string($keywords)."'";
				}elseif($type=='tv'){
					//$keywords=$this->getKeywordsmovie($datasave->id).' '.$datasave->name.' '.$terms;
					$keywords=$datasave->name.' '.$terms;
					$sqlinsert="INSERT INTO movie_data SET id_tmdb='".$datasave->id."', id_genre='".implode(' ',$datasave->genre_ids)."', original='".mysql_real_escape_string(serialize($datasave))."', type='".$type."', keywords='".mysql_real_escape_string($keywords)."'";			
				}
			 
				mysql_query($sqlinsert);
			}
			$this->cinmovie++;
		}
		$this->cinmovie=0;
		return $results->total_pages;
	}
	public function getDataByTerm($terms='',$type='movie'){
		$this->savetermsnofile($terms,$type);
		$like='';
		$terms=str_replace('.html','',$terms);
		if(empty($data)){
			$pecahkey=explode('-',$terms);
			// pr($pecahkey);die();
			foreach($pecahkey as $terms2){
				if(strlen($terms2)>=3){
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
			 $like=substr($like,0,-3).'';
			$get_data_sql="SELECT * FROM movie_data s WHERE (".$like.") AND type='".$type."' GROUP BY s.id";
							
			// $get_data_sql="SELECT original FROM movie_data WHERE keywords LIKE '%".str_replace('-',' ',$terms)."%' AND type='".$type."' ORDER BY RAND() LIMIT 30";
			// echo $get_data_sql.'<br />';
			$h=mysql_query($get_data_sql);
			$data=array();
			while($res=mysql_fetch_assoc($h)){
				$data[]=unserialize($res['original']);
			}			
		}
		
		

	    
		return $data;
	}
	
	public function getterms($type='movie'){
		$get_data_sql="SELECT * FROM movie_terms WHERE type='".$type."' ORDER BY RAND() LIMIT 30";
			  // echo $get_data_sql.'<br />';
			$h=mysql_query($get_data_sql);
			$data=array();
			while($res=mysql_fetch_array($h)){
				$data[]=$res;
			}	
			return $data;
	}
	public function savetermsnofile($keywdata='',$type='movie'){
		$slug=str_replace(' ','-',$keywdata).'.html';
		if($keywdata!='' && $this->cekexistterms($slug,$type)==0){
		$sql="INSERT INTO movie_terms SET k_name='".mysql_real_escape_string($keywdata)."', k_slug='".mysql_real_escape_string($slug)."', 	k_date='".date('Y-m-d H:i:s')."', 	k_count_view='0',type='".$type."',source='key_search'";
		// echo $sql;
		return mysql_query($sql);
		}else{
			return false;
		}
	}
	private function cekexistterms($slug='',$type='movie'){
		$get_data_sql="SELECT count(*) as c FROM movie_terms  WHERE k_slug IN('".$slug."') AND type='".$type."'";
		// echo $get_data_sql;
		$h=mysql_query($get_data_sql);
		$res=mysql_fetch_assoc($h);
		return $res['c'];
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
					$sql="INSERT INTO movie_terms SET k_name='".mysql_real_escape_string($keywdata)."', k_slug='".mysql_real_escape_string($slug)."', 	k_date='".date('Y-m-d H:i:s')."', 	k_count_view='0',type='".$type."',source='keywordinject'";
					mysql_query($sql);
					// echo $sql;
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
		if(isset($_GET['s']) && strpos($_SERVER['REQUEST_URI'],'search.php')){
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
	
}
?>
