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
		<script>var asset='<?php echo base_url(); ?>assets/themes/<?php echo THEMESET;?>/';</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        

		<?php echo $this->load->get_section('header'); ?>
		<?php echo $this->load->get_section('slider'); ?>
        
        
        <!-- Main content -->
        <section class="container">
            
            <?php echo $this->load->get_section('toprated'); ?>
            <?php echo $this->load->get_section('search'); ?>
            
            <div class="clearfix"></div>
            <div class="col-sm-12">
                <div class="row">
					<div class="col-sm-8 col-md-9">
						<?php echo $output;?>
					</div>
                    <?php echo $this->load->get_section('sidebar'); ?>
                </div>
            </div>
			<?php echo $this->load->get_section('upcoming'); ?>
                
        </section>
        
        <div class="clearfix"></div>

		<?php echo $this->load->get_section('footer'); ?>

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
