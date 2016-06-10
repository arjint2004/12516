					
					<aside class="col-sm-4 col-md-3" style="margin-top:106px;">
                        <div class="sitebar first-banner--left">
							<?php echo $this->load->get_section('sidebar'); ?>
                            <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
								<h3 class="category__title">MOVIE <br><span class="title-edition">Popular</span></h3>
								<ol>
									<?php foreach($popular->results as $popi=>$PopularMovie){
									?>
									<li><a class="category__item" href="<?php echo make_url_detail($PopularMovie->id,$PopularMovie->original_title,'movie');?>" title="<?php echo $PopularMovie->original_title;?>" ><?php echo $PopularMovie->original_title;?></a></li>
									<?php } ?>
								</ol>
							</div>
							<h3 class="heading-special lower--hight">Movie Tags</h3>
							<ul class="tags tags--dark">
							<?php foreach($termsmovie as $popix=>$termsdata){?>
								<li class="item-wrap"><a class="tags__item" href="<?php echo make_url_meta($termsdata['k_name'],'movie');?>" title="<?php echo $termsdata['k_name']?>" ><?php echo $termsdata['k_name']?></a></li>
							<?php } ?>
							</ul>
                            <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
								<h3 class="category__title">TV<br><span class="title-edition">Popular Series</span></h3>
								<ol>
									<?php foreach($tvpopular->results as $popi=>$PopularMovie){ ?>
								<li ><a class="category__item" href="<?php echo make_url_detail($PopularMovie->id,$PopularMovie->original_name,'tv');?>" title="<?php echo $PopularMovie->original_name;?>" ><?php echo $PopularMovie->original_name;?></a></li>
								<?php } ?>
								</ol>
							</div>
							<h3 class="heading-special lower--hight">TV Tags</h3>
							<ul class="tags tags--dark">
								<?php foreach($termstv as $popix=>$termsdata){?>
								<li class="item-wrap"><a class="tags__item" href="<?php echo make_url_meta($termsdata['k_name'],'tv');?>" title="<?php echo $termsdata['k_name']?>" ><?php echo $termsdata['k_name']?></a></li>
							<?php } ?>
							</ul>
                        </div>
                    </aside>