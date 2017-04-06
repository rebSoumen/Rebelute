<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

							<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/main_site/images/logo-dark.png" style="height:auto;width: 80%;" alt="" class="footer-logo"></a>

								<!--p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p-->

								<div style="background: url('<?php echo base_url();?>assets/main_site/images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>US Office:</strong><br>
										6370 Stoneridge Mall Road I211,<br>
										Pleasanton, CA 94588, USA.<br>
									</address>
									
									<!--abbr title="Phone Number"><strong>Phone:</strong></abbr> (925) 315-5007<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@rebelute.com-->
									<address>
										<strong>Pune Office:</strong><br>
										302, Sapphire Building, Plot No.9, <br>
										Bombay Sappers Colony, Wadgaon Sheri, Pune - 411014.<br>
									</address>
									
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> &nbsp; <img src="<?php echo base_url();?>assets/main_site/images/USA.png" alt="" style="width:20px;height:auto"/>&nbsp; (925) 315-5007<br>
									<abbr title="Fax"><strong></strong></abbr><span style="margin-left:51px;"><img src="<?php echo base_url();?>assets/main_site/images/INDIA.png" alt="" style="width:20px;height:auto"/>&nbsp; 020-65618181</span><br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@rebelute.com
								</div>
                                
								 
								
							</div>
							
							
							

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Services</h4>

								<ul>
									<li><a href="<?php echo base_url();?>product-engineering">Product Engineering</a></li>
									<li><a href="<?php echo base_url();?>digital-marketing">Digital Marketing</a></li>
						
									<li><a href="<?php echo base_url();?>web-development-services">Web Development Services</a></li>
                                    <li><a href="<?php echo base_url();?>mobile-development">Mobile Development</a></li>
									<li><a href="<?php echo base_url();?>ui-ux-services">UI / UX</a></li>
			                        <li><a href="<?php echo base_url();?>landing-page-services">Landing Page Services</a></li>
									
									
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
								
								    <?php foreach($blog as $row_blog)
									{
										$title = str_replace(" ","-",$row_blog->title);
										?>
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php echo base_url();?>blog/<?php echo $title;?>"><?php echo $row_blog->title;?></a></h4>
											</div>
											<ul class="entry-meta">
												<li><?php echo date("d F Y", strtotime($row_blog->created_date));?></li>
											</ul>
										</div>
									</div>

									<?php }?>

									
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -49px;">

							<!--div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div-->

						</div>

						<div class="widget subscribe-widget clearfix">
						    <h4>Newsletter Subscription</h4>
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
							<form id="widget-subscribe-form" action="<?php echo base_url();?>home/save_Subscribe"  method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="subscriber_email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<script type="text/javascript">
								jQuery("#widget-subscribe-form").validate({
									submitHandler: function(form) {
										jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
										jQuery(form).ajaxSubmit({
											target: '#widget-subscribe-form-result',
											success: function() {
												jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
												jQuery('#widget-subscribe-form').find('.form-control').val('');
												jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
												SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
											}
										});
									}
								});
							</script>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="https://www.facebook.com/rebelutedigital" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.facebook.com/rebelutedigital" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="https://twitter.com/rebelutedigital" target="_blank" class="social-icon si-dark si-colored  si-twitter" data-toggle="tooltip" data-placement="top" title="">
									<i class="icon-twitter"></i>
                                                                        <i class="icon-twitter"></i>
									</a>
									<a href="https://twitter.com/rebelutedigital" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Follow Us</strong><br>on Twitter</small></a>
								</div>
								
								<div style="clear:both"></div>
								
								<div class="col-md-6 clearfix bottommargin-sm">
									<a  href="https://plus.google.com/u/0/105744246294021834866/posts" target="_blank" class="social-icon si-dark si-colored si-gplus nobottommargin" style="margin-right: 10px;">
										<i class="icon-google-plus"></i>
										<i class="icon-google-plus"></i>
									</a>
									<a  href="https://plus.google.com/u/0/105744246294021834866/posts" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Google+</small></a>
								</div>
								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="https://www.linkedin.com/company/rebelute" target="_blank" class="social-icon si-dark si-colored si-linkedin nobottommargin" style="margin-right: 10px;">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
									<a href="https://www.linkedin.com/company/rebelute" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Linkedin</small></a>
								</div>
								
								<div style="clear:both"></div>
								
								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="https://www.youtube.com/channel/UC-MH2owuZqGy5nL-G2mF5NA" target="_blank" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
										<i class="icon-youtube"></i>
										<i class="icon-youtube"></i>
									</a>
									<a href="https://www.youtube.com/channel/UC-MH2owuZqGy5nL-G2mF5NA" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Subscribe us</strong><br>on You Tube</small></a>
								</div> 
								<div class="col-md-6 clearfix">
									<a  href="https://in.pinterest.com/rebelutedigi/" target="_blank" class="social-icon si-dark si-colored  si-pinterest" data-toggle="tooltip" data-placement="top" title="">
									<i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
									</a>
									<a href="https://in.pinterest.com/rebelutedigi/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Pin Us</strong><br>on Pinterest</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy;2012 Rebelute Digital Solutions .<br>
						<div class="copyright-links"><a href="<?php echo base_url()?>terms-and-conditions">Terms of Use</a> / <a href="<?php echo base_url()?>privacy-policy">Privacy Policy</a> / <a href="<?php echo base_url()?>sitemap">Site Map</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<!--
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

							

							<a href="https://www.linkedin.com/company/rebelute" target="_blank" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>-->
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@rebelute.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> (925) 315-5007 <span class="middot">&middot;</span> <i class="icon-skype2"></i> rebelute.info
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/main_site/js/functions.js"></script>

	<!-- SEO Scripts
	============================================= -->
	 <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-76711294-1', 'auto');
         ga('send', 'pageview');
         
      </script>
	 

</body>
</html>