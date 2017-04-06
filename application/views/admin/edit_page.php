<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1 >Edit Your Your</h1>
				 
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Edit Page</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="
									<?php echo base_url();?>admins/edit_page_save" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
                                       
							<div class="form-group">
								<label class="control-label col-lg-3">Page Name</label>
								<div class="col-lg-4">
									<input type="text" name="page_name" id="page_name" required value="<?php echo $get_rec->page_name;?>"  class="form-control"/>
									<br>
									
								</div>
							</div>
					   
					    
						
						
							<div class="form-group">
								<label class="control-label col-lg-3">Page URL</label>
								<div class="col-lg-4">
									<input type="text" name="page_url"  id="page_url" required value="<?php echo $get_rec->page_url;?>" class="form-control"/>
									<br>
									
								</div>
							</div>
							
			
										
									
										
										
										

                              <input type="hidden" value="<?php echo $get_rec->page_id;?>" name="id"  />                                                 
                                                                               
							<div class="form-actions no-margin-bottom" style="text-align:center;">
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

   <script>
   function myFunction(ID,URL) {
	
    var myWindow = window.open(URL, "MsgWindow", "width=500, height=500");
   
   }
   
   
   // CKEditor Full
	$('textarea#description').ckeditor({
		height: '200px'
	});
   </script>
   <?php if(isset($_SESSION['admin']['hm_msg'])){
			$_SESSION['admin']['hm_msg']= "false";
				  }?>