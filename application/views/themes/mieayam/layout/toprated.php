<div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">TOp Rated Movie</div>
                 <div class="col-sm-12 change--col">
                     <? 
						 // pr($toprated);die();
						foreach($toprated as $dtatop){
					 	$imgurl=$this->tmdb->getImageURL('w300') . $dtatop->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						
						if($dtatop->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
						
					 ?>
					 <div class="movie-beta__item ">
                        <img alt='' src="<?php echo $imgurl;?>">
                         <span class="best-rate"><?php echo round($dtatop->vote_average,1);?></span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted"><?php echo $dtatop->original_title;?></span></li>
                             <li>
                                <p class="movie__time"><?php echo $dtatop->release_date;?></p>
                                <p><?=getgenrebyid($dtatop->genre_ids);?></p>
                                <!--<p>38 comments</p>-->
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
					 <? } ?>
                 </div>
            </div>