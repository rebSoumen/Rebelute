<body>

<?php 
    //Price
    $full_cost = $_POST['final_total_amount'];
	
	/* Getting the vlaues of the POST  */
	
	$senior_developer = $_POST['final_senior_developer'];
	$senior_developer_hour = $_POST['final_senior_developer_hour'];
	$normal_developer = $_POST['final_normal_developer'];
	$normal_developer_hour = $_POST['final_normal_developer_hour'];
	$senior_designer = $_POST['final_senior_designer'];
	$senior_designer_hour = $_POST['final_senior_designer_hour'];
    $normal_designer = $_POST['final_normal_designer'];
    $normal_designer_hour = $_POST['final_normal_designer_hour'];
	$senior_tester = $_POST['final_senior_tester'];
	$senior_tester_hour = $_POST['final_senior_tester_hour'];
	$normal_tester = $_POST['final_normal_tester'];
	$normal_tester_hour = $_POST['final_normal_tester_hour'];
	$system_analyst = $_POST['final_system_analyst'];
	$system_analyst_hour = $_POST['final_system_analyst_hour'];
	$project_manager = $_POST['final_project_manager'];
	$project_manager_hour = $_POST['final_project_manager_hour'];
	
	$arr['user'] = array('senior_developer'=>$senior_developer,
	                     'senior_developer_hour'=>$senior_developer_hour,
		                 'normal_developer'=>$normal_developer,
		                 'normal_developer_hour'=>$normal_developer_hour,
					     'senior_designer'=>$senior_designer,
					     'senior_designer_hour'=>$senior_designer_hour,
					     'normal_designer'=>$normal_designer,
					     'normal_designer_hour'=>$normal_designer_hour,
					     'senior_tester'=>$senior_tester,
					     'senior_tester_hour'=>$senior_tester_hour,
					     'normal_tester'=>$normal_tester,
					     'normal_tester_hour'=>$normal_tester_hour,
					     'system_analyst'=>$system_analyst,
					     'system_analyst_hour'=>$system_analyst_hour,
					     'project_manager'=>$project_manager,
					     'project_manager_hour'=>$project_manager_hour,
		            );
		$this->session->set_userdata($arr);	
	

?>

