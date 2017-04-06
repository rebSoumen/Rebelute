<?php    $count = count($data); ?>
<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1>Resource Pricing</h1>
				 <?php if(isset($_GET['msg'])){
					 if($_GET['msg']=='success'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/resource_pricing');" href="#">&times;</a> 
						Pricing Saved Successfully
				   </div> 
					<?php 
                 }
				 if($_GET['msg']=='updated'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/resource_pricing');" href="#">&times;</a> 
						Pricing Updated Successfully
				   </div> 
					<?php 
                 }
				 } ?>
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Change Pricing</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="<?php echo base_url();?>admins/saveResource_pricing" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						    <div class="form-group">
								<label class="control-label col-lg-3">Senior Developer</label>
								<div class="col-lg-4">
									<input type="text" name="senior_developer"  <?php if($count!=0){?> value="<?php echo $data->senior_developer;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							 <div class="form-group">
								<label class="control-label col-lg-3">Normal Developer</label>
								<div class="col-lg-4">
									<input type="text" name="normal_developer"   <?php if($count!=0){?> value="<?php echo $data->normal_developer;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Senior Designer</label>
								<div class="col-lg-4">
									<input type="text" name="senior_designer"   <?php if($count!=0){?> value="<?php echo $data->senior_designer;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Normal Designer</label>
								<div class="col-lg-4">
									<input type="text" name="normal_designer"   <?php if($count!=0){?> value="<?php echo $data->normal_designer;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Senior Tester</label>
								<div class="col-lg-4">
									<input type="text" name="senior_tester"  <?php if($count!=0){?> value="<?php echo $data->senior_tester;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Normal Tester</label>
								<div class="col-lg-4">
									<input type="text" name="normal_tester" <?php if($count!=0){?> value="<?php echo $data->normal_tester;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">System Analyst</label>
								<div class="col-lg-4">
									<input type="text" name="system_analyst"  <?php if($count!=0){?> value="<?php echo $data->system_analyst;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Project Manager</label>
								<div class="col-lg-4">
									<input type="text" name="project_manager" <?php if($count!=0){?> value="<?php echo $data->project_manager;?>" <?php }?> id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							

                          
													   
						<div class="form-actions no-margin-bottom" style="text-align:center;">
						   <?php if($count==0){?>
							<input type="submit" value="Save" name="sub_hn" class="btn btn-primary btn-lg " />
						   <?php }
						    else {?>
							<input type="submit" value="Update" name="sub_hn" class="btn btn-primary btn-lg " />
							<?php }?>
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