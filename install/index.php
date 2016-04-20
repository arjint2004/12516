<?php
if(isset($_GET['allowinstall']) && $_GET['allowinstall']=="9d0fa3bb01d558aa8fdeb18fc0557622"){
function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
			if (isset($_SERVER['HTTP_HOST'])) {
				$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
				$hostname = $_SERVER['HTTP_HOST'];
				$dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

				$core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
				$core = $core[0];

				$tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
				$end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
				$base_url = sprintf( $tmplt, $http, $hostname, $end );
			}
			else $base_url = 'http://localhost/';

			if ($parse) {
				$base_url = parse_url($base_url);
				if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
			}

			return $base_url;
}



$rootPath = dirname(__FILE__);
	
$rootPathDb=str_replace("install","",$rootPath)."application/config/database.php";
$rootPathAgc=str_replace("install","",$rootPath)."application/config/agc.php";

if( isset($_POST['hostname'] ) && isset($_POST['username'] ) && isset($_POST['password'] ) && isset($_POST['database'] )){

// print_r($rootPathDb);
// print_r($rootPathAgc); die;

$servername = $_POST['hostname'];
$username = $_POST['username'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	mysqli_select_db($conn,$_POST['database']);
    // sql to create table
	$sql1 = "CREATE TABLE IF NOT EXISTS `movie_data` (
			`id` int(15) NOT NULL,
			  `id_tmdb` int(15) NOT NULL,
			  `parent_id_tmdb` int(12) NOT NULL,
			  `id_genre` varchar(200) NOT NULL,
			  `seasons` int(5) NOT NULL,
			  `episodes` int(5) NOT NULL,
			  `keywords` text NOT NULL,
			  `original` longtext NOT NULL,
			  `date` datetime NOT NULL,
			  `type` enum('movie','tv') NOT NULL
			) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;";
	$sql2 = "CREATE TABLE IF NOT EXISTS `movie_terms` (
			`k_ID` int(11) NOT NULL,
			  `k_name` varchar(255) NOT NULL,
			  `k_slug` varchar(255) NOT NULL,
			  `k_date` datetime NOT NULL,
			  `k_count_view` varchar(10) NOT NULL,
			  `status` int(1) NOT NULL,
			  `date` datetime NOT NULL,
			  `type` enum('tv','movie') NOT NULL,
			  `source` enum('key_search','keywordinject') NOT NULL
			) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;";
	$sql3 = "ALTER TABLE `movie_data`
			ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_tmdb` (`id_tmdb`);";
	$sql4 = "
			ALTER TABLE `movie_terms`
			ADD PRIMARY KEY (`k_ID`), ADD KEY `k_date` (`k_date`), ADD FULLTEXT KEY `k_name` (`k_name`);";
	$sql5 = "ALTER TABLE `movie_data`
			MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;";
	$sql6 = "ALTER TABLE `movie_terms`
			MODIFY `k_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;";

	if ($conn->query($sql1) === TRUE) {
		// echo "Table MyGuests created successfully";
	} else {
		// echo "Error creating table: " . $conn->error;
	}
	if ($conn->query($sql2) === TRUE) {
		// echo "Table MyGuests created successfully";
	} else {
		// echo "Error creating table: " . $conn->error;
	}
	if ($conn->query($sql3) === TRUE) {
		// echo "Table MyGuests created successfully";
	} else {
		// echo "Error creating table: " . $conn->error;
	}
	if ($conn->query($sql4) === TRUE) {
		// echo "Table MyGuests created successfully";
	} else {
		// echo "Error creating table: " . $conn->error;
	}
	if ($conn->query($sql5) === TRUE) {
		// echo "Table MyGuests created successfully";
	} else {
		// echo "Error creating table: " . $conn->error;
	}
	if ($conn->query($sql6) === TRUE) {
		// echo "Table MyGuests created successfully";
	} else {
		// echo "Error creating table: " . $conn->error;
	}


$conn->close();


