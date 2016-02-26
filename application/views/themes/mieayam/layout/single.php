<!doctype html>
<html>

<!-- Mirrored from amovie.designzway.com/single-cinema.html by HTTrack Website Copier/3.x [XR&CO'2004], Wed, 08 Jul 2015 06:13:42 GMT -->
<head> 
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie -Single cinema</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/roboto_400_700.css' rel='stylesheet' type='<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI -->
        <link href="jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/external/idangerous.swiper.css" rel="stylesheet" /> 
    
    	<link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/player/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- Custom -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/style3860.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/modernizr.custom.js"></script>
		<script>var asset='<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/';</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body class="single-cin">
    <div class="wrapper">
        <?php echo $this->load->get_section('header'); ?>
		<!--<div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>-->
		<!-- Main content -->
        <section class="cinema-container" style="padding-top:0;">
		
			<?php echo $this->load->get_section('player'); ?>
			<?php echo $output;?>
        </section>
		        
        <div class="clearfix"></div>

		<?php echo $this->load->get_section('footer'); ?>
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

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

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/bootstrap.min.js"></script>
        <!-- Mobile menu -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Swiper slider -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/idangerous.swiper.min.js"></script>
        <!-- Share buttons -->
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

        <!--*** Google map infobox  ***-->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/infobox.js"></script>
        <!-- Form element -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/form.js"></script>
        <!-- Custom -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/custom.js"></script> 
		<script type="text/javascript">
            $(document).ready(function() {
                init_Cinema();
            });
		</script>

</body>

<!-- Mirrored from amovie.designzway.com/single-cinema.html by HTTrack Website Copier/3.x [XR&CO'2004], Wed, 08 Jul 2015 06:13:42 GMT -->
</html>
