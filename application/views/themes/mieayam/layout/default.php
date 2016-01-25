<!doctype html>
<html>

<!-- Mirrored from amovie.designzway.com/ by HTTrack Website Copier/3.x [XR&CO'2004], Wed, 08 Jul 2015 06:10:44 GMT -->
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/external/jquery.selectbox.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/rs-plugin/css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/style3860.css?v=1" rel="stylesheet" />


        <!-- Modernizr --> 
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index-2.html' class="logo">
                    <img alt='logo' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li><span class="sub-nav-toggle plus"></span><a href="<?php echo base_url();?>">Home</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Movie Genre</a>
                            <ul>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/28/1">Action</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/12/1">Adventure</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/16/1">Animation</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/35/1">Comedy</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/80/1">Crime</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/99/1">Documentary</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/18/1">Drama</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/10751/1">Family</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/14/1">Fantasy</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/10769/1">Foreign</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/36/1">History</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/27/1">Horror</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/10402/1">Music</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/9648/1">Mystery</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/10749/1">Romance</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/878/1">Science Fiction</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/10770/1">TV Movie</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/53/1">Thriller</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/10752/1">War</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>genre/37/1">Western</a></li>					
				
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Movie</a>
                            <ul>
								<li class="menu__nav-item" ><a href="">Now Playing</a></li>
								<li class="menu__nav-item" ><a href="">Popular</a></li>
								<li class="menu__nav-item" ><a href="">Top Rated</a></li>
								<li class="menu__nav-item" ><a href="">Up Coming</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">TV SHow</a>
                            <ul>
								<li class="menu__nav-item" ><a href="">On The Air</a></li>
								<li class="menu__nav-item" ><a href="">Airing Today</a></li>
								<li class="menu__nav-item" ><a href="">Top Rated</a></li>
								<li class="menu__nav-item" ><a href="">Popular</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="">DMCA</a>
                        </li>
                        
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                      <div class="auth__show">
                        <span class="auth__image">
                          
                        </span>
                      </div>
                      <a href="#" class="btn btn--sign btn--singin">
                          Log In
                      </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li>
                        </ul>

                    </div>
                    
                </div>

            </div>
        </header>

        <!-- Slider -->
            <div class="bannercontainer">
                    <div class="banner">
                        <ul>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Rush.'>
                                <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/slides/first-slide.jpg">
                                <div class="caption slide__name margin-slider" 
                                     data-x="right" 
                                     data-y="80" 

                                     data-splitin="chars"
                                     data-elementdelay="0.1"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"

                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                                    data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "


                                    data-splitout="lines"
                                    data-endelementdelay="0.1"
                                    data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"

                                    data-endspeed="500"
                                    data-end="8400"
                                    data-endeasing="Back.easeIn"
                                     >
                                    RUSH
                                </div>

                                <div class="caption slide__time margin-slider sfr str" 
                                     data-x="right" 
                                     data-hoffset='-243' 
                                     data-y="186" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     data-end="8700"
                                     data-endeasing="Back.easeIn"
                                     >
                                     From
                                 </div>
                                <div class="caption slide__date margin-slider lfb ltb" 
                                     data-x="right" 
                                     data-hoffset='-149' 
                                     data-y="186" 
                                     data-speed="500" 
                                     data-start="2400" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-end="8200"
                                     data-endeasing="Back.easeIn"
                                     >
                                     October 18
                                 </div>
                                <div class="caption slide__time margin-slider sfr str" 
                                     data-x="right" 
                                     data-hoffset='-113' 
                                     data-y="186" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     data-end="8700"
                                     data-endeasing="Back.easeIn"
                                     >
                                     - till
                                 </div>
                                <div class="caption slide__date margin-slider lfb ltb" 
                                     data-x="right" 
                                     data-y="186" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-end="8200"
                                     data-endeasing="Back.easeIn"
                                     >
                                     November 01
                                 </div>
                                <div class="caption slide__text margin-slider customin customout" 
                                     data-x="right" 
                                     data-y="250"
                                     data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-speed="400" 
                                     data-start="3000"
                                     data-endspeed="400"
                                     data-end="8000"
                                     data-endeasing="Back.easeIn">
                                     Two-time Academy Award winner Ron Howard, teams once again with fellow two-time Academy<br> Award nominee, writer Peter Morgan , on Rush, a spectacular big-screen re-creation of the merciless<br> 1970s rivalry between James Hunt and Niki Lauda.
                                 </div>
                                <div class="caption margin-slider skewfromright customout " 
                                     data-x="right" 
                                     data-y="324"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="400" 
                                     data-start="3300"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-end="7700"
                                     data-endeasing="Power4.easeOut">
                                     <a href="#" class="slide__link">check out cinemas &amp; time</a>
                                 </div>
                            </li>

                            <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide='Travel worldwide.
Create trip film.'>
                                <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/bg-video.jpg">
                                 <div class="caption slide__video" data-x="0" data-y="0" data-autoplay='true'>
                                   <video class="media-element"  autoplay="autoplay" preload='none' loop="loop" muted="" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/video/TravelIs.mp4" >
                                        <source type="video/webm" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/video/TravelIs.webm">
                                        <source type="video/mp4" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/video/TravelIs.mp4">
                                        <source type="video/ogg" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/video/TravelIs.ogv">
                                    </video>
                                  </div>

                                  <div class="caption slide__name slide__name--smaller" 
                                     data-x="left" 
                                     data-y="160" 
                                     data-splitin="chars"
                                     data-elementdelay="0.1"
                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                    data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "
                                    data-splitout="lines"
                                    data-endelementdelay="0.1"
                                    data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                                    data-endspeed="500"
                                    data-endeasing="Back.easeIn"
                                    >
                                    Travel, Admire, Remember.
                                </div>

                                <div class="caption slide__time position-center postion-place--one sfr stl" 
                                     data-x="left"
                                     data-y="242" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     data-endeasing="Back.easeIn">
                                     From
                                 </div>
                                <div class="caption slide__date position-center postion-place--two lfb ltb" 
                                     data-x="left"                                       
                                     data-y="242" 
                                     data-speed="500" 
                                     data-start="2400" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn">
                                     April 18 
                                 </div>
                                <div class="caption slide__time position-center postion-place--three sfr stl" 
                                     data-x="left" 
                                     data-y="242" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     data-endeasing="Back.easeIn">
                                     - till
                                 </div>
                                <div class="caption slide__date position-center postion-place--four lfb ltb" 
                                     data-x="left"
                                     data-y="242" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut" 
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn">
                                     May 01
                                 </div>

                                 <div class="caption lfb slider-wrap-btn ltb" 
                                     data-x="left"
                                     data-y="310" 
                                     data-speed="400" 
                                     data-start="3300" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeOut" >
                                     <a href="#" class="btn btn-md btn--danger btn--wide slider--btn">learn more</a>
                                 </div>
                            </li>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Stop wishing. 
Start doing.'>
                                <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/slides/next-slide.jpg">
                                 <div class="caption slide__name slide__name--smaller slide__name--specific customin customout" 
                                     data-x="left" 
                                     data-y="160" 

                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"
                                     data-endspeed="500"
                                     data-end="8600"
                                     data-endeasing="Back.easeIn"

                                     >
                                    Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span> 
                                </div>

                                  <div class="caption slide__descript customin customout" 
                                     data-x="left" 
                                     data-y="240"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-speed="700" 
                                     data-start="2000"
                                     data-endspeed="500"
                                     data-end="8400"
                                     data-endeasing="Back.easeIn">
                                     find your best match movie with A.MOVIE
                                 </div>

                                 <div class="caption lfb customout slider-wrap-btn" 
                                     data-x="left" 
                                     data-y="310" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-endspeed="400"
                                     data-end="8000"
                                     data-endeasing="Power4.easeOut" >
                                     <a href="#" class="btn btn-md btn--danger slider--btn">check out movies</a>
                                 </div>
                            </li>

                        </ul>
                    </div>
                </div>

        <!--end slider -->
        
        
        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">TOp Rated Movie</div>
                 <div class="col-sm-12 change--col">
                     <div class="movie-beta__item ">
                        <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-sample1.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item second--item">
                         <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-sample2.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item third--item">
                         <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-sample3.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item hidden-xs">
                         <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-sample4.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item hidden-xs hidden-sm">
                         <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-sample5.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item hidden-xs hidden-sm">
                         <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-sample6.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.html" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                 </div>
            </div>

            <div class="col-sm-12">
                <div class="mega-select-present mega-select-top mega-select--full">
                    <div class="mega-select-marker">

                        <div class="marker-indecator cinema" style="display: inline-block;">
                            <p class="select-marker"><span>Find</span> <br>Movie</p>
                        </div>


                        <div class="marker-indecator actors">
                            <p class="select-marker"><span>looking for the episode</span> <br>Tv Series</p>
                        </div>
                    </div>

                      <div class="mega-select pull-right">
                          <span class="mega-select__point">Search by</span>
                          <ul class="mega-select__sort">
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>Movie</a></li>
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>TV Series</a></li>
                          </ul>

                          <input name="search-input" type='text' class="select__field">
                          
                          <div class="select__btn">
                            <a href="#" class="btn btn-md btn--danger cinema" style="display: inline-block;">Find <span class="hidden-exrtasm">Movie</span></a>
                            <a href="#" class="btn btn-md btn--danger actors">Find <span class="hidden-exrtasm">TV Series</span></a>
                          </div>

                          <div class="select__dropdowns">

                              <ul class="select__group cinema">
                                <li class="select__variant" data-value='Cineworld'>Cineworld</li>
                                <li class="select__variant" data-value='Empire'>Empire</li>
                                <li class="select__variant" data-value='Everyman'>Everyman</li>
                                <li class="select__variant" data-value='Odeon'>Odeon</li>
                                <li class="select__variant" data-value='Picturehouse'>Picturehouse</li>
                              </ul>

                              <ul class="select__group actors">
                                <li class="select__variant" data-value='Leonardo DiCaprio'>Leonardo DiCaprio</li>
                                <li class="select__variant" data-value='Johnny Depp'>Johnny Depp</li>
                                <li class="select__variant" data-value='Jack Nicholson'>Jack Nicholson</li>
                                <li class="select__variant" data-value='Robert De Niro'>Robert De Niro</li>
                                <li class="select__variant" data-value='Morgan Freeman'>Morgan Freeman</li>
                                <li class="select__variant" data-value='Jim Carrey'>Jim Carrey</li>
                                <li class="select__variant" data-value='Adam Sandler'>Adam Sandler</li>
                                <li class="select__variant" data-value='Ben Stiller'>Ben Stiller</li>
                              </ul>
                          </div>
                      </div>
                  </div>
            </div>
            
            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">Now in the cinema</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                        <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time8.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">Gravity (2013)  </a>

                                    <p class="movie__time">91 min</p>

                                    <p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.1</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time1.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">The Hobbit: The Desolation of Smaug (2013)  </a>

                                    <p class="movie__time">169 min</p>

                                    <p class="movie__option"><a href="#">Adventure</a> | <a href="#">Fantasy</a> | <a href="#">Drama</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time9.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">The Hunger Games: Catching Fire (2013)   </a>

                                    <p class="movie__time">146 min</p>

                                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Sci-Fi</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.9</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time10.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">Thor: The Dark World (2013) </a>

                                    <p class="movie__time">112 min</p>

                                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Fantasy</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time11.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">World War Z (2013)  </a>

                                    <p class="movie__time">116 min</p>

                                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Horror</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.1</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time12.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">Prisoners (2013) </a>

                                    <p class="movie__time">153 min</p>

                                    <p class="movie__option"><a href="#">Crime</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time13.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">This Is the End (2013)   </a>

                                    <p class="movie__time">107 min</p>

                                    <p class="movie__option"><a href="#">Comedy</a> | <a href="#">Fantasy</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.9</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/movie/movie-time14.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.html' class="movie__title">The Internship (2013)  </a>

                                    <p class="movie__time">112 min</p>

                                    <p class="movie__option"><a href="#">Comedy</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->
                    </div>

                    <aside class="col-sm-4 col-md-3">
                        <div class="sitebar first-banner--left">
                            <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
								<h3 class="category__title">MOVIE <br><span class="title-edition">Popular</span></h3>
								<ol>
									<li><a class="category__item" href="#">Gravity</a></li>
									<li><a class="category__item" href="#">The Counselor</a></li>
									<li><a class="category__item" href="#">Bad Grandpa</a></li>
									<li><a class="category__item" href="#">Blue Is the Warmest Color</a></li>
									<li><a class="category__item" href="#">Rush</a></li>
									<li><a class="category__item" href="#">Captain Phillips</a></li>
									<li><a class="category__item" href="#">Escape Plan</a></li>
									<li><a class="category__item" href="#">Cloudy with a Chance of Meatballs 2</a></li>
									<li><a class="category__item" href="#">Prisoners</a></li>
									<li><a class="category__item" href="#">The Fifth Estate</a></li>
								</ol>
							</div>
                            <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
								<h3 class="category__title">TV<br><span class="title-edition">Popular Series</span></h3>
								<ol>
									<li><a class="category__item" href="#">Gravity</a></li>
									<li><a class="category__item" href="#">The Counselor</a></li>
									<li><a class="category__item" href="#">Bad Grandpa</a></li>
									<li><a class="category__item" href="#">Blue Is the Warmest Color</a></li>
									<li><a class="category__item" href="#">Rush</a></li>
									<li><a class="category__item" href="#">Captain Phillips</a></li>
									<li><a class="category__item" href="#">Escape Plan</a></li>
									<li><a class="category__item" href="#">Cloudy with a Chance of Meatballs 2</a></li>
									<li><a class="category__item" href="#">Prisoners</a></li>
									<li><a class="category__item" href="#">The Fifth Estate</a></li>
								</ol>
							</div>
							<h3 class="heading-special lower--hight">Movie Tags</h3>
							<ul class="tags tags--dark">
								<li class="item-wrap"><a class="tags__item" href="#">lorem ipsum </a></li>
								<li class="item-wrap"><a class="tags__item" href="#">consectetur</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">gravida</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">adipiscing</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">nunc ante</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">dapibus nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">commodo nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">quis justo</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">lorem ipsum </a></li>
								<li class="item-wrap"><a class="tags__item" href="#">consectetur</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">adipiscing</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">nunc ante</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">dapibus nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">commodo nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">quis justo</a></li>
							</ul>
							<h3 class="heading-special lower--hight">TV Tags</h3>
							<ul class="tags tags--dark">
								<li class="item-wrap"><a class="tags__item" href="#">lorem ipsum </a></li>
								<li class="item-wrap"><a class="tags__item" href="#">consectetur</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">gravida</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">adipiscing</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">nunc ante</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">dapibus nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">commodo nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">quis justo</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">lorem ipsum </a></li>
								<li class="item-wrap"><a class="tags__item" href="#">consectetur</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">adipiscing</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">nunc ante</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">dapibus nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">commodo nec</a></li>
								<li class="item-wrap"><a class="tags__item" href="#">quis justo</a></li>
							</ul>
                        </div>
                    </aside>
                </div>
            </div>

            <div class="col-sm-12">
                <h2 class="page-heading">Latest news</h2>

                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/client-photo/post-thor.jpg">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">"Thor: The Dark World" - World Premiere</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/client-photo/post-annual.jpg">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">30th Annual Night Of Stars Presented By The Fashion Group International</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/client-photo/post-awards.jpg">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">Hollywood Film Awards 2013</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
            </div>
                
        </section>
        
        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">Cities</a></li>
                        <li><a href="movie-list-left.html" class="nav-link__item">Movies</a></li>
                        <li><a href="trailer.html" class="nav-link__item">Trailers</a></li>
                        <li><a href="rates-left.html" class="nav-link__item">Rates</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="coming-soon.html" class="nav-link__item">Coming soon</a></li>
                        <li><a href="cinema-list.html" class="nav-link__item">Cinemas</a></li>
                        <li><a href="offers.html" class="nav-link__item">Best offers</a></li>
                        <li><a href="news-left.html" class="nav-link__item">News</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">Terms of use</a></li>
                        <li><a href="gallery-four.html" class="nav-link__item">Gallery</a></li>
                        <li><a href="contact.html" class="nav-link__item">Contacts</a></li>
                        <li><a href="page-elements.html" class="nav-link__item">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-vk"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                            <a href='#' class="social__variant fa fa-pinterest"></a>
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; A.Movie, 2013. All rights reserved. Done by Olia Gozha</p>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- jQuery REVOLUTION Slider -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Stars rate -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/jquery.raty.js"></script>
        
        <!-- Form element -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/form.js"></script>

        <!-- Twitter feed -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/external/twitterfeed.js"></script>

        <!-- Custom -->
        <script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/custom.js"></script>
		
	      <script type="text/javascript">
              $(document).ready(function() {
                init_Home();
              });
		    </script>

</body>

<!-- Mirrored from amovie.designzway.com/ by HTTrack Website Copier/3.x [XR&CO'2004], Wed, 08 Jul 2015 06:10:50 GMT -->
</html>
