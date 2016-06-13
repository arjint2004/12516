<?php 
			if(empty($this->session->userdata('toprated'))){
				// $this->session->set_userdata('toprated', $this->tmdb->getMovieTop_rated(rand(1,10)));
				$this->session->set_userdata('toprated', $this->tmdb->getMoviePopular(rand(1,10)));
				$toprated=$this->session->userdata('toprated');
			}else{
				$toprated=$this->session->userdata('toprated');
			}

			$toprated=$toprated->results;		

			$sliders=$toprated;
			shuffle($sliders);
			shuffle($sliders);
			$slider=array($sliders[0],$sliders[1],$sliders[2],$sliders[3],$sliders[4],$sliders[5],$sliders[6],$sliders[7]);
			// pr($slider);
			unset($sliders);?>
 <!-- layerslider -->
            <section id="slider">
                <div id="full-slider-wrapper">
                    <div id="layerslider" style="width:100%;height:500px;">
                        <?php foreach($slider as $sliderdata){ ?>
						
						<div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                            <img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/sliderimages/bg.png" class="ls-bg" alt="<?php echo $sliderdata->original_name;?>"/>
                            <h3 class="ls-l" style="left:50px; top:135px; padding: 15px; color: #444444;font-size: 24px;font-family: 'Open Sans'; font-weight: bold; text-transform: uppercase;" data-ls="offsetxin:0;durationin:2500;delayin:500;durationout:750;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;"><?php //echo $sliderdata->original_title;?>Watch Or Download</h3>
                            <h1 class="ls-l" style="left: 63px; top:185px;background: #e96969;padding:0 10px; opacity: 1; color: #ffffff; font-size: 36px; font-family: 'Open Sans'; text-transform: uppercase; font-weight: bold;" data-ls="offsetxin:left;durationin:3000; delayin:800;durationout:850;rotatexin:90;rotatexout:-90;"><a href="<?php echo base_url('movies/play/'.$sliderdata->id.'/'.clean_url($sliderdata->original_title).'.html');?>" style="color:#ffffff;" title="<?php echo $sliderdata->original_title;?>"><?php echo $sliderdata->original_title;?></a></h1>
                            <p class="ls-l" style="font-weight:600;left:62px; top:250px; opacity: 1;width: 450px; color: #444; font-size: 14px; font-family: 'Open Sans';" data-ls="offsetyin:top;durationin:4000;rotateyin:90;rotateyout:-90;durationout:1050;"><?php echo $sliderdata->overview;?></p>
                            <!--<a href="#" class="ls-l button" style="border-radius:4px;text-align:center;left:63px; top:315px;background: #444;color: #ffffff;font-family: 'Open Sans';font-size: 14px;display: inline-block; text-transform: uppercase; font-weight: bold;" data-ls="durationout:850;offsetxin:90;offsetxout:-90;duration:4200;fadein:true;fadeout:true;"></a>-->
                            <img  alt="<?php echo $sliderdata->original_name;?>" class="ls-l" src="<?php echo $this->tmdb->getImageURL('w780') . $sliderdata->backdrop_path; ?>" style="top:55px; left:700px; max-height:300px;" data-ls="offsetxin:right;durationin:3000; delayin:600;durationout:850;rotatexin:-90;rotatexout:90;">
                            <img class="ls-l ls-linkto-2" style="top:400px;left:50%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/sliderimages/left.png" alt="">
                            <img class="ls-l ls-linkto-2" style="top:400px;left:52%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/sliderimages/right.png" alt="">
                        </div>
						<? } ?>
                    </div>
                </div>
            </section><!--end slider-->