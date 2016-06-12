			<!-- Premium Videos -->
            <section id="premium">
                <div class="row">
                    <div class="heading clearfix">
                        <div class="large-11 columns">
                            <h4><i class="fa fa-play-circle-o"></i>Popular Movie</h4>
                        </div>
                        <div class="large-1 columns">
                            <div class="navText show-for-large">
                                <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="owl-demo" class="owl-carousel carousel" data-car-length="4" data-items="4" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="3000" data-dots="false" data-auto-width="false" data-responsive-small="1" data-responsive-medium="2" data-responsive-xlarge="5">
                    <?php foreach($toprated as $toprateddata){
						$imgurl=$this->tmdb->getImageURL('w500') . $toprateddata->poster_path;
						if($toprateddata->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
					?>
					<div class="item">
                        <figure class="premium-img">
                            <img title="<?php echo $toprateddata->original_title;?>" alt="<?php echo $toprateddata->original_title;?>" src="<?php echo $imgurl;?>" alt="carousel">
                            <figcaption>
                                <h5><?php echo $toprateddata->original_title;?></h5>
                                <p>Popular Movies</p>
                            </figcaption>
                        </figure>
                        <a title="<?php echo $toprateddata->original_title;?>" href="<?php echo make_url_detail($toprateddata->id,$toprateddata->original_title,$type='movie',$season=1,$episodes=1);?>" class="hover-posts">
                            <span><i class="fa fa-play"></i>Watch or Download Movie</span>
                        </a>
                    </div>
					<?php } ?>
                </div>
            </section><!-- End Premium Videos -->