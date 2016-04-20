<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Ci_Controller {

	private $zipfile=WEBROOT."assets/update/update.zip";
	private $extractPath=WEBROOT.'update';
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	private function unzip()
	{
		/* Open the Zip file */
		$zipFile = $this->zipfile; // Local Zip File Path
		$zip = new ZipArchive;
		if($zip->open($zipFile) != "true"){
		 echo "Error :- Unable to open the Zip File";
		} 
		/* Extract Zip File */
		$zip->extractTo($this->extractPath);
		$zip->close();		
	}
	public function index($tokeupdate='')
	{
		if($tokeupdate='9d0fa3bb01d558aa8fdeb18fc0557622'){
			$url = "http://www.ourcinema.us/update.zip";
			$zipFile = $this->zipfile; // Local Zip File Path
			$zipResource = fopen($zipFile, "w");
			// Get The Zip File From Server
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_FAILONERROR, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_AUTOREFERER, true);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 120);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
			curl_setopt($ch, CURLOPT_FILE, $zipResource);
			$page = curl_exec($ch);
			if(!$page) {
			 echo "Error :- ".curl_error($ch);
			}
			curl_close($ch);
			$this->unzip();
		}
	}
}