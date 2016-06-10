					
                    <?php //pr($genre); ?>
					<h2 id='target' class="page-heading heading--outcontainer"><?php echo strtoupper($_GET['type']);?></h2>
					<?php 
					$xx=1;
					$ix=0;
					foreach($movies->results as $datagenre){
						if(!empty($datagenre)){
						if($ix%2==0){
							$xx++;
						}
						// echo $datagenre->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w154') . $datagenre->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($datagenre->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--<?php if($xx%2==0){echo 'left';}else{echo 'right';}?>">
                                <div class="movie__images">
                                    <a title="<?php if($type=='movie'){echo $datagenre->original_title;}elseif($type=='tv'){echo $datagenre->name;}?>" href="<?php
									 if($type=='movie'){$tt= $datagenre->original_title;}elseif($type=='tv'){$tt= $datagenre->name;}
									echo make_url_detail($datagenre->id,$tt,$type);?>" class="movie-beta__link">
                                         <img alt='' src="<?php echo $imgurl; ?>" width="100%">
                                    </a>
                                </div>
								<?php $rnd=rand(1,50)/10;?>
                                <div class="movie__info">
                                    <a title="<?php if($type=='movie'){echo $datagenre->original_title;}elseif($type=='tv'){echo $datagenre->name;}?>" href='<?php echo make_url_detail($datagenre->id,$tt,$type);?>' class="movie__title"><?php if($type=='movie'){echo $datagenre->original_title;}elseif($type=='tv'){echo $datagenre->name;}?></a>

                                    <p class="movie__time"><?php if($type=='movie'){echo $datagenre->release_date;}elseif($type=='tv'){echo $datagenre->first_air_date;}?></p>

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