<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile App Development | Rebelute Digital Solutions</title>
	<link rel="shortcut icon" type="image/x-icon" href="http://rebelute.com/assets/main_site/images/favicon.ico"/>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url();?>assets/landing_page/mobile/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/landing_page/mobile/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/landing_page/mobile/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.postn {
			position:relative;
			background: #505050 !important;
		}
		
		.whitebg {
			    background: #505050 !important;
		}
		
		.fix {
			position:fixed;
			right: 0;
			left: 0;
			    z-index: 9;
			background: #505050  !important;
		}
		
		.navbar-fixed-top {
			top: 30px !important;
		}
	</style>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-76711294-3', 'auto');
	  ga('send', 'pageview');

	</script>
	
	
	
	
	
</head>

<body id="page-top" class="index">
	<div class="row postn whitebg fix">
    <div class="container whitebg">
	<div class="col-md-12">
        <div class="phone-info whitebg"><span style="float:right;color: #fff;font-weight: 600;">Give us a call :  <span class="rTapNumber136291" style="visibility: visible; color: #ff0000; font-size: 23px !important;"> +1-248-838-3231</span></span></div>
    </div>
	</div>
	</div>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#page-top">Start Bootstrap</a> -->
				
				<img src="<?php echo base_url();?>assets/landing_page/mobile/img/logo-dark.png" class="navbar-brand img-responsive"/>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Introduction">Introduction </a>
						<span class="divider1"></span>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Recent Projects </a>
						<span class="divider1"></span>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Our Process </a>
						<span class="divider1"></span>
                    </li>
					<li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
				
				
                   <form class="well form-horizontal" action="<?php echo base_url();?>landing_page/saveUserInformation" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend class="formlabel">FREE QUOTE TODAY!</legend>

<!-- Text input-->

<div class="form-group">
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Full Name" required  class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input  name="email" id="email" required onblur="checkvalidEmail()" placeholder="Email Address" class="form-control"  type="text">
  
   </div>
  </div>
   <span id="err_email" style="color:red;display:none">Please Enter Valid Email</span>
</div>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input  name="mobile" required maxlength="12" onkeypress="return isNumberKey(event);" placeholder="Mobile Number" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="message" required placeholder="Message"></textarea>
  </div>
  </div>
</div>

