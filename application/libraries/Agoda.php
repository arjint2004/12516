<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
hotel_id
https://auth.indocpa.me/hotel/{hotel_id}

user info
https://auth.indocpa.me/user

star_rating
https://auth.indocpa.me/hotel/?star_rating=3

country
https://auth.indocpa.me/hotel/?country=india

city
https://auth.indocpa.me/hotel/?city=paris

rates_from
https://auth.indocpa.me/hotel/?rates_from=100

max_rate
https://auth.indocpa.me/hotel/?max_rate=100

min_rate
https://auth.indocpa.me/hotel/?min_rate=100

recentlyBooked
https://auth.indocpa.me/hotel/recentlyBooked/{city_id}
*/

class Agoda extends CI_Controller{
	
	public $AuthToken='';
	
	public function __construct($AuthToken) {
		$this->AuthToken=$AuthToken['AuthToken'];
		
	}
	
	function getAgoda($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$headers = array();
		$headers[] = 'Authorization: Bearer ' . $this->AuthToken;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$server_output = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		return $server_output;
	}
	
}
?>
