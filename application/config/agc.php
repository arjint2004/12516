<?php
//config domain
$config['domain'] =array(
							'movie'=>array(
								/* Nama Domain */
								'domain'=>'http://webdevel/indoCPA/agc_movie_ci/trunk/',
								/* Nama Database */
								'database'=>'movie',
								/* Offer indocpa yang digunakan */
								'offer'=>'movie',
								/* nama template yang aktif */
								'theme'=>'bakso',
								/* Status AGC Yang Aktif */
								'status'=>1,
								/* suffix permalink: ".html", ".asp", ".discount", ".promo", dan lain-lain */
								'suffPerm' => '.html',
								/* identify website */
								'webTitle' => 'Watch Online or download Full Movie',
								'metaDesc' => 'Best Movie, You can download or watch online popular movies and TV series',
								'metaKeywords' => 'Popular Movie, Download, Watch Online, Action, Drama, Thriller, Commedy ',
								/* format <title> tag. [TITLE] adalah tempat di mana judul akan muncul */
								'metaTitleSingle' => 'Best and popular [TYPE] [TITLE]',
								/* format <meta name="description" content=""> tag. [TITLE] adalah tempat di mana nama produk/keyword akan muncul */
								'metaDescSingle' => 'Get popular [TYPE] [TITLE] free. [DESC]',
								/* format <meta name="keywords" content=""> tag. [TITLE] adalah tempat di mana nama produk/keyword akan muncul */
								'metaKeywordsSingle' => 'Watch [TYPE], [TITLE] Free download ',
								/* META Google Webmaster */
								'metaGoogle' => '',
								/* Histats Source Code */
								'histats' => ''
							)
						);
						
$config['email_contact']='cs@domainname.com';
$config['AuthToken']='13ef8ed8-7a95-4409-b3cc-081a0908bdcb';
		
// OFFER 1 Movie C - US						
$config['t1']=array('offer_id'=>'77',
				    'aff_sub'=>'bendood');
				  
// OFFER 2 Movie C - AU/CA/DE/ES/UK					  
$config['t2']=array('offer_id'=>'89',
				    'aff_sub'=>'bendood');
				  
// OFFER 3 Movie C - FR 					  
$config['t3']=array('offer_id'=>'81',
				     'aff_sub'=>'bendood');
				   
// OFFER 4 Movie C - In'tl			   
$config['t4']=array('offer_id'=>'83',
				    'aff_sub'=>'bendood');
	

// $config['TrialDate']='Jul 22, 2015';
// $config['useradmin']='admin';
// $config['passwordadmin']='9d0fa3bb01d558aa8fdeb18fc0557622';