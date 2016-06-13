		<?php
						if(empty($this->session->userdata('tvpopular'))){
							$this->session->set_userdata('tvpopular', $this->tmdb->getTv(1,'popular'));
							$tvpopular=$this->session->userdata('tvpopular');
						}else{
							$tvpopular=$this->session->userdata('tvpopular');
						}
		?>
		<!-- Category -->
            <section id="category">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="column row">
                            <div class="heading category-heading clearfix">
                                <div class="cat-head pull-left">
                                    <i class="fa fa-folder-open"></i>
                                    <h4>Popular TV Series</h4>
                                </div>
                            <div>
                                <div class="navText pull-right show-for-large">
                                    <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                    <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- category carousel -->
                        <div id="owl-demo-cat" class="owl-carousel carousel" data-car-length="6" data-items="6" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="3000" data-auto-width="true" data-margin="10" data-dots="false">
                            <?php foreach($tvpopular->results as $tvpopulardata){
							$imgurl=$this->tmdb->getImageURL('w500') . $tvpopulardata->poster_path;
							if($tvpopulardata->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
							?>
							<div class="item-cat item thumb-border">
                                <figure class="premium-img">
                                    <img alt="<?php echo $tvpopulardata->original_name;?>" src="<?php echo $imgurl;?>" alt="carousel">
                                    <a href="<?php echo make_url_detail($tvpopulardata->id,$tvpopulardata->original_name,'tv', 1,1);?>" class="hover-posts">
                                        <span><i class="fa fa-play"></i></span>
                                    </a>
                                </figure>
                                <h6><a title="<?php echo $tvpopulardata->original_name;?>" href="<?php echo make_url_detail($tvpopulardata->id,$tvpopulardata->original_name,'tv', 1,1);?>"><?php echo $tvpopulardata->original_name;?></a></h6>
                            </div>
							<?php } ?>
                        </div><!-- end carousel -->
                        <div class="row collapse">
                            <div class="large-12 columns text-center row-btn">
                                <a href="<?php echo base_url('tv/popular');?>" title="tv series popular" class="button radius">View All Popular TV Series</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Category -->