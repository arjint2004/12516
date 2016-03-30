<?php
/**
 * 	This class handles all the data you can get from a Movie
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 09/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */

class Movie extends TMDBObject {
	
	/** 
	 * 	Get the Movie's title
	 *
	 * 	@return string
	 */
	public function getImdbId() {
		$mdb=json_decode(file_get_contents('http://api.themoviedb.org/3/movie/'.$this->_data['id'].'?api_key='.$this->_data['api_key'].''));
		return $mdb->imdb_id;
	}
	
	public function getTitle() {
		return $this->_data['title'];
	}
	public function getdata() {
		return $this->_data;
	}	
	public function getrunTime() {
		return $this->_data['runtime'];
	}	
	public function getRating() {
		return $this->_data['popularity'];
	}		
	public function getBudget() {
		return $this->_data['budget'];
	}		
	public function getReleaseDate() {
		return $this->_data['release_date'];
	}		
	public function getimdb_id() {
		return str_replace('tt','',$this->_data['imdb_id']);
	}		
	public function getCrew() {
		
		$gnr='';
		$group=array();
		foreach ( $this->_data['credits']['crew'] as $value ) {
			$group[$value['name']] = $value;
		}
		foreach($group as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}		
	public function getCrewDirector() {
		
		$gnr='';
		$group=array();
		foreach ( $this->_data['credits']['crew'] as $value ) {
			if($value['job']=='Director'){
				$group[$value['name']] = $value;
			}
		}
		foreach($group as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}			
	public function getCast() {
		
		$gnr='';
		$group=array();
		foreach ( $this->_data['credits']['cast'] as $value ) {
			$group[$value['name']] = $value;
		}
		foreach($group as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}			
	public function getCastArray() {
		return $this->_data['credits']['cast'];
	}	
	public function getProduction() {
		$gnr='';
		foreach($this->_data['production_companies'] as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}	
	public function getGenre() {
		return $this->_data['genres'];
	}	
	public function getGenres() {
		$gnr='';
		foreach($this->_data['genres'] as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}	
	public function getProductionCountry() {
		$gnr='';
		foreach($this->_data['production_countries'] as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}	
	public function geLanguage() {
		$gnr='';
		foreach($this->_data['spoken_languages'] as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}

	/** 
	 * 	Get the Movie's tagline
	 *
	 * 	@return string
	 */
	public function getTagline() {
		return $this->_data['tagline'];
	}

	/** 
	 * 	Get the Movie's overview
	 *
	 * 	@return string
	 */
	public function getOverview() {
		return $this->_data['overview'];
	}

	/** 
	 * 	Get the Movie's Poster
	 *
	 * 	@return string
	 */
	public function getBackdrop() {
		return $this->_data['backdrop_path'];
	}
	public function getPoster() {
		return $this->_data['poster_path'];
	}

	/** 
	 * 	Get the Movie's vote average
	 *
	 * 	@return int
	 */
	public function getVoteAverage() {
		return $this->_data['vote_average'];
	}

	/** 
	 * 	Get the Movie's vote count
	 *
	 * 	@return int
	 */
	public function getVoteCount() {
		return $this->_data['vote_count'];
	}

	/** 
	 * 	Get the Movie's trailers
	 *
	 * 	@return array
	 */
	public function getTrailers() {

		if (empty($this->_data['trailers']) && isset($this->_tmdb)){
			$this->loadTrailer();
		}

		return $this->_data['trailers'];
	}

	/** 
	 * 	Get the Movie's trailer
	 *
	 * 	@return string|null returns null if no youtube link is available
	 */
	public function getTrailer() {
		$trailer=$this->getTrailers();
		
		return empty($trailer['youtube'][0]['source']) ? null : $trailer['youtube'][0]['source'];
	}

	//------------------------------------------------------------------------------
	// Load Variables
	//------------------------------------------------------------------------------

	/**
	 * 	Load the images of the Movie
	 *	Used in a Lazy load technique
	 */
	public function loadImages(){
		$this->_data['images'] = $this->_tmdb->getMovieInfo($this->getID(), 'images', false);
	}
	public function loadImage(){
		return $this->_data['images'];
	}

	/**
	 * 	Load the trailer of the Movie
	 *	Used in a Lazy load technique
	 */
	public function loadTrailer() {
		$this->_data['trailers'] = $this->_tmdb->getMovieInfo($this->getID(), 'trailers', false);
	}

	/**
	 * 	Load the casting of the Movie
	 *	Used in a Lazy load technique
	 */
	public function loadCasting(){
		$this->_data['casts'] = $this->_tmdb->getMovieInfo($this->getID(), 'casts', false);
	}

	/**
	 * 	Load the translations of the Movie
	 *	Used in a Lazy load technique
	 */
	public function loadTranslations(){
		$this->_data['translations'] = $this->_tmdb->getMovieInfo($this->getID(), 'translations', false);
	}
}
?>