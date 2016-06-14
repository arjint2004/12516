					<?php
						$lastsearch=$this->tmdb->get_cache_search();
						
						if(empty($this->session->userdata('movieupcoming'))){
							$this->session->set_userdata('movieupcoming', $this->tmdb->getMovieUpcoming(1));
							$movieupcoming=$this->session->userdata('movieupcoming');
						}else{
							$movieupcoming=$this->session->userdata('movieupcoming');
						}
						
						if(empty($this->session->userdata('tvairingtoday'))){
							$this->session->set_userdata('tvairingtoday', $this->tmdb->getTv(1,'airing_today'));
							$tvairingtoday=$this->session->userdata('tvairingtoday');
						}else{
							$tvairingtoday=$this->session->userdata('tvairingtoday');
						}
						// pr($tvairingtoday);
					?>
					<aside class="secBg sidebar">
                        <div class="row">
                            <!-- search Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Search Videos</h5>
                                    </div>
                                    <form id="searchform" method="get" role="search">
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                            <div class="input-group-button">
                                                <input type="submit" class="button" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End search Widget -->

                            <!-- most view Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Up Coming Movie</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <?php 
										shuffle($movieupcoming->results);
										foreach($movieupcoming->results as $hk=>$movieupcomingdata){
												
												$imgurl=$this->tmdb->getImageURL('w500') . $movieupcomingdata->poster_path;
												if($movieupcomingdata->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
												if($hk<=4){
										?>
										<div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="<?php echo $imgurl;?>" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Movie</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="<?php echo make_url_detail($popularmoviedata->id,$popularmoviedata->original_title,$type='movie',$season=1,$episodes=1);?>"><?php echo $movieupcomingdata->original_title;?></a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i><?php echo $movieupcomingdata->release_date;?></span>
                                                    <span><i class="fa fa-eye"></i><?php echo rand(500,10000);?></span>
                                                </p>
                                            </div>
                                        </div>
                                        <?php }  } ?>
                                    </div>
                                </div>
                            </div><!-- end most view Widget -->

                            <!-- Recent post videos -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Airing Today Tv Series</h5>
                                    </div>
                                    <div class="widgetContent">
										<?php 
											shuffle($tvairingtoday->results);
											// pr($tvairingtoday->results);
											foreach($tvairingtoday->results as $hk=>$tvairingtodaydata){
											$imgurl=$this->tmdb->getImageURL('w500') . $tvairingtodaydata->poster_path;
											if($tvairingtodaydata->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
											if($hk<=4){
										?>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "<?php echo $imgurl; ?>" alt="<?php echo $tvairingtodaydata->original_name;?>">
                                                    <a title="<?php echo $tvairingtodaydata->original_name;?>" href="<?php echo make_url_detail($tvairingtodaydata->id,$tvairingtodaydata->original_name,$type='tv',$season=1,$episodes=1);?>" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a title="<?php echo $tvairingtodaydata->original_name;?>" href="<?php echo make_url_detail($tvairingtodaydata->id,$tvairingtodaydata->original_name,$type='tv',$season=1,$episodes=1);?>"><?php echo $tvairingtodaydata->original_name;?></a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span><?php echo $tvairingtodaydata->first_air_date;?></span></p>
                                                </div>
                                            </div>
                                        </div>
										<?php }  } ?>
                                    </div>
                                </div>
                            </div><!-- End Recent post videos -->

                            <!-- tags -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Movie Last Search Terms</h5>
                                    </div>
                                    <div class="tagcloud">
										<?php  foreach($lastsearch['movie'] as $popix=>$termsdata){?>
										<a href="<?php echo make_url_meta($termsdata,'movie');?>" title="<?php echo $termsdata?>" ><?php echo $termsdata?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div><!-- End tags -->
                            <!-- tags -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>TV Last Search Terms</h5>
                                    </div>
                                    <div class="tagcloud">
									<?php  foreach($lastsearch['tv'] as $popix=>$termsdata){?>
                                        <a href="<?php echo make_url_meta($termsdata,'tv');?>" title="<?php echo $termsdata?>" ><?php echo $termsdata?></a>
									<?php } ?>
                                        
                                    </div>
                                </div>
                            </div><!-- End tags -->
                        </div>
                    </aside>