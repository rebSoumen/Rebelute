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
               data-value="0"
			   data-select='2'
			   data-show="2">
			   
		   
		<!--Row 2, this row is hidden until "Ecommerce" is clicked, note the use of 'data-show' on that item above-->
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('ecommerce_site','I am not Selling Products Online',1)" value="I' am not Selling Products Online" 
               data-row='2' 
               data-value="0">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('ecommerce_site','I need an online Store',2)" value="I need an online Store" 
               data-row='2' 
               data-value="0">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('ecommerce_site','I Need Custom Functionality',3)" value="I Need Custom Functionality" 
               data-row='2' 
               data-value="0">
    
		   
			   
			   
		<!--/-->
        <div class="divider divider-border divider-center topmargin"><i class="icon-email2"></i></div>
		
		
		
        <h3>Step 2: How Many Pages Do You Need?</h3>
		<!--Row 2-->
		
		<div id="pages_div1" class="page_div">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','5 Page',0)"  value="5 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-id='2'
				   data-value="499">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','10 Pages',0)" value="10 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="749">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','15 Pages',0)" value="15 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="999">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','20 Pages',0)" value="20 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1299">
		
			
			
			

			<!--If the data-value is equal to nothing, you'll be shown the default "more" field-->
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" 
				   data-row='3' 
				   data-value="none">
    
		</div>	

        <div id="pages_div2" class="page_div" style="display:none">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','5 Page',0)"  value="5 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-id='2'
				   data-value="499">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','10 Pages',0)" value="10 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="749">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','15 Pages',0)" value="15 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="999">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','20 Pages',0)" value="20 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1299">
		
			
			
			

			<!--If the data-value is equal to nothing, you'll be shown the default "more" field-->
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" 
				   data-row='3' 
				   data-value="none">
    
		</div>	

        <div id="pages_div3" class="page_div" style="display:none">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','5 Page',0)"  value="5 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-id='2'
				   data-value="649">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','10 Pages',0)" value="10 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1299">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','15 Pages',0)" value="15 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1499">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','20 Pages',0)" value="20 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1799">
		
			
			
			

			<!--If the data-value is equal to nothing, you'll be shown the default "more" field-->
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" 
				   data-row='3' 
				   data-value="none">
    
		</div>	

        <div id="pages_div4" class="page_div" style="display:none">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','5 Page',0)"  value="5 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-id='2'
				   data-value="999">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','10 Pages',0)" value="10 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1499">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','15 Pages',0)" value="15 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="1999">
		
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues('pages','20 Pages',0)" value="20 Pages" 
				   data-row='3' 
				   data-select='1' 
				   data-value="2500">
		
			
			
			

			<!--If the data-value is equal to nothing, you'll be shown the default "more" field-->
			<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" 
				   data-row='3' 
				   data-value="none">
    
		</div>		


		
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
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('seo1','On-Page SEO',0)"
			      value="On-Page SEO" 
				   data-row='5' 
				   data-value="300">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('seo2','Backlink Building',0)" value="Backlink Building" 
				   data-row='5' 
				   data-value="300">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('seo3','Article Writing',0)" value="Social Media Sharing" 
				   data-row='5' 
				   data-value="300">
		
			
        </div>	
      
		<div class="line"></div>
	  
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " onclick="setValues('mobile_design','Mobile & Tablet Design',0)"  value="Mobile & Tablet Design" 
               data-row='6' 
               data-value="350"/><br>
			   
			   <div class="line"></div>
    
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " onclick="hide_other('quick_div')" value="Quick Turn Around" 
               data-row='7' 
               data-show="8"
			   data-value="0"/><br>
			   
		<!--Row 4, this row is hidden until "Quick turn around" is clicked, note the use of 'data-show' on that item above-->
		<div id="quick_div" class="my_div">
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" onclick="setValues('hours','48 Hours',0)" value="48 Hours" 
				   data-row='8' 
				   data-value="500"/>
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="5 Days" onclick="setValues('hours','5 Days',0)" 
				   data-row='8' 
				   data-value="300"/>
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="7 Days" onclick="setValues('hours','7 Days',0)" 
				   data-row='8' 
				   data-value="200"/>
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="2 Weeks" onclick="setValues('hours','2 Weeks',0)" 
				   data-row='8' 
				   data-value="150"/>
			   
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
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('extra_features1','Social Media Integration',0)" value="Social Media Integration" 
				   data-row='10' 
				   data-value="50">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('extra_features2','Forums',0)" value="Forums" 
				   data-row='10' 
				   data-value="50">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('extra_features3','Live Chat',0)" value="Live Chat" 
				   data-row='10' 
				   data-value="50">
		
			<input type="button" class="cost_calc_row-4 cost_calc_calculate  cost_calc_hide" onclick="setValues('extra_features4','Google Analytics',0)" value="Google Analytics" 
				   data-row='10' 
				   data-value="50">	 	   
		</div>	  
			   
		<!--  *********************  Start For the SEO & EXTRA Features  ************  -->	   
			   
		   
			   
			   
			   

	<!--Clear Calculations-->
    <div id='cost_calc_clear_calculation' class="hover">Clear selections</div>
    
	<!--Total and breakdown-->
    <div id="cost_calc_breakdown_container" class="clearfix">
        <p class="cost_calc_heading">
        Total cost&#36;<br />
        </p>
        <p id="cost_calc_total_cost">
        &#36;0.00<br />
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
			
			<input type="hidden" id="seo1" name="seo1" />
			<input type="hidden" id="seo2" name="seo2" />
			<input type="hidden" id="seo3" name="seo3" />
			
			<input type="hidden" id="mobile_design" name="mobile_design" />
		    
			<input type="hidden" id="hours" name="hours" />
			
			<input type="hidden" id="extra_features1" name="extra_features1" />
			<input type="hidden" id="extra_features2" name="extra_features2" />
			<input type="hidden" id="extra_features3" name="extra_features3" />
			<input type="hidden" id="extra_features4" name="extra_features4" />
			
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
    function  setValues(div_id,div_val,val1)
	{
		//alert("sasa");
		$("#"+div_id).val(div_val);
		/*
		var a = '<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'5 Page\',0)"  value="5 Pages" data-row="3" data-select="1" data-id="2" data-value="499"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'10 Pages\',0)" value="10 Pages" data-row="3" data-select="1" data-value="749"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'15 Pages\',3)" value="15 Pages" data-row="3" data-select="1" data-value="999"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'20 Pages\',0)" value="20 Pages" data-row="3"  data-select="1" data-value="1299"> <input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" data-row="3" data-value="none">';
		var b = '<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'5 Page\',0)"  value="5 Pages" data-row="3" data-select="1" data-id="2" data-value="649"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'10 Pages\',0)" value="10 Pages" data-row="3" data-select="1" data-value="1299"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'15 Pages\',3)" value="15 Pages" data-row="3" data-select="1" data-value="1499"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'20 Pages\',0)" value="20 Pages" data-row="3"  data-select="1" data-value="1799"> <input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" data-row="3" data-value="none">';
		var c = '<input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'5 Page\',0)"  value="5 Pages" data-row="3" data-select="1" data-id="2" data-value="999"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'10 Pages\',0)" value="10 Pages" data-row="3" data-select="1" data-value="1499"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'15 Pages\',3)" value="15 Pages" data-row="3" data-select="1" data-value="1999"><input type="button" class="cost_calc_row-2 cost_calc_calculate single " onclick="setValues(\'pages\',\'20 Pages\',0)" value="20 Pages" data-row="3"  data-select="1" data-value="2500"> <input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="20 +" data-row="3" data-value="none">';
	    */
	    if(val1==1)
		{
			$(".page_div").hide();
			$("#pages_div2").show();
		}
		if(val1==2)
		{
			$(".page_div").hide();
			$("#pages_div3").show();
		}
		if(val1==3)
		{
			$(".page_div").hide();
			$("#pages_div4").show();
		}
		
	
	}

</script>
	
	
