<div class="content_wrapper">
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                 <h1>Services Newsletter</h1>
				  <?php if(isset($_GET['msg'])){
					 if($_GET['msg']=='deleted'){?>
			
			       <div class="alert alert-success">
                        <a class="close" data-dismiss="alert" onclick="ChangeUrl('Page1', '<?php echo base_url();?>admins/services_info');" href="#">&times;</a> 
						Service Info Deleted Successfully
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
                                    <h5>Subscribers</h5>
                                   

								   <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <button type="button" onclick="window.location.href='<?php echo base_url();?>admins/exportServiceSubscribers'" style="margin: 2px ! important;" class="btn btn-primary">Export  To Excel</button>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
								
							
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
                                            <th>Subscriber Name </th>
                                            <th>Subscriber Email </th>
                                            <th>Subscriber Phone </th>
                                            <th>Subscribed Date </th>
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
                                            <td><?php echo $rows->name;?></td> 
                                            <td><?php echo $rows->email;?></td> 
                                            <td><?php echo $rows->phone;?></td> 
											<td><?php echo date("d F Y", strtotime($rows->created_date));?></td>
											<td class="center">
											<a href="<?php echo base_url();?>admins/view_service_message/<?php echo $rows->serv_id;?>">View Message</a> |
											
											<a href="<?php echo base_url();?>admins/delete_serices_info/<?php echo $rows->serv_id	;?>" onclick="return confirm('Are you sure to delete');">Delete</a>
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