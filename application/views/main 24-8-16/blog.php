<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Document Title
	============================================= -->
	<title>Web Solutions and Digital Marketing Blogs - Rebelute</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>
    <meta name="description" content=" Rebelute blogs educates about the latest and updated technologies on media, digital marketing strategy,SEO,PPC,Email Campaigns, web development and design."/>
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
						<a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo@2x.png" alt="Rebelute Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
  ============================================= -->
	<section id="page-title" class="page-title-parallax page-title-dark page-title-left" style="padding: 250px 0; background-image: url('<?php echo base_url();?>assets/main_site/images/blog.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.2">

	    <div class="container clearfix">
		<div class="sliderdiv">
		    <h1>Our Blog</h1>
		    <span>Check out our latest publications</span>
		</div>	
	    </div>

	</section><!-- #page-title end -->
	
	
	<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div id="blog-image" class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid clearfix">
					
                        <?php foreach($blog_results as $blogs){ 
						
						    if($blogs->media_type==0)
							{
								$title = str_replace(" ","-",$blogs->title);
						?> 
						
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" alt=""></a>
							</div>
							<div class="entry-title testheight">
								<h2><a href="<?php echo base_url();?>blog/<?php echo $title;?>"><?php echo $blogs->title;?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($blogs->blog_date));?></li>
								<!--li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li-->
							</ul>
							<div class="entry-content testheight">
								<p><?php echo $blogs->short_desc;?></p>
								<a href="<?php echo base_url();?>blog/<?php echo $title;?>" class="button button-rounded button-reveal button-small button-border btntransparent1 tright" style="margin-top:20px !important"><i class="icon-arrow-right"></i>
		                        <span style="margin-top:0px !important;">Read more </span></a>
							</div>
						</div>
                         
						
                        <?php }
						      else
							  {
						
						?>
						    <div class="entry clearfix">
							<div class="entry-image">
								<?php echo $blogs->blog_image;?>
							</div>
							<div class="entry-title testheight">
								<h2><a href="blog-single-full.html"><?php echo $blogs->title;?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i><?php echo date('d F Y',strtotime($blogs->blog_date));?></li>
								<!--li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a></li>
								<li><a href="#"><i class="icon-film"></i></a></li-->
							</ul>
							<div class="entry-content testheight">
								<p><?php echo $blogs->short_desc;?></p>
								<!--a href="<?php //echo base_url();?>blog/<?php echo $title;?>"class="more-link">Read More</a-->
							    <a href="<?php echo base_url();?>blog/<?php echo $title;?>" class="button button-rounded button-reveal button-small button-border btntransparent1 tright" style="margin-top:20px !important"><i class="icon-arrow-right"></i>
		                        <span style="margin-top:0px !important;">Read more </span></a>
							
							</div>
						</div>

						

						
						
							  <?php } // End Else
							  
						} // End For each
						?>
						

						

					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					
					<p><?php echo $links; ?></p>

				</div>

			</div>

		</section><!-- #content end -->
	