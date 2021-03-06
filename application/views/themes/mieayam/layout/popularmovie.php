			<?php
			if(empty($this->session->userdata('popularmovie'))){
				// $this->session->set_userdata('popularmovie', $this->tmdb->getMovieTop_rated(rand(1,10)));
				$this->session->set_userdata('popularmovie', $this->tmdb->getMoviePopular(rand(1,10)));
				$popularmovie=$this->session->userdata('popularmovie');
			}else{
				$popularmovie=$this->session->userdata('popularmovie');
			}
			$popularmovie=$popularmovie->results;	
			shuffle($popularmovie);
			shuffle($popularmovie);
			$popularmovie=array($popularmovie[1],$popularmovie[2],$popularmovie[3],$popularmovie[4],$popularmovie[5],$popularmovie[6]);
			?>
<div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Popular Movie</div>
                 <div class="col-sm-12 change--col">
                     <?php
						  // pr($popularmovie);
						foreach($popularmovie as $dtatop){
					 	$imgurl=$this->tmdb->getImageURL('w154') . $dtatop->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						
						if($dtatop->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
						
					 ?>
					 <div class="movie-beta__item ">
                        <img alt='<?php echo $dtatop->original_title;?>' src="<?php echo $imgurl;?>" width="100%">
                         <span class="best-rate"><?php echo round($dtatop->vote_average,1);?></span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted"><?php echo $dtatop->original_title;?></span></li>
                             <li>
                                <p class="movie__time"><?php echo $dtatop->release_date;?></p>
                                <p><?php echo getgenrebyid($dtatop->genre_ids);?></p>
                                <!--<p>38 comments</p>-->
                             </li>
                             <li class="last-block">
                                 <a href="<?php echo make_url_detail($dtatop->id,$dtatop->original_title,'movie');?>" class="slide__link"  title="<?php echo $dtatop->original_title;?>" >more</a>
                             </li>
                         </ul>
                     </div>
					 <?php } ?>
                 </div>
            </div>