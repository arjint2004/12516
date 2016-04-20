<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends Ci_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
	}

	public function sitemaps($namasitemap='')
	{
		$datacount=$this->db->query("SELECT count(*) as jml  FROM movie_data")->result_array();
		if($namasitemap==''){
			 $jumlah_sitemap=$datacount[0]['jml']/5000;
			//$jumlah_sitemap=150000/5000;
			if($jumlah_sitemap<1) $jumlah_sitemap=1;

			
			header( 'Content-Type: application/xml' );			
			echo '<?xml version="1.0" encoding="utf-8"?>
			<?xml-stylesheet type="text/xsl" href="'.base_url().'assets/xml-sitemap.xsl"?>
			<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n';
				for($i=1;$i<=$jumlah_sitemap;$i++){
					$tanggal=explode(' ',date('Y-m-d H:i:s'));
					$day=explode('-',$tanggal[0]);
					$time=explode(':',$tanggal[1]);
					$dt=date("c", mktime($time[0], $time[1], $time[2], $day[1], $day[2], $day[0]));
					$url=base_url('sitemaps/sitemap_'.$i.'_.xml');
					echo '<url>
						<loc>'.$url.'</loc>
						<lastmod>'.$dt.'</lastmod>
						<changefreq>daily</changefreq>
						<priority>1</priority>
					</url>\n';
				}
				foreach($data as $y=>$datasitemap){	
					$tanggal=explode(' ',$datasitemap['date']);
					$day=explode('-',$tanggal[0]);
					$time=explode(':',$tanggal[1]);
					$dt=date("c", mktime($time[0], $time[1], $time[2], $day[1], $day[2], $day[0]));
					
					//make url
					if($datasitemap['type']=='movie'){
						$url=make_url_detail($datasitemap['id_tmdb'],$datasitemap['keywords'],'movie');
					}elseif($datasitemap['type']=='tv'){
						if($datasitemap['parent_id_tmdb']==0){$id_tmdb=$datasitemap['id_tmdb'];}elseif($datasitemap['parent_id_tmdb']!=0){$id_tmdb=$datasitemap['parent_id_tmdb'];}
						$url=make_url_detail($id_tmdb,$datasitemap['keywords'],'tv');
					}
					echo '<url>
						<loc>'.$url.'</loc>
						<lastmod>'.$dt.'</lastmod>
						<changefreq>daily</changefreq>
						<priority>1</priority>
					</url>\n';
				}
			echo '</urlset>';
			
		}else{
			$pgx=explode('_',$namasitemap);
			$pg=$pgx[1];
			$perpage=5000;
			$start=($perpage*$pg)-$perpage;
			$data=$this->db->query("SELECT id, 	id_tmdb, parent_id_tmdb, seasons, episodes, keywords,date, type 	FROM movie_data LIMIT ".$start.",".$perpage."")->result_array();


			header( 'Content-Type: application/xml' );			
			echo '<?xml version="1.0" encoding="utf-8"?>
			<?xml-stylesheet type="text/xsl" href="'.base_url().'assets/xml-sitemap.xsl"?>
			<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n';
				foreach($data as $y=>$datasitemap){	
					$tanggal=explode(' ',$datasitemap['date']);
					$day=explode('-',$tanggal[0]);
					$time=explode(':',$tanggal[1]);
					$dt=date("c", mktime($time[0], $time[1], $time[2], $day[1], $day[2], $day[0]));
					
					//make url
					if($datasitemap['type']=='movie'){
						$url=make_url_detail($datasitemap['id_tmdb'],$datasitemap['keywords'],'movie');
					}elseif($datasitemap['type']=='tv'){
						if($datasitemap['parent_id_tmdb']==0){$id_tmdb=$datasitemap['id_tmdb'];}elseif($datasitemap['parent_id_tmdb']!=0){$id_tmdb=$datasitemap['parent_id_tmdb'];}
						$url=make_url_detail($id_tmdb,$datasitemap['keywords'],'tv');
					}
					echo '<url>
						<loc>'.$url.'</loc>
						<lastmod>'.$dt.'</lastmod>
						<changefreq>daily</changefreq>
						<priority>1</priority>
					</url>\n';
				}
			echo '</urlset>';
		}
	}
}