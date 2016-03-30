<?php
if (!function_exists('checkExternalFile')) {
	function checkExternalFile($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_exec($ch);
		$retCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		return $retCode;
	}
}
if (!function_exists('make_genre')) {
	function make_genre($genre=array())
	{
		$gnr='';
		foreach($genre as $gn){
			$gnr .=$gn['name'].', ';
		}
		return $gnr;
	}
}
if (!function_exists('make_url_detail')) {
	function make_url_detail($id='',$str='',$type='movie',$season=1,$episodes=1)
	{
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
		if($type=='movie'){
			$url=base_url('movies/play/'.$id.'/'.str_replace(' ','-',$clean).'.html');
		}elseif($type=='tv'){
			$url=base_url('tv/play/'.$id.'/'.$season.'/'.$episodes.'/'.str_replace(' ','-',$clean).'.html');
		}
		return $url;
	}
}
if (!function_exists('imgreate')) {
	function imgreate($rtxc)
		{
			$rtx=$rtxc/1.6;
			$img='';
			for($i=0;$i<5;$i++){
				if($i<$rtx){
					$mg='star-on.svg';
				}else{
					$mg='star-off.svg';
				}
				$img .='<img src="'.base_url().'assets/themes/'.THEMESET.'/images/rate/'.$mg.'" alt="1" title="bad">&nbsp;';
			}
			return $img;
		}
}
if (!function_exists('getgenrebyid')) {
	function getgenrebyid($id=array())
	{
		$grnout='';
		$CI = & get_instance();
		$genre=$CI->session->userdata('genre');
		foreach($id as $idgen){
			
			
			if(isset($idgen->id)){
				$grnout .=$genre[$idgen->id] .' | ';
			}elseif(isset($genre[$idgen])){
				$grnout .=$genre[$idgen] .' | ';
			}
		}
		
		return substr($grnout,0,-2);
	}
}
if (!function_exists('getgenretv')) {
	function getgenretv($id=array())
	{
		$grnout='';
		$CI = & get_instance();
		$genre=$CI->session->userdata('genre');
		
		foreach($id as $idgen){
			if(isset($genre[$idgen->id])){
				$grnout .=$genre[$idgen->id] .' | ';
			}
		}
		
		return substr($grnout,0,-2);
	}
}