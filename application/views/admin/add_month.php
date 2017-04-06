 <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/datepicker/datepicker.css">



<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1 >Month</h1>
				 <?php if(isset($_GET['msg'])){
					 if($_GET['msg']=='added'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/viewMonths');" href="#">&times;</a> 
						Month Added Successfully
				   </div> 
					<?php 
                 }
				 if($_GET['msg']=='exists'){?>
			
			       <div class="alert alert-warning">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/viewMonths');" href="#">&times;</a> 
						Month Already Exists
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
                                    <h5>Add New Month</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
						<form action="
						<?php echo base_url();?>admins/addNewMonth" class="form-horizontal" id="block-validate" enctype="multipart/form-data"  method="post">
						
						   <div class="form-group">
								<label class="control-label col-lg-3">Month</label>
								<div class="col-lg-4">
									<select name="month_name" required id="month_name" class="form-control">
									     <option value="">Select Month</option>
									     <option value="January">January</option>
									     <option value="February">February</option>
									     <option value="March">March</option>
									     <option value="April">April</option>
									     <option value="May">May</option>
									     <option value="June">June</option>
									     <option value="July">July</option>
									     <option value="August">August</option>
									     <option value="September">September</option>
									     <option value="October">October</option>
									     <option value="November">November</option>
									     <option value="December">December</option>
									</select>
									
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-3">Year</label>
								<div class="col-lg-4">
								   <?php $curr_year = date('Y');
								         $syear = $curr_year - 3 ;
										 $eyear = $curr_year + 3 ;
								   ?>
									<select name="year_name" required id="year_name" class="form-control">
									     <option value="">Select Month</option>
										 <?php for($j=$syear;$j<=$eyear;$j++)
										 {?>
									       <option value="<?php echo $j;?>" <?php if($curr_year==$j){?> selected <?php }?>><?php echo $j;?></option>
										 <?php }?>
									</select>
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
                                            <th>Month</th>
                                            <th>Year</th>
                                            <!--th>Action</th-->
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
                                            <td><?php echo $rows->month_name;?></td> 
                                            <td><?php echo $rows->year_name;?></td> 
											<!--td class="center">
											<a href="<?php echo base_url();?>admins/delete_coupon/<?php echo $rows->month_id;?>" onclick="return confirm('Are you sure to delete');">Delete</a>
											</td-->
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