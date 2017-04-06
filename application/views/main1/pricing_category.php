<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<title>Pricing Category - Rebelute</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>

        <?php $this->load->view('main_template/header');?>
    
	
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
						<a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Canvas Logo"></a>
						<a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->
		
		<!-- Page Title
		============================================= -->
		
		<section id="page-title" class="page-title-parallax page-title page-title-left" style="padding: 84px 0px 167px; background-image: url('<?php echo base_url();?>assets/main_site/images/pricing_model_banner.png'); background-size: cover; background-position: 50% -20px;" data-stellar-background-ratio="0.2">
		
	   <div class="container clearfix">
	   
	     <div class="hidden-xs hidden-sm hidden-md" style="margin-left:43px;float:left;"> 
		 &nbsp;
		 </div>
	   
	   
	     <div class="col-md-3 col-sm-12 notopmargin pricing testcolor">
		                     <div class="pricing-box">
										<div class="pricing-title yellowbackground">
											<h3>Get quote for a Website</h3>
										</div>
										<div class="pricing-price">
											<span class="price-unit">&#36;</span>399<!--span class="price-tenure">/mo</span-->
										</div>
										<div class="pricing-features">
											<ul>
												<li><strong>Choose Features:</strong></li>
												<li>opt for SEO services</li>
												<li>ecommerce  customizations</li>
												<li>Mobile and tablet design</li>
												<li>quick turnaround time</li>
												<li>Social Media integration</li>
												<li>Live chat</li>
											</ul>
										</div>
										<div class="pricing-action">
											<a href="<?php echo base_url();?>project-estimate" class="btn btn-danger btn-block btn-lg">Get Started</a>
										</div>
							 </div>
		 </div>
		 
		 <div class="col-md-offset-1 col-md-3 col-sm-12 pricing testcolor">
		     <div class="pricing-box">
										<div class="pricing-title greenbackground">
											<h3>Get a monthly quote</h3>
										</div>
										<div class="pricing-price">
											<span class="price-unit">&#36;</span>2500
										</div>
										<div class="pricing-features" style="padding-bottom: 101px;">
											<ul>
												<li><strong>Choose Features:</strong></li>
												<li>Number of resources</li>
												<li>Experience level</li>
												<li>Role based resources</li>
											</ul>
										</div>
										<div class="pricing-action">
											<a href="<?php echo base_url();?>monthly-estimate" class="btn btn-danger btn-block btn-lg">Get Started</a>
										</div>
							 </div>
		 </div>
		 
		 <div class="col-md-offset-1 col-md-3 col-sm-12 pricing testcolor">
		    <div class="pricing-box">
										<div class="pricing-title bluebackground">
											<h3>Get a hourly quote</h3>
										</div>
										<div class="pricing-price">
											<span class="price-unit">&#36;</span>20USD
										</div>
										<div class="pricing-features" style="padding-bottom:69px;">
											<ul>
												<li><strong>Choose Features:</strong></li>
												<li>Number of resources</li>
												<li>Hours required</li>
												<li>Experience level</li>
												<li>Role based resources</li>
											</ul>
										</div>
										<div class="pricing-action">
											<a href="<?php echo base_url();?>hourly-estimate" class="btn btn-danger btn-block btn-lg">Get Started</a>
										</div>
							 </div>
		 </div>
		
		</div>
	  </section>
	 
		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<!--<section id="content">

			<div class="content-wrap" style="padding-top:0px;">
			
			  <div class="clear"></div><div class="topmargin"></div>
			  
			         <div class="container clearfix bottommargin">
							
					 </div>
					 
				
				
			
				</div>

					
					
			</div>

		</section> #content end -->
		
		
		  <!-- Modal -->
		<div class="modal1 mfp-hide" id="myModal1">
			<div class="block divcenter" style="background-color: #FFF; max-width: 700px;">
				<div class="row nomargin clearfix">
					<div class="col-sm-6" data-height-lg="565" data-height-md="565" data-height-sm="565" data-height-xs="0" data-height-xxs="0" style="background-image: url(<?php echo base_url();?>assets/main_site/one-page/images/page/4.jpg); background-size: cover;"></div>
					<div class="col-sm-6 col-padding" data-height-lg="565" data-height-md="565" data-height-sm="565" data-height-xs="565" data-height-xxs="565">
						<div>
						<h4 class="uppercase ls1">Contact Us</h4>
						<form action="<?php echo base_url();?>home/save_serviceInfo" method="post" class="clearfix" style="max-width: 300px;" onsubmit="return validate();">
							<div class="col_full">
								<label for="" class="capitalize t600">Name:</label>
								<input type="text" id="name"  name="name" class="sm-form-control" />
								<span id="err_name" class="error" style="display:none;color:red;">Please Enter Name</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Email:</label>
								<input type="email" id="email"  name="email"  class="sm-form-control" />
								<span id="err_email" class="error" style="display:none;color:red;">Please Enter Email</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Phone:</label>
								<input type="text" id="phone"  name="phone" class="sm-form-control" />
								<span id="err_phone" class="error" style="display:none;color:red;">Please Enter Phone</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Message:</label>
								<textarea name="message" id="message"  class="sm-form-control" style="resize:none;"></textarea>
							    <span id="err_message" class="error" style="display:none;color:red;">Please Enter Message</span>
							</div>
                                                    
                                                    <div class="col_full">
							<div class="g-recaptcha" data-sitekey="6Le44yETAAAAAJqm_rplMDaKvUpQH8GxDUx-3gF6"></div>
						    </div>
                                                    
							<div class="col_full nobottommargin">
								<button type="submit" class="button button-rounded button-small button-dark nomargin" value="submit">Submit</button>
							</div>
						</form>
						<p class="nobottommargin"><small class="t300"><em></em></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		 <script src='https://www.google.com/recaptcha/api.js'></script>
                 
		<script type="text/javascript" src="<?php echo base_url();?>assets/main_site/js/jquery.maskedinput.js"></script>
        
		<script type="text/javascript">
			$(function() {
				$.mask.definitions['~'] = "[+-]";
				
				$("#phone").mask("(999) 999-9999");
				
				
			   
			});
			
			function validate()
			{
				$(".error").hide();
				var name =$("#name").val();
				var email =$("#email").val();
				var phone =$("#phone").val();
				var message =$("#message").val();
				if(name=="")
				{
					$("#err_name").show();
					return false;
				}
				if(email=="")
				{
					$("#err_email").show();
					return false;
				}
				if(phone=="")
				{
					$("#err_phone").show();
					return false;
				}
				if(message=="")
				{
					$("#err_message").show();
					return false;
				}
				return true;
			}
			
		</script>
		
		<?php  $result=$this->uri->segment(2);
						
			  if($result=="success")
			  {
		?>
		    
		    <script> 
			    $(document).ready(function(){
			      
				  SEMICOLON.widget.notifications($('#custom-notification-message'));
				  return false;
			  
		         });
		    </script>
		
			  <?php }?>
		
		<div style="display:none;">
			<div id="custom-notification-message" data-notify-position="top-right" data-notify-type="success" data-notify-msg="<i class=icon-info-sign></i> Your Information Is Saved Successfully !!!" ></div>
	    </div>
