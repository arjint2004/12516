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