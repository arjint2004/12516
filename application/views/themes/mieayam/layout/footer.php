    <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
					<?php
						$i=0;
						foreach($this->session->userdata('genre') as $idgen=>$dtgenre){
							$genre[$i]['nama']=$dtgenre;
							$genre[$i]['id']=$idgen;
							$i++;
						}
					?>
                    <ul class="nav-link">
						<?php foreach($genre as $cx=>$datagenre){
							if($cx<4){
						?>
                        <li><a href="<?php echo base_url("movies/genre/".$datagenre['id']."/1/".$datagenre['nama']."");?>" class="nav-link__item"><?php echo $datagenre['nama'];?></a></li>
                        <?php } } ?>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
						<?php foreach($genre as $cx=>$datagenre){
							if($cx>4 && $cx<9){
						?>
                        <li><a href="<?php echo base_url("movies/genre/".$datagenre['id']."/1/".$datagenre['nama']."");?>" class="nav-link__item"><?php echo $datagenre['nama'];?></a></li>
                        <?php } } ?>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
						<?php foreach($genre as $cx=>$datagenre){
							if($cx>9 && $cx<14){
						?>
                        <li><a href="<?php echo base_url("movies/genre/".$datagenre['id']."/1/".$datagenre['nama']."");?>" class="nav-link__item"><?php echo $datagenre['nama'];?></a></li>
                        <?php } } ?>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small"><?php echo $this->session->userdata('namadomain');?><br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <!--<a href='<?php //echo $this->session->userdata('aff_link');?>' class="social__variant fa fa-facebook"></a>
                            <a href='<?php //echo $this->session->userdata('aff_link');?>' class="social__variant fa fa-twitter"></a>
                            <a href='<?php //echo $this->session->userdata('aff_link');?>' class="social__variant fa fa-vk"></a>
                            <a href='<?php //echo $this->session->userdata('aff_link');?>' class="social__variant fa fa-instagram"></a>
                            <a href='<?php //echo $this->session->userdata('aff_link');?>' class="social__variant fa fa-tumblr"></a>
                            <a href='<?php //echo $this->session->userdata('aff_link');?>' class="social__variant fa fa-pinterest"></a>-->
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; <?php echo $this->session->userdata('namadomain');?>, 2016. All rights reserved. Done by <?php echo $this->session->userdata('namadomain');?></p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to <?php echo $this->session->userdata('namadomain');?></span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>