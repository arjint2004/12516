<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from beetube.me/html-template/single-video-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2016 16:37:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeTube video</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/player/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/layerslider/css/layerslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/jquery.kyco.easyshare.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/css/responsive.css">
	<script>var asset='<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/';</script>
</head>
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <?php $this->load->view('themes/'.THEMESET.'/layout/header');?>
            <!--breadcrumbs-->
            <section id="breadcrumb">
                <div class="row">
                    <div class="large-12 columns">
                        <nav aria-label="You are here:" role="navigation">
                            <ul class="breadcrumbs">
                                <li><i class="fa fa-home"></i><a href="home-v1.html">Home</a></li>
                                <li><a href="#">Animation</a></li>
                                <li class="disabled">Gene Splicing</li>
                                <li>
                                    <span class="show-for-sr">Current: </span> Comedy video
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section><!--end breadcrumbs-->
            <!-- full width Video -->
            <section class="fullwidth-single-video">
			<?php echo $this->load->get_section('player');?>
            </section>
            <div class="row">
                <!-- left side content area -->
                <div class="large-8 columns">
                    <?php echo $output;?>
                </div><!-- end left side content area -->
                <!-- sidebar -->
                <div class="large-4 columns">
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

<!-- Mirrored from beetube.me/html-template/single-video-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2016 16:37:27 GMT -->
</html>