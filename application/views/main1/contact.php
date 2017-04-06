<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Document Title
	============================================= -->
	<title>Contact Us - Rebelute - A Digital Agency</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>
    <meta name="description" content=" Where to find digital agency? Get In Touch with the Team at Rebelute Digital solutions, call us now - 925-315-5007, 020-65618181 or email at info@rebelute.com"/>
	
     <?php $this->load->view('main_template/header');?>

        
        <style>
	.hidebutton {
		display:none;
	}
	#template-contactform label.error {
		display: block !important;
	}
	
	#template-contactform .skills li > span, label {
		text-transform: initial !important;
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
						<a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Rebelute Logo"></a>
						<a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo@2x.png" alt="Rebelute Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>

                                    <!--   ======== For File Upload ==========    -->
	                           <link rel="stylesheet" href="<?php echo base_url();?>assets/main_site/css/file_upload_style.css" type="text/css" />
	                          <script type="text/javascript" src="<?php echo base_url();?>assets/main_site/js/bs-filestyle.js"></script>
				</div>

			</div>

		</header><!-- #header end -->

		
	  <!-- Page Title
		============================================= -->
		
		<section id="page-title" class="page-title-parallax page-title-dark page-title-left" style="padding: 250px 0; background-image: url('<?php echo base_url();?>assets/main_site/images/contact.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.2">

	    <div class="container clearfix">
		<div class="sliderdiv">	
			<h1>Contact Us</h1>
			<span>We are just a click away!!</span>
	    </div>
		</div>

	  </section><!-- #page-title end -->
		
		
		
		

		<!-- Contact Form & Map Overlay Section
		============================================= -->
		<section id="map-overlay">

			<div class="container clearfix">

				<!-- Contact Form Overlay
				============================================= -->
				<div id="contact-form-overlay" class="clearfix">

					<div class="fancy-title title-dotted-border">
						<h3>Send us an Email</h3>
					</div>

					<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

					<!-- Contact Form
					============================================= -->
					<form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?php echo base_url();?>home/saveContactUs" method="post"
					> 

						<div class="col_half">
							<label for="template-contactform-name">Name <small>*</small></label>
							<input type="text" id="name" name="name" class="required name sm-form-control" maxlength="100" />
						</div>

						<div class="col_half col_last">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="email" name="email" class="required email sm-form-control" maxlength="254" />
						</div>

						<div class="clear"></div>

						<div class="col_half">
							<label for="template-contactform-phone">Phone</label>
							<input type="text" id="phone" name="phone" maxlength="10" onkeypress="return isNumberKey(event);" class="required sm-form-control" />
						</div>

						<div class="col_half col_last">
							<label for="template-contactform-service">Services</label>
							<select id="service" name="service" class=" required sm-form-control">
								<option value="">-- Select One --</option>
								<option value="Product Engineering">Product Engineering</option>
								<option value="Landing Page Services">Landing Page Services</option>
								<option value="UI / UX">UI / UX</option>
								<option value="Graphic Design">Mobile Development</option>
								<option value="Graphic Design">Web Development Services</option>
								<option value="Graphic Design">Digital Marketing</option>
							</select>
						</div>

						<div class="clear"></div>

						<div class="col_full">
							<label for="template-contactform-subject">Subject <small>*</small></label>
							<input type="text" id="subject" name="subject" value="" class="required sm-form-control" maxlength="254" />
						</div>

						<div class="col_full">
							<label for="template-contactform-message">Message <small>*</small></label>
							<textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30" maxlength="254" ></textarea>
						</div>
						
						<div class="col_full">
							<div class="g-recaptcha" data-sitekey="6Le44yETAAAAAJqm_rplMDaKvUpQH8GxDUx-3gF6"></div>
							<span id="capcha_error" style="color:red;display:none">Please Check The Capcha First</span>
						</div>

						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>
                             
						<div class="col_full">
							<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
						</div>

					</form>
					
					 <script src='https://www.google.com/recaptcha/api.js'></script>

					<script type="text/javascript">
						$("#template-contactform").validate({
							submitHandler: function(form) { 
								//check_if_capcha_is_filled();
								var respon = $("#g-recaptcha-response").val();
								if(respon=="")
								{
									$("#capcha_error").show();
									return false;
								}
								else
								{
									$("#capcha_error").hide();
									grecaptcha.reset();
								}
								
								$('.form-process').fadeIn();
								$(form).ajaxSubmit({
									target: '#contact-form-result',
									success: function() {
										$('.form-process').fadeOut();
										$('#template-contactform').find('.sm-form-control').val('');
										$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
										SEMICOLON.widget.notifications($('#contact-form-result'));
									}
								});
							}
						});
					</script>

					
					
					<div class="fancy-title title-dotted-border title-center">
						<h3>Address</h3>
					</div>

					<!-- Contact Info
					============================================= -->
					<div class="col_half nobottommargin">

						<address>
							<strong>US :</strong><br>
							6370 Stoneridge Mall Road I211, <br>
							Pleasanton, CA 94588, USA.<br>
						</address>
					</div><!-- Contact Info End -->
					
					
					<div class="col_half col_last nobottommargin">

						<address>
						<strong>PUNE :</strong><br>
							302, Sapphire Building, Plot No.9, <br>
							Bombay Sappers Colony, <br>
							Wadgaon Sheri, Pune - 411014.<br>
						</address>
						</div><!-- Contact Info End -->
						
						<div class="clear  bottommargin hidden-xs hidden-sm">&nbsp;</div>
						
						<div class="col_half nobottommargin">

						<address>
							<strong>BANGALORE :</strong><br>
							218, 2nd Floor, The Arcade<br>
                            Brigade Metropolis, Mahadevapura, Whitefield <br>
                            Bangalore, Karnataka - 560048.<br>
						</address>
					</div><!-- Contact Info End -->
					
					
					<div class="col_half col_last nobottommargin">

						<address>
						<strong>DELHI NCR :</strong><br>
							551, 551B, Tower B2,
