
<body>
    
<!--Quick Reference

- Each row should have these data tags: 'data-row', 'data-value'
- Each row required the class 'cost_calc_calculate'
- Optional data tags: 'data-show', 'data-id', 'data-select'
- Optional classes: 'single'

- 'data-row' is the individual row, you can have multiple items attached to the data row, think of it as a group or a section for your pricing.

- 'data-value' is the cost of the item they have selected, this is used to add to your calculated cost. You can leave 'data-value' blank if you like, but when they click the item it will revert to the default message you set in the 'cost_calculator.js' file. If you want the value to be 0, just simply put "0" instead of nothing.

-'data-show' will show a row that you have hidden with the 'cost_calc_hide' class, this is good to use when you only want a certain row to show for a certain option.
Explained: If you put 'data-show="2"'. This will show any row with the value of "2" on the 'data-row'

-'data-id' should be unique to every item, don't repeat it.

-'data-select' is used to automatically select an item with the 'data-id' value you enter.

-The class 'single' will only let one option in that row be choosen at a time. If this class is not applied, the user will be able to select multple options in a row.

You can see a full working example below. Enjoy and I hope you enjoy this simple, yet powerful plugin.

/Quick Reference-->
    
<div class="container clearfix">
    
    <h1>Cost Calculator<br /><span>A Custom Quote Builder</span></h1>
    
    <p>
       <!--a style='margin-right:20px' href='demo1.html'>Demo 1</a> | 
       <a style='margin-right:20px;margin-left:20px' href='demo2.html'>Demo 2</a> | 
       <a style='margin-left:20px' target="_blank" href='Documentation.html'>Documentation</a--> 
    </p>
    
    With this example of Cost Calculator you can see how the easily a user can build custom quotes within a few clicks. <br />
    The example below is demonstating a website design quote.
    <p></p>
    
    <h3>Step 1: Select Website Style</h3>
    <!-- Price Button(data-value is the price assigned to the button)-->
        <!--Row 1-->
		<!--This is a default price that'll always be applied-->
		<input type="button" class="cost_calc_row-1 single cost_calc_calculate " value="Standard Website" 
               data-row='1' 
               data-id='1' 
               data-select='2'
               data-value="200">
		<!--/-->
	
		<input type="button" class="cost_calc_row-1 cost_calc_calculate single " value="eCommerce" 
               data-row='1' 
               data-select='2'
               data-value="300">
		
        
        <h3>Step 2: How Many Pages Do You Need?</h3>
		<!--Row 2-->
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="1 Page" 
               data-row='2' 
               data-select='1' 
               data-id='2'
               data-value="249">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="2 Page" 
               data-row='2' 
               data-select='1' 
               data-value="399">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="3 Page" 
               data-row='2' 
               data-select='1' 
               data-value="549">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="4 Page" 
               data-row='2' 
               data-select='1' 
               data-value="699">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="5 Page" 
               data-row='2' 
               data-select='1' 
               data-value="849">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="6 Page" 
               data-row='2' 
               data-select='1' 
               data-value="999">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="7 Page" 
               data-row='2' 
               data-select='1' 
               data-value="1149">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="8 Page" 
               data-row='2' 
               data-select='1' 
               data-value="1299">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="9 Page" 
               data-row='2' 
               data-select='1' 
               data-value="1449">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="10 Page" 
               data-row='2' 
               data-select='1' 
               data-value="1599">

		<!--If the data-value is equal to nothing, you'll be shown the default "more" field-->
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="10 +" 
               data-row='2' 
               data-value="none">
    
		<input type="button" class="cost_calc_row-2 cost_calc_calculate single " value="Not Sure?" 
               data-row='2' 
               data-value="none">
		<!--/-->
		
        <h3>Step 3: Any Additional Services?</h3>
		<!--Row 3-->
		<input type="button" class="cost_calc_row-3 cost_calc_calculate " value="Search Engine Optimization" 
               data-row='3' 
               data-value="249">
    
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " value="Mobile & Tablet Design" 
               data-row='3' 
               data-value="99">
    
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " value="Quick Turn Around" 
               data-row='3' 
               data-value="149" 
               data-show="4">
    
		<input type="button"  class="cost_calc_row-3 cost_calc_calculate " value="Email Address (1)" 
               data-row='3' 
               data-value="59">
	<!--/-->
    
        <!--Row 4, this row is hidden until "Quick turn around" is clicked, note the use of 'data-show' on that item above-->
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="48 Hours" 
               data-row='4' 
               data-value="1299">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="5 Days" 
               data-row='4' 
               data-value="999">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="7 Days" 
               data-row='4' 
               data-value="399">
    
		<input type="button" class="cost_calc_row-4 cost_calc_calculate single cost_calc_hide" value="2 Weeks" 
               data-row='4' 
               data-value="0">

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
			<!--/-->
			
            <input type="submit" class="cost_calc_button" value="Order Now">
        </form>
    </div>
    
</div>
	
	
