<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1>View Message</h1>
				 
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>View User Message</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="#" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						   <div class="form-group">
								<label class="control-label col-lg-3">Name</label>
								<div class="col-lg-4">
									<input type="text" name="name" readonly value="<?php echo $data->name;?>" id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Phone</label>
								<div class="col-lg-4">
									<input type="text" name="phone" readonly value="<?php echo $data->phone;?>" id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Email </label>
								<div class="col-lg-4">
									<input type="text" name="phone" readonly value="<?php echo $data->email;?>" id="title" class="form-control"/>
									<br>
									
								</div>
							</div>

                           <div class="form-group">
								<label class="control-label col-lg-3">User Message</label>
								<div class="col-lg-4">
									<textarea name="description" readonly required id="description" class="form-control" style="resize:none;" ><?php echo $data->message;?></textarea>
									<br>
									
								</div>
							</div>
													   
				<div class="form-actions no-margin-bottom" style="text-align:center;">
				   
					<input type="button" onclick="window.location.href='<?php echo base_url();?>admins/services_info'" value="Back " name="sub_hn" class="btn btn-primary btn-lg " />
					
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