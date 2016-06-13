<!-- left side content area -->
                <div class="large-8 columns">
                    <section class="content content-with-sidebar">
                        <!-- newest video -->
                        <div class="main-heading">
                            <div class="row secBg padding-14">
                                <div class="medium-8 small-8 columns">
                                    <div class="head-title">
                                        <i class="fa fa-film"></i>
                                        <h4>Top Rated</h4>
                                    </div>
                                </div>
                                <div class="medium-4 small-4 columns">
                                    <ul class="tabs text-right pull-right" data-tabs id="newVideos">
                                        <li class="tabs-title is-active"><a href="#new-all" style="width: 100px;font-weight:bold;">Movies</a></li>
                                        <li class="tabs-title"><a href="#new-hd" style="width: 100px;font-weight:bold">TV Series</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row secBg">
                            <div class="large-12 columns">
                               <div class="row column head-text clearfix">
                                    <!-- <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p>
                                    <div class="grid-system pull-right show-for-large">
                                        <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                        <a class="secondary-button current grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                        <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                                    </div>-->
                                </div>
                                <div class="tabs-content" data-tabs-content="newVideos">
                                    <div class="tabs-panel is-active" id="new-all">
                                        <div class="row list-group">
                                            <?php 
														
												if(empty($this->session->userdata('topratedmovie'))){
													// $this->session->set_userdata('topratedmovie', $this->tmdb->getMovieTop_rated(rand(1,10)));
													$this->session->set_userdata('topratedmovie', $this->tmdb->getMovieTop_rated(rand(1,10)));
													$topratedmovie=$this->session->userdata('topratedmovie');
												}else{
													$topratedmovie=$this->session->userdata('topratedmovie');
												}
												$topratedmovie=$topratedmovie->results;	
												shuffle($topratedmovie);
												shuffle($topratedmovie);
												// $topratedmovie=array($topratedmovie[1],$topratedmovie[2],$topratedmovie[3],$topratedmovie[4],$topratedmovie[5],$topratedmovie[6]);
												
												foreach($topratedmovie as $rt=>$topratedmoviedata ){
												$imgurl=$this->tmdb->getImageURL('w500') . $topratedmoviedata->poster_path;
												if($topratedmoviedata->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
												// pr($topratedmoviedata);
												?>
											<div class="item large-4 medium-6 columns grid-medium <?php if($rt==5){echo 'end';}?>">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img alt="<?php echo $topratedmoviedata->original_title;?>" title="<?php echo $topratedmoviedata->original_title;?>" src="<?php echo  $imgurl;?>" alt="new video">
                                                        <a href="<?php echo make_url_detail($topratedmoviedata->id,$topratedmoviedata->original_title,$type='movie',$season=1,$episodes=1);?>" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span><?php echo $topratedmoviedata->vote_count;?></span>
                                                            </div>
                                                            <!--<div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="<?php echo make_url_detail($topratedmoviedata->id,$topratedmoviedata->original_title,$type='movie',$season=1,$episodes=1);?>" title="<?php echo $topratedmoviedata->original_title;?>"><?php echo $topratedmoviedata->original_title;?></a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <!--<p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>-->
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span><?php echo rand(500,10000);?></span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p><?php echo $topratedmoviedata->overview;?></p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a title="<?php echo $topratedmoviedata->original_title;?>" href="<?php echo make_url_detail($topratedmoviedata->id,$topratedmoviedata->original_title,$type='movie',$season=1,$episodes=1);?>" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="tabs-panel" id="new-hd">
                                        <div class="row list-group">
                                            <?php 
														
												if(empty($this->session->userdata('topratedtv'))){
													// $this->session->set_userdata('topratedtv', $this->tmdb->getMovieTop_rated(rand(1,10)));
													$this->session->set_userdata('topratedtv', $this->tmdb->getTv(rand(1,10),$type='top_rated'));
													$topratedtv=$this->session->userdata('topratedtv');
												}else{
													$topratedtv=$this->session->userdata('topratedtv');
												}
												$topratedtv=$topratedtv->results;	
												shuffle($topratedtv);
												shuffle($topratedtv);
												// $topratedtv=array($topratedtv[1],$topratedtv[2],$topratedtv[3],$topratedtv[4],$topratedtv[5],$topratedtv[6]);
												
												foreach($topratedtv as $rt=>$topratedtvdata ){
												$imgurl=$this->tmdb->getImageURL('w500') . $topratedtvdata->poster_path;
												if($topratedtvdata->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
												// pr($topratedtvdata);
												?>
											<div class="item large-4 medium-6 columns grid-medium <?php if($rt==5){echo 'end';}?>">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img alt="<?php echo $topratedtvdata->original_name;?>" title="<?php echo $topratedtvdata->original_name;?>" src="<?php echo  $imgurl;?>" alt="new video">
                                                        <a href="<?php echo make_url_detail($topratedtvdata->id,$topratedtvdata->original_name,$type='tv',$season=1,$episodes=1);?>" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span><?php echo $topratedtvdata->vote_count;?></span>
                                                            </div>
                                                            <!--<div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="<?php echo make_url_detail($topratedtvdata->id,$topratedtvdata->original_name,$type='tv',$season=1,$episodes=1);?>" title="<?php echo $topratedtvdata->original_name;?>"><?php echo $topratedtvdata->original_name;?></a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <!--<p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>-->
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span><?php echo rand(500,10000);?></span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p><?php echo $topratedtvdata->overview;?></p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="<?php echo make_url_detail($topratedtvdata->id,$topratedtvdata->original_name,$type='tv',$season=1,$episodes=1);?>" class="secondary-button"><i class="fa fa-play-circle"></i>Watch <?php echo $topratedtvdata->original_name;?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text-center row-btn">
                                    <a class="button radius" title="View All" href="<?php echo base_url('tv/top_rated');?>">View All</a>
                                </div>-->
                            </div>
                        </div>
                    </section>
                    <!-- ad Section -->
                    <div class="googleAdv text-center">
                        <!--<a href="#"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/goodleadv.png" alt="googel ads"></a>-->
                    </div> <!--End ad Section -->

                    

                </div><!-- end left side content area -->