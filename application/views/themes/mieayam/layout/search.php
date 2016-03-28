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
						  <?php echo form_open(base_url().'movies/search', array('name'=>'search','id'=>'formsearch','class'=>'formsearch','method'=>'get')); ?>
                          <input name="s" type='text' class="select__field">
                          <input name="type" type='hidden' id="q_select__field" value="movie">
                          <input name="page" type='hidden'  value="1">
                          
                          <div class="select__btn">
                            <a href="#" onclick="$('form#formsearch').submit();" class="btn btn-md btn--danger cinema" style="display: inline-block;">Find <span class="hidden-exrtasm">Movie</span></a>
                            <a href="#" onclick="$('form#formsearch').submit();" class="btn btn-md btn--danger actors">Find <span class="hidden-exrtasm">TV Series</span></a>
                          </div>
						  <?php echo form_close();?>
                          <div class="select__dropdowns">

                              <!--<ul class="select__group cinema">
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
                              </ul>-->
                          </div>
                      </div>
                  </div>
            </div>