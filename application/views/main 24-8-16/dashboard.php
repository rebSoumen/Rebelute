<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	
	<!-- Page Title Here -->
       <TITLE>Web Design|SEO|Best Digital Marketing Company - Rebelute, Pune</TITLE>
	   <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	   <meta name="author" content="Rebelute Digital Solutions"/>
       <META NAME="description" CONTENT="Rebelute's aim is to give a digital dimension to your brand with our Web Design/Development, SEO, PPC, Social Media, Content Marketing & App Development services.">
       <META NAME="keywords" CONTENT="Digital marketing, Web Design, Web Development, Branding, PPC Campaigns, Email marketing, Content Syndication,App development">
	   <META NAME="revisit-after" CONTENT="1 days">

         <meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Rebelute Digital Solutions" />
		<meta property="og:description" content="We are digital rebels changing the history in Digital marketing, Branding, Web Development, Web Design, SEO, SMO, Social Media, PPC Campaigns and Big Data Analytics." />
		<meta property="og:url" content="<?php echo base_url();?>" />
		<meta property="og:site_name" content="Rebelute" />
		<meta property="og:image" content="<?php echo base_url();?>assets/main_site/images/logo.png" />

	
	<?php $this->load->view('main_template/header');?>
    

	<!-- Document Title
	============================================= -->
	

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
						<a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Rebelute Digital Solutions"></a>
						<a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo@2x.png" alt="Rebelute Digital Solutions"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->
		
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/main_site/images/slider/swiper/1.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">We Create <span style="color:red">Success</span> Stories</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">We are creative by heart, data driven Digital Marketing Agency focused on catering the up most challenges of our clients and helping them attaining more than their business goals.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Product Engineering <span style="color:red">Redefined</span></h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Our software solutions simply saves up to 40% of annual revenue spent in establishing or maintaining any product lifecycle saving both time and resources.</p>
							</div>
						</div>
						<div class="video-wrap">
							<video id="slide-video" poster="<?php echo base_url();?>assets/main_site/images/videos/explore.jpg" preload="auto" loop autoplay muted>
								<source src='<?php echo base_url();?>assets/main_site/images/videos/explore.webm' type='video/webm' />
								<source src='<?php echo base_url();?>assets/main_site/images/videos/explore.mp4' type='video/mp4' />
							</video>
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/main_site/images/slider/swiper/2.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2 data-caption-animate="fadeInUp">Analytics And Big Data <span style="color:red">Simplified</span></h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Simple and efficient Business Intelligence services to give you clear business insights.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/main_site/images/slider/swiper/3.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center"">
								<h2 data-caption-animate="fadeInUp">We Are <span style="color:red">Creative</span></h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">At Rebelute we try to achieve the perfection for all your UI/UX needs and go beyond the ordinary to provide best design solutions.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/main_site/images/slider/swiper/4.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center"">
								<h2 data-caption-animate="fadeInUp">We Create <span style="color:red">Culture</span> Not Just A Brand</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Our intellectual team helps you establishing the brand name that's totally based your ideas and is loved by the targeted audience.</p>
							</div>
						</div>
					</div>
				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						loop: true,
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeStart: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeEnd: function(swiper){
							$('#slider').find('.swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
								if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
							});
							$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
								if($(this).find('.yt-bg-player').length > 0) {
									$(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
								}
							});
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});
				});
			</script>
 <a href="javascript:;" onclick="goToContent()"  class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
			
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-lg-5">
							<div class="heading-block topmargin">
								<h1 style="line-height:1.1">WELCOME TO REBELUTE A WORLD OF DIGITAL INNOVATION.</h1>
							</div>
							<p class="lead" style="line-height:1.5;margin-top:15px">We are a digital marketing, advertising, public relations management, product/web development and social media engagement company. Focusing on a complete client centric approach we provide end-to-end interactive solutions to help you in finding qualified audiences and increasing your ROI.</p>
						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-top:60px;margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="<?php echo base_url();?>assets/main_site/images/main-fbrowser.gif" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Innovative Website">
								<img src="<?php echo base_url();?>assets/main_site/images/main-fmobile.png" alt="Website Ideas" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="Website Ideas">

							</div>

						</div>

					</div>
				</div>

				<div class="section nobottommargin">
					<div class="container clear-bottommargin clearfix">
