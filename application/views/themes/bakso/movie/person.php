
<div class="movie">
                    <h2 class="page-heading"><?php echo $person['name'];?></h2>
                    
                    <div class="movie__info">
                        <div class="col-sm-6 col-md-4 movie-mobile">
                            <div class="movie__images" style="height:100%;">
                                <!--<span class="movie__rating">5.0</span>-->
								<?php $imgurl=$this->tmdb->getImageURL('w185').$person['profile_path']; ?>
                                <img alt='<?php echo $person['name'];?>' width="100%" src="<?php echo $imgurl;?>">
                            </div>
                            <!--<div class="movie__rate">Your vote: <div id='score' class="score"></div></div>-->
                        </div>

                        <div class="col-sm-6 col-md-8">
                            <p class="movie__time">169 min</p>

                            <p class="movie__option"><strong>Name: </strong><?php echo $person['name'];?></p>
                            <p class="movie__option"><strong>Birthday: </strong><?php echo $person['birthday'];?></p>
                            <p class="movie__option"><strong>Deathday: </strong><?php echo $person['deathday'];?></p>
                            <p class="movie__option"><strong>Gender: </strong><?php echo $person['gender'];?></p>
                            <p class="movie__option"><strong>Homepage: </strong><?php echo $person['homepage'];?></p>
                            <p class="movie__option"><strong>Id: </strong><?php echo $person['id'];?></p>
                            <p class="movie__option"><strong>Imdb_id: </strong><?php echo $person['imdb_id'];?></p>
                            <p class="movie__option"><strong>Place_of_birth: </strong><?php echo $person['place_of_birth'];?></p>
                            <p class="movie__option"><strong>Popularity: </strong><?php echo $person['popularity'];?></p>

                            
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">Biography</h2>

                    <p class="movie__describe"><?php echo $person['biography'];?></p>
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">Movie Credits</h2>

                    <p class="movie__describe">
					<?php 
						foreach($person['movie_credits']['cast'] as $tvcr){
							echo '<a href="'.base_url('movies/search/movie/1/'.clean_url($tvcr['original_title']).'.html').'" title="'.$tvcr['original_title'].'">'.$tvcr['original_title'].'</a>, ';
						}
					?>
					</p>
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">TV Credits</h2>

                    <p class="movie__describe">
					<?php 
						foreach($person['tv_credits']['cast'] as $tvcr){
							echo '<a href="'.base_url('movies/search/tv/1/'.clean_url($tvcr['original_name']).'.html').'" title="'.$tvcr['original_name'].'">'.$tvcr['original_name'].'</a>, ';
						}
					?>
					</p>
					
                    

                </div>
                