<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Document Title
	============================================= -->
	<title>News and Events - Rebelute</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>
        <meta name="description" content="Rebelute is run by a team of digital solution explorers with a problem-solving, SEO-obsessive, tech literate, brand-aware, social media-loving, entrepreneurial superheroes."/>
	<meta name="keyword" content="digital agency, web design agency, web development agency, SEO agency, PPC management agency, Email Marketing agency, UI-UX design agency, interactive agency, full service digital agency, internet marketing agency, web advertising agency"/>
	<?php $this->load->view('main_template/header');?>	
	
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
						<a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Rebelute Logo"></a>
						<a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Rebelute Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->

		
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>News and Events</h1>
				<span>Our Latest News and Events</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li class="active">News and Events</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid post-masonry post-timeline grid-2 clearfix">

						<div class="timeline-border"></div>
						
						<div id="results"><!-- results appear here --></div>
	
					
					</div><!-- #posts end -->

					<div  class="center">
						<!--a class="addMore button button-3d button-dark button-large button-rounded" href="javascript:;" class="button button-3d button-dark button-large button-rounded">Load more..</a-->
						
						<button id="load_more_button" class="addMore button button-3d button-dark button-large button-rounded"><img src="<?php echo base_url();?>assets/main_site/images/preloader-dark.gif" class="animation_image"> Load More</button> <!-- load button -->
					</div>
					
					
					
					

				</div>

			</div>

		</section><!-- #content end -->

		
		<script type="text/javascript">
		var track_page = 1; //track user click as page number, righ now page number 1
		load_contents(track_page); //load content

		$("#load_more_button").click(function (e) { //user clicks on button
			track_page++; //page number increment everytime user clicks load button
			load_contents(track_page); //load content
		});

		//Ajax load function
		//Modified this function
		function load_contents(track_page){
			
			$('.animation_image').show(); //show loading image
			var prev_month = 0;
			//alert($("#wrapper #content .content-wrap .container #posts #results .entry #prev_month").length);
			pageno = track_page - 1;
			if( 0 != $("#wrapper #content .content-wrap .container #posts #results .entry #prev_month"+pageno).length) {
				prev_month = $("#wrapper #content .content-wrap .container #posts #results .entry #prev_month"+pageno).val();
			}	
			//alert("prev_month"+prev_month);
			$.post( '<?php echo base_url();?>home/loadNews', {'page': track_page,'prev_month': prev_month}, function(data){
				
				if(data.trim().length == 0){
					//display text and disable load button if nothing to load
					$("#load_more_button").text("No More Records To Show!").prop("disabled", true);
				}
				
				$("#results").append(data); //append data into #results element
				
				//scroll page to button element
				//$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);
			
				//hide loading image
				$('.animation_image').hide(); //hide loading image once data is received
			});
		}
	</script>
	
	
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

		

		