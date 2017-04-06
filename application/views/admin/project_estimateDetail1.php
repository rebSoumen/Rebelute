<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1>Project Estimate Detail</h1>
				 
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Requirement Details</h5>
                                   

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
							
							 if(!isset($data))
							 {
								  echo "No Records Found";
								  
							 } 
							else
							{
							
								if($data->standard_site!="")
								{?>
									<div class="form-group">
										<label class="control-label col-lg-3">Standard Site</label>
										<div class="col-lg-4">
											<input type="text" name="senior_developer"  value="<?php echo $data->standard_site;?>" id="title" class="form-control"/>
											<br>
											
										</div>
									</div>
									
								<?php  
								}
								if($data->ecommerce!="") 
								{  
								?>				 
								
								
								<div class="form-group">
									<label class="control-label col-lg-3">ECommerce Site</label>
									<div class="col-lg-4">
										<input type="text" name="normal_developer"  value="<?php echo $data->ecommerce;?>" id="title" class="form-control"/>
										<br>
										
									</div>
								</div>
								
								<?php 
								}
								if($data->pages!="")
								{
								?>
								
								<div class="form-group">
									<label class="control-label col-lg-3">No. Of Pages</label>
									<div class="col-lg-4">
										<input type="text" name="senior_designer"  value="<?php echo $data->pages;?>"  id="title" class="form-control"/>
										<br>
										
									</div>
								</div>
								
								<?php }
								
								if($data->seo!="")
								{ 
								?>
								
								<div class="form-group">
									<label class="control-label col-lg-3">SEO</label>
									<div class="col-lg-4">
										<input type="text" name="normal_designer"  value="<?php echo $data->seo;?>"  id="title" class="form-control"/>
										<br>
										
									</div>
								</div>
								
								<?php }
								
								if($data->mobile_design!="")
								{
								?>
								
								<div class="form-group">
									<label class="control-label col-lg-3">Mobile </label>
									<div class="col-lg-4">
										<input type="text" name="senior_tester"  value="<?php echo $data->mobile_design;?>"  id="title" class="form-control"/>
										<br>
										
									</div>
								</div>
								
								<?php }
								
								if($data->hours!="")
								{
								?>
								
								<div class="form-group">
									<label class="control-label col-lg-3">Quick Turn Around</label>
									<div class="col-lg-4">
										<input type="text" name="normal_tester"  value="<?php echo $data->hours;?>"  id="title" class="form-control"/>
										<br>
										
									</div>
								</div>
								
								<?php }
								
								if($data->extra_features!="")
								{?>
								
									<div class="form-group">
										<label class="control-label col-lg-3">Extra Features</label>
										<div class="col-lg-4">
											<input type="text" name="system_analyst"  value="<?php echo $data->extra_features;?>" id="title" class="form-control"/>
											<br>
											
										</div>
									</div>
								
								<?php 
								}
								
							}// End Of Else
								
							?>
							
						<div class="form-actions no-margin-bottom" style="text-align:center;">
						   
							<input type="button" value="Back" onclick="window.location.href='<?php echo base_url();?>admins/project_estimate'" name="sub_hn" class="btn btn-primary btn-lg " />
						   
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
   
   
 