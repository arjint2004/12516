<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_meta('title');?></title>
        <meta name="description" content="<?php echo get_meta('description');?>">
        <meta name="keywords" content="<?php echo get_meta('keywords');?>">
        <meta name="author" content="<?php echo $this->session->userdata('namadomain');?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/layerslider/css/layerslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/responsive.css">
</head>
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <!--header-->
        <div class="off-canvas position-left light-off-menu" id="offCanvas-responsive" data-off-canvas>
            <div class="off-menu-close">
                <h3>Menu</h3>
                <span data-toggle="offCanvas-responsive"><i class="fa fa-times"></i></span>
            </div>
            <ul class="vertical menu off-menu" data-responsive-menu="drilldown">
                <li class="has-submenu"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li class="has-submenu" data-dropdown-menu="example1">
                    <a href="#"><i class="fa fa-film"></i>Genre</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="<?php echo base_url();?>movies/genre/28/1/Action" title="Action" ><i class="fa fa-film"></i>Action</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/12/1/Adventure" title="Adventure" ><i class="fa fa-film"></i>Adventure</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/16/1/Animation" title="Animation" ><i class="fa fa-film"></i>Animation</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/35/1/Comedy" title="Comedy"><i class="fa fa-film"></i>Comedy</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/80/1/Crime" title="Crime"><i class="fa fa-film"></i>Crime</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/99/1/Documentary" title="Documentary"><i class="fa fa-film"></i>Documentary</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/18/1/Drama" title="Drama"><i class="fa fa-film"></i>Drama</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/10751/1/Family" title="Family"><i class="fa fa-film"></i>Family</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/14/1/Fantasy" title="Fantasy"><i class="fa fa-film"></i>Fantasy</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/10769/1/Foreign" title="Foreign"><i class="fa fa-film"></i>Foreign</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/36/1/History" title="History"><i class="fa fa-film"></i>History</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/27/1/Horror" title="Horror"><i class="fa fa-film"></i>Horror</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/10402/1/Music" title="Music"><i class="fa fa-film"></i>Music</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/9648/1/Mystery" title="Mystery"><i class="fa fa-film"></i>Mystery</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/10749/1/Romance" title="Romance"><i class="fa fa-film"></i>Romance</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/878/1/Science_Fiction" title="Science Fiction"><i class="fa fa-film"></i>Science Fiction</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/10770/1/TV_Movie" title="TV"><i class="fa fa-film"></i>TV Movie</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/53/1/Thriller" title="Thriller"><i class="fa fa-film"></i>Thriller</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/10752/1/War" title="War"><i class="fa fa-film"></i>War</a></li>
						<li><a href="<?php echo base_url();?>movies/genre/37/1/Western" title="Western"><i class="fa fa-film"></i>Western</a></li>
                    </ul>
                </li>
                <li class="has-submenu" data-dropdown-menu="example1">
                    <a href="#"><i class="fa fa-film"></i>Movie</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                       	<li><a href="<?php echo base_url();?>movies/nowplaying" title="Now Playing" ><i class="fa fa-film"></i>Now Playing</a></li>
						<li><a href="<?php echo base_url();?>movies/popular" title="Popular" ><i class="fa fa-film"></i>Popular</a></li>
						<li><a href="<?php echo base_url();?>movies/toprated" title="Top Rated" ><i class="fa fa-film"></i>Top Rated</a></li>
						<li><a href="<?php echo base_url();?>movies/upcoming" title="Up Coming" ><i class="fa fa-film"></i>Up Coming</a></li>
                    </ul>
                </li>
                <li class="has-submenu" data-dropdown-menu="example1">
                    <a href="#"><i class="fa fa-film"></i>TV Series</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li ><a href="<?php echo base_url();?>tv/on_the_air"  title="On The Air" ><i class="fa fa-film"></i>On The Air</a></li>
						<li ><a href="<?php echo base_url();?>tv/airing_today"  title="Airing Today"><i class="fa fa-film"></i>Airing Today</a></li>
						<li ><a href="<?php echo base_url();?>tv/top_rated"  title="Top Rated"><i class="fa fa-film"></i>Top Rated</a></li>
						<li ><a href="<?php echo base_url();?>tv/popular"  title="Popular"><i class="fa fa-film"></i>Popular</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>movies/about_us"><i class="fa fa-user"></i>about</a></li>
                <li><a href="<?php echo base_url();?>movies/dmca"><i class="fa fa-envelope"></i>DMCA</a></li>
            </ul>
            <!--<div class="responsive-search">
                <form method="post">
                    <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="search Here">
                        <div class="input-group-button">
                            <button type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="off-social">
                <h6>Get Socialize</h6>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="top-button">
                <ul class="menu">
                    <li>
                        <a href="submit-post.html">upload Video</a>
                    </li>
                    <li class="dropdown-login">
                        <a href="login.html">login/Register</a>
                    </li>
                </ul>
            </div>-->
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <header>
               
                <!--Navber-->
                <section id="navBar">
                    <nav class="sticky-container" data-sticky-container>
                        <div class="sticky topnav" data-sticky data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: #fff;" data-sticky-on="large">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large">
                                        <button class="menu-icon" type="button" data-toggle="offCanvas-responsive"></button>
                                        <div class="title-bar-title"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/logo-small.png" alt="logo"></div>
                                    </div>

                                    <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                                        <div class="top-bar-left">
                                            <ul class="menu">
                                                <li class="menu-text">
                                                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/logo.png" alt="logo"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--<div class="top-bar-right search-btn">
                                            <ul class="menu">
                                                <li class="search">
                                                    <i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>-->

                                        <div class="top-bar-right">
                                            <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                                                <li class="has-submenu active"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                                <li class="has-submenu" data-dropdown-menu="example1">
                                                    <a href="#"><i class="fa fa-film"></i>Genre</a>
                                                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                                        <li><a href="<?php echo base_url();?>movies/genre/28/1/Action" title="Action" ><i class="fa fa-film"></i>Action</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/12/1/Adventure" title="Adventure" ><i class="fa fa-film"></i>Adventure</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/16/1/Animation" title="Animation" ><i class="fa fa-film"></i>Animation</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/35/1/Comedy" title="Comedy"><i class="fa fa-film"></i>Comedy</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/80/1/Crime" title="Crime"><i class="fa fa-film"></i>Crime</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/99/1/Documentary" title="Documentary"><i class="fa fa-film"></i>Documentary</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/18/1/Drama" title="Drama"><i class="fa fa-film"></i>Drama</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/10751/1/Family" title="Family"><i class="fa fa-film"></i>Family</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/14/1/Fantasy" title="Fantasy"><i class="fa fa-film"></i>Fantasy</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/10769/1/Foreign" title="Foreign"><i class="fa fa-film"></i>Foreign</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/36/1/History" title="History"><i class="fa fa-film"></i>History</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/27/1/Horror" title="Horror"><i class="fa fa-film"></i>Horror</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/10402/1/Music" title="Music"><i class="fa fa-film"></i>Music</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/9648/1/Mystery" title="Mystery"><i class="fa fa-film"></i>Mystery</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/10749/1/Romance" title="Romance"><i class="fa fa-film"></i>Romance</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/878/1/Science_Fiction" title="Science Fiction"><i class="fa fa-film"></i>Science Fiction</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/10770/1/TV_Movie" title="TV"><i class="fa fa-film"></i>TV Movie</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/53/1/Thriller" title="Thriller"><i class="fa fa-film"></i>Thriller</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/10752/1/War" title="War"><i class="fa fa-film"></i>War</a></li>
														<li><a href="<?php echo base_url();?>movies/genre/37/1/Western" title="Western"><i class="fa fa-film"></i>Western</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu" data-dropdown-menu="example1">
                                                    <a href="#"><i class="fa fa-film"></i>Movie</a>
                                                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
														<li><a href="<?php echo base_url();?>movies/nowplaying" title="Now Playing" ><i class="fa fa-film"></i>Now Playing</a></li>
														<li><a href="<?php echo base_url();?>movies/popular" title="Popular" ><i class="fa fa-film"></i>Popular</a></li>
														<li><a href="<?php echo base_url();?>movies/toprated" title="Top Rated" ><i class="fa fa-film"></i>Top Rated</a></li>
														<li><a href="<?php echo base_url();?>movies/upcoming" title="Up Coming" ><i class="fa fa-film"></i>Up Coming</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu" data-dropdown-menu="example1">
                                                    <a href="#"><i class="fa fa-film"></i>TV Series</a>
                                                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
														<li ><a href="<?php echo base_url();?>tv/on_the_air"  title="On The Air" ><i class="fa fa-film"></i>On The Air</a></li>
														<li ><a href="<?php echo base_url();?>tv/airing_today"  title="Airing Today"><i class="fa fa-film"></i>Airing Today</a></li>
														<li ><a href="<?php echo base_url();?>tv/top_rated"  title="Top Rated"><i class="fa fa-film"></i>Top Rated</a></li>
														<li ><a href="<?php echo base_url();?>tv/popular"  title="Popular"><i class="fa fa-film"></i>Popular</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo base_url();?>movies/about_us"><i class="fa fa-user"></i>about</a></li>
                                                <li><a href="<?php echo base_url();?>movies/dmca"><i class="fa fa-envelope"></i>DMCA</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div id="search-bar" class="clearfix search-bar-light">
                                <form method="post">
                                    <div class="search-input float-left">
                                        <input type="search" name="search" placeholder="Seach Here your video">
                                    </div>
                                    <div class="search-btn float-right text-right">
                                        <button class="button" name="search" type="submit">search now</button>
                                    </div>
                                </form>
                            </div>-->
                        </div>
                    </nav>
                </section>
            </header><!-- End Header -->
			<?php echo $this->load->get_section('slider'); ?>
			<?php echo $this->load->get_section('toprated'); ?>
			<?php echo $this->load->get_section('tvpopular'); ?>

            <div class="row">
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
                                    <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p>
                                    <div class="grid-system pull-right show-for-large">
                                        <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                        <a class="secondary-button current grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                        <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="tabs-content" data-tabs-content="newVideos">
                                    <div class="tabs-panel is-active" id="new-all">
                                        <div class="row list-group">
                                            <div class="item large-4 medium-6 columns grid-medium">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns grid-medium">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item large-4 medium-6 columns grid-medium">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns grid-medium end">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-panel" id="new-hd">
                                        <div class="row list-group">
                                            <div class="item large-4 medium-6 columns grid-medium">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns grid-medium end">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center row-btn">
                                    <a class="button radius" href="all-video.html">View All Video</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ad Section -->
                    <div class="googleAdv text-center">
                        <!--<a href="#"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/goodleadv.png" alt="googel ads"></a>-->
                    </div> <!--End ad Section -->

                    <!-- popular video -->
                    <section class="content content-with-sidebar">
                        <!-- popular Videos -->
                        <div class="main-heading">
                            <div class="row secBg padding-14">
                                <div class="medium-8 small-8 columns">
                                    <div class="head-title">
                                        <i class="fa fa-star"></i>
                                        <h4>Latest View</h4>
                                    </div>
                                </div>
                                <div class="medium-4 small-4 columns">
                                    <ul class="tabs text-right pull-right" data-tabs id="popularVideos">
                                        <li class="tabs-title is-active"><a href="#popular-all"  style="width: 100px;font-weight:bold;">Movie</a></li>
                                        <li class="tabs-title"><a href="#popular-hd" style="width: 100px;font-weight:bold;">TV Series</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="row column head-text clearfix">
                                    <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p>
                                    <div class="grid-system pull-right show-for-large">
                                        <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                        <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                        <a class="secondary-button current list" href="#"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="tabs-content" data-tabs-content="popularVideos">
                                    <div class="tabs-panel is-active" id="popular-all">
                                        <div class="row list-group">
                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns list end">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-panel" id="popular-hd">
                                        <div class="row list-group">
                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="http://placehold.it/370x220" alt="new video">
                                                        <a href="single-video-v2.html" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center row-btn">
                                    <a class="button radius" href="all-video.html">View All Video</a>
                                </div>
                            </div>
                        </div>
                        <!-- ad Section -->
                        <!--<div class="googleAdv">
                            <a href="#"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/goodleadv.png" alt="googel ads"></a>
                        </div> End ad Section -->
                    </section><!-- End main content -->

                </div><!-- end left side content area -->
                <!-- sidebar -->
                <div class="large-4 columns padding-right-remove">
                    <aside class="secBg sidebar">
                        <div class="row">
                            <!-- search Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Search Videos</h5>
                                    </div>
                                    <form id="searchform" method="get" role="search">
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                            <div class="input-group-button">
                                                <input type="submit" class="button" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End search Widget -->

                            <!-- most view Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Movie Up Coming</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end most view Widget -->

                            <!-- social Fans Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>social fans</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="social-links">
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-facebook"></i>
                                                <span>698K</span>
                                                <span>fans</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-twitter"></i>
                                                <span>598</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-google-plus"></i>
                                                <span>98k</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-youtube"></i>
                                                <span>168k</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-vimeo"></i>
                                                <span>498</span>
                                                <span>followers</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End social Fans Widget -->

                            <!-- ad banner widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Airing Today (TV Series)</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="advBanner text-center">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/sideradv.png" alt="sidebar adv"></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end ad banner widget -->

                            <!-- Recent post videos -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Recent post videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "http://placehold.it/120x80" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "http://placehold.it/120x80" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "http://placehold.it/120x80" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "http://placehold.it/120x80" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Recent post videos -->

                            <!-- tags -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Movie Last Search Terms</h5>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="#">3D Videos</a>
                                        <a href="#">Videos</a>
                                        <a href="#">HD</a>
                                        <a href="#">Movies</a>
                                        <a href="#">Sports</a>
                                        <a href="#">3D</a>
                                        <a href="#">Movies</a>
                                        <a href="#">Animation</a>
                                        <a href="#">HD</a>
                                        <a href="#">Music</a>
                                        <a href="#">Recreation</a>
                                    </div>
                                </div>
                            </div><!-- End tags -->
                            <!-- tags -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>TV Last Search Terms</h5>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="#">3D Videos</a>
                                        <a href="#">Videos</a>
                                        <a href="#">HD</a>
                                        <a href="#">Movies</a>
                                        <a href="#">Sports</a>
                                        <a href="#">3D</a>
                                        <a href="#">Movies</a>
                                        <a href="#">Animation</a>
                                        <a href="#">HD</a>
                                        <a href="#">Music</a>
                                        <a href="#">Recreation</a>
                                    </div>
                                </div>
                            </div><!-- End tags -->
                        </div>
                    </aside>
                </div><!-- end sidebar -->
            </div>

            <!-- footer -->
            <footer>
                <div class="row">
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>About Betube</h5>
                            </div>
                            <div class="textwidget">
                                Betube video wordpress theme lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s book.
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent Videos</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "http://placehold.it/80x80" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "http://placehold.it/80x80" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "http://placehold.it/80x80" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Movies Tags</h5>
                            </div>
                            <div class="tagcloud">
                                <a href="#">3D Videos</a>
                                <a href="#">Videos</a>
                                <a href="#">HD</a>
                                <a href="#">Movies</a>
                                <a href="#">Sports</a>
                                <a href="#">3D</a>
                                <a href="#">Movies</a>
                                <a href="#">Animation</a>
                                <a href="#">HD</a>
                                <a href="#">Music</a>
                                <a href="#">Recreation</a>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>TV Series Tags</h5>
                            </div>
                            <div class="tagcloud">
                                <a href="#">3D Videos</a>
                                <a href="#">Videos</a>
                                <a href="#">HD</a>
                                <a href="#">Movies</a>
                                <a href="#">Sports</a>
                                <a href="#">3D</a>
                                <a href="#">Movies</a>
                                <a href="#">Animation</a>
                                <a href="#">HD</a>
                                <a href="#">Music</a>
                                <a href="#">Recreation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up"></i></a>
            </footer><!-- footer -->
            <div id="footer-bottom">
                <div class="logo text-center">
                    <img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/footerlogo.png" alt="footer logo">
                </div>
                <div class="btm-footer-text text-center">
                    <p>2016 © Betube video wordpress theme.</p>
                </div>
            </div>
        </div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->
</div><!--end off canvas wrapper-->
<!-- script files -->
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/bower_components/what-input/what-input.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/bower_components/foundation-sites/dist/foundation.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/jquery.showmore.src.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/inewsticker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/js/jquery.kyco.easyshare.js" type="text/javascript"></script>
</body>
</html>