<div class='cost_calc_quote_summary clearfix' id="overall_div">
    <h2>Cost Breakdown</h2>
    <?php 
	    if($senior_developer!=0)
		{
	?>
	    <p class="cost_calc_item_name"> Senior Developer(<?php echo $senior_developer;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$senior_developer*$data->senior_developer;?> </p>
		
		<?php }
		if($normal_developer!=0)
		{
			?>
			
		<p class="cost_calc_item_name"> Normal Developer(<?php echo $normal_developer;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$normal_developer*$data->normal_developer;?></p>
 
		<?php }
		 if($senior_designer!=0)
		 {?>
	    <p class="cost_calc_item_name"> Senior Designer(<?php echo $senior_designer;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$senior_designer*$data->senior_designer;?></p>
		 <?php }
		 if($normal_designer!=0)
		 {?>
	    <p class="cost_calc_item_name"> Normal Designer(<?php echo $normal_designer;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$normal_designer*$data->normal_designer;?></p>
		
		 <?php }
		 if($senior_tester!=0)
		 {?>
		<p class="cost_calc_item_name">Senior Tester(<?php echo $senior_tester;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$senior_tester*$data->senior_tester;?></p>	 
			 
			 
		<?php }
		 if($normal_tester!=0)
		 {?>
	    <p class="cost_calc_item_name">Normal Tester(<?php echo $normal_tester;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$normal_tester*$data->normal_tester;?></p>	  
		
		 <?php }
		if($system_analyst!=0)
		 {?>
	    
		<p class="cost_calc_item_name"> System Analyst(<?php echo $system_analyst;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$system_analyst*$data->system_analyst;?></p>	 
	    
		 <?php }
        if($project_manager!=0)
		{ ?>
    
        <p class="cost_calc_item_name"> Project Manager(<?php echo $project_manager;?>) </p>
        <p class="cost_calc_item_price"><?php echo "&#36;".$project_manager*$data->project_manager;?></p>	
        <?php }?>

        <p class="cost_calc_item_name">Coupon Code</p>
        <p class="cost_calc_item_price">
		    <input type="text" style="width: 100px;height:21px;" name="coupon" id="coupon" />
		    <div>
			    <button class="btn btn-primary" onclick="check_couponValidity()"  type="button">Apply Coupon</button>
				<span class="label label-success pull-right" id="error_success" style="display:none;">Coupon Applied Successfully</span>
				<span class="label label-danger pull-right" id="error_error" style="display:none;">Invalid Coupon Code</span>
			</div>
		</p>		
		
    <div class='cost_calc_breakdown_total' >Total:<?php echo "&#36;<span id='show_total'>".$full_cost."</span>"; ?></div>
	<input type="hidden" id="total" value="<?php echo $full_cost;?>"/>
</div>

<div class='cost_calc_checkout_form clearfix' >
    <h2>Information</h2>
	
	
	<!-- ************************ Start Of user Description Div -->
	
	 <div class="cost_calc_form_information clearfix" id="user_div">

            

            <label>
                First Name
                <input class="SV_validate" type="text" NAME="first_name" id="first_name" placeholder="First Name"/>
				<span id="err_fname" class="error" style="color:red;display:none">Please Enter First Name</span>
            </label>

            <label>
                Last Name
                <input class="SV_validate" type="text" NAME="last_name" id="last_name" placeholder="Last Name"/>
				<span id="err_lname" class="error" style="color:red;display:none">Please Enter Last Name</span>
            </label>
			
			<label>
                Email Address
                <input class="SV_validate_email" type="text" NAME="email" id="email" placeholder="Email Address"/>
				<span id="err_email" class="error" style="color:red;display:none">Please Enter Email</span>
				<span id="err_email_invalid" class="error" style="color:red;display:none">Please Enter Valid Email</span>
            </label>

            <label>
                Phone Number
                <input class="SV_validate_phone" NAME="phone" id="phone" type="text" placeholder="Phone Number"/>
				<span id="err_phone" class="error" style="color:red;display:none">Please Enter Phone Number</span>
            </label>

            <label>
                Address Line 1
                <input class="SV_validate" NAME="address1" id="address1" type="text" placeholder="Address Line 1"/>
				<span id="err_address1" class="error" style="color:red;display:none">Please Enter Address Line 1</span>
            </label>

            <label>
                Address Line 2
                <input class="SV_validate" NAME="address2" id="address2" type="text" placeholder="Address Line 2"/>
				<span id="err_address2" class="error" style="color:red;display:none">Please Enter Address Line 2</span>
            </label>

            <label>
                City
                <input class="SV_validate" NAME="city" id="city" type="text" placeholder="City"/>
				<span id="err_city" class="error" style="color:red;display:none">Please Enter City Name</span>
            </label>

            <label>
                State
                <input class="SV_validate" NAME="state" id="state" type="text" placeholder="State"/>
				<span id="err_state" class="error" style="color:red;display:none">Please Enter State Name</span>
            </label>

            <label>
                Zip (Postcode)
                <input class="SV_validate" NAME="zip" id="zip" type="text" placeholder="Zip or Postcode"/>
				<span id="err_zip" class="error" style="color:red;display:none">Please Enter Zip Code</span>
            </label>
			
			<!--Submit Payment-->
            <input type="button" onclick="saveUserInfo()" NAME="submit_butn" class="SV_submit_form cost_calc_button" value="Submit Your Information"/>

    </div>
	
	
	
	<!--  ************************End Of user Description Div ************* -->
    
	
	<div id="paypal_div" style="display:none;">
    <!--Start Form-->
    <form ACTION="https://www.sandbox.paypal.com/cgi-bin/webscr" METHOD="POST" target="_parent" id='paypal_form' name="paypal_form">   

        <!--Hidden fields-->
        <input TYPE="hidden" NAME="business" VALUE="vgaikwad@inventive-it.com"> <!--Paypal business email-->
        <input TYPE="hidden" NAME="undefined_quantity" VALUE="1">  <!--Quantity-->
        <input TYPE="hidden" NAME="item_name" VALUE=" Project Estimate"> <!--Item Name (default php will give a description of the quote)-->
        <input TYPE="hidden" NAME="item_number" VALUE="0000CustomQuote"> <!--The items number-->
        
        <input TYPE="hidden" NAME="amount" id="amount" VALUE="<?php echo $full_cost; ?>"> <!--Price (leave the php to pull in the calculated price)-->
        <input TYPE="hidden" NAME="currency_code" VALUE="USD"> <!--Currently (currently GBP)--> 

        <input TYPE="hidden" NAME="custom" VALUE="">

        <!--Paypal return URL and the message for the user to click once payment is completed-->
        <input type="hidden" value="<?php echo base_url();?>home/successPaymentHourly" name="return">
        <input type="hidden" value="Click here to return back to the store" name="cbt">

        <input TYPE="hidden" NAME="cmd" VALUE="_xclick"> <!--Dont change unless you know what you're doing-->

        <!--Clients Information. Use the class 'validate' to make the field required-->
        

        <!--Summary-->
        <div class="cost_calc_summary clearfix">
            <label class="cost_calc_terms_checkbox">
                <input class="SV_validate_checkbox" type="checkbox"/>
                <p class="cost_calc_terms">
                By checking this box you agree to our <a href='<?php echo base_url();?>terms-and-conditions'>Terms &amp; Conditions</a>
                </p>
            </label>
            <div class="cost_calc_total_cost_container">
                <span class="cost_calc_total_cost">Total  &nbsp; &#36;</span><span id="amount_payment"><?php echo $full_cost; ?></span>
            </div>

            <!--Submit Payment-->
            <input type="submit" NAME="submit" class="SV_submit_form cost_calc_button" value="CLICK TO PURCHASE">
        </div>

       </form>
       <!--End Form-->
	
    </div>
</div>
    <?php $this->load->view('template/footer');?>
<script>
    /*$(document).ready(function() {
        simple_form_validator (
        'This field is required.', 					//Standard input message (.validate)
        'Your email address is required.',  		//Email input message (.validate_email)
        'Your phone number is required.', 			//Phone number message (.validate_phone)
        'Please select an answer.', 				//Radio box message (.validate_radio)
        'Please accept the terms and condtions.',   //Checkbox message (.validate_checkbox)
        '10', 										//Minimum amount of digitals required for phone number
        '12' 										//Maximum amount of digitals required for phone number

        //Please note, to style the required messages, just add your CSS to the class "validate_form_message".
        );
    });*/
</script>

<script>

    function validateEmail($email) 
	{
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		return emailReg.test( $email );
	}
	
    function saveUserInfo()
	{
		var email = $("#email").val();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var phone = $("#phone").val();
		var address1 = $("#address1").val();
		var address2 = $("#address2").val();
		var city = $("#city").val();
		var state = $("#state").val();
		var zip = $("#zip").val();
		
		$(".error").hide();
		
		if(first_name=="")
		{
			$("#err_fname").show();
			$("#first_name").focus();
			return false;
		}
		
		if(last_name=="")
		{
			$("#err_lname").show();
			$("#last_name").focus();
			return false;
		}
		
		if(email=="")
		{
			$("#err_email").show();
			$("#email").focus();
			return false;
		}
		
		if(!validateEmail(email))
		{
			$("#err_email_invalid").show();
			$("#email").focus();
			return false;
		}
		
		if(phone=="")
		{
			$("#err_phone").show();
			$("#phone").focus();
			return false;
		}
		
		if(address1=="")
		{
			$("#err_address1").show();
			$("#address1").focus();
			return false;
		}
		
		if(address2=="")
		{
			$("#err_address2").show();
			$("#address2").focus();
			return false;
		}
		
		if(city=="")
		{
			$("#err_city").show();
			$("#city").focus();
			return false;
		}
		
		if(state=="")
		{
			$("#err_state").show();
			$("#state").focus();
			return false;
		}
		
		if(zip=="")
		{
			$("#err_zip").show();
			$("#zip").focus();
			return false;
		}
		
		$.ajax({
			url:'<?php echo base_url();?>home/saveUserDataHourly',
			type:'post',
			data:{'fname':first_name,'lname':last_name,'email':email,'address1':address1,
			      'address2':address2,'city':city,'state':state,'zip':zip,'phone':phone},
			success:function(data)
			{
				if(data==1)
				{
					alert("Data Saved Successfully");
					$("#user_div").hide();
					$("#paypal_div").show();
					$(window).scrollTop($('#overall_div').offset().top);
        
				}
			}
			
		});
		
		
	}
</script>

<script type="text/javascript">
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        
        $("#phone").mask("(999) 999-9999");
        //$("#fax").mask("(999) 999-9999");
		
       
    });
	
	var applied = 0;
	
	function check_couponValidity()
	{
		$("#error_error").hide();
		$("#error_success").hide();
		if(applied!=0)
		{
			$("#error_error").html('Coupon Already Applied');
			$("#error_error").show();
			return false;
		}
		applied++;
		var coupon = $("#coupon").val(); 
		var  total = $("#total").val(); 
		$.ajax({
			url:'<?php echo base_url();?>home/check_N_Apply_coupon',
			type:'post',
			data:{'coupon':coupon},
			success:function(data)
					{
						if(data==0)
						{
							$("#error_error").html('Invalid Coupon');
							$("#error_error").show();
							applied=0;
						}
						else
						{
							// Calculating the new discount price
							var discount = (total*data)/100; 
							var new_total = parseFloat(total)- parseFloat(discount);
                            var new_total = roundToTwo(new_total);							
							$("#show_total").empty();
							$("#show_total").html(new_total);
							$("#amount_payment").html(new_total);
							$("#amount").val(new_total);
							$("#error_success").show();
							
						}
					}
			
		});
	}
	
	function roundToTwo(num) 
	{    
        return +(Math.round(num + "e+2")  + "e-2");
    }
	
</script>
    