<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solution" />
	<meta name="keywords" content="<?php echo $blogs->keywords;?>" />
    
         <?php $this->load->view('main_template/header');?>
	<!-- Document Title
	============================================= -->
	<title><?php echo ucwords($blogs->title);?></title>


        <!-- Start Meta  Tag For FB
	============================================= -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $blogs->title;?>" />
	<meta property="og:description" content="<?php echo $blogs->short_desc;?>" />
	<meta property="og:url" content="<?php echo base_url(uri_string());?>" />
	<meta property="og:site_name" content="Rebelute" />
	<meta property="og:image" content="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" />
	
	<style>
	.entry-title h1 {
		font-size:26px;
	}
	
	h2 {
		font-size:22px;
	}
	</style>
	
	<!-- End Meta  Tag For FB
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
					
						
						<?php $this->load->view('main_template/logo');?>
					

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->
		
		<section id="page-title">

			<div class="container clearfix">
				<h1>Our Blog</h1>
				<span>Check Out Our Latest Publications</span>
				<!--ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Tabs</li>
				</ol-->
			</div>

		</section>
		
		
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h1><?php echo $blogs->title;?></h1>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date('d F Y', strtotime($blogs->blog_date));?></li>
									<li><i class="icon-user"></i> <?php echo $blogs->posted_by;?></li>
									<li><i class="camera-retro"></i> <?php echo $blogs->category;?></li>
									<!--li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
									<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
									<li><a href="#"><i class="icon-camera-retro"></i></a></li-->
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<img src="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" alt="<?php echo $blogs->image_alt_text;?>">
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">
                                    <?php echo html_entity_decode($blogs->description);?>

								</div>
							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
							
							

							<!-- Post Author Info
							============================================= -->
							

							<h4>Related Posts:</h4>

							<div class="related-posts clearfix">
                                
								<?php 
								    if(count($related)!=0)
									{?>
									
								
								<div class="col_half nobottommargin">
                                    
									<?php 
									    
									    for($i=0;$i<2;$i++)
										{
											
										if(isset($related[$i]))
										{
                                            $title = str_replace(" ","-",$related[$i]['title']);											
									?>
									
									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="<?php echo base_url();?>blog/<?php echo $title;?>"><img src="<?php echo base_url();?>uploads/blogs/<?php echo $related[$i]['blog_image'];?>" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php echo base_url();?>blog/<?php echo $title;?>"><?php echo $related[$i]['title'];?></a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($related[$i]['blog_date']));?></li>
												<!--li><a href="#"><i class="icon-comments"></i> 12</a></li-->
											</ul>
											<div class="entry-content"><?php echo $related[$i]['short_desc'];?></div>
										</div>
									</div>

								       <?php 
								
								           }// End Iff
									
										} // end Else
									?>

								</div>

								<div class="col_half nobottommargin col_last">
                                    
									<?php 
									    
									    for($i=2;$i<4;$i++)
										{
										     if(isset($related[$i]))
										    {
										        $title = str_replace(" ","-",$related[$i]['title']);
										?>
									
									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="<?php echo base_url();?>blog/<?php echo $title;?>"><img src="<?php echo base_url();?>uploads/blogs/<?php echo $related[$i]['blog_image'];?>" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php echo base_url();?>blog/<?php echo $title;?>"><?php echo $related[$i]['title'];?></a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($related[$i]['blog_date']));?></li>
												<!--li><a href="#"><i class="icon-comments"></i> 12</a></li-->
											</ul>
											<div class="entry-content"><?php echo $related[$i]['short_desc'];?></div>
										</div>
									</div>
                                    
									
									<?php 
								
								           }// End Iff
									
										} // end Else
									?>
									

								</div>
								
								
								<?php }?>

							</div>

							<!-- Comments
							============================================= -->
							
						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
					
					          <div class="sidebar-widgets-wrap">
							  
							             <div class="widget widget-twitter-feed clearfix">
												<h4>Who We Are</h4>
												<ul class="iconlist twitter-feed nomargin" data-username="envato" data-count="2">
												<li>
												A collective of problem-solving, SEO-obsessive, tech literate, brand-aware, social media-loving, entrepreneurial superheroes who join forces every day focused on one goal and one goal only: to use their unique array of skills to take client's businesses from good to great and beyond.
												</li>
												<li>We work with all kinds of businesses at all stages by helping establish a powerful online presence. Whether you're just starting out and want to launch with a bang or you've been around for decades and want to re-tool your online presence to generate a much-needed boost in business, we combine a mix of time-honored strategies that are proven to work with a custom business plan devised for each client that uses our wide range of skills to deliver the best possible boost to each individual brand we partner with.</li>
							              </div>
					
					          <div class="widget widget_links clearfix">

								<h4>CATEGORY</h4>

								<ul>
								    <?php foreach($categories as $cat){
										  $cat_temp = str_replace(" ","-",$cat->category);
									?> 
									<li><a href="<?php echo base_url();?>blog/category_blogs/<?php echo $cat_temp;?>"><div><?php echo $cat->category;?></div></a></li>
									<?php }?>
								</ul>

							</div>
					
					        
							
							</div>
							
							
						
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->