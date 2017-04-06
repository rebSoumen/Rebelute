<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<title>Thank You For Your Payment - Rebelute</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>
	
	<?php $this->load->view('main_template/header');?>

	<!-- Document Title
	============================================= -->
	<title>Thank you</title>
	
	<style>
	#page-title span {
    display: initial !important;}
	
	.testcolor .pricing-box:hover {
    -webkit-box-shadow: 0px 0px 18px 0px rgba(255,255,255,1);
    -moz-box-shadow: 0px 0px 18px 0px rgba(255,255,255,1);
    box-shadow: 0px 0px 18px 0px rgba(255,255,255,1);
    transform: scale(1.1);
    border-radius: 5px;
    cursor: pointer;
    }
	
	.testcolor .pricing-box {
	transition: all .2s ease-in-out;
    }

	</style>

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header dark" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->
		
		<!-- Page Title
		============================================= -->
		
		<section id="page-title" class="page-title-parallax page-title page-title-left" style="padding: 84px 0px 167px; background-image: url('<?php echo base_url();?>assets/main_site/images/thank_you_banner.png'); background-size: cover; background-position: 50% -20px;" data-stellar-background-ratio="0.2">
		
	   <div class="container clearfix center">
	   
	   <h1 class="textwhite topmargin-lg">Thank You For Your Payment</h1>
		<span class="textwhite">Click The Button Below If Not Redirected To The Home Page In 10 Seconds.</span><br/>
		<a href="<?php echo base_url();?>" class=" button button-rounded button-reveal button-large button-border btntransparent tright" style="margin-top:20px !important;"><i class="icon-arrow-down"></i>
		<span class="textwhite" style="margin-top:0px !important;">Home Page</span></a>
		
		<div class="clear"></div>
	   
	     <div class="hidden-xs hidden-sm hidden-lg hidden-md col-md-3 col-sm-12 topmargin testcolor"> 
		     <img src="<?php echo base_url();?>assets/main_site/images/test.png"/>
		 </div>
	   
	   
	     <div class="hidden-xs hidden-sm hidden-lg hidden-md col-md-3 col-sm-12 topmargin testcolor">
		     <img src="<?php echo base_url();?>assets/main_site/images/test.png"/>
		 </div>
		 
		 <div class="hidden-xs hidden-sm hidden-lg hidden-md col-md-3 col-sm-12 topmargin testcolor">
			 <img src="<?php echo base_url();?>assets/main_site/images/test.png"/>
		 </div>
		 
		 <div class="hidden-xs hidden-sm hidden-lg hidden-md col-md-3 col-sm-12 col_last topmargin testcolor">
			 <img src="<?php echo base_url();?>assets/main_site/images/test.png"/>
		 </div>
		
		</div>
	  </section>
	 
		<?php header("Refresh: 10;url=".base_url());?>	