<div class="heading-block center nomargin">
								<h2 style="line-height:1.1">Our Expertise</h2>
							</div>
						<div class="row topmargin-sm clearfix">

							<div class="col-md-4 bottommargin">
								<div class="center">
								<img src="<?php echo base_url();?>assets/main_site/images/strategy_homepage.png" alt="Strategy"/>	
								
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h3>Strategy</h3>
									</div>
								<p>We create digital road maps which helps you to realize your business vision, objectives and explore better opportunities. Our offerings include strategic planning, market research and a complete set of brand development services including brand remodeling, audience profiling and performance analysis.</p>
							
								</div>
								</div>

							<div class="col-md-4 bottommargin">
							<div class="center">
								<img src="<?php echo base_url();?>assets/main_site/images/creative_homepage.png" alt="Creative"/>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									
									<h3>Creative</h3>
								</div>
								<p>We offer Campaign Design, Web Design and Print Design services which are based on the topmost creative efforts by our team and are intended to make your every business campaign or product unique and stand out from the crowd. We use the latest measures and standards to categories your needs ensuring a perfect mixture of creativity and performance.</p>
							</div>
								</div>

							<div class="col-md-4 bottommargin">
							<div class="center">
								<img src="<?php echo base_url();?>assets/main_site/images/technology.png" alt="Technology"/>	
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									
									<h3>Technology</h3>
								</div>
								<p>We deliver enterprise solutions for clients that are scalable and can be integrated across both open source and paid platforms. Our team of .Net, Java, PHP and BI developers are fully capable to make sure that the digital or business solutions we deliver are simple, reliable, adaptable and perform perfectly under all conditions.</p>
							</div>
							</div>

						</div>

					</div>
				</div>

				<div class="container clearfix">

					<div class="row topmargin-lg bottommargin-sm">

						<div class="heading-block center">
							<h2>How We Work</h2>
							<p class="divcenter" style="font-size: 18px;">We take a completely transparent approach to build brands which starts from the very basic discovering of value opportunity focused on a deep understanding of business nature, brand, audience and culture. Then we create an interactive ecosystem which consist platforms, content, spaces, technologies and products. And finally we bring it alive with data and communication.</p>
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="nopadding feature-box fbox-right topmargin" data-animate="fadeIn">
								
								<h3>PLATFORM</h3>
								<p>We work on all the platforms across web, social media and mobile. Not even this we deep dive into the local and global market to figure out all the local hubs that we can engage. We are experts in forming and executing business strategy, architecture, technical development that really suits your business objectives.</p>
							</div>

							<div class="nopadding feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
								
								<h3>CONTENT</h3>
								<p>The most critical aspect in today's world of digital communications is how brands can engage with audience and develop long-term relationships through great experiences. We take that very seriously and put real stress on all the content right from interactive video and music stream to highly technical blog or newsletter you want to publish.</p>
							</div>

							
						</div>

						<div class="col-md-4 hidden-sm bottommargin center">
							<img src="<?php echo base_url();?>assets/main_site/images/Rich-Feature.png" alt="Valuable Intractive Experience, Platform, Product, Space, Content">
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="nopadding feature-box topmargin" data-animate="fadeIn">
								
								<h3>PRODUCT</h3>
								<p>Our development services are designed for a user centric development approach which makes sure that the products we develop and deliver are used by people with choice. We create products which are scalable, of great design and also cost effective. Ranging from tools and services to open source applications we get the best for you.</p>
							</div>

							<div class="nopadding feature-box topmargin" data-animate="fadeIn" data-delay="200">
								
								<h3>SPACES</h3>
								<p>We create digital experiences across retail, media and entertainment and many other spaces using the latest technology, spatial design and user insight. We pull together a tight mix of digital and analog worlds leading to unleashing new business and brands across the globe. In short we combine all the spaces to bring only successful campaigns to you.</p>
							</div>

							

						</div>

					</div>

				</div>

				<div class="row clearfix common-height">

					<div class="col-md-6 center col-padding" style="background: url('<?php echo base_url();?>assets/main_site/images/Dataanalytics.jpg') center center no-repeat; background-size: cover;">
						<div>&nbsp;</div>
					</div>

					<div class="col-md-6  col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block nobottomborder">
								<span class="before-heading color">We Simplified Big Data For You</span>
								<h2>Analytics & Big Data Services</h2>
							</div>

							<div class="center bottommargin">
								
							</div>
							<p class="lead nobottommargin">Modern world is driven by analytics and business intelligence. We help you understand your business and marketing 
