			<? if(!empty($upcoming)){?>
            <div class="col-sm-12">
                <h2 class="page-heading">Popular Movie</h2>
				<?php 
					$xx=1;
					$ix=0;
					foreach($upcoming as $dataupcoming){

						// echo $dataupcoming->poster_path;die;
						$imgurl=$this->tmdb->getImageURL('w300') . @$dataupcoming->poster_path;
						// $fileExists = checkExternalFile($imgurl);
						if($dataupcoming->poster_path==''){$imgurl=$this->tmdb->getBlankImage();}
				?>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="<?php echo $imgurl;?>">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date"><?php echo $dataupcoming->release_date;?></p>
                        <a href="single-page-left.html" class="post__title"><?php echo $dataupcoming->original_title;?></a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
				<?php } ?>
            </div>
			<?php } ?>