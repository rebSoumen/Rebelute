<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php if(!isset($_SESSION['admin']['name'])){
	
	//header("Location:".URL."admins");
	redirect('admins');
}?>
 <!-- BEGIN HEAD -->
<head>
<meta charset="UTF-8" />
<title>Administrator</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/main_site/images/favicon.ico"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/main.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/theme.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/MoneAdmin.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/Font-Awesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/validationengine/css/validationEngine.jquery.css" />
    </head>
     <!-- END HEAD -->

	 
     <!-- BEGIN BODY -->
<body class="padTop53 ">

   <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                 <img style="width: 15%; padding-bottom: 7px;" src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="" /></a>
                </header>
				
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                   
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                   
                    <!--ALERTS SECTION -->
                   
                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <!--<li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>-->
                           <!-- <li><a href="#"><i class="icon-gear"></i> Settings </a>
                             <li class="divider"></li>
						   </li>-->
                          
                            <li><a href="<?php echo base_url();?>admins/logout"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
               
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php if(isset($_SESSION['admin']['name'])){ echo $_SESSION['admin']['name'] ;} ;?></h5>
                    <ul class="list-unstyled user-info">
                        
                        
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="<?php echo base_url();?>admins//Dashboard" >
                        <i class="icon-table"></i> Dashboard
	         
                    </a>                   
                </li>



               
				
				<li class="panel ">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#cat">
                        <i class="glyphicon glyphicon-tag"></i> Blogs
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="cat">
                        <li class=""><a href="<?php echo base_url();?>admins/add_blog"><i class="icon-angle-right"></i> Add / Edit Blogs </a></li>
                       
                    </ul>
                </li>
				
				
				<li class="panel ">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#t">
                        <i class="glyphicon glyphicon-th-list"></i> Subscribers 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="t">
                        <li class=""><a href="<?php echo base_url();?>admins/subscribers"><i class="icon-angle-right"></i> Subscribers List </a></li>
                       
                    </ul>
                </li>
				
				<li class="panel ">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#vacancy">
                        <i class="glyphicon glyphicon-briefcase"></i> Vacancies 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="vacancy">
                        <li class=""><a href="<?php echo base_url();?>admins/vacancies"><i class="icon-angle-right"></i> Recent Vacancies </a></li>
                        <li class=""><a href="<?php echo base_url();?>admins/view_candidates_application"><i class="icon-angle-right"></i> View Candidates Application </a></li>
                    </ul>
                </li>
				
				<li class="panel ">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#services">
                        <i class="glyphicon glyphicon-cog"></i> Services Newsletter
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="services">
                        <li class=""><a href="<?php echo base_url();?>admins/services_info"><i class="icon-angle-right"></i>Services Request List </a></li>
                        <li class=""><a href="<?php echo base_url();?>admins/design_service_list"><i class="icon-angle-right"></i>Design Services Request List </a></li>
                       
                    </ul>
					
					 
                </li>
				
			    <li class="panel">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pricing">
                        <i class="glyphicon glyphicon-euro"></i> Resource Pricing
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="pricing">
                        <li class=""><a href="<?php echo base_url();?>admins/resource_pricing"><i class="icon-angle-right"></i>Add / Edit Monthly Costing </a></li>
                        <li class=""><a href="<?php echo base_url();?>admins/resource_pricing_hourly"><i class="icon-angle-right"></i>Add / Edit Hourly Costing </a></li>
                    </ul>
					
					 
                </li>
				
				<li class="panel">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#coupon">
                        <i class="glyphicon glyphicon-gift"></i> Manage Coupons
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="coupon">
                        <li class=""><a href="<?php echo base_url();?>admins/manage_coupons"><i class="icon-angle-right"></i>Add / Delete Coupons </a></li>
                    </ul>
					
					 
                </li>
				
				<li class="panel">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#estimate">
                        <i class="glyphicon glyphicon-leaf"></i> Project Estimates
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="estimate">
                        <li class="active"><a href="<?php echo base_url();?>admins/project_estimate"><i class="icon-angle-right"></i>Project Estimates </a></li>
                        <li class="active"><a href="<?php echo base_url();?>admins/monthly_estimate"><i class="icon-angle-right"></i>Monthly Estimates </a></li>
                        <li class=""><a href="<?php echo base_url();?>admins/hourly_estimate"><i class="icon-angle-right"></i>Hourly Estimates </a></li>
                    </ul>
					
					 
                </li>
				
				<li class="panel">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#contact">
                        <i class="glyphicon glyphicon-user"></i> Contact Info
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="contact">
                        <li class=""><a href="<?php echo base_url();?>admins/contact_info"><i class="icon-angle-right"></i>View Contact Info </a></li>
                    </ul>
					
					 
                </li>
				
				<li class="panel">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#landing">
                        <i class="glyphicon glyphicon-book"></i> Landing Pages
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="landing">
                        <li class=""><a href="<?php echo base_url();?>admins/show_all_page"><i class="icon-angle-right"></i>Add New Pages </a></li>
                    </ul>
					
					 
                </li>
				
				<li class="panel">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#news">
                        <i class="glyphicon glyphicon-comment"></i> News
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="news">
                        <li class=""><a href="<?php echo base_url();?>admins/viewMonths"><i class="icon-angle-right"></i>Add Month </a></li>
                        <li class=""><a href="<?php echo base_url();?>admins/viewNews"><i class="icon-angle-right"></i>Add News </a></li>
                    </ul>
					
					 
                </li>
				
				<li class="panel ">
                    <a href="javascript:;" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#url">
                        <i class="glyphicon glyphicon-th-list"></i> Third Party URL
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="url">
                        <li class=""><a href="<?php echo base_url();?>admins/urlList"><i class="icon-angle-right"></i> Add Url </a></li>
                       
                    </ul>
                </li>
               

            </ul>

        </div>