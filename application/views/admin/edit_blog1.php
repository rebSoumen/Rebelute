 <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/datepicker/datepicker.css">



<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1 >Edit Blog</h1>
				 
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Edit A Blog</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="
						<?php echo base_url();?>admins/save_edit_blog" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						   <div class="form-group">
								<label class="control-label col-lg-3">Blog Title</label>
								<div class="col-lg-4">
									<input type="text" name="title" value="<?php echo $data->title;?>" id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Blog Type</label>
								<div class="col-lg-4"  style="padding-top: 7px;">
									Image <input type="radio" required value="0" <?php if($data->media_type==0){?> checked <?php }?> name="media_option" id="media1" onclick="showImage()" />
									Video <input type="radio" required value="1" <?php if($data->media_type==1){?> checked <?php }?> name="media_option" id="media2" onclick="showVideo()"  />
									<br>
									
								</div>
							</div>
							
							<span id="media_div">
								
								<?php if($data->media_type==1){?>
								
								        <div class="form-group">
										    <label class="control-label col-lg-3">You Tube URL</label>
											<div class="col-lg-4">
											    <input type="text" name="media" value="<?php echo $data->blog_image;?>" id="media" required class="form-control"/>
												<br>
											</div>
										</div>
								
								<?php }
								      else
									  {?>
								
								<div class="form-group">
									<label class="control-label col-lg-3">Blog Image</label>
									<div class="col-lg-4">
										<input type="file" name="blog_image"  id="blog_image" class="form-control"/>
										<br>
										
									</div>
							    </div>
								
								<div class="form-group">
									<label class="control-label col-lg-3">Blog Image Mobile</label>
									<div class="col-lg-4">
										<input type="file" name="blog_image_mobile"  id="blog_image_mobile" class="form-control"/>
										<br>
										
									</div>
							    </div>
								
							 <?php if(!empty($data->blog_image)){?>
						   <div class="form-group">
									<label class="control-label col-lg-3">Image</label>
									<div class="col-lg-4">
										<img src="<?php echo base_url();?>uploads/blogs/<?php echo $data->blog_image;?>" width="150px">
										<br>
										
									</div>
							 </div>
							 
							 <div class="form-group">
									<label class="control-label col-lg-3">Mobile Image</label>
									<div class="col-lg-4">
										<img src="<?php echo base_url();?>uploads/blogs/<?php echo $data->blog_image_mobile;?>" width="150px">
										<br>
										
									</div>
							 </div>

							<?php } 
							
									  }// End else for image
							
							?>
						
						</span>

                           <div class="form-group">
								<label class="control-label col-lg-3">Date</label>
								<div class="col-lg-4">
									<div id="date" class="input-group input-append date" data-date-format="dd-mm-yyyy">
										<input class="form-control" type="text" name="blog_date" readonly="" value="<?php echo date("d/m/Y", strtotime($data->blog_date));?>" >
										<span class="input-group-addon add-on">
										<i class="icon-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Category</label>
								<div class="col-lg-4">
									<input type="text" name="category" value="<?php echo $data->category;?>"  id="category" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Posted By</label>
								<div class="col-lg-4">
									<input type="text" name="posted_by" value="<?php echo $data->posted_by;?>"  id="posted_by" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Short Descrition</label>
								<div class="col-lg-4">
									<input type="text" name="short_description" value="<?php echo $data->short_desc;?>"  id="short_description" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Topic Description</label>
								<div class="col-lg-9">
									<textarea name="description" required id="description" class="form-control" ><?php echo $data->description;?></textarea>
									<br>
									
								</div>
							</div>
													   
				<div class="form-actions no-margin-bottom" style="text-align:center;">
				    <input type="hidden" name="blog_id" value="<?php echo $data->blog_id;?>"/>
					<input type="hidden" name="old_image" value="<?php echo $data->blog_image;?>"/>
					<input type="hidden" name="old_media_type" value="<?php echo $data->media_type;?>"/>
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
	$('textarea#description').ckeditor({
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

    
	function showImage()
	{
		var a = '<div class="form-group"><label class="control-label col-lg-3">Image</label><div class="col-lg-4"><input type="file" name="blog_image" required id="blog_image" class="form-control"/><br></div></div>';
		var b = '<div class="form-group"><label class="control-label col-lg-3">Mobile Image</label><div class="col-lg-4"><input type="file" name="blog_image_mobile" required id="blog_image_mobile" class="form-control"/><br></div></div>';
		$("#media_div").empty();
		$("#media_div").html(a+b);
	}
	
	function showVideo()
	{
		var a='<div class="form-group"><label class="control-label col-lg-3">You Tube URL</label><div class="col-lg-4"><input type="text" name="media" id="media" required class="form-control"/><br></div></div>';
	    $("#media_div").empty();
		$("#media_div").html(a);
	}
   
   
    </script>
	
	
   
   
   <?php if(isset($_SESSION['admin']['hm_msg'])){
			$_SESSION['admin']['hm_msg']= "false";
				  }?>