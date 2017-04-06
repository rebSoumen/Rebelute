<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Document Title
	============================================= -->
	<title>Careers and Job Openings - Work at Rebelute</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>
       <meta name="description" content="Explore our career opportunities for professionals to find a job that's exciting, rewarding, and super flexible.You will even get to change the world."/>
	
       <?php $this->load->view('main_template/header');?>

      <!--   ======== For File Upload ==========    -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/main_site/css/file_upload_style.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/main_site/js/bs-filestyle.js"></script>
        
        <style>
	.hidebutton {
		display:none;
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

                                      
				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
	  ============================================= -->
	  <section id="page-title" class="page-title-parallax page-title-dark page-title-left" style="padding: 250px 0; background-image: url('<?php echo base_url();?>assets/main_site/images/career.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.2">

	   <div class="container clearfix">
		<div class="sliderdiv1">
			<h1>Join Our Team</h1>
			<span>Looking for your next big adventure? Explore our career opportunities for professionals to find a job that's exciting, rewarding, and uber flexible. You'll even get to change the world.</span>
	    </div>
	   </div>

	  </section><!-- #page-title end -->
		
		
		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_three_fifth nobottommargin">
                        
						<?php 
						if(count($openings)!=0)
						{
						foreach($openings as $data){?>
						<div id="loop_for">
						
							<div class="fancy-title title-bottom-border">
								<h3><?php echo $data->position;?></h3>
							</div>

							<p><?php echo $data->short_desc;?></p>

							<div class="toggle toggle-bg">    
								<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Requirements</div>
								<div class="togglec">
									<?php echo html_entity_decode($data->requirements);?>
								</div>
							</div>

							<div class="toggle toggle-bg">
								<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>What we Expect from you?</div>
								<div class="togglec">
									<?php echo html_entity_decode($data->expectations);?>
								</div>
							</div>

                            <div class="toggle toggle-bg">							
								<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>What you've got?</div>
								<div class="togglec">
								    <?php echo html_entity_decode($data->candidate_skill);?>
								</div>
							</div>

							
							<div class="divider divider-short"><i class="icon-star3"></i></div>

						</div>
						
						<?php 
						
						}// end for each loop 
						
						}// Enf Of if condition for opening not empty
						else
						{
						
						?>
						
						<div id="job-apply" class="heading-block">
							<h4>No Current Openings</h4>
							<span>Please keep checking our  site for current openings.</span>
						</div>
						<?php }?>

					</div>

					<div class="col_two_fifth nobottommargin col_last">
                        
						<?php  $result=$this->uri->segment(3);
						
						      if($result=="success")
							  {
						?>
					    <div class="alert alert-success">
						  <button type="button" class="close" onclick="change_url_page('<?php echo base_url();?>home/careers')" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <i class="icon-gift"></i><strong>Your Application Has Been Submitted </strong> <p>We Will Get Back To You Soon</p> .
						</div>
						
							  <?php }?>
						
					
						<div id="job-apply" class="heading-block">
							<h2>Apply Now</h2>
							<span>And we'll get back to you within 48 hours.</span>
						</div>

						<div id="job-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

						<form action="<?php echo base_url();?>home/saveCandidateDetails" enctype="multipart/form-data" id="template-jobform" name="template-jobform" method="post" role="form">

							<div class="form-process"></div>

							<div class="col_half">
								<label for="template-jobform-fname">First Name <small class="mandatroy">*</small></label>
								<input type="text" id="fname" name="fname"  class="sm-form-control required" />
							</div>

							<div class="col_half col_last">
								<label for="template-jobform-lname">Last Name <small class="mandatroy">*</small></label>
								<input type="text" id="lname" name="lname"  class="sm-form-control required" />
							</div>

							<div class="clear"></div>

							<div class="col_half">
								<label for="template-jobform-email">Email <small class="mandatroy">*</small></label>
								<input type="email" id="email" name="email"  class="required email sm-form-control" />
							</div>
							
							<div class="col_half col_last">
								<label for="template-jobform-phone">Phone <small class="mandatroy">*</small></label>
								<input type="text" id="phone" name="phone" maxlength="10" onkeypress="return isNumberKey(event);"  class="required sm-form-control" />
							</div>

							<div class="col_half">
								<label for="template-jobform-age">Age <small class="mandatroy">*</small></label>
								<input type="text" name="age" id="age" maxlength="2" onkeypress="return isNumberKey(event);"  size="22"  class="sm-form-control required" />
							</div>

							<div class="col_half col_last">
								<label for="template-jobform-city">City <small class="mandatroy">*</small></label>
								<input type="text" name="city" id="city"  size="22" class="sm-form-control required" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-jobform-service">Position <small class="mandatroy">*</small></label>
								<select name="position" id="position"   class="sm-form-control required">
									<option value="">-- Select Position --</option>
									<?php foreach($positions as $pos){?>
									<option value="<?php echo $pos->position_name;?>"><?php echo $pos->position_name;?></option>
									<?php }?>
								</select>
							</div>

							<div class="col_half" style="margin-top: 9px;">
								<label for="template-jobform-salary">Expected Salary</label>
								<input type="text" name="salary" maxlength="6" id="salary" value="" size="22"  class="sm-form-control" />
							</div>

							<div class="col_half col_last">
								<label for="template-jobform-time">Notice Period (In Days) <small class="mandatroy">*</small></label>
								<input type="text" name="notice_period" id="notice_period" maxlength="2" value="" size="22"  class="sm-form-control required" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-jobform-website">Website (if any)</label>
								<input type="text" name="website" id="website" value="" size="22"  class="sm-form-control" />
							</div>

							<div class="col_full">
								<label for="template-jobform-experience">Experience <small class="mandatroy">*</small></label>
								<input type="text" name="experience" id="experience" value="" size="22" class="sm-form-control required" />
							</div>
							
							<!--div class="col_full">
								<label for="template-jobform-experience">Upload Resume</label>
								<input type="file" name="resumefile" id="resumefile" value="" size="22"  class="sm-form-control required" />
							</div-->

                            <div class="col_full">
								<label for="template-jobform-experience">Upload Resume</label>
								<input id="input-8" type="file" accept="doc/*" name="resumefile" class="file-loading" data-allowed-file-extensions='["doc","docx"]'>
								<span  id="upload_err" style="color:red;display:none;">Please Upload Your Resume</span>
							</div>

							<div class="col_full">
								<label for="template-jobform-application">Message <small class="mandatroy">*</small></label>
								<textarea name="message" style="resize:none;" id="message" rows="6"  class="sm-form-control required"></textarea>
							</div>
                                                        
                            <div class="col_full">
							    <div class="g-recaptcha" data-sitekey="6Le44yETAAAAAJqm_rplMDaKvUpQH8GxDUx-3gF6"></div>
								<span id="capcha_error" style="color:red;display:none">Please Check The Capcha First</span>
						    </div>

							<div class="col_full hidden">
								<input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">Send Application</button>
							</div>

						</form>
                                                
                                                 <script src='https://www.google.com/recaptcha/api.js'></script>
                                                 
						<script type="text/javascript">

							jQuery("#template-jobform").validate({
								submitHandler: function(form) {
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
								
									jQuery('.form-process').fadeIn();
									if($("#input-8").val()=="")
									{
										jQuery('.form-process').fadeOut();
										$("#upload_err").show();
										 return false;
									}
									jQuery(form).ajaxSubmit({
										target: '#job-form-result',
										success: function() {
											jQuery('.form-process').fadeOut();
											jQuery(form).find('.sm-form-control').val('');
											jQuery('#job-form-result').attr('data-notify-msg', jQuery('#job-form-result').html()).html('');
											SEMICOLON.widget.notifications(jQuery('#job-form-result'));
											setTimeout("window.location='<?php echo base_url();?>careers'",7000);
										}
									});
								}
							});

						</script>

					</div>

				</div>

			</div>

		</section><!-- #content end -->
    <script>
	    $(document).ready(function(){
			$("#careers").addClass('current'); 
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
           
        function change_url_page(path) {
         
        ChangeUrl('Page1', path);
        }
		
		
		
		$('#resume').on( 'change', function() {
		   myfile= $( this ).val();
		   var ext = myfile.split('.').pop();
		   if(ext=="docx" || ext=="doc"){
			   
		   } else
		   {
			    alert("Please Upload your resume in doc/dox Format");
				$("#resume").val('');
		   }
		});
	</script>


       <script  type="text/javascript">
		$(document).on('ready', function() {
			
			$("#input-8").fileinput({
				mainClass: "input-group-md",
				showUpload: true,
				previewFileType: "text",
				allowedFileExtensions: ["doc", "docx"],
				browseClass: "btn btn-primary",
				browseLabel: "Upload Resume",
				browseIcon: "<i class=\"icon-file-alt\"></i> ",
				removeClass: "btn btn-danger",
				removeLabel: "Delete",
				removeIcon: "<i class=\"icon-trash\"></i> ",
				uploadClass: "btn btn-info hidebutton",
				uploadLabel: "Upload",
				uploadIcon: "<i class=\"icon-upload\"></i> "
			});

			
			
			
		});

	</script>
	
	<script>
		$(document).keydown(function(event){
			if(event.keyCode==123){
			return false;
			 }
			else if(event.ctrlKey && event.shiftKey && event.keyCode==73){        
			  return false;  //Prevent from ctrl+shift+i
			}
	    });
   
    </script>
	
	 <script type="text/javascript">
		
		$(function() {
			$(this).bind("contextmenu", function(e) {
				e.preventDefault();
			});
		}); 
	</script>
		
	

		