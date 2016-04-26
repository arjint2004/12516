								<script src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESETADMIN;?>/js/bootstrap-tag.js"></script>
													 <script type="text/javascript">
														 $('.page-header h1#title_dashboard').html('Movie');
														 
														 function display_code_agc(url='') {
																	var modal = $(document.body).find('#code-modal-agc');
																	if(modal.length == 0) {
																		modal = $('<div id="code-modal-agc" class="modal fade code-modal" tabindex="-1" role="dialog" aria-labelledby="CodeDialog" aria-hidden="true">\
																		  <div class="modal-dialog modal-lg">\
																			<div class="modal-content">\
																				<div class="modal-header">\
																				  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>\
																				  <i class="fa fa-file-o"></i>\
																				</div>\
																				<div class="modal-body"></div>\
																			</div>\
																		  </div>\
																		</div>').appendTo('body');
																	}
																	
																	modal.find('.modal-body').load(url);
																	modal.modal('show');
														}
														$("#setting-agc").on('click',function(e){
															display_code_agc('<?php echo base_url('admins/movies/setting'); ?>');
														});
														$("#tambah-domain").on('click',function(e){
															display_code_agc('<?php echo base_url('admins/movies/tambahdomain'); ?>');
														});
														$("#histats-domain").on('click',function(e){
															display_code_agc('<?php echo base_url('admins/movies/histats'); ?>');
														});
														$("#sitemap-domain").on('click',function(e){
															display_code_agc('<?php echo base_url('admins/movies/sitemap'); ?>');
														});
														
														 var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
														  var data = [
															{ label: "T1",  data: 33, color: "#68BC31"},
															{ label: "T2",  data: 33, color: "#2091CF"},
															{ label: "ITL",  data: 33, color: "#AF4E96"}
														  ]
														  function drawPieChart(placeholder, data, position) {
															  $.plot(placeholder, data, {
																series: {
																	pie: {
																		show: true,
																		tilt:0.8,
																		highlight: {
																			opacity: 0.25
																		},
																		stroke: {
																			color: '#fff',
																			width: 2
																		},
																		startAngle: 2
																	}
																},
																legend: {
																	show: true,
																	position: position || "ne", 
																	labelBoxBorderColor: null,
																	margin:[-30,15]
																}
																,
																grid: {
																	hoverable: true,
																	clickable: true
																}
															 })
														 }
														 drawPieChart(placeholder, data);
														  /**
															 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
															 so that's not needed actually.
															 */
															 placeholder.data('chart', data);
															 placeholder.data('draw', drawPieChart);
															
															
															  //pie chart tooltip example
															  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
															  var previousPoint = null;
															
															  placeholder.on('plothover', function (event, pos, item) {
																if(item) {
																	if (previousPoint != item.seriesIndex) {
																		previousPoint = item.seriesIndex;
																		var tip = item.series['label'] + " : " + item.series['percent']+'%';
																		$tooltip.show().children(0).text(tip);
																	}
																	$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
																} else {
																	$tooltip.hide();
																	previousPoint = null;
																}
																
															 });
														//tag	 
														var tag_input = $('#form-field-tags');
															try{
																tag_input.tag(
																  {
																	placeholder:tag_input.attr('placeholder'),
																	//enable typeahead by specifying the source array
																	source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
																	/**
																	//or fetch data from database, fetch those that match "query"
																	source: function(query, process) {
																	  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
																	  .done(function(result_items){
																		process(result_items);
																	  });
																	}
																	*/
																  }
																)
														
																//programmatically add a new
																var $tag_obj = $('#form-field-tags').data('tag');
																$tag_obj.add('Programmatically Added');
															}
															catch(e) {
																//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
																tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
																//$('#form-field-tags').autosize({append: "\n"});
															}
															
															//file
															$('#id-input-file-1 , #id-input-file-2').ace_file_input({
																no_file:'No File ...',
																btn_choose:'Choose',
																btn_change:'Change',
																droppable:false,
																onchange:null,
																thumbnail:false //| true | large
																//whitelist:'gif|png|jpg|jpeg'
																//blacklist:'exe|php'
																//onchange:''
																//
															});
															//pre-show a file name, for example a previously selected file
															//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
														
														
															$('#id-input-file-3').ace_file_input({
																style:'well',
																btn_choose:'Drop files here or click to choose',
																btn_change:null,
																no_icon:'ace-icon fa fa-cloud-upload',
																droppable:true,
																thumbnail:'small'//large | fit
																//,icon_remove:null//set null, to hide remove/reset button
																/**,before_change:function(files, dropped) {
																	//Check an example below
																	//or examples/file-upload.html
																	return true;
																}*/
																/**,before_remove : function() {
																	return true;
																}*/
																,
																preview_error : function(filename, error_code) {
																	//name of the file that failed
																	//error_code values
																	//1 = 'FILE_LOAD_FAILED',
																	//2 = 'IMAGE_LOAD_FAILED',
																	//3 = 'THUMBNAIL_FAILED'
																	//alert(error_code);
																}
														
															}).on('change', function(){
																//console.log($(this).data('ace_input_files'));
																//console.log($(this).data('ace_input_method'));
															});
															
															
															//$('#id-input-file-3')
															//.ace_file_input('show_file_list', [
																//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
																//{type: 'file', name: 'hello.txt'}
															//]);
														
															
															
														
															//dynamically change allowed formats by changing allowExt && allowMime function
															$('#id-file-format').removeAttr('checked').on('change', function() {
																var whitelist_ext, whitelist_mime;
																var btn_choose
																var no_icon
																if(this.checked) {
																	btn_choose = "Drop images here or click to choose";
																	no_icon = "ace-icon fa fa-picture-o";
														
																	whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
																	whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
																}
																else {
																	btn_choose = "Drop files here or click to choose";
																	no_icon = "ace-icon fa fa-cloud-upload";
																	
																	whitelist_ext = null;//all extensions are acceptable
																	whitelist_mime = null;//all mimes are acceptable
																}
																var file_input = $('#id-input-file-3');
																file_input
																.ace_file_input('update_settings',
																{
																	'btn_choose': btn_choose,
																	'no_icon': no_icon,
																	'allowExt': whitelist_ext,
																	'allowMime': whitelist_mime
																})
																file_input.ace_file_input('reset_input');
																
																file_input
																.off('file.error.ace')
																.on('file.error.ace', function(e, info) {
																	//console.log(info.file_count);//number of selected files
																	//console.log(info.invalid_count);//number of invalid files
																	//console.log(info.error_list);//a list of errors in the following format
																	
																	//info.error_count['ext']
																	//info.error_count['mime']
																	//info.error_count['size']
																	
																	//info.error_list['ext']  = [list of file names with invalid extension]
																	//info.error_list['mime'] = [list of file names with invalid mimetype]
																	//info.error_list['size'] = [list of file names with invalid size]
																	
																	
																	/**
																	if( !info.dropped ) {
																		//perhapse reset file field if files have been selected, and there are invalid files among them
																		//when files are dropped, only valid files will be added to our file array
																		e.preventDefault();//it will rest input
																	}
																	*/
																	
																	
																	//if files have been selected (not dropped), you can choose to reset input
																	//because browser keeps all selected files anyway and this cannot be changed
																	//we can only reset file field to become empty again
																	//on any case you still should check files with your server side script
																	//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
																});
															
															});
															
															
															//JQGRID
													 </script>
								<div class="row">
									<div class="col-sm-12">
										<button class="btn btn-default btn-app" id="setting-agc">
											<i class="ace-icon fa fa-cog bigger-230"></i>
											Setting
										</button>
										<button class="btn btn-app btn-warning" id="sitemap-domain">
											<i class="ace-icon fa fa-sitemap bigger-230"></i>
											Sitemap
										</button>
										<button class="btn btn-app btn-pink" id="histats-domain">
											<i class="ace-icon fa fa-line-chart bigger-230"></i>
											Histats
										</button>
										<a class="btn btn-app btn-success" href="#" id="tambah-domain">
											<i class="ace-icon fa fa-plus bigger-230"></i>
											Domain
										</a>
										<div class="hr hr-24"></div>
									</div>
								</div>
								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-12 infobox-container">
										<!-- #section:pages/dashboard.infobox -->
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">comments + 2 reviews</div>
											</div>

											<!-- #section:pages/dashboard.infobox.stat -->
											<div class="stat stat-success">8%</div>

											<!-- /section:pages/dashboard.infobox.stat -->
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">new followers</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">8</span>
												<div class="infobox-content">new orders</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-flask"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">7</span>
												<div class="infobox-content">experiments</div>
											</div>
										</div>

										<div class="infobox infobox-orange2">
											<!-- #section:pages/dashboard.infobox.sparkline -->
											<div class="infobox-chart">
												<span data-values="196,128,202,177,154,94,100,170,224" class="sparkline"><canvas style="display: inline-block; width: 44px; height: 34px; vertical-align: top;" width="44" height="34"></canvas></span>
											</div>

											<!-- /section:pages/dashboard.infobox.sparkline -->
											<div class="infobox-data">
												<span class="infobox-data-number">6,251</span>
												<div class="infobox-content">pageviews</div>
											</div>

											<div class="badge badge-success">
												7.2%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-blue2">
											<div class="infobox-progress">
												<!-- #section:pages/dashboard.infobox.easypiechart -->
												<div data-size="46" data-percent="42" class="easy-pie-chart percentage" style="height: 46px; width: 46px; line-height: 45px;">
													<span class="percent">42</span>%
												<canvas height="46" width="46"></canvas></div>

												<!-- /section:pages/dashboard.infobox.easypiechart -->
											</div>

											<div class="infobox-data">
												<span class="infobox-text">traffic used</span>

												<div class="infobox-content">
													<span class="bigger-110">~</span>
													58GB remaining
												</div>
											</div>
										</div>

										<!-- /section:pages/dashboard.infobox -->
										<div class="space-6"></div>

										<!-- #section:pages/dashboard.infobox.dark -->
										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<!-- #section:pages/dashboard.infobox.easypiechart -->
												<div data-size="39" data-percent="61" class="easy-pie-chart percentage" style="height: 39px; width: 39px; line-height: 38px;">
													<span class="percent">61</span>%
												<canvas height="39" width="39"></canvas></div>

												<!-- /section:pages/dashboard.infobox.easypiechart -->
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Task</div>
												<div class="infobox-content">Completion</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<!-- #section:pages/dashboard.infobox.sparkline -->
											<div class="infobox-chart">
												<span data-values="3,4,2,3,4,4,2,2" class="sparkline"><canvas style="display: inline-block; width: 39px; height: 20px; vertical-align: top;" width="39" height="20"></canvas></span>
											</div>

											<!-- /section:pages/dashboard.infobox.sparkline -->
											<div class="infobox-data">
												<div class="infobox-content">Earnings</div>
												<div class="infobox-content">$32,000</div>
											</div>
										</div>

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-download"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Downloads</div>
												<div class="infobox-content">1,205</div>
											</div>
										</div>

										<!-- /section:pages/dashboard.infobox.dark -->
									</div>

									
								</div>		
								
								<br />
								<br />
								<br />
								<div class="hr hr-24"></div>
								
								
								
								<div class="row">
									<div class="col-sm-7">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													Web Domains
												</h4>

												<div class="widget-toolbar">
													<a data-action="collapse" href="#">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Nama Domain
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Index
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>status
																</th>
															</tr>
														</thead>

														<tbody>
															<?php for($i=0;$i<=1;$i++){?>
															<tr>
																<td>internet.com</td>

																<td>
																	<b class="red">Deindex</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">Mati</span>
																</td>
															</tr>

															<tr>
																<td>online.com</td>

																<td>
																	<b class="green">Index</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">Hidup</span>
																</td>
															</tr>
															<? } ?>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Jumlah Klik
												</h5>

												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														<button class="btn btn-minier btn-primary">
															This Week
															<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
														</button>

														<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
															<li class="active">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																	This Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	This Month
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Month
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<!-- #section:plugins/charts.flotchart -->
													
													 
													<div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 591px; height: 150px;" width="591" height="150"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 591px; height: 150px;" width="591" height="150"></canvas><div class="legend"><div style="position: absolute; width: 90px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div></div></td><td class="legendLabel">social networks</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div></div></td><td class="legendLabel">search engines</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div></div></td><td class="legendLabel">ad campaigns</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div></div></td><td class="legendLabel">direct traffic</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div></div></td><td class="legendLabel">other</td></tr></tbody></table></div></div>

													<!-- /section:plugins/charts.flotchart -->
													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<!-- #section:custom/extra.grid -->
														<div class="grid3">
															<h4 class="bigger pull-right">T1: 1255 Klik</h4>
														</div>

														<div class="grid3">
															<h4 class="bigger pull-right">T2: 941 Klik</h4>
														</div>

														<div class="grid3">
															<h4 class="bigger pull-right">ITL: 345 Klik</h4>
														</div>

														<!-- /section:custom/extra.grid -->
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div>
								</div>
								<div class="hr hr-24"></div>
								<div class="row">

									<div class="col-xs-12 col-sm-7">
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Tambah Domain</h4>

													<div class="widget-toolbar">
														<a data-action="collapse" href="#">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a data-action="close" href="#">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</div>
												</div>

												<div class="widget-body" style="display: block;">
													<div class="widget-main">
													<form class="form-horizontal" role="form">
														<!-- #section:elements.form -->
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Domain </label>

															<div class="col-sm-9">
																<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Title </label>

															<div class="col-sm-9">
																<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
															</div>
														</div>
														
														<div class="space-4"></div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Meta Description </label>

															<div class="col-sm-9">
																<textarea  id="form-field-1-1" placeholder="Meta Tag Deskripsi" class="form-control"></textarea>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Meta keyword </label>

															<div class="col-sm-9">
																<textarea  id="form-field-1-1" placeholder="Meta Tag Deskripsi" class="form-control"></textarea>
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input by text</label>

															<div class="col-sm-9">
																<!-- #section:plugins/input.tag-input -->
																<div class="inline">
																	<input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
																</div>

																<!-- /section:plugins/input.tag-input -->
															</div>
														</div>
														
														<div class="space-4"></div>

														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Sumber Data</label>

															<div class="col-sm-9">
																<select class="form-control" name="datasource">
																	<option value="api"> API Movie </option>
																	<option value="db"> Database </option>
																</select>
															</div>
														</div>
														<div class="space-4"></div>

														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Themes</label>

															<div class="col-sm-9">
																<select class="form-control" name="datasource">
																	<option value="api"> Miayam </option>
																	<option value="db"> Bakso </option>
																</select>
															</div>
														</div>
														
														<!-- /section:elements.form -->
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Tag input by file </label>
															<div class="col-sm-9">
																<input multiple="" type="file" id="id-input-file-2" />

																<!-- /section:custom/file-input -->
															</div>
														</div>
														
														<div class="space-4"></div>

														<div class="clearfix form-actions">
															<div class="col-md-offset-3 col-md-9">
																<button class="btn btn-info" type="button">
																	<i class="ace-icon fa fa-check bigger-110"></i>
																	Submit
																</button>

																&nbsp; &nbsp; &nbsp;
																<button class="btn" type="reset">
																	<i class="ace-icon fa fa-undo bigger-110"></i>
																	Reset
																</button>
															</div>
														</div>
													</form>													
													</div>
												</div>
											</div>
									</div>
									<div class="col-xs-12 col-sm-5">
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Setting Offer Movie</h4>

													<div class="widget-toolbar">
														<a data-action="collapse" href="#">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a data-action="close" href="#">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</div>
												</div>

												<div class="widget-body" style="display: block;">
													<div class="widget-main">
														<form class="form-horizontal" role="form">
															<!-- #section:elements.form -->
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sub ID </label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="Sub ID" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Aff ID </label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="Affiliate ID" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Offer T1 </label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="ID Offer T1" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Offer T2</label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="ID Offer T2" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Offer ITL</label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="ID Offer ITL" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>

															<div class="clearfix form-actions">
																<div class="col-md-offset-3 col-md-9">
																	<button class="btn btn-info" type="button">
																		<i class="ace-icon fa fa-check bigger-110"></i>
																		Submit
																	</button>

																	&nbsp; &nbsp; &nbsp;
																	<button class="btn" type="reset">
																		<i class="ace-icon fa fa-undo bigger-110"></i>
																		Reset
																	</button>
																</div>
															</div>
														</form>															
													</div>
												</div>
											</div>
									</div>
									<div class="col-xs-12 col-sm-5">
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Setting Offer Alibaba / Aliexpress / Agoda</h4>

													<div class="widget-toolbar">
														<a data-action="collapse" href="#">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a data-action="close" href="#">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</div>
												</div>

												<div class="widget-body" style="display: block;">
													<div class="widget-main">
														<form class="form-horizontal" role="form">
															<!-- #section:elements.form -->
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sub ID </label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="Sub Id" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Aff ID </label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="Affiliate ID" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Offer </label>

																<div class="col-sm-9">
																	<input type="text" id="form-field-1" placeholder="Offer ID" class="col-xs-10 col-sm-5" />
																</div>
															</div>
															<div class="space-4"></div>

															<div class="clearfix form-actions">
																<div class="col-md-offset-3 col-md-9">
																	<button class="btn btn-info" type="button">
																		<i class="ace-icon fa fa-check bigger-110"></i>
																		Submit
																	</button>

																	&nbsp; &nbsp; &nbsp;
																	<button class="btn" type="reset">
																		<i class="ace-icon fa fa-undo bigger-110"></i>
																		Reset
																	</button>
																</div>
															</div>
														</form>															
													</div>
												</div>
											</div>
									</div>
								</div>