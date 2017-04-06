 <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/datepicker/datepicker.css">



<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1 >URL's</h1>
				 <?php if(isset($_GET['msg'])){
					 if($_GET['msg']=='added'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/urlList');" href="#">&times;</a> 
						Url Added Successfully
				   </div> 
					<?php 
                 }
				 if($_GET['msg']=='exists'){?>
			
			       <div class="alert alert-warning">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/urlList');" href="#">&times;</a> 
						Url Already Exists
				   </div> 
					<?php 
                 }
				 
				 if($_GET['msg']=='updated'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/urlList');" href="#">&times;</a> 
						Url Updated Successfully
				   </div> 
					<?php 
                 }
				 if($_GET['msg']=='deleted'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/urlList');" href="#">&times;</a> 
						Url Deleted Successfully
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
                                    <h5>Add Url</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="
						<?php echo base_url();?>admins/addNewUrl" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						   <div class="form-group">
								<label class="control-label col-lg-3">Url Link</label>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="url" id="url" required/>
									
								</div>
							</div>
							
							
							
							
							<span id="media_div"></span>

                            <!--div class="form-group">
								<label class="control-label col-lg-3">Start Date</label>
								<div class="col-lg-4">
									<div id="date" class="input-group input-append date" data-date-format="dd-mm-yyyy">
										<input class="form-control" required type="text" name="sdate" readonly="" >
										<span class="input-group-addon add-on">
										<i class="icon-calendar"></i>
										</span>
									</div>
								</div>
							</div-->
							
							
							
							
							
							
													   
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
                                            <th>Url Link</th>
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
                                            <td><?php echo $rows->url_link;?></td> 
                                            
											<td class="center">
											<a href="<?php echo base_url();?>admins/edit_url/<?php echo $rows->url_id;?>">Edit</a> |
											<a href="<?php echo base_url();?>admins/delete_url/<?php echo $rows->url_id;?>" onclick="return confirm('Are you sure to delete');">Delete</a>
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