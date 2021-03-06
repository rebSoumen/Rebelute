<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
    
         <?php $this->load->view('main_template/header');?>
	<!-- Document Title
	============================================= -->
	<title>News and Events</title>

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
	<section id="page-title">

			<div class="container clearfix">
				<h1>Category News<?php //$temp_cat=$this->uri->segment(2); 
				//echo str_replace("-"," ",$temp_cat);?></h1>
				<span>Check Out Our Latest Publications</span>
				<!--ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Tabs</li>
				</ol-->
			</div>

		</section>
	
	
	<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid clearfix">
					
                        <?php foreach($news_results as $blogs){ 
						
						        
								$title = str_replace(" ","-",$blogs->title);
								$image = str_replace(" ","_",$blogs->news_image);
								$image= str_replace("#","",$image);
								
								 $new_url = ( '0' == $blogs->url_type ) ? base_url()."news/". $blogs->url : $blogs->url;
						?> 
						
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo base_url();?>uploads/news/<?php echo $image;?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url();?>uploads/news/<?php echo $image;?>" alt=""></a>
							</div>
							<div class="entry-title testheight">
								<h2><a href="<?php echo $new_url;?>"><?php echo $blogs->title;?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($blogs->news_date));?></li>
								<!--li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li-->
							</ul>
							<div class="entry-content testheight">
								<p><?php echo $blogs->short_description;?></p>
								<a href="<?php echo $new_url;?>" class="button button-rounded button-reveal button-small button-border btntransparent1 tright" style="margin-top:20px !important"><i class="icon-arrow-right"></i>
		                        <span style="margin-top:0px !important;">Read more </span></a>
							</div>
						</div>
  	  
				<?php		} // End For each
						?>
	
					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					
					<p><?php echo $links; ?></p>

				</div>

			</div>

		</section><!-- #content end -->
	