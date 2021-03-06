<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin center">
    <div class="heading-block center">
							<h2>Cost Calculator A Custom Quote Builder</h2>
							<span class="divcenter">With this example of Cost Calculator you can see how the easily a user can build custom quotes within a few clicks. <br />
    The example below is demonstating a website design quote.</span>
						</div>
 
    
    <p>
       <!--a style='margin-right:20px' href='demo1.html'>Demo 1</a> | 
       <a style='margin-right:20px;margin-left:20px' href='demo2.html'>Demo 2</a> | 
       <a style='margin-left:20px' target="_blank" href='Documentation.html'>Documentation</a--> 
    </p>
    
    
    
    
    <h3>Step 1: Select Website Style</h3>
    <!-- Price Button(data-value is the price assigned to the button)-->
        <!--Row 1-->
		<!--This is a default price that'll always be applied-->
		<input type="button" class="cost_calc_row-1 single cost_calc_calculate " onclick="setValues('standard_site','Standard Website')" value="Standard Website" 
               data-row='1' 
               data-id='1' 
               data-select='2'
               data-value="200">
		<!--/-->
	
		<input type="button" class="cost_calc_row-1 cost_calc_calculate single " value="eCommerce" 
               data-row='1' 
               data-value="300"
			   data-select='2'
			   data-show="2">
			   
		   
		<!--Row 2, this row is hidden until "Ecommerce" is clicked, note the use of 'data-show' on that item above-->
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('ecommerce_site','I am not Selling Products Online')" value="I' am not Selling Products Online" 
               data-row='2' 
               data-value="1299">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('ecommerce_site','I need an online Store')" value="I need an online Store" 
               data-row='2' 
               data-value="999">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('ecommerce_site','I Need Custom Functionality')" value="I Need Custom Functionality" 
               data-row='2' 
               data-value="399">
    
		   
			   
			   
		<!--/-->
        <div class="divider divider-border divider-center topmargin"><i class="icon-email2"></i></div>
        <h3>Step 2: How Many Pages Do You Need?</h3>
		<!--Row 2-->
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','1 Page')"  value="1 Page" 
               data-row='3' 
               data-select='1' 
               data-id='2'
               data-value="249">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','2 Page')" value="2 Page" 
               data-row='3' 
               data-select='1' 
               data-value="399">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','3 Page')" value="3 Page" 
               data-row='3' 
               data-select='1' 
               data-value="549">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','4 Page')" value="4 Page" 
               data-row='3' 
               data-select='1' 
               data-value="699">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','5 Page')" value="5 Page" 
               data-row='3' 
               data-select='1' 
               data-value="849">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','6 Page')" value="6 Page" 
               data-row='3' 
               data-select='1' 
               data-value="999">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','7 Page')" value="7 Page" 
               data-row='3' 
               data-select='1' 
               data-value="1149">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','8 Page')" value="8 Page" 
               data-row='3' 
               data-select='1' 
               data-value="1299">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','9 Page')" value="9 Page" 
               data-row='3' 
               data-select='1' 
               data-value="1449">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','10 Page')" value="10 Page" 
               data-row='3' 
               data-select='1' 
               data-value="1599">

		<!--If the data-value is equal to nothing, you'll be shown the default "more" field-->
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="10 +" 
               data-row='3' 
               data-value="none">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="Not Sure?" 
               data-row='3' 
               data-value="none">
		<!--/-->
		<div class="clear"></div>
		
		<div class="divider divider-border divider-center topmargin"><i class="icon-email2"></i></div>
        <h3>Step 3: Any Additional Services?</h3>
		
		<div class="center">
		<!--Row 3-->
		<input type="button" class="cost_calc_row-3 cost_calc_calculate "  value="Search Engine Optimization" 
               data-row='4' 
              data-show="5"
			  data-value="0"/>
		<br>
		
		<!--Row 6, this row is hidden until "SEO" is clicked, note the use of 'data-show' on that item above-->
		<div id="seo_div" class="my_div">
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('seo','On-Page SEO')"
			      value="On-Page SEO" 
				   data-row='5' 
				   data-value="1299">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('seo','Backlink Building')" value="Backlink Building" 
				   data-row='5' 
				   data-value="999">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('seo','Article Writing')" value="Article Writing" 
				   data-row='5' 
				   data-value="399">
		
			
        </div>	
      
		<div class="line"></div>
	  
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " onclick="setValues('mobile_design','Mobile & Tablet Design')"  value="Mobile & Tablet Design" 
               data-row='6' 
               data-value="350"/><br>
			   
			   <div class="line"></div>
    
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " onclick="hide_other('quick_div')" value="Quick Turn Around" 
               data-row='7' 
               data-show="8"
			   data-value="0"/><br>
			   
		<!--Row 4, this row is hidden until "Quick turn around" is clicked, note the use of 'data-show' on that item above-->
		<div id="quick_div" class="my_div">
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('hours','48 Hours')" value="48 Hours" 
				   data-row='8' 
				   data-value="1299"/>
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="5 Days" onclick="setValues('hours','5 Days')" 
				   data-row='8' 
				   data-value="999"/>
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="7 Days" onclick="setValues('hours','7 Days')" 
				   data-row='8' 
				   data-value="399"/>
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="2 Weeks" onclick="setValues('hours','2 Weeks')" 
				   data-row='8' 
				   data-value="299"/>
			   
		</div>	   	   
    
			<div class="line"></div>
	
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " onclick="hide_other('extra_div')" value="Extra Features" 
               data-row='9' 
               data-show="10"
			   data-value="0"/>
				</div>
			   <!--/-->
    
        <!--Row 7, this row is hidden until "Extra Features " is clicked, note the use of 'data-show' on that item above-->
		<div id="extra_div" class="my_div">
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('extra_features','Social Media Integration')" value="Social Media Integration" 
				   data-row='10' 
				   data-value="1299">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('extra_features','Forums')" value="Forums" 
				   data-row='10' 
				   data-value="999">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('extra_features','Live Chat')" value="Live Chat" 
				   data-row='10' 
				   data-value="399">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('extra_features','Google Analytics')" value="Google Analytics" 
				   data-row='10' 
				   data-value="640">	 	   
		</div>	  
			   
		<!--  *********************  Start For the SEO & EXTRA Features  ************  -->	   
			   
			   
			   
			   
					   
			   
			   
			   
		 
			   
			   
			   
			   
			   

	<!--Clear Calculations-->
    <div id='cost_calc_clear_calculation' class="hover">Clear selections</div>
    
	<!--Total and breakdown-->
    <div id="cost_calc_breakdown_container" class="clearfix">
        <p class="cost_calc_heading">
        Total cost&#x3a;<br />
        </p>
        <p id="cost_calc_total_cost">
        &pound;0.00<br />
        </p>
        
        <div id="cost_calc_breakdown" class="clearfix">
        </div>
        
		<!--The form that the data is applied to.-->
        <form action="<?php echo base_url();?>home/payment_checkout" method="post">
			
			<!--Data applied to these field-->
            <textarea id='cost_calc_custom-data' name="cost_description"></textarea>
            <input type="hidden" name="total_price" id='cost_calc_price' value="" name="cost_calc_price">
			
			<!-- ****************  This  div is added for getting the specific values  -->
			<input type="hidden" id="standard_site" name="standard_site" />
			<input type="hidden" id="ecommerce_site" name="ecommerce_site" />
			
			
			
			<input type="hidden" id="pages" name="pages" />
			
			<input type="hidden" id="seo" name="seo" />
			
			<input type="hidden" id="mobile_design" name="mobile_design" />
		    
			<input type="hidden" id="hours" name="hours" />
			
			<input type="hidden" id="extra_features" name="extra_features" />
			
			<!--/-->
			
            <input type="submit" class="cost_calc_button" value="Order Now">
        </form>
    </div>
    
</div>

<div class="sidebar nobottommargin col_last">
						<div class="sidebar-widgets-wrap">
						
						      <div class="widget clearfix ">
                                 <img src="<?php echo base_url();?>assets/main_site/images/contact_us.png" alt="Clients">
							  </div>

							<div class="widget widget_links notopmargin clearfix">

								<h4>Services</h4>
								<ul>
									<li><a href="#">Product Engineering</a></li>
									<li><a href="#">Digital Marketing</a></li>
									<li><a href="#">Web Development Services</a></li>
									<li><a href="#">Mobile Development</a></li>
									<li><a href="#">UI/UX Services</a></li>
									<li><a href="#">Landing Page Services</a></li>
									
								</ul>

							</div>
						</div>
					</div>
</div>
</div>
</section>

<script>
    function  setValues(div_id,div_val)
	{
		$("#"+div_id).val(div_val);
	}

</script>
	
	
