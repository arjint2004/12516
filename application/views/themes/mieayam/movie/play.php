<?php echo $this->load->get_section('player'); ?>
<div class="cinema cinema--full">
               <!-- <p class="cinema__title">Artist</p>
                <!--<div class="cinema__rating">5.0</div>-->
                <!--<div class="cinema__gallery">
                    <div class="swiper-container">
                      <div class="swiper-wrapper">
                          <?php //foreach($images['posters'] as $dtimage){?>

                          <div class="swiper-slide">
                                <img alt='' src="<?php //echo $this->tmdb->getImageURL('w300') . $dtimage['file_path'];?>">
                          </div>
						  <?php //} ?>
                      </div>
                    </div>
                </div>-->
                <!--<div class="cinema__info">
                    <p class="cinema__info-item"><strong>Address:</strong> Leicester Sq, London, WC2H 7LP</p>
                    <p class="cinema__info-item"><strong>Phone:</strong> 0871 224 0240</p>
                    <p class="cinema__info-item"><strong>Official website:</strong> <a href="#">www.myvue.com</a></p>
                </div>-->
            </div>

            <div class="share share--centered">
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
            </div>

            <div class="tabs tabs--horisontal">
                      <!-- Nav tabs -->
                      <div class="container">
                          <ul class="nav nav-tabs" id="hTab">
                            <li class="active"><a href="#detail1" data-toggle="tab">Detail</a></li>
                            <li><a href="#movie1" data-toggle="tab">Simillar Movies</a></li>
                            <!--<li><a href="#comment1" data-toggle="tab">Review</a></li>-->
                            <li><a href="#map1" data-toggle="tab">Trailler</a></li>
                            <li><a href="#star1" data-toggle="tab">Artist</a></li>
                          </ul>
                      </div>

                      <!-- Tab panes -->
                      <div class="tab-content">
                            <div class="tab-pane active" id="detail1">
								<div class="container">	
									<div class="movie movie--preview movie--full release">
										 <div class="col-sm-3 col-md-2 col-lg-2">
												<div class="movie__images">
													<img alt='' src="<?php echo $this->tmdb->getImageURL('w92') . $movies->getPoster();?>" width="100%">
												</div>
												<!--<div class="movie__feature">
													<a class="movie__feature-item movie__feature--comment" href="#">123</a>
													<a class="movie__feature-item movie__feature--video" href="#">7</a>
													<a class="movie__feature-item movie__feature--photo" href="#">352</a>
												</div>-->
										</div>
										<?PHP //pr($movies);?>
										<div class="col-sm-9 col-md-10 col-lg-10 movie__about">
												<a class="movie__title link--huge" href=""><?php echo $movies->getTitle();?></a>

												<p class="movie__time"><?php echo $movies->getrunTime();?> min</p>

												<p class="movie__option"><strong>Overview: </strong><?php echo $movies->getOverview();?></p>
												<p class="movie__option"><strong>Country: </strong><?php echo $movies->getProductionCountry();?></p>
												<p class="movie__option"><strong>Category: </strong><?php echo $movies->getGenres();?></p>
												<p class="movie__option"><strong>Release date: </strong><?php echo $movies->getReleaseDate();?></p>
												<p class="movie__option"><strong>Director: </strong><?php echo $movies->getCrewDirector();?></p>
												<p class="movie__option"><strong>Actors: </strong><?php echo $movies->getCast();?></p>
												<p class="movie__option"><strong>Popularity: </strong><?php echo $movies->getRating();?></p>

												<div class="preview-footer">
													<div class="movie__rate"><div class="score" style="cursor: pointer; width: 130px;">
														<?php echo imgreate($movies->getVoteAverage());?>
													</div>
													<span class="movie__rate-number"><?php echo $movies->getVoteCount();?> votes</span> 
													<span class="movie__rating"><?php echo $movies->getVoteAverage();?></span></div>
												</div>
										</div>
									</div>							
								</div>							
							</div>
                            <div class="tab-pane" id="movie1">
                                <div class="container">
                                    <div class="movie-time-wrap">

                                    <!--<div class="datepicker">
                                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                                      <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
                                    </div>-->

										<?php
										 //$Similarmovies=$this->tmdb->getSimilar($movies->getID());
										$Similarmovies=$this->tmdb->getSimilarDB($movies->getGenre(), $movies->getTitle());
										// pr($Similarmovies);die;
										foreach($Similarmovies->results as $movi=>$Similarmovie){
										$imgurl=$this->tmdb->getImageURL('w154').$Similarmovie->poster_path;
										$fileExists = checkExternalFile($imgurl);
										if($fileExists==400){$imgurl=base_url().'/assets/img/noback.gif';}
										
										if($movi%2==0){
										?>
											<div class="clearfix"></div>
										<?php
										}
										?>
										
										<div class="col-sm-6">
                                            <!-- Movie variant with time -->
                                            <div class="movie movie--time">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-5">
                                                        <div class="movie__images">
                                                            <span class="movie__rating"><?php echo round($Similarmovie->vote_average,1);?></span>
                                                            <img alt='' src="<?php echo $imgurl;?>" width="100%">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-7">
                                                        <a href='<?php echo make_url_detail($Similarmovie->id,$Similarmovie->original_title,'movie');?>' class="movie__title"><?php echo $Similarmovie->original_title;?></a>
                                                        <p class="movie__time">Date: <?php echo $Similarmovie->release_date;?></p>

                                                        <p class="movie__option"><?php echo getgenrebyid($Similarmovie->genre_ids);?></p>
                                                        <p class="movie__option"><?php echo substr($Similarmovie->overview,0,300);?></p>
                                                    </div>
                                                        <!--<div class="time-select">
                                                            <ul class="items-wrap">
                                                                <li class="time-select__item" data-time='09:40'>09:40</li>
                                                                <li class="time-select__item" data-time='13:45'>13:45</li>
                                                                <li class="time-select__item" data-time='15:45'>15:45</li>
                                                                <li class="time-select__item" data-time='19:50'>19:50</li>
                                                                <li class="time-select__item" data-time='21:50'>21:50</li>
                                                            </ul>
                                                        </div>-->
                                                    
                                                </div>
                                            </div>
                                            <!-- Movie variant with time -->
                                        </div>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="tab-pane" id="comment1">
                                <div class="container">
                                    <div class="comment-wrapper">
                                        <form id="comment-form" class="comment-form" method='post'>
                                            <textarea class="comment-form__text" placeholder='Add you comment here'></textarea>
                                            <label class="comment-form__info">250 characters left</label>
                                            <button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>
                                        </form>

                                        <div class="comment-sets comment--light">

                                              <div class="comment">
                                                  <div class="comment__images">
                                                      <img alt='' src="<?php echo base_url('assets/themes/mieayam/images');?>/comment/avatar.jpg">
                                                  </div>

                                                  <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                                                  <p class="comment__date">today | 03:04</p>
                                                  <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                                  <a href='#' class="comment__reply">Reply</a>
                                              </div>


                                              <div class="comment-more">
                                                  <a href="#" class="watchlist">Show more comments</a>
                                              </div>

                                          </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="tab-pane" id="map1">
								<div class="container">
									<iframe id="video" width="100%" height="500" src="<?php echo $trailer; ?>"></iframe> 
								</div>
                            </div>
                            <div class="tab-pane" id="star1">
									<div class="container">
										<div class="movie-time-wrap">

											<?php

											foreach($artist as $art=>$dataartist){
											$imgurl=$this->tmdb->getImageURL('w154').$dataartist['profile_path'];
											$fileExists = checkExternalFile($imgurl);
											if($fileExists==400){$imgurl=base_url().'/assets/img/noback.gif';}
											
											if($art%2==0){
											?>
												<div class="clearfix"></div>
											<?php
											}
											?>
											
											<div class="col-sm-6">
												<!-- Movie variant with time -->
												<div class="movie movie--time">
													<div class="row">
														<div class="col-sm-6 col-md-5">
															<div class="movie__images">
																<img alt='' src="<?php echo $imgurl;?>" width="100%">
															</div>
														</div>	
														<div class="col-sm-6 col-md-7">
															<a  class="movie__title"><?php echo $dataartist['name'];?></a>
															<p class="movie__date">character: <?php echo $dataartist['character'];?></p>

															<p class="movie__option"><?php //echo getgenrebyid($dataartist['']);?></p>
															<p class="movie__option"><?php //echo substr($dataartist[''],0,300);?></p>
														</div>
													</div>
												</div>
												<!-- Movie variant with time -->
											</div>
											<?php } ?>
										</div>
									</div>
                            </div>
                      </div>
            </div>