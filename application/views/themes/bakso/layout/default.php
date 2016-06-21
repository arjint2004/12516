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
        
			<?php echo $this->load->get_section('header'); ?>
			<?php echo $this->load->get_section('slider'); ?>
			<?php echo $this->load->get_section('popularmovie'); ?>
			<?php echo $this->load->get_section('tvpopular'); ?>

            <div class="row">
				<!-- left side content area -->
					<div class="large-8 columns">
						<section class="content content-with-sidebar">

						<?php echo $output;?>
						</section>
						<!-- ad Section -->
						<div class="googleAdv text-center">
							<!--<a href="#"><img src="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/images/goodleadv.png" alt="googel ads"></a>-->
						</div> <!--End ad Section -->
						
					</div>
                <!-- sidebar -->
                <div class="large-4 columns padding-right-remove">
                    <?php echo $this->load->get_section('sidebar'); ?>
                </div><!-- end sidebar -->
            </div>

            <?php echo $this->load->get_section('footer'); ?>
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