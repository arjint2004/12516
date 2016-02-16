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
			$grnout .=$genre[$idgen] .' | ';
		}
		
		return $grnout;
	}
}