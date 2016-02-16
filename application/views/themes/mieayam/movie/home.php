					
                    
					<h2 id='target' class="page-heading heading--outcontainer">Movies</h2>
					<?php 
					 // pr($movie['results']);
					$xx=1;
					$ix=0;
					foreach($movie['results'] as $kmovie=>$datamovie){
						if(!empty($datamovie) && $datamovie->poster_path!=''){
						if($ix%2==0){
							$xx++;
						}
						// echo $datamovie->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w300') . $datamovie->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datamovie->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<? if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                        <img alt='' src="<?php echo $imgurl; ?>">
                                    </a>
                                </div>
								<? $rnd=rand(1,50)/10;?>
                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title"><?php echo $datamovie->original_title;?></a>

                                    <p class="movie__time"><?php echo $datamovie->release_date;?></p>

                                    <p class="movie__option"><?=getgenrebyid($datamovie->genre_ids);?></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score" style="cursor: pointer; width: 130px;">
											<?=imgreate($datamovie->vote_average);?>
										</div>
                                        <span class="movie__rating"><?php echo round($datamovie->vote_average,1);?></span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->
					<?php $ix++;} } ?>
					
					<br style="clear:both;"/>
					<h2  id='target' class="page-heading heading--outcontainer">TV Series</h2>
					<?php 
					  // pr($tv['results']);
					$xx=1;
					$ix=0;
					foreach($tv['results'] as $kmovie=>$datamovie){
						if(!empty($datamovie) && $datamovie->poster_path!=''){
						if($ix%2==0){
							$xx++;
						}
						// echo $datamovie->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w300') . $datamovie->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datamovie->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<? if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                        <img alt='' src="<?php echo $imgurl; ?>">
                                    </a>
                                </div>
								<? $rnd=rand(1,50)/10;?>
                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title"><?php echo $datamovie->original_name;?></a>

                                    <p class="movie__time"><?php echo $datamovie->first_air_date;?></p>

                                    <p class="movie__option"><?=getgenrebyid($datamovie->genre_ids);?></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score" style="cursor: pointer; width: 130px;">
											<?=imgreate($datamovie->vote_average);?>
										</div>
                                        <span class="movie__rating"><?php echo round($datamovie->vote_average,1);?></span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->
					<?php $ix++;} } ?>
					