$settingdb='<?php
defined(\'BASEPATH\') OR exit(\'No direct script access allowed\');

$active_group = \'default\';
$query_builder = TRUE;

$db[\'default\'] = array(
	\'dsn\'	=> \'\',
	\'hostname\' => \''.$_POST['hostname'].'\',
	\'username\' => \''.$_POST['username'].'\',
	\'password\' => \''.$_POST['password'].'\',
	\'database\' => \''.$_POST['database'].'\',

	\'dbdriver\' => \'mysqli\',
	\'dbprefix\' => \'\',
	\'pconnect\' => FALSE,
	\'db_debug\' => (ENVIRONMENT !== \'production\'),
	\'cache_on\' => FALSE,
	\'cachedir\' => \'\',
	\'char_set\' => \'utf8\',
	\'dbcollat\' => \'utf8_general_ci\',
	\'swap_pre\' => \'\',
	\'encrypt\' => FALSE,
	\'compress\' => FALSE,
	\'stricton\' => FALSE,
	\'failover\' => array(),
	\'save_queries\' => TRUE
);';
file_put_contents($rootPathDb,$settingdb);
$settingagc='<?php
//config domain
$config[\'domain\'] =array(
							\'aliexpress\'=>array(
								\'domain\'=>\'aliexpress.com\',
								\'database\'=>\'satucom\',
								\'offer\'=>\'aliexpress\',
								\'theme\'=>\'satucom\',
								\'status\'=>0 // 1 adalah enable 
							),
							\'alibaba\'=>array(
								\'domain\'=>\'alibaba.com\',
								\'database\'=>\'dua\',
								\'offer\'=>\'alibaba\',
								\'theme\'=>\'satucom\',
								\'status\'=>0 //0 adalah disable
							),
							\'agoda\'=>array(
								\'domain\'=>\'agoda.com\',
								\'database\'=>\'agoda\',
								\'offer\'=>\'agoda\',
								\'theme\'=>\'satucom\',
								\'status\'=>0 //0 adalah disable
							),
							\'movie\'=>array(
								\'domain\'=>\''.$_POST['namadomain'].'\',
								\'database\'=>\'movie\',
								\'offer\'=>\'movie\',
								\'theme\'=>\'mieayam\',
								\'status\'=>1 //0 adalah disable
							)
						);
						
$config[\'t1\']=array(\'offer_id\'=>\''.$_POST['t1'].'\',
				  \'aff_id\'=>\''.$_POST['affid'].'\',
				  \'aff_sub\'=>\''.$_POST['subid'].'\');
$config[\'t2\']=array(\'offer_id\'=>\''.$_POST['t2'].'\',
				  \'aff_id\'=>\''.$_POST['affid'].'\',
				  \'aff_sub\'=>\''.$_POST['subid'].'\');
$config[\'itl\']=array(\'offer_id\'=>\''.$_POST['itl'].'\',
				   \'aff_id\'=>\''.$_POST['affid'].'\',
				   \'aff_sub\'=>\''.$_POST['subid'].'\');



		
$config[\'useradmin\']=\'admin\';
$config[\'AuthToken\']=\'0030b064-d0c1-4090-bd00-0a49c9e94151\';
$config[\'passwordadmin\']=\'9d0fa3bb01d558aa8fdeb18fc0557622\';';

file_put_contents($rootPathAgc,$settingagc);

header('location:'.str_replace('install/','',base_url()).'/welcome/start');
}
echo fileperms($rootPathDb);
// echo fileperms($rootPathAgc);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Install</title>

<link href="form_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Instalasi AGC MOVIE IndoCPA</h3>
<form action="" method="post" class="smart-green">
    <h1>Set writable file
        <span>Pastikan permission file dibawah writable (set chmod 777)</span>
    </h1>
    <label>
        <span>AGC config file :</span>
        <input readonly type="text"  value="application/config/agc.php" />
		<span>Database config file :</span>
        <input readonly type="text"  value="application/config/database.php" />
    </label>
 
	<br />
	<br />
	<br />
    <h1>Database Setting
        <span>Buat Database kemudian masukkan detail settingnya</span>
    </h1>
    <label>
        <span>Hostname Database :</span>
        <input id="name" type="text" name="hostname" placeholder="Database Host" />
    </label>
    <label>
        <span>Username Database :</span>
        <input id="name" type="text" name="username" placeholder="Username database" />
    </label>
    <label>
        <span>Password Database :</span>
        <input id="name" type="text" name="password" placeholder="Password database" />
    </label>
    <label>
        <span>Nama Database :</span>
        <input id="name" type="text" name="database" placeholder="Nama Database" />
    </label>
 
	<br />
	<br />
	<br />
	
    <h1>Nama Domain & Link Affiliate
        <span>Masukkan Link Affiliate & nama domian kamu. Link Affiliatebisa didapatkan di dashboard Offer IndoCPA</span>
    </h1>
    <label>
        <span>Nama Domain :</span>
        <input id="name" type="text" name="namadomain" placeholder="Nama Domain" />
    </label>
    <label>
        <span>Sub ID :</span>
        <input id="name" type="text" name="subid" placeholder="Sub Id" />
    </label>
    <label>
        <span>Affiliate ID :</span>
        <input id="name" type="text" name="affid" placeholder="Affiliate ID / ID tracking" />
    </label>
    <label>
        <span>Offer ID T1 :</span>
        <input id="name" type="text" name="t1" placeholder="Offer ID T1" />
    </label>
    <label>
        <span>Offer ID T2 :</span>
        <input id="name" type="text" name="t2" placeholder="Offer ID T2" />
    </label>
    <label>
        <span>Offer ID ITL :</span>
        <input id="name" type="text" name="itl" placeholder="Offer ID ITL (International)" />
    </label>
    
   
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Install" style="cursor:pointer;" /> 
    </label>    
</form>

</body>
</html>
<? } ?>