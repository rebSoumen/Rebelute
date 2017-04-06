<body>

<?php 
    //Price
    $full_cost = $_POST['total_price'];

    //Build breakdown
    $breakdown = $_POST['cost_description'];
    $breakdown = str_replace('d1','<p class="cost_calc_item_name">',$breakdown);
    $breakdown = str_replace('d2','</p>',$breakdown);
    $breakdown = str_replace('d3','<p class="cost_calc_item_price">&#163;',$breakdown);
    $breakdown = str_replace('d4','</p>',$breakdown);

    //Build description
    $description = $_POST['cost_description'];
    $description = str_replace('d1','',$description);
    $description = str_replace('d2','',$description);
    $description = str_replace('d3','- ',$description);
    $description = str_replace('d4',' | ',$description);
	

?>

<div class='cost_calc_quote_summary clearfix'>
    <h2>Cost Breakdown</h2>
    <?php echo $breakdown; ?>
    <div class='cost_calc_breakdown_total'>Total: &#163;<?php echo $full_cost; ?></div>
</div>

<div class='cost_calc_checkout_form clearfix'>
    <h2>Information</h2>
	
	
	<!-- ************************ Start Of user Description Div -->
	
	 <div class="cost_calc_form_information clearfix" id="user_div">

            

            <label>
                First Name
                <input class="SV_validate" type="text" NAME="first_name" id="first_name" placeholder="First Name">
				<span id="err_fname" class="error" style="color:red;display:none">Please Enter First Name</span>
            </label>

            <label>
                Last Name
                <input class="SV_validate" type="text" NAME="last_name" id="last_name" placeholder="Last Name">
				<span id="err_lname" class="error" style="color:red;display:none">Please Enter Last Name</span>
            </label>
			
			<label>
                Email Address
                <input class="SV_validate_email" type="text" NAME="email" id="email" placeholder="Email Address">
				<span id="err_email" class="error" style="color:red;display:none">Please Enter Email</span>
				<span id="err_email_invalid" class="error" style="color:red;display:none">Please Enter Valid Email</span>
            </label>

            <label>
                Phone Number
                <input class="SV_validate_phone" NAME="phone" id="phone" type="text" placeholder="Phone Number">
				<span id="err_phone" class="error" style="color:red;display:none">Please Enter Last Name</span>
            </label>

            <label>
                Address Line 1
                <input class="SV_validate" NAME="address1" id="address1" type="text" placeholder="Address Line 1">
				<span id="err_address1" class="error" style="color:red;display:none">Please Enter Address Line 1</span>
            </label>

            <label>
                Address Line 2
                <input class="SV_validate" NAME="address2" id="address2" type="text" placeholder="Address Line 2">
				<span id="err_address2" class="error" style="color:red;display:none">Please Enter Address Line 2</span>
            </label>

            <label>
                City
                <input class="SV_validate" NAME="city" id="city" type="text" placeholder="City">
				<span id="err_city" class="error" style="color:red;display:none">Please Enter City Name</span>
            </label>

            <label>
                State
                <input class="SV_validate" NAME="state" id="state" type="text" placeholder="State">
				<span id="err_state" class="error" style="color:red;display:none">Please Enter State Name</span>
            </label>

            <label>
                Zip (Postcode)
                <input class="SV_validate" NAME="zip" id="zip" type="text" placeholder="Zip or Postcode">
				<span id="err_zip" class="error" style="color:red;display:none">Please Enter Zip Code</span>
            </label>
			
			<!--Submit Payment-->
            <input type="button" onclick="saveUserInfo()" NAME="submit_butn" class="SV_submit_form cost_calc_button" value="Submit Your Information">

    </div>
	
	
	
	<!--  ************************End Of user Description Div ************* -->
    
	
	<div id="paypal_div" style="display:none;">
    <!--Start Form-->
    <form ACTION="https://www.sandbox.paypal.com/cgi-bin/webscr" METHOD="POST" target="_parent" id='paypal_form' name="paypal_form">   

        <!--Hidden fields-->
        <input TYPE="hidden" NAME="business" VALUE="vgaikwad@inventive-it.com"> <!--Paypal business email-->
        <input TYPE="hidden" NAME="undefined_quantity" VALUE="1">  <!--Quantity-->
        <input TYPE="hidden" NAME="item_name" VALUE="<?php echo $description; ?>"> <!--Item Name (default php will give a description of the quote)-->
        <input TYPE="hidden" NAME="item_number" VALUE="0000CustomQuote"> <!--The items number-->
        
        <input TYPE="hidden" NAME="amount" VALUE="<?php echo $full_cost; ?>"> <!--Price (leave the php to pull in the calculated price)-->
        <input TYPE="hidden" NAME="currency_code" VALUE="USD"> <!--Currently (currently GBP)--> 

        <input TYPE="hidden" NAME="custom" VALUE="">

        <!--Paypal return URL and the message for the user to click once payment is completed-->
        <input type="hidden" value="<?php echo base_url();?>home/successPayment" name="return">
        <input type="hidden" value="Click here to return back to the store" name="cbt">

        <input TYPE="hidden" NAME="cmd" VALUE="_xclick"> <!--Dont change unless you know what you're doing-->

        <!--Clients Information. Use the class 'validate' to make the field required-->
        

        <!--Summary-->
        <div class="cost_calc_summary clearfix">
            <label class="cost_calc_terms_checkbox">
                <input class="SV_validate_checkbox" type="checkbox">
                <p class="cost_calc_terms">
                By checking this box you agree to our <a href='#'>Terms &amp; Conditions</a>
                </p>
            </label>
            <div class="cost_calc_total_cost_container">
                <span class="cost_calc_total_cost">Total&#x3a;&nbsp;</span>&pound;<?php echo $full_cost; ?>
            </div>

            <!--Submit Payment-->
            <input type="submit" NAME="submit" class="SV_submit_form cost_calc_button" value="PURCHASE">
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
			url:'<?php echo base_url();?>home/saveUserData',
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
	
</script>
    