investment options in a better way by providing a multi dimensional analysis of your data and marketing campaigns. Our highly efficient data solutions help you in making perfect business decisions. Also we provide data based analytical platform which increases productivity and make your organization more data centric. We work on the following services:</p>
</br><ul>
<li><em><strong>Predictive Analysis</strong></em></li>
<li><em><strong>Marketing Effectiveness and Attribution Rate</strong></em></li>
<li><em><strong>Media Analysis</strong></em></li>
<li><em><strong>Web and Mobile Analytics</strong></em></li>
<li><em><strong>Social Media and Network Trends Analytics</strong></em></li>
<li><em><strong>Analytics and Big Data Platforms</strong></em></li>




</ul>						
</div>
					</div>

				</div>

				<div class="row clearfix common-height testcolor">
<a href="<?php echo base_url();?>product-engineering">
					<div class="col-md-3 col-sm-6 dark center paddinghomediv" style="background-color: #515875;">
						<div>
							<img src="<?php echo base_url();?>assets/main_site/images/product-Engineering_image.png" alt="Product Engineering"/>
							<div class="counter counter-lined"></div>
							<h5>Product Engineering</h5>
						</div>
					</div>
</a>
<a href="<?php echo base_url();?>digital-marketing ">
					<div class="col-md-3 col-sm-6  dark center paddinghomediv" style="background-color: #576F9E;">
						<div>
							<img src="<?php echo base_url();?>assets/main_site/images/digital_marketing_image.png" alt="Digital Marketing"/>
							<div class="counter counter-lined"></div>
							<h5>Digital Marketing</h5>
						</div>
					</div>
</a>
<a href="<?php echo base_url();?>ui-ux-services">
					<div class="col-md-3 col-sm-6 dark center paddinghomediv" style="background-color: #6697B9;">
						<div>
							<img src="<?php echo base_url();?>assets/main_site/images/ui_ux_image.png" alt="UI - UX Design"/>
							<div class="counter counter-lined"></div>
							<h5>UI/UX</h5>
						</div>
					</div>
</a>
<a href="<?php echo base_url();?>mobile-development">
					<div class="col-md-3 col-sm-6 dark center paddinghomediv" style="background-color: #88C3D8;">
						<div>
							<img src="<?php echo base_url();?>assets/main_site/images/mobile_image.png" alt="Mobile Development"/>
							<div class="counter counter-lined"></div>
							<h5>Mobile App Development</h5>
						</div>
					</div>

				</div>

			


				<script type="text/javascript">

					jQuery(window).load(function(){

						var $container = $('#portfolio');

						$container.isotope({
							transitionDuration: '0.65s',
							masonry: {
								columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
							}
						});

						$('#page-menu a').click(function(){
							$('#page-menu li').removeClass('current');
							$(this).parent('li').addClass('current');
							var selector = $(this).attr('data-filter');
							$container.isotope({ filter: selector });
							return false;
						});

						$(window).resize(function() {
							$container.isotope('layout');
						});

					});

				</script>

				<div class="clear"></div>

				

				<div class="container clearfix nomargin" style="height:400px;width:100% !important;background-color: slateblue;">
