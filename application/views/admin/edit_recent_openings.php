 <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/datepicker/datepicker.css">



<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1 >Recent Openings</h1>
				 
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Add New Opening Within Us</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="
						<?php echo base_url();?>admins/save_edit_currentOpenings" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						    <div class="form-group">
								<label class="control-label col-lg-3">Position</label>
								<div class="col-lg-4">
									<input type="" name="position" value="<?php echo $data->position;?>" id="position" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							
							

                            <div class="form-group">
								<label class="control-label col-lg-3">Date</label>
								<div class="col-lg-4">
									<div id="date" class="input-group input-append date" data-date-format="dd-mm-yyyy">
										<input class="form-control" type="text" name="posted_date" readonly="" value="<?php echo date("d/m/Y", strtotime($data->posted_date));?>" >
										<span class="input-group-addon add-on">
										<i class="icon-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Short Descrition</label>
								<div class="col-lg-4">
									<input type="text" value="<?php echo $data->short_desc;?>" name="short_description"  id="short_description" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Our Requirement</label>
								<div class="col-lg-9">
									<textarea name="requirement" required id="requirement" class="form-control detail" > <?php echo $data->requirements;?></textarea>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">What we Expect</label>
								<div class="col-lg-9">
									<textarea name="expectation" required id="expectation" class="form-control detail" > <?php echo $data->expectations;?></textarea>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">What Candidate've Got</label>
								<div class="col-lg-9">
									<textarea name="candidate" required id="candidate" class="form-control detail" > <?php echo $data->candidate_skill;?></textarea>
									<br>
									
								</div>
							</div>
													   
							<div class="form-actions no-margin-bottom" style="text-align:center;">
							    <input type="hidden" name="opening_id" value="<?php echo $data->opening_id;?>"/>
								<input type="submit" value="Update" name="sub_hn" class="btn btn-primary btn-lg " />
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

    <script src="<?php echo base_url();?>assets/admin/datepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/frontend/js/vendors/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/frontend/js/vendors/ckeditor/adapters/jquery.js"></script>
	
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
   
   // CKEditor Full Datepicker
	$('textarea.detail').ckeditor({
		height: '200px'
	});
	

	
	// When the document is ready
            $(document).ready(function () {
                
                $('.date').datepicker({
                    format: "dd/mm/yyyy",
					"minDate": new Date(),
					"autoclose": true
                });  
            
            });

  
    


  </script>
   
   
   <?php if(isset($_SESSION['admin']['hm_msg'])){
			$_SESSION['admin']['hm_msg']= "false";
				  }?>