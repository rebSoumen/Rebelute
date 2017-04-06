<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Administrator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/main_site/images/favicon.ico"/>
	
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/login.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<script type="text/javascript">
function validate_login()
{
var user=document.form_login.login_email.value;
var em=document.form_login.login_email;
var ps=document.form_login.login_password;
var user=user.trim();
var pass=document.form_login.login_password.value;
if(user == '')
{
	alert('Please Enter Email Address');

return false;
}
else{
	

    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(re.test(user)==false){
		alert("Invalid Email Address");
		em.focus();
		return false;
	}
	
	
}
if(pass == '')
{
	alert('Please Enter Password');
	ps.focus();

    return false;
}
}
</script>
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
       <!-- <img src="<?php echo base_url();?>assets/admin/img/logo.png" id="logoimg" alt=" Logo" />-->
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form  class="form-signin" name="form_login" onsubmit="return validate_login()" method="post">
                <p style="color:black">
                    Email or Password Doesnot Match
                </p>
              <p>
                <a class="btn text-muted text-center btn-primary" type="submit" href="<?php echo base_url();?>admins">Try Again</a>
				</p>
            </form>
        </div>
        
        
    </div>
   

</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo base_url();?>assets/admin/plugins/jquery-2.0.3.min.js"></script>
      <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="<?php echo base_url();?>assets/admin/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