<div class="illustration">
  <svg enable-background="new 0 0 300 200" id="Layer_1" version="1.1" viewBox="0 10 300 150" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><g><path class="cloud-level-top" d="M60.694,146.49H40.362l-0.151-1.024c-0.259-1.769,0.041-3.166,0.893-4.152c0.835-0.968,2.112-1.456,3.796-1.456 c0.744,0,1.436,0.096,1.949,0.193c1.742-2.572,4.298-4.031,7.125-4.031c1.788,0,3.482,0.607,4.769,1.711 c2.95,2.529,2.153,7.545,2.119,7.757L60.694,146.49z M42.524,144.09h16.059c0.045-1.395-0.173-3.482-1.401-4.538 c-0.854-0.731-1.995-1.135-3.209-1.135c-2.21,0-4.219,1.306-5.51,3.578l-0.343,0.603l-0.845,0.005l-0.248-0.058 c-0.292-0.072-1.178-0.291-2.131-0.291c-0.655,0-1.531,0.108-1.98,0.627C42.654,143.188,42.548,143.632,42.524,144.09z"></path></g><g><path class="cloud-level-top" d="M44.486,116.75H24.725l-0.166-1.004c-0.034-0.206-0.809-5.088,2.066-7.551c1.253-1.072,2.902-1.665,4.644-1.665 c2.746,0,5.227,1.411,6.919,3.899c0.506-0.093,1.166-0.182,1.867-0.182c1.644,0,2.892,0.478,3.708,1.426 c0.835,0.965,1.128,2.328,0.876,4.051L44.486,116.75z M26.837,114.35h15.48c-0.026-0.422-0.13-0.828-0.372-1.109 c-0.425-0.489-1.262-0.592-1.894-0.592c-0.912,0-1.767,0.209-2.05,0.275l-0.389,0.058h-0.698l-0.346-0.606 c-1.246-2.189-3.18-3.447-5.307-3.447c-1.168,0-2.263,0.387-3.084,1.09C27.012,111.021,26.798,113.006,26.837,114.35z"></path></g><g><path class="cloud-level-middle" d="M59.079,93.203H45.71l-0.151-1.025c-0.182-1.233,0.039-2.222,0.658-2.938c0.417-0.485,1.224-1.061,2.695-1.061 c0.362,0,0.706,0.036,0.996,0.079c1.157-1.57,2.803-2.453,4.62-2.453c1.217,0,2.372,0.415,3.252,1.168 c1.987,1.702,1.527,4.87,1.467,5.227L59.079,93.203z M48.039,90.803h8.885c-0.029-0.713-0.194-1.567-0.706-2.006 c-0.447-0.382-1.046-0.593-1.692-0.593c-1.2,0-2.299,0.722-3.014,1.982l-0.343,0.602l-0.84,0.005l-0.219-0.05 C49.81,90.671,48.324,90.486,48.039,90.803z"></path></g><g><path class="cloud-level-bottom" d="M53.914,99.153L53.561,98.8c-1.078-1.08-1.38-3.345-0.672-5.049c0.454-1.099,1.716-2.942,5.047-2.942 c2.021,0,3.562,0.538,4.579,1.596c0.324,0.341,0.566,0.701,0.749,1.066c1.375-0.588,3.379-0.418,4.68,0.485 c1.834,1.279,1.57,3.449,1.174,4.418l-0.302,0.744L53.914,99.153z M57.936,93.208c-1.476,0-2.429,0.492-2.83,1.461 c-0.322,0.775-0.214,1.604-0.041,2.081l6.214-0.015v-0.384c0-0.235,0.024-0.468,0.074-0.691c0-0.417-0.084-1.087-0.571-1.593 C60.245,93.505,59.261,93.208,57.936,93.208z M63.737,96.069c-0.021,0.252-0.065,0.473-0.132,0.663l3.4-0.007 c-0.021-0.281-0.129-0.583-0.434-0.797C65.796,95.385,64.094,95.349,63.737,96.069z"></path></g><g><path class="cloud-level-top" d="M28.401,124.715l-24.53-0.062l-0.302-0.746c-0.583-1.439-0.979-4.65,1.707-6.525c2.241-1.562,5.854-1.651,7.934-0.351 c0.278-0.809,0.734-1.651,1.464-2.409c1.569-1.637,3.996-2.465,7.207-2.465c5.193,0,7.138,2.82,7.836,4.5 c1.219,2.939,0.451,6.287-0.962,7.703L28.401,124.715z M5.599,122.258l21.725,0.053c0.583-0.973,0.902-2.986,0.177-4.735 c-0.821-1.976-2.762-3.019-5.618-3.019c-2.535,0-4.377,0.58-5.477,1.728c-1.073,1.118-1.226,2.567-1.209,3.41 c0.084,0.349,0.127,0.708,0.127,1.08v1.2l-1.203,0.01c-1.147,0-1.277-1.157-1.313-1.903c-0.403-1.103-1.872-1.597-3.189-1.597 c-1.097,0-2.179,0.314-2.969,0.864C5.479,120.165,5.462,121.449,5.599,122.258z"></path></g><g><path class="cloud-level-top" d="M257.376,146.488h-20.335l-0.166-1.004c-0.035-0.213-0.83-5.229,2.121-7.756c1.289-1.102,2.981-1.712,4.77-1.712 c2.83,0,5.386,1.457,7.125,4.034c0.526-0.101,1.215-0.196,1.949-0.196c1.683,0,2.959,0.491,3.795,1.456 c0.852,0.989,1.152,2.387,0.893,4.152L257.376,146.488z M239.16,144.088h16.051c-0.023-0.456-0.129-0.902-0.394-1.209 c-0.448-0.517-1.322-0.627-1.978-0.627c-0.947,0-1.836,0.219-2.129,0.291l-0.394,0.057h-0.698l-0.344-0.607 c-1.293-2.271-3.302-3.578-5.512-3.578c-1.217,0-2.355,0.403-3.209,1.136C239.258,140.66,239.119,142.816,239.16,144.088z"></path></g><g><path class="cloud-level-top" d="M276.562,116.747H256.8l-0.151-1.024c-0.252-1.724,0.041-3.087,0.874-4.051c0.815-0.946,2.062-1.426,3.708-1.426 c0.705,0,1.368,0.091,1.865,0.182c1.693-2.488,4.173-3.9,6.921-3.9c1.74,0,3.39,0.594,4.646,1.666 c2.87,2.463,2.103,7.344,2.066,7.551L276.562,116.747z M258.967,114.348h15.48c0.038-1.344-0.178-3.326-1.349-4.33 c-0.821-0.703-1.918-1.09-3.084-1.09c-2.126,0-4.062,1.256-5.307,3.447l-0.343,0.602l-0.84,0.005l-0.258-0.058 c-0.283-0.066-1.143-0.275-2.042-0.275c-0.632,0-1.466,0.103-1.892,0.595C259.094,113.521,258.994,113.925,258.967,114.348z"></path></g><path class="cloud-level-middle" d="M255.067,89.241c-0.418-0.485-1.227-1.061-2.698-1.061c-0.357,0-0.7,0.033-0.993,0.077c-1.157-1.57-2.804-2.453-4.622-2.453 c-1.215,0-2.369,0.415-3.25,1.166c-1.987,1.702-1.526,4.87-1.467,5.228l0.166,1.003h13.371l0.15-1.025 C255.91,90.945,255.687,89.958,255.067,89.241z M244.361,90.801c0.028-0.703,0.189-1.565,0.705-2.006 c0.446-0.382,1.047-0.59,1.688-0.59c1.199,0,2.299,0.722,3.02,1.982l0.346,0.604h0.695l0.355-0.05 c0.297-0.074,1.785-0.252,2.073,0.058h-8.882V90.801z"></path><g><path class="cloud-level-bottom" d="M247.365,99.15l-14.898-0.036l-0.303-0.746c-0.394-0.967-0.655-3.137,1.171-4.414c1.304-0.91,3.314-1.075,4.681-0.487 c0.18-0.362,0.422-0.725,0.748-1.063c1.018-1.058,2.559-1.598,4.582-1.598c3.334,0,4.594,1.848,5.049,2.947 c0.706,1.706,0.404,3.969-0.674,5.047L247.365,99.15z M240.002,96.733l6.214,0.015c0.175-0.475,0.28-1.303-0.038-2.079 c-0.4-0.972-1.354-1.464-2.832-1.464c-1.327,0-2.312,0.298-2.852,0.859c-0.484,0.504-0.57,1.173-0.568,1.591 c0.051,0.223,0.074,0.456,0.074,0.693v0.384H240.002z M234.275,96.719l3.398,0.007c-0.064-0.19-0.109-0.411-0.131-0.663 c-0.358-0.718-2.055-0.687-2.835-0.142C234.406,96.136,234.298,96.438,234.275,96.719z"></path></g><g><path class="cloud-level-top" d="M272.883,124.715l-0.351-0.353c-1.414-1.413-2.187-4.759-0.968-7.699c0.696-1.683,2.643-4.505,7.842-4.505 c3.213,0,5.637,0.83,7.207,2.465c0.729,0.759,1.186,1.602,1.463,2.41c2.076-1.301,5.693-1.215,7.936,0.35 c2.686,1.873,2.291,5.086,1.706,6.525l-0.303,0.747L272.883,124.715z M279.403,114.559c-2.858,0-4.805,1.047-5.624,3.023 c-0.725,1.748-0.402,3.759,0.181,4.73l21.728-0.053c0.135-0.809,0.117-2.093-1.052-2.906c-0.79-0.549-1.869-0.863-2.966-0.863 c-1.225,0-2.766,0.42-3.192,1.596c-0.038,0.744-0.165,1.902-1.312,1.902h-1.2l-0.002-1.209c0-0.372,0.043-0.734,0.127-1.08 c0.017-0.842-0.137-2.295-1.21-3.41C283.778,115.139,281.938,114.559,279.403,114.559z"></path></g>
  <g class="question-mark" id="questionMark">
  <text x="150" y="20" text-anchor="middle" dy="7" font-size="13">We are focused on establishing you 
  <tspan x="150" y="38" text-anchor="middle">  as a Brand and get noticed</tspan>