<!-- Text input-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="hidden" name="page_id" value="2"/>
    <button type="submit" class="btn btn-l btn-warning btnpadg" >Get a Free Quote! <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
                
				</div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="WhiteBG" id="Introduction">
        <div class="container">
		
            <div class="row">
                <div class="col-lg-12 text-center font1 PaddingTop">
                    <h5><span class="Grey">MOBILE APP</span> <vajahat class="red">DEVELOPERS</vajahat></h5>
					<h3 class="red">IOS AND ANDROID</h3>
					<p class="text-center text-capitalize font1">You need an app. We’ve got the pros. It’s Go Time.</p>
					<p class="text-justify text-lowercase small font1"> Widely Interactive is a mobile app developer working with companies across the globe. We develop apps for iOS, Android, Windows and Blackberry. We work with many local companies as well as several Fortune 500 Companies. So, whether your needs are big or small, we can get your project off the bench and into action.</p>

 <p class="text-justify text-lowercase small font1">Our application development is entirely in-house and never outsourced. This allows us to have complete control over every stage of production to ensure the highest level of quality and customer satisfaction. From project scoping to deployment, a project manager will work closely with your company every step of the way.</p>

 <p class="text-justify text-lowercase small font1">A major advantage of working with Widely Interactive is that we are a hybrid mobile app developer. This means we develop an application only once and deploy it to multiple app sites, saving our customers thousands of dollars. Other agencies develop native mobile apps, which require an application to be built for each operating system, thereby multiplying the cost of production.</p>
                   <br>
				   <br>
				   </div>
				   </div>
				   </div>
				  
				   </section>
				   
 <!-- RecentProjects -->  
 
				   <section class="projects" id="about">
				   <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center font1">
				<h5><span class="Grey">RECENT</span> <span class="red">PROJECTS</span></h5>
					<h5><p class="text-center text-capitalize small font1">Here are a few mobile applications we recently completed. To view a demo of these projects and others, please call us at +1-248-838-3231 or send a message to schedule a meeting.</p>
					<br>
				   <br>
				   
				   <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 portfolio-item">

						
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Mobile3.png" class="img-responsive border1" alt="">
                   
                        </div>
						
                <div class="col-xs-12 col-sm-6 col-md-6 portfolio-item pad1">
				<h3 class="text-left text-capitalize font1"><font color="red">Complete CRM For Small Startups</font><h3>
				<h4>
				<p class="text-left text-capitalize Big font1">We created a complete crm solution including web app and mobile app where you can many al the aspects of your business. It includes client access, admin access and employee access for a complete crm process. Some of the features are:<br>- Project Management using mobile app.<br>- Invoice generation and payment using mobile app.<br>- Push notification for updates to client.<br>- Blog and social media integration for marketing</p>
				<h4>
                    
                       
						
							</div><br><br>
							
							
							<div style="clear:both">&nbsp;</div>
						
                <div class="col-xs-12 col-sm-6 col-md-6 portfolio-item pad2">
				<h3 class="text-left text-capitalize font1"><font color="red">Free Life Music Streaming App</font><h3>
				<h3>
				<p class="text-left text-capitalize Big font1 media">Free life is an online music and videos streaming app where the users can broadcast their own videos and music. They can also share, chat and comment on differentlive events.Some of the features are:<br>- Live Video/Audio Streaming.<br>- Instant connect to users within a specific range.<br>- Chat withing groups.<br>- View and share profiles you like.</p>
				<h3>
                    
                       
						
							</div>
							
							<div class="col-xs-12 col-sm-6 col-md-6 portfolio-item">
						
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Mobile2.png" class="img-responsive border1" alt="">
                   
                        </div><br><br>
						
						<div style="clear:both">&nbsp;</div>
						
							<div class="col-xs-12 col-sm-6 col-md-6 portfolio-item">
						
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Mobile1.png" class="img-responsive border1" alt="">
                   
                        </div>
						
						
                <div class="col-xs-12 col-sm-6 col-md-6 portfolio-item pad3">
				<h3  class="text-left text-capitalize font1"><font color="red">Super Uber</font><h3>
				<h4>
				<p class="text-left text-capitalize Big font1">Super Uber is a taxi booking portal connected to strong framed web app. Here the users can locate rides from over 15 providers and can book it instantly. Also the destination is tracked by using GPS on the go.Some of the features are:<br>- GPS Navigation.<br>- Instant payment via super uber wallet.<br>- Panic button for instant help.<br></p>
				</h4>
                    
                       
						
							</div>
						</div>
						
					
						
						
						
						</div>
						</div>
						
						</div>
    </section>
							
	 <!-- Our Process -->  
 				
						
			<section class="" id="portfolio">
        <div class="container border_btm">		 
        <div class="row">
		
			<div class="container">
			
			
		<h5><span class="Grey">OUR </span> <span class="red">Process</span></h5>
		
		
                <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item ">
				 <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        
                            <div class="caption-content">
                                
						
							
                        </div>
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Free consultation.png" class="img-responsive center" alt="">
                    </a>
					<h5><p class="text-center font1"><font color="red">Free consultation</font></p></h5>
						<h6><p class="text-center text-lowercase med font1">We love talking about mobile apps, so give us a call for a free initial consultation and quote.</p></h6>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                       
                            <div class="caption-content">
                               
                            </div>
                        
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Scoping.png" class="img-responsive center" alt="">
                    </a>
					<h5><p class="text-center font1"><font color="red">Scoping</font></p></h5>
					<h6><p class="text-center text-lowercase med font1">Upon quote approval, we work closely with your company to draft up an agreement that includes a scope, timeline, and pricing.</p></h6>
					
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                      
                            <div class="caption-content">
                                
                            
                        </div>
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Production.png" class="img-responsive center" alt="">
                    </a>
					<h5><p class="text-center font1"><font color="red">Production</font></p></h5>
					<h6><p class="text-center text-lowercase med font1">After signing papers, we begin working on your mobile app. We typically employ a Rapid Application Development (RAD) methodology.</p></h6>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        
                            <div class="caption-content">
                               
                            </div>
                        
                        <img src="<?php echo base_url();?>assets/landing_page/mobile/img/Delivery.png" class="img-responsive center" alt="">
                    </a>
					<h5><p class="text-center font1"><font color="red">Delivery</font></p></h5>
					<h6><p class="text-center text-lowercase med font1">Upon final testing, review, and client sign-off, your app will be deployed on app sites.</p></h6>
                </div>

                        </div>
						</div>   
			
			 	</div>
    </section>
					
                      
           

    <!-- Cost Section -->
    <section class="Cost Space" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><font color="red">Cost</font></h2>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-justify font1">We know cost is a big factor in your decision. We therefore work as quickly as possible to deliver quotes. As much as we’d love to post our pricing, there’s simply no way to break it down. Every project has unique requirements and hence a unique price.</p>
                </div>
              
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center font1">
                    <h2><font color="white">CALL: +1-248-838-3231</h2>
                 
                </div>
				            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center font1">Or send us a message and we’ll follow up with you promptly! Our office is located in the <br> California, so if you’d like to come by for a demo, we’d be happy to set up a meeting.</p>
                </div>
              
                
            </div>
            </div>
            
        </div>
    </section>

    <!-- Footer -->
	
	<footer class="DarkGreybg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
    <div class="col-md-4 text-center font">
     <h5>Copyrights © Rebelute Digital Solutions 2016.</h5>
     </div>
     <div class="col-md-4 text-center font">
     <h5>www.rebelute.com</h5>
     </div>
     <div class="col-md-4 text-center font">
     <h5>Contact us: (925) 315-5007</h5>
     </div>
        

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </div>


    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/landing_page/mobile/js/freelancer.js"></script>

</body>

<script>
        function checkvalidEmail()
		{
			var email = $("#email").val();
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			if(re.test(email)==false){
				$("#err_email").show();
				$("#email").val('');
				return false;
			}
			else
			{
				$("#err_email").hide();
				return true;
			}
		}
		
		function isNumberKey(evt)
		{
			var charCode = (evt.which) ? evt.which : event.keyCode;
			if (charCode != 46 && charCode > 31
			   && (charCode < 48 || charCode > 57))
				return false;

			return true;
		}
</script>

</html>
