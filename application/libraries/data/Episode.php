<?php
/**
 * 	This class handles all the data you can get from a Episode
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */

class Episode extends TMDBObject {

    /**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the Episode
     */
    public function __construct($data, $idTVShow) {
        parent::__construct( $data );
        $this->_data['tvshow_id'] = $idTVShow;
    }
	public function getCastArray() {
		return $this->_data['credits']['cast'];
	}
	public function getdata() {
		return $this->_data;
	}
	public function getRating() {
		return $this->_data['popularity'];
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
    //------------------------------------------------------------------------------
    // Get Variables
    //------------------------------------------------------------------------------

    /**
     *  Get the Season's TVShow id
     *
     *  @return int
     */
    public function get_data() {
        return $this->_data;
    }
    public function getTVShowID() {
        return $this->_data['tvshow_id'];
    }

    /**
     *  Get the Season's number
     *
     *  @return int
     */
    public function getSeasonNumber() {
        return $this->_data['season_number'];
    }
    public function getTrailers() {
		$trailer['youtube'][0]['source']='xxx';
        return $trailer;
    }

    /**
     * 	Get the Episode's number
     *
     * 	@return string
     */
    public function getEpisodeNumber() {
        return $this->_data['episode_number'];
    }

    /**
     *  Get the Episode's Overview
     *
     *  @return string
     */
    public function getOverview() {
        return $this->_data['overview'];
    }

    /**
     * 	Get the Seasons's Still
     *
     * 	@return string
     */
    public function getStill() {
        return $this->_data['still_path'];
    }

    /**
     * 	Get the Season's AirDate
     *
     * 	@return string
     */
    public function getAirDate() {
        return $this->_data['air_date'];
    }
    public function getTitle() {
        return $this->_data['name'];
    }
    public function getPoster() {
        return $this->_data['still_path'];
    }
    public function getTagline() {
        return $this->_data['name'];
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
    public function getStar() {
        return $this->_data['guest_stars'];
    }
    /**
     * 	Get the Episode's vote average
     *
     * 	@return int
     */
    public function getVoteAverage() {
        return $this->_data['vote_average'];
    }

    /**
     * 	Get the Episode's vote count
     *
     * 	@return int
     */
    public function getVoteCount() {
        return $this->_data['vote_count'];
    }

    //------------------------------------------------------------------------------
    // Load
    //------------------------------------------------------------------------------

    /**
     *  Reload the content of this class.<br>
     *  Could be used to update or complete the information.
     *  
     *  @param TMDB $tmdb An instance of the API handler, necesary to make the API call.
     */
    public function reload($tmdb) {
        $tmdb->getEpisode($this->getTVShowID(), $this->getSeasonNumber(), $this->getEpisodeNumber);
    }
}
?>