</text>


 <a class="button" xmlns:xlink="http://rebelute.com/digital-marketing" xlink:href="http://rebelute.com/digital-marketing" target="_blank">
    <text fill="#410061" text-anchor="middle" font-size="10" y="50" x="150">View More</text>
  </a>
  
  </g><g class="question-mark" id="questionMark"><text x="150" y="100" text-anchor="middle" dy="7" font-size="20">Brand</text>
<text x="150" y="122" text-anchor="middle" dy="7" font-size="20">Identity</text></g><polygon points="93.747,160.677 115.86,138.565 117.571,140.277 109.488,148.359 110.681,149.555 118.764,141.473 120.384,143.09 112.298,151.173 113.491,152.368 121.577,144.282 123.197,145.902 115.114,153.985 116.307,155.181 124.39,147.098 126.01,148.713 117.924,156.799 119.117,157.994 127.202,149.908 128.822,151.525 120.737,159.611 121.8,160.677 122.062,160.677 130.015,152.721 131.635,154.338 125.297,160.677 127.685,160.677 132.828,155.533 134.448,157.151 130.922,160.677 133.311,160.677 135.641,158.346 137.969,160.677 141.365,160.677 115.86,135.172 90.353,160.677 "></polygon><polygon points="162.064,160.677 164.395,158.346 166.726,160.677 169.116,160.677 165.59,157.151 167.208,155.533 172.349,160.677 174.739,160.677 168.4,154.341 170.021,152.721 177.975,160.677 178.238,160.677 179.299,159.611 171.216,151.525 172.834,149.908 180.92,157.994 182.111,156.799 174.029,148.713 175.646,147.098 183.732,155.181 184.925,153.985 176.842,145.9 178.457,144.285 186.545,152.368 187.74,151.173 179.652,143.09 181.27,141.473 189.355,149.555 190.551,148.359 182.465,140.277 184.176,138.565 206.287,160.677 209.681,160.677 184.176,135.172 158.672,160.677 "></polygon><polygon points="98.988,152.068 100.651,150.338 78.173,127.859 47.29,158.74 49.227,160.677 52.62,160.677 50.683,158.74 78.173,131.253 79.582,132.662 72.322,139.922 73.515,141.117 80.774,133.857 82.395,135.475 75.132,142.734 76.325,143.93 83.587,136.667 85.207,138.289 77.947,145.547 79.14,146.742 86.4,139.482 88.02,141.1 80.76,148.359 81.953,149.555 89.213,142.295 90.831,143.91 83.57,151.173 84.763,152.368 92.025,145.104 93.646,146.726 86.383,153.985 87.576,155.181 94.838,147.916 96.458,149.539 89.196,156.799 90.389,157.994 97.651,150.731 "></polygon><path class="ring-2" d="M203.592,113.853c0,11.492-3.664,22.143-9.88,30.853l1.679,1.732c6.637-9.156,10.602-20.436,10.602-32.585 c0-30.681-24.96-55.642-55.642-55.642s-55.644,24.96-55.644,55.642c0,11.985,3.818,23.09,10.293,32.179l1.711-1.711 c-6.05-8.638-9.604-19.145-9.604-30.468c0-29.356,23.885-53.241,53.244-53.241C179.707,60.611,203.592,84.496,203.592,113.853z"></path><path class="ring-3" d="M207.809,113.853c0,12.657-4.137,24.351-11.1,33.851l1.697,1.75c7.383-9.949,11.803-22.286,11.803-35.601 c0-33.007-26.852-59.858-59.858-59.858c-33.007,0-59.858,26.852-59.858,59.858c0,13.158,4.28,25.327,11.506,35.215l1.72-1.735 c-6.798-9.434-10.827-20.987-10.827-33.479c0-31.682,25.776-57.458,57.458-57.458S207.809,82.17,207.809,113.853z"></path><path class="ring-1" d="M199.421,113.851c0,10.343-3.218,19.945-8.702,27.864l1.672,1.723c5.912-8.365,9.43-18.582,9.43-29.587 c0-28.383-23.088-51.471-51.47-51.471c-13.75,0-26.676,5.354-36.396,15.075c-9.723,9.725-15.075,22.648-15.075,36.398 c0,10.84,3.381,20.893,9.132,29.186l1.708-1.708c-5.324-7.845-8.441-17.302-8.441-27.478c0-13.106,5.103-25.43,14.372-34.699 c9.269-9.269,21.59-14.374,34.699-14.374C177.408,64.78,199.421,86.793,199.421,113.851z"></path><polygon points="221.863,127.857 198.555,151.167 200.173,152.943 202.385,150.731 209.649,157.994 210.84,156.799 203.575,149.539 205.197,147.916 212.46,155.181 213.65,153.985 206.389,146.726 208.01,145.104 215.273,152.368 216.463,151.173 209.205,143.91 210.823,142.293 218.086,149.555 219.278,148.359 212.019,141.1 213.637,139.48 220.898,146.742 222.092,145.547 214.831,138.287 216.449,136.67 223.709,143.93 224.901,142.734 217.642,135.477 219.257,133.857 226.521,141.119 227.715,139.924 220.452,132.662 221.863,131.25 249.351,158.74 247.416,160.677 250.81,160.677 252.746,158.74 "></polygon><path class="ring-6" d="M220.996,113.853c0,6.63-0.925,13.046-2.643,19.133l3.13-2.531c1.246-5.336,1.913-10.892,1.913-16.602 c0-40.276-32.768-73.046-73.046-73.046c-40.279,0-73.049,32.767-73.049,73.046c0,5,0.522,9.877,1.484,14.596l3.192,3.14c-1.474-5.67-2.276-11.608-2.276-17.735c0-38.954,31.694-70.646,70.649-70.646C189.305,43.207,220.996,74.898,220.996,113.853z"></path><path class="ring-5" d="M216.432,113.853c0,9.388-1.984,18.313-5.533,26.404l4.279-4.392c2.359-6.911,3.654-14.311,3.654-22.013 c0-37.761-30.721-68.481-68.481-68.481c-37.762,0-68.482,30.72-68.482,68.479c0,7.329,1.177,14.383,3.321,21.006l4.016,4.017 c-3.173-7.724-4.938-16.169-4.938-25.022c0-36.437,29.645-66.08,66.082-66.08C186.787,47.771,216.432,77.416,216.432,113.853z"></path><path class="ring-4" d="M212.021,113.851c0,14.332-4.935,27.521-13.17,38.001l0.323,0.307l0.075-0.157l6.891-6.709 c5.264-9.293,8.28-20.018,8.28-31.441c0-35.328-28.743-64.068-64.07-64.068c-35.328,0-64.068,28.743-64.068,64.07 c0,14.322,4.746,27.545,12.721,38.224l1.706-1.73c-7.544-10.226-12.026-22.838-12.026-36.493c0-34.005,27.665-61.67,61.668-61.67 C184.354,52.183,212.021,79.847,212.021,113.851z"></path></svg>
</div>
					<!--<div  class="col_one_third bottommargin-sm center container1">
						<img data-animate="fadeInLeft" src="<?php echo base_url();?>assets/main_site/images/services/iphone6.png" alt="Iphone"/>


					</div>-->

					<!--<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block topmargin-sm">
							<h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

						<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn more</a>

					</div>-->

				</div>
