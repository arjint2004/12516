<?php
//config domain
$config['domain'] =array(
							'aliexpress.com'=>array(
								'domain'=>'aliexpress.com',
								'database'=>'satucom',
								'offer'=>'aliexpress',
								'theme'=>'satucom',
								'status'=>0 // 1 adalah enable 
							),
							'alibaba.com'=>array(
								'domain'=>'alibaba.com',
								'database'=>'dua',
								'offer'=>'alibaba',
								'theme'=>'satucom',
								'status'=>0 //0 adalah disable
							),
							'agoda.com'=>array(
								'domain'=>'agoda.com',
								'database'=>'agoda',
								'offer'=>'agoda',
								'theme'=>'satucom',
								'status'=>0 //0 adalah disable
							),
							'movie.com'=>array(
								'domain'=>'localhost/indocpa/agc_tmdb_ci/trunk/',
								'database'=>'movie',
								'offer'=>'movie',
								'theme'=>'mieayam',
								'status'=>1 //0 adalah disable
							)
						);
						
$config['t1']=array('offer_id'=>'20',
				  'aff_id'=>'1680',
				  'aff_sub'=>'arjint');
$config['t2']=array('offer_id'=>'24',
				  'aff_id'=>'1680',
				  'aff_sub'=>'arjint');
$config['itl']=array('offer_id'=>'22',
				   'aff_id'=>'1680',
				   'aff_sub'=>'arjint');



		
$config['useradmin']='admin';
$config['AuthToken']='0030b064-d0c1-4090-bd00-0a49c9e94151';
$config['passwordadmin']='9d0fa3bb01d558aa8fdeb18fc0557622';