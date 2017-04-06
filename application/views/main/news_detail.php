<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solution" />
	<meta name="keywords" content="<?php echo $news->meta_keywords;?>" />
	<meta name="description" content="<?php echo $news->meta_description;?>" />
    
         <?php $this->load->view('main_template/header');?>
	<!-- Document Title
	============================================= -->
	<title><?php echo ucwords($news->title);?></title>


        <!-- Start Meta  Tag For FB
	============================================= -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $news->title;?>" />
	<meta property="og:description" content="<?php echo $news->short_description;?>" />
	<meta property="og:url" content="<?php echo base_url(uri_string());?>" />
	<meta property="og:site_name" content="Rebelute" />
	<meta property="og:image" content="<?php echo base_url();?>uploads/news/<?php echo $news->news_image;?>" />
	
	
	
	<!-- End Meta  Tag For FB
	============================================= -->
	
	<style>
	.entry-title h1 {
		font-size:26px;
	}
	
	h2 {
		font-size:22px;
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
					
						
						<?php $this->load->view('main_template/logo');?>
					

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->
		
		<section id="page-title">

			<div class="container clearfix">
				<h1>News and Events</h1>
				<span>Our Latest News and Events</span>
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
									<h1><?php echo $news->title;?></h1>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date('d F Y', strtotime($news->news_date));?></li>
									
									<!--li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
									<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
									<li><a href="#"><i class="icon-camera-retro"></i></a></li-->
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<?php 
								       $image= str_replace(" ","_",$news->news_image);
								       $image= str_replace("#","",$image);
								
								?>
								<div class="entry-image">
									<img src="<?php echo base_url();?>uploads/news/<?php echo $image;?>" alt="<?php echo $news->image_alt_text;?>">
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">
                                    <?php echo html_entity_decode($news->content);?>

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
											$image_related= str_replace(" ","_",$related[$i]['news_image']);
								            $image_related= str_replace("#","",$image_related);
                                            $title = str_replace(" ","-",$related[$i]['title']);
											$new_url = ( '0' == $related[$i]['url_type'] ) ? base_url()."news/". $related[$i]['url'] : $related[$i]['url'];											
									?>
									
									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="<?php echo $new_url;?>"><img src="<?php echo base_url();?>uploads/news/<?php echo $image_related;?>" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php echo $new_url;;?>"><?php echo $related[$i]['title'];?></a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($related[$i]['news_date']));?></li>
												<!--li><a href="#"><i class="icon-comments"></i> 12</a></li-->
											</ul>
											<div class="entry-content"><?php echo $related[$i]['short_description'];?></div>
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
												$image_related= str_replace(" ","_",$related[$i]['news_image']);
								                $image_related= str_replace("#","",$image_related);
										        $title = str_replace(" ","-",$related[$i]['title']);
												$news_url = "";
												$news_url = ( '0' == $related[$i]['url_type'] ) ? base_url()."news/". $related[$i]['url'] : $related[$i]['url'];
										?>
									
									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="<?php echo $news_url;?>"><img src="<?php echo base_url();?>uploads/news/<?php echo $image_related;?>" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php echo $news_url;?>"><?php echo $related[$i]['title'];?></a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($related[$i]['news_date']));?></li>
												<!--li><a href="#"><i class="icon-comments"></i> 12</a></li-->
											</ul>
											<div class="entry-content"><?php echo $related[$i]['short_description'];?></div>
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
							  
							            
					
					          <div class="widget widget_links clearfix">

								<h4>Months</h4>

								<ul>
								    <?php foreach($categories as $cat){
										  $cat_temp = str_replace(" ","-",$cat['month_name']. '-'. $cat['year_name']);
										   $cat_temp = strtolower( $cat_temp );
									?> 
									<li><a href="<?php echo base_url();?>category-news/<?php echo $cat_temp;?>"><div><?php echo $cat['month_name']. ' '. $cat['year_name'] ;?></div></a></li>
									<?php }?>
								</ul>

							</div>
					
					        
							
							</div>
							
							
						
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->