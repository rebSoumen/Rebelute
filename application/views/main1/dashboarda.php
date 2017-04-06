
		
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/main_site/images/slider/swiper/1.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">We Create <span style="color:red">Success</span> Stories</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">We are creative by heart, data driven Digital Marketing Agency focused to catoring the upmost challenges of our clients and helping them attaining more then their business goals.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Product Engineering <span style="color:red">Redefined</span></h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Our software solutions simply saves upto 40% of annual revenue spent in establishing or maintaining any product lifecycle saving both time and resources.</p>
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
								<h2 data-caption-animate="fadeInUp"></h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200"></p>
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
								<h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>
							</div>
							<p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce &amp; much more.</p>
						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="<?php echo base_url();?>assets/main_site/images/services/main-fbrowser.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								<img src="<?php echo base_url();?>assets/main_site/images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
							</div>

						</div>

					</div>
				</div>

				<div class="section nobottommargin">
					<div class="container clear-bottommargin clearfix">

						<div class="row topmargin-sm clearfix">

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<span class="before-heading">Scalable on Devices.</span>
									<h4>Responsive &amp; Retina</h4>
								</div>
								<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<span class="before-heading">Smartly Coded &amp; Maintained.</span>
									<h4>Powerful Performance</h4>
								</div>
								<p>Medecins du Monde Jane Addams reduce child mortality challenges Ford Foundation. Diversification shifting landscape advocate pathway to a better life rights international. Assessment.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<span class="before-heading">Flexible &amp; Customizable.</span>
									<h4>Truly Multi-Purpose</h4>
								</div>
								<p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
							</div>

						</div>

					</div>
				</div>

				<div class="container clearfix">

					<div class="row topmargin-lg bottommargin-sm">

						<div class="heading-block center">
							<h2>Even more Feature Rich</h2>
							<span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span>
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-heart"></i></a>
								</div>
								<h3>Boxed &amp; Wide Layouts</h3>
								<p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
							</div>

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-paper"></i></a>
								</div>
								<h3>Extensive Documentation</h3>
								<p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>
							</div>

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-layers"></i></a>
								</div>
								<h3>Parallax Support</h3>
								<p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
							</div>

						</div>

						<div class="col-md-4 hidden-sm bottommargin center">
							<img src="<?php echo base_url();?>assets/main_site/images/services/iphone7.png" alt="iphone 2">
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-power"></i></a>
								</div>
								<h3>HTML5 Video</h3>
								<p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
							</div>

							<div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check"></i></a>
								</div>
								<h3>Endless Possibilities</h3>
								<p>Complete control on each &amp; every element that provides endless customization.</p>
							</div>

							<div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-bulb"></i></a>
								</div>
								<h3>Light &amp; Dark Color Schemes</h3>
								<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
							</div>

						</div>

					</div>

				</div>

				<div class="row clearfix common-height">

					<div class="col-md-6 center col-padding" style="background: url('<?php echo base_url();?>assets/main_site/images/Dataanalytics.jpg') center center no-repeat; background-size: cover;">
						<div>&nbsp;</div>
					</div>

					<div class="col-md-6 center col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block nobottomborder">
								<span class="before-heading color">Easily Understandable &amp; Customizable.</span>
								<h3>Walkthrough Videos &amp; Demos</h3>
							</div>

							<div class="center bottommargin">
								<a href="http://vimeo.com/101373765" data-lightbox="iframe" style="position: relative;">
									<img src="<?php echo base_url();?>assets/main_site/images/services/video.jpg" alt="Video">
									<span class="i-overlay nobg"><img src="<?php echo base_url();?>assets/main_site/images/icons/video-play.png" alt="Play"></span>
								</a>
							</div>
							<p class="lead nobottommargin">Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
						</div>
					</div>

				</div>

				<div class="row clearfix  common-height">

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K</div>
							<h5>Lines of Codes</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
							<div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>
							<h5>KBs of HTML Files</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
							<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span></div>
							<h5>No. of Templates</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-clock"></i>
							<div class="counter counter-lined"><span data-from="60" data-to="1400" data-refresh-interval="30" data-speed="2700"></span></div>
							<h5>Hours of Coding</h5>
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

				

				<a href="#myModal1" data-lightbox="inline" class="button button-full button-dark center tright bottommargin-lg">
					<div class="container clearfix">
						Seen Enough !! Let's Take It Ahead <strong>Start With Us</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<div class="container clearfix">

					<div class="col_one_third bottommargin-sm center">
						<img data-animate="fadeInLeft" src="<?php echo base_url();?>assets/main_site/images/services/iphone6.png" alt="Iphone">
					</div>

					<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block topmargin-sm">
							<h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

						<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn more</a>

					</div>

				</div>

				<div class="section parallax dark nobottommargin" style="background-image: url('<?php echo base_url();?>assets/main_site/images/testimonials.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

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
										<p>They are excellent , quickly  understands the issue and does a great job. would recommend, and will definately work with these people again.</p>
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
                <!--
				<div class="section notopmargin notopborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>Latest from the Blog</h3>
						</div>
					</div>
				</div>

				<div class="container clear-bottommargin clearfix">
					<div class="row">

						<div class="col-md-3 col-sm-6 bottommargin">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="<?php echo base_url();?>assets/main_site/images/magazine/thumb/1.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Bloomberg smart cities; change-makers economic security</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 13th Jun 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
								</ul>
								<div class="entry-content">
									<p>Prevention effect, advocate dialogue rural development lifting people up community civil society. Catalyst, grantees leverage.</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="<?php echo base_url();?>assets/main_site/images/magazine/thumb/2.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Medicine new approaches communities, outcomes partnership</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 24th Feb 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
								</ul>
								<div class="entry-content">
									<p>Cross-agency coordination clean water rural, promising development turmoil inclusive education transformative community.</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="<?php echo base_url();?>assets/main_site/images/magazine/thumb/3.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Significant altruism planned giving insurmountable challenges liberal</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 30th Dec 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								</ul>
								<div class="entry-content">
									<p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures design thinking accelerate progress medical initiative.</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="<?php echo base_url();?>assets/main_site/images/magazine/thumb/4.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Compassion conflict resolution, progressive; tackle</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 15th Jan 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
								</ul>
								<div class="entry-content">
									<p>Community health workers best practices, effectiveness meaningful work The Elders fairness. Our ambitions local solutions globalization.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
                
				<div class="section">
					<div class="container clearfix">

						<div class="row topmargin-sm">

							<div class="heading-block center">
								<h3>Meet Our Team</h3>
							</div>

							<div class="col-md-3 col-sm-6 bottommargin">

								<div class="team">
									<div class="team-image">
										<img src="<?php echo base_url();?>assets/main_site/images/team/3.jpg" alt="John Doe">
									</div>
									<div class="team-desc team-desc-bg">
										<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>

							</div>

							<div class="col-md-3 col-sm-6 bottommargin">

								<div class="team">
									<div class="team-image">
										<img src="<?php echo base_url();?>assets/main_site/images/team/2.jpg" alt="Josh Clark">
									</div>
									<div class="team-desc team-desc-bg">
										<div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>

							</div>

							<div class="col-md-3 col-sm-6 bottommargin">

								<div class="team">
									<div class="team-image">
										<img src="<?php echo base_url();?>assets/main_site/images/team/8.jpg" alt="Mary Jane">
									</div>
									<div class="team-desc team-desc-bg">
										<div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>

							</div>

							<div class="col-md-3 col-sm-6 bottommargin">

								<div class="team">
									<div class="team-image">
										<img src="<?php echo base_url();?>assets/main_site/images/team/4.jpg" alt="Nix Maxwell">
									</div>
									<div class="team-desc team-desc-bg">
										<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div> -->

				<div class="container clearfix topmargin">

					<div id="oc-clients" class="owl-carousel image-carousel">

						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/1.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/2.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/3.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/4.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/5.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/6.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/7.png" alt="Clients"></a></div>
						<!--div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/8.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/9.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo base_url();?>assets/main_site/images/clients/10.png" alt="Clients"></a></div-->

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

                       function goToContent()
			{
				
				 $('html,body').animate({
                                   scrollTop: $("#content").offset().top},
                                       2000);
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

