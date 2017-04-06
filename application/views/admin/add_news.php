 <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/datepicker/datepicker.css">



<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1 >Add News</h1>
				 <?php if(isset($_GET['msg'])){
					 if($_GET['msg']=='added'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/viewNews');" href="#">&times;</a> 
						News Added Successfully
				   </div> 
					<?php 
                 }
				 if($_GET['msg']=='updated'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/viewNews');" href="#">&times;</a> 
						News Updated Successfully
				   </div> 
					<?php 
                 }
				 if($_GET['msg']=='deleted')
				 {?>
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/viewNews');" href="#">&times;</a> 
						News Deleted Successfully
				   </div>
				 <?php }
				 } ?>
					
					
                </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Add News</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="
						<?php echo base_url();?>admins/add_news" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						   
						   <div class="form-group">
								<label class="control-label col-lg-3">Select Month</label>
								<div class="col-lg-4">
								   <select name="month_id" required id="month_id" class="form-control">
									     <option value="">Select Month</option>
										 <?php foreach($month_list as $month)
										 {?>
									       <option value="<?php echo $month->month_id;?>"><?php echo $month->month_name." ".$month->year_name;?></option>
										 <?php }?>
									</select>
								</div>
							</div>
						   
						   
						   
						   
						   <div class="form-group">
								<label class="control-label col-lg-3">News Title</label>
								<div class="col-lg-4">
									<input type="text" name="title" required id="title" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Url Type</label>
								<div class="col-lg-4"  style="padding-top: 7px;">
									<input type="radio" required value="0" name="url_type" id="internal"  checked="checked" />Internal Link 
									 <input type="radio" required value="1" name="url_type" id="external"  />External Link
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">News URL</label>
								<div class="col-lg-4">
									<input type="text" name="url" required id="url" class="form-control"/>
									<br>
									
								</div>
							</div>
							
							
							
							<span id="media_div"></span>

                            <div class="form-group">
								<label class="control-label col-lg-3">Date</label>
								<div class="col-lg-4">
									<div id="date" class="input-group input-append date" data-date-format="dd-mm-yyyy">
										<input class="form-control" type="text" required name="news_date" readonly="" >
										<span class="input-group-addon add-on">
										<i class="icon-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">News Image</label>
								<div class="col-lg-4">
								   <input type="file" class="form-control" id="news_image" required="" name="news_image">
								   <br>
								 </div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Image Alt Tag</label>
								<div class="col-lg-4">
									<input type="text" name="alt_tag"  id="alt_tag" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Meta Keyword</label>
								<div class="col-lg-4">
									<input type="text" name="meta_keyword"  id="meta_keyword" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Meta Description</label>
								<div class="col-lg-4">
									<textarea name="meta_description"  id="meta_description" required class="form-control" ></textarea>
									<br>
									
								</div>
							</div>
							
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">Short Descrition</label>
								<div class="col-lg-4">
									<input type="text" name="short_description"  id="short_description" required class="form-control"/>
									<br>
									
								</div>
							</div>
							
							<!--div class="form-group">
								<label class="control-label col-lg-3">Keywords</label>
								<div class="col-lg-4">
									<input type="text" name="keywords"  id="keywords" required class="form-control"/>
									<br>
									
								</div>
							</div-->
							
							
							<div class="form-group">
								<label class="control-label col-lg-3">News Description</label>
								<div class="col-lg-9">
									<textarea name="description" required id="description" class="form-control" ></textarea>
									<br>
									
								</div>
							</div>
													   
				<div class="form-actions no-margin-bottom" style="text-align:center;">
					<input type="submit" value="Submit" name="sub_hn" class="btn btn-primary btn-lg " />
				</div>

						</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>News Month</th>
                                            <th>News Date </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
								        $i=1;
									   if(!empty($get_rec)){
										     foreach($get_rec as $rows){
				   /* $det_rec =  $admod->get_rec_id("category","cat_id",$rows->cat_f_id); */
										 
									   ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $rows->title;?></td> 
                                            <td><?php echo $rows->month_name." ".$rows->year_name;?></td> 
											<td><?php echo date("d F Y", strtotime($rows->news_date));?></td>
											<td class="center">
											<a href="<?php echo base_url();?>admins/edit_news_view/<?php echo $rows->news_id;?>">Edit</a> |
											
											<a href="<?php echo base_url();?>admins/delete_news/<?php echo $rows->news_id	;?>" onclick="return confirm('Are you sure to delete');">Delete</a>
											</td>
                                        </tr>
									   <?php 
									          $i++;
									        } // End For each 
										} ?>    
                                    </tbody>
                                </table>
                            </div>
                           
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