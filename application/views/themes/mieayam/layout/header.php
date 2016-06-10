<!-- Header section header-wrapper--home-->
        <header class="header-wrapper">
            <div class="container">
                <!-- Logo link-->
                <a href='<?php echo base_url();?>' title="logo" class="logo">
                    <img alt='logo' src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle" title="navigation" >
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li><span class="sub-nav-toggle plus"></span><a title="Home" href="<?php echo base_url();?>">Home</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Movie Genre</a>
                            <ul>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/28/1/Action" title="Action" >Action</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/12/1/Adventure" title="Adventure" >Adventure</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/16/1/Animation" title="Animation" >Animation</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/35/1/Comedy" title="Comedy">Comedy</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/80/1/Crime" title="Crime">Crime</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/99/1/Documentary" title="Documentary">Documentary</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/18/1/Drama" title="Drama">Drama</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10751/1/Family" title="Family">Family</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/14/1/Fantasy" title="Fantasy">Fantasy</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10769/1/Foreign" title="Foreign">Foreign</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/36/1/History" title="History">History</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/27/1/Horror" title="Horror">Horror</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10402/1/Music" title="Music">Music</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/9648/1/Mystery" title="Mystery">Mystery</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10749/1/Romance" title="Romance">Romance</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/878/1/Science_Fiction" title="Science Fiction">Science Fiction</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10770/1/TV_Movie" title="TV">TV Movie</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/53/1/Thriller" title="Thriller">Thriller</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/10752/1/War" title="War">War</a></li>
											<li  class="menu__nav-item"><a href="<?php echo base_url();?>movies/genre/37/1/Western" title="Western">Western</a></li>					
				
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Movie</a>
                            <ul>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/nowplaying" title="Now Playing" >Now Playing</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/popular" title="Popular" >Popular</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/toprated" title="Top Rated" >Top Rated</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>movies/upcoming" title="Up Coming" >Up Coming</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">TV SHow</a>
                            <ul>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/on_the_air"  title="On The Air" >On The Air</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/airing_today"  title="Airing Today">Airing Today</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/top_rated"  title="Top Rated">Top Rated</a></li>
								<li class="menu__nav-item" ><a href="<?php echo base_url();?>tv/popular"  title="Popular">Popular</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url();?>movies/about_us"  title="About Us" >About Us</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url();?>movies/dmca"  title="DMCA" >DMCA</a>
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
                      <!--<a href="#" class="btn btn--sign btn--singin">
                          Log In
                      </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li>
                        </ul>-->

                    </div>
                    
                </div>

            </div>
        </header>