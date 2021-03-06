					
                    <?php 
					$movie=$this->tmdb->getRandTvMovie();
					$tv=$this->tmdb->getRandTvMovie('tv');
					?>
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
						$imgurl=$this->tmdb->getImageURL('w154') . $datamovie->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datamovie->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<?php if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a href="<?php echo make_url_detail($datamovie->id,$datamovie->original_title,'movie');?>" class="movie-beta__link" title="<?php echo $datamovie->original_title;?>">
                                        <img alt='<?php echo $datamovie->original_title;?>' src="<?php echo $imgurl; ?>" width="100%">
                                    </a>
                                </div>
                                <div class="movie__info">
                                    <a href='<?php echo make_url_detail($datamovie->id,$datamovie->original_title,'movie');?>' class="movie__title" title="<?php echo $datamovie->original_title;?>" ><?php echo $datamovie->original_title;?></a>

                                    <p class="movie__time"><?php echo $datamovie->release_date;?></p>

                                    <p class="movie__option"><?php 
									if(isset($datamovie->genre_ids)){$gnrss=$datamovie->genre_ids;}elseif(isset($datamovie->genres)){$gnrss=$datamovie->genres;}
									// pr((array)$gnrss);
									echo getgenrebyid((array)$gnrss);
									?></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score" style="cursor: pointer; width: 130px;">
											<?php echo imgreate($datamovie->vote_average);?>
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
					  //pr($tv['results']);
					$xx=1;
					$ix=0;
					foreach($tv['results'] as $kmovie=>$datamovie){
					  // pr($datamovie);
						if(!empty($datamovie) && @$datamovie->poster_path!=''){
						if($ix%2==0){
							$xx++;
						}
						// echo $datamovie->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w300') . $datamovie->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datamovie->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<?php if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a href="<?php echo make_url_detail($datamovie->id,$datamovie->original_name,'tv');?>" class="movie-beta__link" title="<?php echo $datamovie->original_name;?>">
                                        <img alt='<?php echo $datamovie->original_name;?>' src="<?php echo $imgurl; ?>">
                                    </a>
                                </div>
								<?php $rnd=rand(1,50)/10;?>
                                <div class="movie__info">
                                    <a href='<?php echo make_url_detail($datamovie->id,$datamovie->original_name,'tv');?>' class="movie__title" title="<?php echo $datamovie->original_name;?>" ><?php echo $datamovie->original_name;?></a>

                                    <p class="movie__time"><?php echo $datamovie->first_air_date;?></p>

                                    <p class="movie__option"><?php if(isset($datamovie->genres)){echo getgenretv($datamovie->genres);}elseif(isset($datamovie->genre_ids)){echo getgenrebyid($datamovie->genre_ids);};?></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score" style="cursor: pointer; width: 130px;">
											<?php echo imgreate($datamovie->vote_average);?>
										</div>
                                        <span class="movie__rating"><?php echo round($datamovie->vote_average,1);?></span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->
					<?php $ix++;} } ?>
					