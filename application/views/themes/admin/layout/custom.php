<script type="text/javascript">
jQuery(function($) {
					$(".no-skin .nav-list > li .submenu > li > a").on('click',function(e){
							var thisobj=$(this);
							switch($(thisobj).parent('li').parent('ul').parent('li').attr('id'))
							{
								//Area AGC
								case 'agc_menu':
										switch($(thisobj).parent('li').attr('id'))
											{
												case 'movie':
													$("div#page_content_load").append("<div class=\"error-box\" style='display: block; top: 50%; position: fixed; left: 46%;'></div>");
													// $(".error-box").delay(100).html('Sedang proses UPLOAD');
													$.ajax({
														type: "POST",
														data: '<?php echo $this->security->get_csrf_token_name();?>=<?php echo $this->security->get_csrf_hash(); ?>&'+$("form#filterpelajaran").serialize(),
														url: '<?php echo base_url('admins/movies/')?>',
														beforeSend: function() {
															 $("div#page_content_load").append("<div class=\"error-box\" style='display: block; top: 50%; position: fixed; left: 46%;'></div>");
															 $(".error-box").delay(200).html('Mengambil data');
														},
														error	: function(){
																alert('Error! gagal mengambil data');						
														},
														success: function(output) {
															$('div#page_content_load').html(output);
															$(".error-box").delay(100).fadeOut("slow",function(){
																$(this).remove();
															});	
														}
													});
													return false;												
												break;
												
												case 'agoda':
													alert('agoda');
													return false;	
												break;
												
												case 'alibaba':
													alert('alibaba');
													return false;	
												break;
												
												case 'aliexpress':
													alert('aliexpress');
													return false;	
												break;
												
												default:
												
												break;
											  
											}	

									
								break;
								
								
								default:
								
								break;
							  
							}					

					});
});
</script>				
