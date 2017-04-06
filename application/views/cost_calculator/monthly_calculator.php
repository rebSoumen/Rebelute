<link rel="stylesheet" href="<?php echo base_url();?>assets/main_site/css/bootstrap-combined.min.css">
<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin center">

<!--div class="container clearfix center topmargin-lg bottommargin-lg"-->
    
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
    
    
    
    
    <h4>Select Team</h4>

	<div class="accordion accordion-bg clearfix">

		<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Developer</div>
		<div class="acc_content clearfix">   
		    <div>
			   Senior Developer : Price :- &#36;<?php echo $data->senior_developer;?>  
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueDeveloper('senior_developer','<?php echo $data->senior_developer;?>','Senior Developer')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="senior_developer" name="senior_developer" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueDeveloper('senior_developer','<?php echo $data->senior_developer;?>','Senior Developer')" class="btn">+</a>
				</div>
            </div>
			
			<div class="clear"> </div>
			</br>
			
			<div>
			   Normal Developer : Price :- &#36;<?php echo $data->normal_developer;?> 
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueDeveloper('normal_developer','<?php echo $data->normal_developer;?>','Normal Developer')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="normal_developer" name="normal_developer" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueDeveloper('normal_developer','<?php echo $data->normal_developer;?>','Normal Developer')" class="btn">+</a>
				</div>
            </div>
			
		</div>

		<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Designer</div>
		<div class="acc_content clearfix">
		    <div>
			   Senior Designer : Price :- &#36;<?php echo $data->senior_designer;?> 
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueDesigner('senior_designer','<?php echo $data->senior_designer;?>','Senior Designer')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="senior_designer" name="senior_designer" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueDesigner('senior_designer','<?php echo $data->senior_designer;?>','Senior Designer')" class="btn">+</a>
				</div>
            </div>
			
			
			<div class="clear"> </div>
			</br>
			
			
			<div>
			   Normal Designer : Price :- &#36;<?php echo $data->normal_designer;?> 
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueDesigner('normal_designer','<?php echo $data->normal_designer;?>','Normal Designer')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="normal_designer" name="normal_designer" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueDesigner('normal_designer','<?php echo $data->normal_designer;?>','Normal Designer')" class="btn">+</a>
				</div>
            </div>
		
		</div>

		<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Tester</div>
		<div class="acc_content clearfix">
		    <div>
			   Senior Tester : Price :- &#36;<?php echo $data->senior_tester;?> 
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueTester('senior_tester','<?php echo $data->senior_tester;?>','Senior Tester')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="senior_tester" name="senior_tester" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueTester('senior_tester','<?php echo $data->senior_tester;?>','Senior Tester')" class="btn">+</a>
				</div>
            </div>
			
			
			<div class="clear"> </div>
			</br>
			
			
			<div>
			   Normal Tester : Price :- &#36;<?php echo $data->normal_tester;?> 
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueTester('normal_tester','<?php echo $data->normal_tester;?>','Normal Tester')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="normal_tester" name="normal_tester" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueTester('normal_tester','<?php echo $data->normal_tester;?>','Normal Tester')" class="btn">+</a>
				</div>
            </div>
		
		</div>
		
		<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>System Analyst</div>
		<div class="acc_content clearfix">
		    
			<div>
			  System Analyst : Price :- &#36;<?php echo $data->system_analyst;?>  
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueTester('system_analyst','<?php echo $data->system_analyst;?>','System Analyst')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="system_analyst" name="system_analyst" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueTester('system_analyst','<?php echo $data->system_analyst;?>','System Analyst')" class="btn">+</a>
				</div>
            </div>
		
		</div>
		
		
		<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Project Manager</div>
		<div class="acc_content clearfix">
		
		    <div>
			  Project Manager : Price :- &#36;<?php echo $data->project_manager;?> 
				
				<div class="counter btn-group">
					<a href="javascript:;" onclick="addMinusonValueTester('project_manager','<?php echo $data->project_manager;?>','Project Manager')" class="btn custombuttonstyle">-</a>
					<input type="text" value="0" id="project_manager" name="project_manager" class="btn count customtextbox"/>
					<a href="javascript:;" onclick="addPlusonValueTester('project_manager','<?php echo $data->project_manager;?>','Project Manager')" class="btn">+</a>
				</div>
				
            </div>
		
		</div>

	</div>

	<div class="line"></div>
	<!--/-->
    
	<div class="hover customclear"  onclick="clearselection()" style="display: block;">Clear selections</div>

	<div class="clearfix boxstyle">
		<p class="cost_calc_heading">
		Total cost:<br>
		</p>
		<input type="hidden" value="0" id="total_cost" name="total_cost" />
		<p id="cost_calc_total_cost" style="margin-top: 0px;"></p>
		
		<div class="clearfix" id="cost_calc_breakdown">
			
			<div id="normal_developer_result"></div>
			<div id="senior_developer_result"></div>
			
			<div id="normal_designer_result"></div>
			<div id="senior_designer_result"></div>
			
			<div id="normal_tester_result"></div>
			<div id="senior_tester_result"></div>
			
			<div id="system_analyst_result"></div>
			
			<div id="project_manager_result"></div>
			
		
		</div>
		
		<!--The form that the data is applied to.-->
		<form method="post" action="<?php echo base_url();?>home/saveMonthlyCalculator">
			
			<!--Data applied to these field-->
			<input type="hidden"  name="final_senior_developer" id="final_senior_developer" value="0" />
			<input type="hidden"  name="final_normal_developer" id="final_normal_developer" value="0" />
			
			<input type="hidden"  name="final_senior_designer" id="final_senior_designer" value="0" />
			<input type="hidden"  name="final_normal_designer" id="final_normal_designer" value="0" />
			
			<input type="hidden"  name="final_senior_tester" id="final_senior_tester" value="0" />
			<input type="hidden"  name="final_normal_tester" id="final_normal_tester" value="0" />
			
			<input type="hidden"  name="final_system_analyst" id="final_system_analyst" value="0" />
			
			<input type="hidden"  name="final_project_manager" id="final_project_manager" value="0" />
			
			
			<input type="hidden"  name="final_total_amount" id="final_total_amount" value="0" />
			<!--/-->
			
			<input type="submit" value="Order Now" class="cost_calc_button">
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
	
	/* --------- Starting of the funtions for the developers ----- */

    function addPlusonValueDeveloper(div_id,cost,text_val)
    {
	    var current_val = $("#"+div_id).val();
		var new_val = parseInt(current_val)+parseInt(1);
		$("#"+div_id).val(new_val);
		
		/* now calculating the total cost */
		var total_cost = $("#total_cost").val();
		var cost_added = new_val*cost;
        var total_new_cost = parseInt(total_cost)+parseInt(cost_added)-parseInt(current_val)*cost;
        
        /* inserting the new cost in the total cost hidden box and visible box */
        $("#total_cost").val(total_new_cost);
		$("#final_total_amount").val(total_new_cost);
		var a = '&#36;'+total_new_cost;
		$("#cost_calc_total_cost").html(a);
		
		
		/* inserting the developers respective in their divs*/

        var display_text = '<p id="cost_calc_breakdown_item">'+text_val+'('+new_val+')'+'</p><p id="cost_calc_breakdown_price">&#36;'+cost_added+'</p>';
        $("#"+div_id+'_result').html(display_text);
		
		/* inserting the total developers required  in the form */
		
		$("#final_"+div_id).val(new_val);
		
    } 
 
	function addMinusonValueDeveloper(div_id,cost,text_val)
	{
		var current_val = $("#"+div_id).val();
		if(current_val==parseInt(0))
		{
			return false;
		}
		else
		{
			var new_val1 = parseInt(current_val)-parseInt(1);
			
			$("#"+div_id).val(new_val1);
			
			if(new_val1==0)
			{
				var new_val =1;
                                $("#"+div_id+'_result').hide();
			}
			else
			{
				var new_val =new_val1;
			}
			/* now calculating the total cost */
			var total_cost = $("#total_cost").val(); 
			var cost_added = cost; 
			var total_new_cost = parseInt(total_cost)-parseInt(cost_added);
			
			/* inserting the new cost in the total cost hidden box and visible box */
			$("#total_cost").val(total_new_cost);
			$("#final_total_amount").val(total_new_cost);
			var a = '&#36;'+total_new_cost;
			$("#cost_calc_total_cost").html(a);
			
			
			/* inserting the developers respective in their divs*/
            var new_val = new_val1;
			var display_text = '<p id="cost_calc_breakdown_item">'+text_val+'('+new_val+')'+'</p><p id="cost_calc_breakdown_price">&#36;'+cost_added+'</p>';
			$("#"+div_id+'_result').html(display_text);
			
			/* inserting the total developers required  in the form */
		
		    $("#final_"+div_id).val(new_val);
			
		}
	}
	
	/* --------- Ending of the funtions for the developers ----- */
	
	/* ******************************************************************** */
	
	/* --------- Starting of the functions for the Designers ------------ */
	
	function addPlusonValueDesigner(div_id,cost,text_val)
    {
	    var current_val = $("#"+div_id).val();
		var new_val = parseInt(current_val)+parseInt(1);
		$("#"+div_id).val(new_val);
		
		/* now calculating the total cost */
		var total_cost = $("#total_cost").val();
		var cost_added = new_val*cost;
        var total_new_cost = parseInt(total_cost)+parseInt(cost_added)-parseInt(current_val)*cost;
        
        /* inserting the new cost in the total cost hidden box and visible box */
        $("#total_cost").val(total_new_cost);
		$("#final_total_amount").val(total_new_cost);
		var a = '&#36;'+total_new_cost;
		$("#cost_calc_total_cost").html(a);
		
		
		/* inserting the developers respective in their divs*/

        var display_text = '<p id="cost_calc_breakdown_item">'+text_val+'('+new_val+')'+'</p><p id="cost_calc_breakdown_price">&#36;'+cost_added+'</p>';
        $("#"+div_id+'_result').html(display_text);
		
		/* inserting the total developers required  in the form */
		
		$("#final_"+div_id).val(new_val);
		
    } 
 
	function addMinusonValueDesigner(div_id,cost,text_val)
	{
		var current_val = $("#"+div_id).val(); 
		if(current_val==parseInt(0))
		{
			return false;
		}
		else
		{
			var new_val1 = parseInt(current_val)-parseInt(1);
			
			$("#"+div_id).val(new_val1);
			
			if(new_val1==0)
			{
				var new_val =1;
                                $("#"+div_id+'_result').hide();
			}
			else
			{
				var new_val =new_val1;
			}
			/* now calculating the total cost */
			var total_cost = $("#total_cost").val(); 
			var cost_added = cost; 
			var total_new_cost = parseInt(total_cost)-parseInt(cost_added);
			
			/* inserting the new cost in the total cost hidden box and visible box */
			$("#total_cost").val(total_new_cost);
			$("#final_total_amount").val(total_new_cost);
			var a = '&#36;'+total_new_cost;
			$("#cost_calc_total_cost").html(a);
			
			
			/* inserting the developers respective in their divs*/
            var new_val = new_val1;
			var display_text = '<p id="cost_calc_breakdown_item">'+text_val+'('+new_val+')'+'</p><p id="cost_calc_breakdown_price">&#36;'+cost_added+'</p>';
			$("#"+div_id+'_result').html(display_text);
			
			/* inserting the total developers required  in the form */
		
		    $("#final_"+div_id).val(new_val);
		}
	}
	
	/* --------- Ending of the funtions for the designer ----- */
	
	/* ******************************************************************** */
	
	/* --------- Starting of the functions for the Testers ------------ */
	
	function addPlusonValueTester(div_id,cost,text_val)
    {
	    var current_val = $("#"+div_id).val();
		var new_val = parseInt(current_val)+parseInt(1);
		$("#"+div_id).val(new_val);
		
		/* now calculating the total cost */
		var total_cost = $("#total_cost").val();
		var cost_added = new_val*cost;
        var total_new_cost = parseInt(total_cost)+parseInt(cost_added)-parseInt(current_val)*cost;
        
        /* inserting the new cost in the total cost hidden box and visible box */
        $("#total_cost").val(total_new_cost);
		$("#final_total_amount").val(total_new_cost);
		var a = '&#36;'+total_new_cost;
		$("#cost_calc_total_cost").html(a);
		
		
		/* inserting the developers respective in their divs*/

        var display_text = '<p id="cost_calc_breakdown_item">'+text_val+'('+new_val+')'+'</p><p id="cost_calc_breakdown_price">&#36;'+cost_added+'</p>';
        $("#"+div_id+'_result').html(display_text);
		
		/* inserting the total developers required  in the form */
		
		$("#final_"+div_id).val(new_val);
		
    } 
 
	function addMinusonValueTester(div_id,cost,text_val)
	{
		var current_val = $("#"+div_id).val(); 
		if(current_val==parseInt(0))
		{
			return false;
		}
		else
		{
			var new_val1 = parseInt(current_val)-parseInt(1);
			
			$("#"+div_id).val(new_val1);
			
			if(new_val1==0)
			{
				var new_val =1;
                                 $("#"+div_id+'_result').hide();
			}
			else
			{
				var new_val =new_val1;
			}
			/* now calculating the total cost */
			var total_cost = $("#total_cost").val(); 
			var cost_added = cost; 
			var total_new_cost = parseInt(total_cost)-parseInt(cost_added);
			
			/* inserting the new cost in the total cost hidden box and visible box */
			$("#total_cost").val(total_new_cost);
			$("#final_total_amount").val(total_new_cost);
			var a = '&#36;'+total_new_cost;
			$("#cost_calc_total_cost").html(a);
			
			
			/* inserting the developers respective in their divs*/
            var new_val = new_val1;
			var display_text = '<p id="cost_calc_breakdown_item">'+text_val+'('+new_val+')'+'</p><p id="cost_calc_breakdown_price">&#36;'+cost_added+'</p>';
			$("#"+div_id+'_result').html(display_text);
			
			/* inserting the total developers required  in the form */
		
		    $("#final_"+div_id).val(new_val);
		}
	}
	
	function clearselection()
	{
		 $("#total_cost").val(0);
		 $("#cost_calc_total_cost").empty(0);
		 $("#normal_developer_result").empty(0);
		 $("#senior_developer_result").empty(0);
		 $("#normal_designer_result").empty(0);
		 $("#senior_designer_result").empty(0);
		 $("#normal_tester_result").empty(0);
		 $("#senior_tester_result").empty(0);
		 $("#system_analyst_result").empty(0);
		 $("#project_manager_result").empty(0);
		 
		 
		 $("#final_senior_developer").val(0);
		 $("#final_normal_developer").val(0);
		 $("#final_senior_designer").val(0);
		 $("#final_normal_designer").val(0);
		 $("#final_normal_tester").val(0);
		 $("#final_senior_tester").val(0);
		 $("#final_system_analyst").val(0);
		 $("#final_project_manager").val(0);

                 // mking all the slections 0px
		 $("#senior_developer").val(0);
		 $("#normal_developer").val(0);
		 $("#senior_designer").val(0);
		 $("#normal_designer").val(0);
		 $("#senior_tester").val(0);
		 $("#normal_tester").val(0);
		 $("#system_analyst").val(0);
		 $("#project_manager").val(0);
		 
	}
		
	
	</script>
	
	
