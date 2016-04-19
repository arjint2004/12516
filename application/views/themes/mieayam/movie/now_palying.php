					
                    <?php //pr($nowplay); ?>
					<h2 id='target' class="page-heading heading--outcontainer"><?php echo $title?> Movies</h2>
					<?php 
					$xx=1;
					$ix=0;
					foreach($nowplay->results as $datanowplay){
						if(!empty($datanowplay)){
						if($ix%2==0){
							$xx++;
						}
						// echo $datanowplay->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w154') . $datanowplay->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datanowplay->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<?php if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a href="<?php echo make_url_detail($datanowplay->id,$datanowplay->original_title,'movie');?>" class="movie-beta__link">
                                         <img alt='' src="<?php echo $imgurl; ?>" width="100%">
                                    </a>
                                </div>
								<?php $rnd=rand(1,50)/10;?>
                                <div class="movie__info">
                                    <a href='<?php echo make_url_detail($datanowplay->id,$datanowplay->original_title,'movie');?>' class="movie__title"><?php echo $datanowplay->original_title;?></a>

                                    <p class="movie__time"><?php echo $datanowplay->release_date;?></p>

                                    <p class="movie__option">Language: <?php echo $datanowplay->original_language;?></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score" style="cursor: pointer; width: 130px;">
											<?php echo imgreate(round($datanowplay->vote_average));?>
										</div>
                                        <span class="movie__rating"><?php echo round($datanowplay->vote_average,1);?></span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->
					<?php $ix++;} } ?>