<a href="#myModal1" data-lightbox="inline" class="button button-full button-dark center tright ">
					<div class="container clearfix">
						Seen Enough !! Lets Work Together. <strong>Start Now</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>
				<div class="section parallax dark nomargin" style="background-image: url('<?php echo base_url();?>assets/main_site/images/testimonials.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

					<div class="heading-block center">
						<h3>What Our Clients Say</h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<i class="icon-user"></i>
									</div>
									<div class="testi-content">
										<p>This  is an amazing Organisation to work with! They has solved all my problems and I will definitely recommend them to accomplish the task that you require them to do. I will certainly work with them  again in future.</p>
										<div class="testi-meta">
											Vince Van Horn
											<span></span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<i class="icon-user"></i>
									</div>
									<div class="testi-content">
										<p>Great Team , completed the project on time and within budget, executed the project as promised. Highly recommended!..</p>
										<div class="testi-meta">
											Kohen Mat
											<span></span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<i class="icon-user"></i>
									</div>
									<div class="testi-content">
										<p>They are excellent , quickly  understands the issue and does a great job. would recommend, and will definitely work with these people again.</p>
										<div class="testi-meta">
											Mike
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
               				<div class="container clearfix topmargin">
<div class="heading-block center">
						<h3>Our Clients</h3>
					</div>
					<div id="oc-clients" class="owl-carousel image-carousel">
                        <div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/11.png" alt="GIFTYMART"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/1.png" alt="PlayMedia - Minds over media"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/2.png" alt="Lee Hoe Transport Pte Ltd"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/3.png" alt="Northern Fish Iberia"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/4.png" alt="Webguys to Hire"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/5.png" alt="Konstantin FX"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/6.png" alt="Muller & Coll"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/7.png" alt="ePlay"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/8.png" alt="Arawali Homes"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/9.png" alt="GLSINFRA"></div>
						<div class="oc-item"><img src="<?php echo base_url();?>assets/main_site/images/clients/10.png" alt="CHERRY CREEK"></div>

					</div>

					<script type="text/javascript">

						jQuery(document).ready(function($) {

							var ocClients = $("#oc-clients");

							ocClients.owlCarousel({
								margin: 60,
								loop: true,
								nav: false,
								autoplay: true,
								dots: false,
								autoplayHoverPause: true,
								responsive:{
									0:{ items:2 },
									480:{ items:3 },
									768:{ items:4 },
									992:{ items:5 },
									1200:{ items:6 }
								}
							});

						});

					</script>

				</div>

			</div>

		</section><!-- #content end -->

               
                <!-- Modal -->
		<div class="modal1 mfp-hide" id="myModal1">
			<div class="block divcenter" style="background-color: #FFF; max-width: 700px;">
				<div class="row nomargin clearfix">
					<div class="col-sm-6" data-height-lg="565" data-height-md="565" data-height-sm="565" data-height-xs="0" data-height-xxs="0" style="background-image: url(<?php echo base_url();?>assets/main_site/one-page/images/page/4.jpg); background-size: cover;"></div>
					<div class="col-sm-6 col-padding" data-height-lg="565" data-height-md="565" data-height-sm="565" data-height-xs="565" data-height-xxs="565">
						<div>
						<h4 class="uppercase ls1">Contact Us</h4>
						<form action="<?php echo base_url();?>home/save_serviceInfoHomePage" method="post" class="clearfix" style="max-width: 300px;" onsubmit="return validate();">
							<div class="col_full">
								<label for="" class="capitalize t600">Name:<small class="mandatroy">*</small></label>
								<input type="text" id="name"  name="name" class="sm-form-control" />
								<span id="err_name" class="error" style="display:none;color:red;">Please Enter Name</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Email:<small class="mandatroy">*</small></label>
								<input type="email" id="email"  name="email"  class="sm-form-control" />
								<span id="err_email" class="error" style="display:none;color:red;">Please Enter Email</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Phone:<small class="mandatroy">*</small></label>
								<input type="text" id="phone"  name="phone" class="sm-form-control" />
								<span id="err_phone" class="error" style="display:none;color:red;">Please Enter Phone</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Message:<small class="mandatroy">*</small></label>
								<textarea name="message" id="message"  class="sm-form-control" style="resize:none;"></textarea>
							    <span id="err_message" class="error" style="display:none;color:red;">Please Enter Message</span>
							</div>
                                                    
                            <div class="col_full">
							    <div class="g-recaptcha" data-sitekey="6Le44yETAAAAAJqm_rplMDaKvUpQH8GxDUx-3gF6"></div>
								<span id="capcha_error" style="color:red;display:none">Please Check The Capcha First</span>
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
				var respon = $("#g-recaptcha-response").val();
				
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
				if(respon=="")
				{
					$("#capcha_error").show();
					return false;
				}
				return true;
			}
  function goToContent()
            {
                
                 $('html,body').animate({
                                   scrollTop: $("#content").offset().top},
                                       2000);
            }
			
		</script>
		
		<?php  
		        if(isset($_GET['msg']))
			    {
				    $result=$_GET['msg'];
			    }
                else
				{
					$result = "";
				}				
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