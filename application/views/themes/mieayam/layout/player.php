

	
	


	<link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/player/mov.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/player/style.css" rel="stylesheet" type="text/css">

	<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/player/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/player/bootstrap.js"></script>


	<div class="playersasb" style="padding: 20px 0px 0px; background: #2d2d2d;">
	<div class="row" style="width:70%;margin: 0 auto">
        	<div id="player">
                		<div class="vcontainer">
                        		<div id="streaming">
                                		<img class="img-backdrop" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/player/Jshz1Iv33im4hXhHJCI9FklihE.jpg" alt="" itemprop="image" height="524" width="720">
                                		<span class="mpaa">HD</span>
                                		<div class="watermark">namadomain.tk</div>
                                		<div class="inline play-button registration">
                                        		<span style="display: none;" class="player-loader"></span>
                                        		<i style="visibility: visible;" class="fa fa-youtube-play"></i>
                                		</div>
                        		</div>
                                        <div class="progress progress-striped active">
                                		<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">45% Complete</span>
                                		</div>
                            		</div>
                        		<div id="controls">
                                		<div class="control-wrap">
                                                	<div class="cplay"></div>
                                                	<div class="cvolu">
                                                		<div class="cvol"></div>
                                                        	<div id="ivol" class="ui-slider-horizontal" aria-disabled="false"><div class="ui-widget-header"></div><a class="ui-slider-handle" href="#" style="left: 34.3434343434343%;"></a></div>
							</div>
							<div class="ctime">
								<span class="cmin" title="0">00:00:00</span> / <span class="cmax">02:28:36</span>
							</div>
                                                	<div class="progres">
								<span class="buffering"><span class="progressbar"></span></span>
							</div>
							<div class="cfull"></div>
							<div class="cset"><span class="chade"></span></div>
                                		</div>
                        		</div>
                		</div>
        		</div>
	</div>

<div class="modal fade" id="modal-watch" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content clearfix">
                <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH FULL MOVIE!</h4>
                </div>
                <div class="modal-body clearfix">
                        <div class="row">
                                <div class="col-md-6" id="login">
                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/player/Jshz1Iv33im4hXhHJCI9FklihE.jpg">
                                        <hr>
                                        <h5>Member Login</h5>
                                        <div class="form-group">
                                                <input class="form-control input-sm" id="userid" placeholder="username" type="text">
	                                </div>
                                        <div class="form-group">
                                                <input class="form-control input-sm" id="password" placeholder="password" type="password">
                                        </div>
                                        <div class="form-group">
                                                <span class="onload label label-info" style="display: none;">Please wait...</span>
                                                <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span>
                                        </div>
                                        <input id="submov" class="btn btn-success" value="Log me in" type="submit">
                                </div>
		
                                <div class="col-md-6">
                                        <ul class="list-group">
						<li class="list-group-item">
							<h4 class="list-group-item-heading">High Quality Movies</h4>
							<p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch Without Limits</h4>
							<p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">100% Free Advertising</h4>
							<p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch anytime, anywhere</h4>
							<p class="list-group-item-text">It works on your TV, PC, or MAC!</p>
						</li>							
					</ul>
                                </div>
                        </div>
                </div>
                <div class="modal-footer bg-info">
                        <a class="btn btn-danger" href="http://ocim.tk/signup.php">Sign Up For Free</a>
                </div>
        </div>
</div>

</div>
</div>


<script>
	$(document).ready(function() {
		$('#user, #username').focus();
		$('#submit, #login').click(function() {
			event.preventDefault(); // prevent PageReLoad
			$('.error').css('display', 'none'); // hide error msg
			$('#spiner_login, #spiner_login_menu').css('display', 'block');
			var ValidEmail = $('#user').val() === 'plese@login.here'; // Email Value
			var ValidPassword = $('#password').val() === 'YourPassword'; // Password Value
			if (ValidEmail === false && ValidPassword === false) { // if ValEmail & ValPass are as above
				var delay=1500;
				setTimeout(function(){
					$('.error, .error_menu').css('display', 'block');
					$('.pesan, .error_menu').css('display', 'none');
					$('#spiner_login, #spiner_login_menu').css('display', 'none');
					var tutup=5000;
					setTimeout(function(){
						$('.error, .error_menu').css('display', 'none');
						$('.pesan, .error_menu').css('display', 'block');
					},tutup);
				},delay);
			}
		});
	});
	$('.player').modal({backdrop: 'static'})  
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/player/scripts.js"></script>
