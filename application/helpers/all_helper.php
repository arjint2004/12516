<?php
if (!function_exists('get_meta')) {
	function get_meta($ident='',$movies=array(),$type='')
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
			$x1= str_replace('[TITLE]',$movies->getTitle(),$setting['metaTitleSingle']);
			$x2= str_replace('[TYPE]',$type,$x1);
			echo $x2;
			break;
			case"single_description":
			$x1= str_replace('[TITLE]',$movies->getTitle(),$setting['metaDescSingle']);
			$x2= str_replace('[DESC]',substr(str_replace('"','',$movies->getOverview()),0,160),$x1);
			$x3= str_replace('[TYPE]',$type,$x2);
			echo $x3;
			break;
			case"single_keywords":
			if($type=='movie'){
				$x1= str_replace('[TITLE]',$movies->getTitle(),$setting['metaKeywordsSingle']);
				$x2= str_replace('[GENRE]',$movies->getGenres(),$x1);
				$x3= str_replace('[TYPE]',$type,$x2);
				echo $x3;	
			}else{
				$x1= str_replace('[TITLE]',$movies->getTitle(),$setting['metaKeywordsSingle']);
				$x2= str_replace('[GENRE]','',$x1);
				$x3= str_replace('[TYPE]',$type,$x2);
				echo $x3;	
			}
				
			break;
			
		}
	}
}