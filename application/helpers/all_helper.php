<?php
if (!function_exists('get_meta')) {
	function get_meta($ident='')
	{
		
		$CI = & get_instance();
			
		$setting=$CI->session->userdata('domain');		
		switch($ident){

			case"title":	
				echo $setting['webTitle'];
			break;
			case"description":
				echo $setting['metaDesc'];
			break;
			case"keywords":
				echo $setting['metaKeywords'];
			break;
			case"single_title":
		
			break;
			case"single_description":
			
			break;
			case"single_keywords":
			
			break;
			
		}
	}
}