					
                    <?php //pr($genre); ?>
					<h2 id='target' class="page-heading heading--outcontainer">Movies</h2>
					<?php 
					$xx=1;
					$ix=0;
					foreach($movies->results as $datagenre){
						if(!empty($datagenre)){
						if($ix%2==0){
							$xx++;
						}
						// echo $datagenre->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w300') . $datagenre->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datagenre->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<?php if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                        <img alt='' src="<?php echo $imgurl; ?>">
                                    </a>
                                </div>
								<?php $rnd=rand(1,50)/10;?>
                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title"><?php echo $datagenre->original_title;?></a>

                                    <p class="movie__time"><?php echo $datagenre->release_date;?></p>

                                    <p class="movie__option"><?php echo getgenrebyid($datagenre->genre_ids);?></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score" style="cursor: pointer; width: 130px;">
											<?php echo imgreate($datagenre->vote_average);?>
										</div>
                                        <span class="movie__rating"><?php echo round($datagenre->vote_average,1);?></span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->
					<?php $ix++;} } ?>