<!-- Header section header-wrapper--home-->
        <header class="header-wrapper">
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
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/28/1/Action">Action</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/12/1/Adventure">Adventure</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/16/1/Animation">Animation</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/35/1/Comedy">Comedy</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/80/1/Crime">Crime</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/99/1/Documentary">Documentary</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/18/1/Drama">Drama</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10751/1/Family">Family</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/14/1/Fantasy">Fantasy</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10769/1/Foreign">Foreign</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/36/1/History">History</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/27/1/Horror">Horror</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10402/1/Music">Music</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/9648/1/Mystery">Mystery</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10749/1/Romance">Romance</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/878/1/Science_Fiction">Science Fiction</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10770/1/TV_Movie">TV Movie</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/53/1/Thriller">Thriller</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10752/1/War">War</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/37/1/Western">Western</a></li>					
				
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Movie</a>
                            <ul>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/nowplaying">Now Playing</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/popular">Popular</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/toprated">Top Rated</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/upcoming">Up Coming</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">TV SHow</a>
                            <ul>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/on_the_air">On The Air</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/airing_today">Airing Today</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/top_rated">Top Rated</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/popular">Popular</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url();?>movies/about_us">About Us</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url();?>movies/dmca">DMCA</a>
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