Spaze I Tech Park, Sector 49,
Sohna Road, Gurgaon, Haryana - 122002<br>

						</address>
						</div><!-- Contact Info End -->
						
						<div class="clear"></div>
					
					 <div class="fancy-title title-dotted-border title-center">
						<h3>Contact at</h3>
					</div>
					
					<!-- Contact Info
					============================================= -->
					<div class="col_half  nobottommargin">

						<address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr>&nbsp; <img src="<?php echo base_url();?>assets/main_site/images/USA.png" style="width:20px;height:auto"/>&nbsp; (925) 315-5007 &nbsp;<img src="<?php echo base_url();?>assets/main_site/images/INDIA.png" style="width:20px;height:auto"/>&nbsp;020-65618181<br>
							<abbr title="Mobile Number"><strong>Mobile:</strong></abbr> (+91) 9665137683, 9535708577<br>
							
						</address>
						<!--abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
						<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com-->

					</div><!-- Contact Info End -->
					
					
					<div class="col_half col_last nobottommargin">
					<abbr title="Email Address"><strong>Email:</strong></abbr> info@rebelute.com<br>
					<abbr title="Web Address"><strong>Web Address:</strong></abbr> <a href="http://www.rebelute.com/"> www.rebelute.com</a><br>
					<!--abbr title="Email Address"><strong>Email:</strong></abbr> info@propertymatrimony.com-->
					</div>
					
					
					

					<!-- Testimonails
					============================================= -->
					<!--div class="col_two_third col_last nobottommargin">

						<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="4" data-animation="slide" data-arrows="false">
							<i class="i-plain color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
							<div class="flexslider" style="width: auto;">
								<div class="slider-wrap">
									<div class="slide"></div>
								</div>
							</div>
						</div>

					</div><!-- Testimonials End -->
					
					

					

					<div class="col_half col-md-offset-6 tright topmargin nobottommargin">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/rebelutedigital" target="_blank" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://twitter.com/rebelutedigital" target="_blank" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="https://plus.google.com/u/0/105744246294021834866/posts" target="_blank" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="https://in.pinterest.com/rebelutedigital/" target="_blank" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="https://www.youtube.com/channel/UC-MH2owuZqGy5nL-G2mF5NA" target="_blank" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-youtube"></i>
                               <i class="icon-youtube"></i>
                            </a>

							<!--a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a-->

							<!--a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a-->

							<a href="https://www.linkedin.com/company/rebelute" target="_blank" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						
					</div>

				

				</div><!-- Contact Form Overlay End -->

			</div>
			

			<!-- Google Map
			============================================= -->
			<section id="google-map" class="gmap"></section>

			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<script type="text/javascript" src="<?php echo base_url();?>assets/main_site/js/jquery.gmap.js"></script>

			<script type="text/javascript">

				$('#google-map').gMap({

					address: '6370, STONERIDGE MALL ROAD , Apt i211, Pleasanton, CA 94588 , USA',
					maptype: 'ROADMAP',
					zoom: 14,
					doubleclickzoom: false,
					controls: {
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: false,
						streetViewControl: false,
						overviewMapControl: false
					}

				});

			</script><!-- Google Map End -->

		</section><!-- Contact Form & Map Overlay Section End -->
    <script>
	    $(document).ready(function(){
			$("#contact").addClass('current'); 
		});
		
		
		function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31
               && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
		
		
		function ChangeUrl(page, url) {
            if (typeof (history.pushState) != "undefined") {
                var obj = { Page: page, Url: url };
                history.pushState(obj, obj.Page, obj.Url);
            } else {
                alert("Browser does not support HTML5.");
            }
        }
           
        function change_url_page(path) 
		{
            ChangeUrl('Page1', path);
        }
		
		/*var allowSubmit = false;

		function capcha_filled () { alert( 'capcha_filled' );
			allowSubmit = true;
		}

		function capcha_expired () { alert( 'capcha_expired' );
			allowSubmit = false;
		}
		
		var onloadCallback = function() {
			grecaptcha.render('your_div_id', {
			  'sitekey' : 'your_site_key',
			  'callback': capcha_filled,
			  'expired-callback': capcha_expired,
			});
		};
		
		function check_if_capcha_is_filled (e) {
		alert( allowSubmit );
			if(allowSubmit) { 
				return true;
			} else {
				return false;
			}
			e.preventDefault();
			alert('Fill in the capcha!');
		}
		*/


	</script>
		
		
	

				