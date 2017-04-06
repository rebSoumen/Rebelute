<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1>Hourly Estimate Detail</h1>
				 
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Resource Details</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="#" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						    
							<?php 
							if($data->senior_developer!=0)
							{?>
								<div class="form-group">
									<label class="control-label col-lg-3">Senior Developer</label>
									<div class="col-lg-2">
										<input type="text" name="senior_developer"  value="<?php echo $data->senior_developer;?>" id="title" class="form-control"/>
									</div>
									<label class="control-label col-lg-1">Hour(s)</label>
									<div class="col-lg-2">
										<input type="text" name="senior_developer"  value="<?php echo $data->senior_developer_hours;?>" id="title" class="form-control"/>
									</div>
								</div>
								
							<?php  
							}
                            if($data->normal_developer!=0) 
                            {  
                            ?>				 
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Normal Developer</label>
								<div class="col-lg-2">
									<input type="text" name="normal_developer"  value="<?php echo $data->normal_developer;?>" id="title" class="form-control"/>
								</div>
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="normal_developer"  value="<?php echo $data->normal_developer_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php 
							}
							if($data->senior_designer!=0)
							{
							?>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Senior Designer</label>
								<div class="col-lg-2">
									<input type="text" name="senior_designer"  value="<?php echo $data->senior_designer;?>"  id="title" class="form-control"/>
								</div>
								
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="senior_designer"  value="<?php echo $data->senior_designer_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php }
							
							if($data->normal_designer!=0)
							{ 
						    ?>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Normal Designer</label>
								<div class="col-lg-2">
									<input type="text" name="normal_designer"  value="<?php echo $data->normal_designer;?>"  id="title" class="form-control"/>
								</div>
								
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="normal_designer"  value="<?php echo $data->normal_designer_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php }
							
							if($data->senior_tester!=0)
							{
							?>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Senior Tester</label>
								<div class="col-lg-2">
									<input type="text" name="senior_tester"  value="<?php echo $data->senior_tester;?>"  id="title" class="form-control"/>
								</div>
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="senior_tester"  value="<?php echo $data->senior_tester_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php }
							
							if($data->normal_tester!=0)
							{
							?>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Normal Tester</label>
								<div class="col-lg-2">
									<input type="text" name="normal_tester"  value="<?php echo $data->normal_tester;?>"  id="title" class="form-control"/>
								</div>
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="senior_tester"  value="<?php echo $data->normal_tester_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php }
							
							if($data->system_analyst!=0)
							{?>
							
							<div class="form-group">
								<label class="control-label col-lg-3">System Analyst</label>
								<div class="col-lg-2">
									<input type="text" name="system_analyst"  value="<?php echo $data->system_analyst;?>" id="title" class="form-control"/>
								</div>
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="senior_tester"  value="<?php echo $data->system_analyst_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php 
							}
							if($data->project_manager!=0)
							{
							?>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Project Manager</label>
								<div class="col-lg-2">
									<input type="text" name="project_manager" value="<?php echo $data->project_manager;?>"  id="title" class="form-control"/>
								</div>
								
								<label class="control-label col-lg-1">Hour(s)</label>
								<div class="col-lg-2">
									<input type="text" name="senior_tester"  value="<?php echo $data->project_manager_hours;?>" id="title" class="form-control"/>
								</div>
							</div>
							
							<?php 
							}
							?>
                          
													   
						<div class="form-actions no-margin-bottom" style="text-align:center;">
						   
							<input type="button" value="Back" onclick="window.location.href='<?php echo base_url();?>admins/monthly_estimate'" name="sub_hn" class="btn btn-primary btn-lg " />
						   
						</div>

						</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
              
                </div>
                    
                    
                   

                </div>
          <!--END PAGE CONTENT -->
        </div>
        </div>
		
	   <?php $this->load->view('_admin_template/footer');?>

	
   <script>
   function myFunction(ID,URL) 
   {
	
        var myWindow = window.open(URL, "MsgWindow", "width=500, height=500");
   
   }
   
   function ChangeUrl(page, url) 
	{
		if (typeof (history.pushState) != "undefined") {
			var obj = {Page: page, Url: url};
			history.pushState(obj, obj.Page, obj.Url);
		} else {
			window.location.href = "homePage";
			// alert("Browser does not support HTML5.");
		}
	}
   
   
	

    
	
   
    </script>
   
   
   <?php if(isset($_SESSION['admin']['hm_msg'])){
			$_SESSION['admin']['hm_msg']= "false";
				  }?>