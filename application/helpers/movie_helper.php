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