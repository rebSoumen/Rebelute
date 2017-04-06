<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class admin_model extends CI_Model
    {
	    public function sub_login($em='',$ps='')
		{
			$where = array('email'=>$em,
			               'password'=>$ps,
						   'user_type'=>0);		 
			$query = $this->db->get_where('user_login',$where);
			//echo $this->db->last_query(); die;
            $count = $query->num_rows();
			$row = $query->row();
			
					 
		   if($count>0){
			   $_SESSION['admin']['email']= $row->email;
			   $_SESSION['admin']['id']= $row->admin_tbl_id;
			   $_SESSION['admin']['name']= $row->name;
			   return true;
			 }
			 else{
				 return false;
			 }
		}
		
		public function getAllBlogsModel()
		{
			$this->db->select('blog_id,title,blog_date,category,posted_by');
			$this->db->from('blogs');
			$query=$this->db->get();
			//echo $this->db->last_query();die;
			$row = $query->result();
			return $row;
		}
		
		public function saveNewBlogModel($post,$filename,$filename_mobile)
		{
			$title = addslashes($post['title']);
			$date_temp = $post['blog_date'];
			$category = addslashes($post['category']);
			$posted_by = addslashes($post['posted_by']);
			$description = htmlentities($post['description']);
			$media_type = $post['media_option'];
			$short_desc = $post['short_description'];
			
			/*----- Splitting the date in proper format ---- */
			$date_temp1 = explode("/",$date_temp);
			$blog_date = $date_temp1[2]."-".$date_temp1[1]."-".$date_temp1[0];
			
			$data = array("title"=>$title,
			              "blog_date"=>$blog_date,
						  "category"=>$category,
						  "posted_by"=>$posted_by,
						  "description"=>$description,
						  "blog_image"=>$filename,
                                                  "blog_image_mobile"=>$filename_mobile,
						  "media_type"=>$media_type,
						  "short_desc"=>$short_desc
						 );
						 
			$this->db->insert('blogs',$data);
            return true;			
			
			
		}
		
		
		public function edit_blog_viewModel($id)
		{
			$this->db->select('blog_id,title,blog_date,category,posted_by,description,blog_image,blog_image_mobile,media_type,short_desc');
			$this->db->from('blogs');
			$this->db->where(array("blog_id"=>$id));
			$query= $this->db->get();
			$row = $query->row();
			return $row;
		}
		
		public function save_edit_blogModel($post,$filename)
		{
			$title = addslashes($post['title']);
			$date_temp = $post['blog_date'];
			$category = addslashes($post['category']);
			$posted_by = addslashes($post['posted_by']);
			$description = htmlentities($post['description']);
			$id = $post['blog_id'];
			$old_image = $post['old_image'];
			$old_image_mobile = $post['old_image_mobile'];
			$media_type = $post['media_option'];
			$short_desc = $post['short_description'];
			
			/*----- Splitting the date in proper format ---- */
			$date_temp1 = explode("/",$date_temp);
			$blog_date = $date_temp1[2]."-".$date_temp1[1]."-".$date_temp1[0];
			
			if($filename=="" && $filename_mobile=="")
			{
				$data = array("title"=>$title,
							  "blog_date"=>$blog_date,
							  "category"=>$category,
							  "posted_by"=>$posted_by,
							  "description"=>$description,
							  "media_type"=>$media_type,
							  "short_desc"=>$short_desc
							  
							 );
			}
			if($filename=="" && $filename_mobile!="")
			{
				$data = array("title"=>$title,
							  "blog_date"=>$blog_date,
							  "category"=>$category,
							  "posted_by"=>$posted_by,
							  "description"=>$description,
							  "media_type"=>$media_type,
							  "short_desc"=>$short_desc,
							  "blog_image_mobile"=>$filename_mobile,
							  
							 );
				@unlink('uploads/blogs/'.$old_image_mobile);
				
			}
            if($filename!="" && $filename_mobile=="")
			{
				
				$data = array("title"=>$title,
							  "blog_date"=>$blog_date,
							  "category"=>$category,
							  "posted_by"=>$posted_by,
							  "description"=>$description,
							  "blog_image"=>$filename,
							  "media_type"=>$media_type,
							  "short_desc"=>$short_desc
							 );
				@unlink('uploads/blogs/'.$old_image);	
				
			}
			
			if($filename!="" && $filename_mobile!="")
			{
				$data = array("title"=>$title,
							  "blog_date"=>$blog_date,
							  "category"=>$category,
							  "posted_by"=>$posted_by,
							  "description"=>$description,
							  "blog_image"=>$filename,
							  "blog_image_mobile"=>$filename_mobile,
							  "media_type"=>$media_type,
							  "short_desc"=>$short_desc
							 );
				@unlink('uploads/blogs/'.$old_image);	
				@unlink('uploads/blogs/'.$old_image_mobile);	
				
			}
				
							 
						 
                        $this->db->where('blog_id',$id);
                        $this->db->update('blogs',$data); 			
            
			return true;

			
		}
		
		public function getAllSubscribersModel()
		{
			$this->db->select('subs_id,email,created_date');
			$this->db->from('subscribers');
			$query = $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function exportSubscribersToExcelModel()
		{
			
			$this->db->select("subs_id,email,DATE_FORMAT(created_date,'%d/%m/%Y') AS created_date");
			$this->db->from('subscribers');
			$this->db->order_by('created_date','DESC');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			//$fields = $query->list_fields();
			
			//echo "<pre>"; print_r($fields);die;
			
			
			
			$this->excel->setActiveSheetIndex(0);
            //name the worksheet
            $this->excel->getActiveSheet()->setTitle('Subscribers');
            //set cell A1 content with some text
            $this->excel->getActiveSheet()->setCellValue('A1', 'Subscribers Excel Sheet');
            $this->excel->getActiveSheet()->setCellValue('A3', 'S.No.');
            $this->excel->getActiveSheet()->setCellValue('B3', 'Email');
            $this->excel->getActiveSheet()->setCellValue('C3', 'Date');
            //$this->excel->getActiveSheet()->setCellValue('D3', 'Email');
            //merge cell A1 until C1
            $this->excel->getActiveSheet()->mergeCells('A1:C1');
            //set aligment to center for that merged cell (A1 to C1);
            $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //make the font become bold
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
            $this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
			
			$this->excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
			
            for($col = ord('A'); $col <= ord('C'); $col++){
				
			
            //set column dimension
            $this->excel->getActiveSheet()->getColumnDimension(chr($col))->setAutoSize(true);
             //change the font size
            $this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);
             
            $this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }
            //retrive contries table data
            //$rs = $this->db->get('countries');
            $exceldata="";
            foreach ($query->result_array() as $row){
            $exceldata[] = $row;
            }
            //Fill data
            $this->excel->getActiveSheet()->fromArray($exceldata, null, 'A4');
             
            $this->excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //$this->excel->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
             
            $filename='Users.xls'; //save our workbook as this file name
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache

            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5'); 
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
			
		}
		
		public function getAllrecentOpeningsModel()
		{
			$this->db->select('opening_id,position,posted_date');
			$this->db->from('recent_openings');
			$this->db->where('isDelete',0);
			$query= $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function save_currentOpeningsModel($post)
		{
			$position = addslashes($post['position']);
			$date_temp = addslashes($post['posted_date']);
			$short_description = addslashes($post['short_description']);
			$requirement = htmlentities($post['requirement']);
			$expectation = htmlentities($post['expectation']);
			$candidate = htmlentities($post['candidate']);
			
			
			/*----- Splitting the date in proper format ---- */
			$date_temp1 = explode("/",$date_temp);
			$blog_date = $date_temp1[2]."-".$date_temp1[1]."-".$date_temp1[0];
			
			$data =array("position"=>$position,
			             "posted_date"=>$blog_date,
						 "requirements"=>$requirement,
						 "expectations"=>$expectation,
						 "candidate_skill"=>$candidate,
						 "short_desc"=>$short_description
			            );
						
			$this->db->insert('recent_openings',$data);
            
            $opening_id = $this->db->insert_id(); 

            /* Inserting the  Positions in the positions table */
			
			$data1 = array("opening_id"=>$opening_id,
			               "position_name"=>$position
						   );

  			$this->db->insert('positions',$data1);
			
			return true;
		}
		
		public function getDataForEditModel($id)
		{
			$this->db->select('opening_id,position,posted_date,requirements,expectations,candidate_skill,short_desc');
			$this->db->from('recent_openings');
			$this->db->where('opening_id',$id);
			$query = $this->db->get();
			$row = $query->row();
			return $row;
		}
		
		public function save_edit_currentOpeningsModel($post)
		{
			$position = addslashes($post['position']);
			$date_temp = addslashes($post['posted_date']);
			$short_description = addslashes($post['short_description']);
			$requirement = htmlentities($post['requirement']);
			$expectation = htmlentities($post['expectation']);
			$candidate = htmlentities($post['candidate']);
			
			$id = $post['opening_id'];
			
			/*----- Splitting the date in proper format ---- */
			$date_temp1 = explode("/",$date_temp);
			$blog_date = $date_temp1[2]."-".$date_temp1[1]."-".$date_temp1[0];
			
			$data =array("position"=>$position,
			             "posted_date"=>$blog_date,
						 "requirements"=>$requirement,
						 "expectations"=>$expectation,
						 "candidate_skill"=>$candidate,
						 "short_desc"=>$short_description
			            );
			$this->db->where('opening_id',$id);
            $this->db->update('recent_openings',$data);
			
			
			/* ---- Updating the position table ----- */
			
			$data1 = array("position_name"=>$position);
         	$this->db->where('opening_id',$id);
            $this->db->update('positions',$data1);

            return true;			
			
		}
		
		public function delete_currentOpeningModel($id)
		{
			$this->db->where('opening_id',$id);
			$this->db->delete('recent_openings');
			
			/* ----  Deleting from the positions table --*/
			
			$this->db->where('opening_id',$id);
			$this->db->delete('positions');
			
			return true;
		}
		
		public function getAllServiceSubscribersModel()
		{
			$this->db->select('serv_id,name,email,phone,created_date');
			$this->db->from('service_info');
			$query=$this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function exportServiceSubscribersToExcelModel()
		{
			$this->db->select("serv_id,name,email,phone,DATE_FORMAT(created_date,'%d/%m/%Y') AS created_date");
			$this->db->from('service_info');
			$this->db->order_by('created_date','DESC');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			//$fields = $query->list_fields();
			
			//echo "<pre>"; print_r($fields);die;
			
			
			
			$this->excel->setActiveSheetIndex(0);
            //name the worksheet
            $this->excel->getActiveSheet()->setTitle('Service Subscribers');
            //set cell A1 content with some text
            $this->excel->getActiveSheet()->setCellValue('A1', 'Service Subscribers Excel Sheet');
            $this->excel->getActiveSheet()->setCellValue('A3', 'S.No.');
            $this->excel->getActiveSheet()->setCellValue('B3', 'Name');
            $this->excel->getActiveSheet()->setCellValue('C3', 'Email');
            $this->excel->getActiveSheet()->setCellValue('D3', 'Phone');
            $this->excel->getActiveSheet()->setCellValue('E3', 'Date');
            
			//merge cell A1 until C1
            $this->excel->getActiveSheet()->mergeCells('A1:E1');
            //set aligment to center for that merged cell (A1 to C1);
            $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //make the font become bold
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
            $this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
			
			$this->excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
			
            for($col = ord('A'); $col <= ord('E'); $col++){
				
			
            //set column dimension
            $this->excel->getActiveSheet()->getColumnDimension(chr($col))->setAutoSize(true);
             //change the font size
            $this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);
             
            $this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }
            //retrive contries table data
            //$rs = $this->db->get('countries');
            $exceldata="";
            foreach ($query->result_array() as $row){
            $exceldata[] = $row;
            }
            //Fill data
            $this->excel->getActiveSheet()->fromArray($exceldata, null, 'A4');
             
            $this->excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //$this->excel->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
             
            $filename='Users.xls'; //save our workbook as this file name
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache

            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5'); 
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
		}
		
		public function view_service_messageModel($id)
		{
			$this->db->select('serv_id,name,email,phone,message');
			$this->db->from('service_info');
			$this->db->where('serv_id',$id);
			$query = $this->db->get();
			$row = $query->row();
			return $row;
		}
		
		public function design_service_listModel()
		{
			$this->db->select('design_id,name,email,phone,message,created_date');
			$this->db->from('design_service_query');
			$query = $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function exportDesignServiceSubscribersToExcelModel()
		{
			$this->db->select("design_id,name,email,phone,DATE_FORMAT(created_date,'%d/%m/%Y') AS created_date");
			$this->db->from('design_service_query');
			$this->db->order_by('created_date','DESC');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			//$fields = $query->list_fields();
			
			//echo "<pre>"; print_r($fields);die;
			
			
			
			$this->excel->setActiveSheetIndex(0);
            //name the worksheet
            $this->excel->getActiveSheet()->setTitle(' Design Subscribers');
            //set cell A1 content with some text
            $this->excel->getActiveSheet()->setCellValue('A1', 'Design Service Subscribers Excel Sheet');
            $this->excel->getActiveSheet()->setCellValue('A3', 'S.No.');
            $this->excel->getActiveSheet()->setCellValue('B3', 'Name');
            $this->excel->getActiveSheet()->setCellValue('C3', 'Email');
            $this->excel->getActiveSheet()->setCellValue('D3', 'Phone');
            $this->excel->getActiveSheet()->setCellValue('E3', 'Date');
            
			//merge cell A1 until C1
            $this->excel->getActiveSheet()->mergeCells('A1:E1');
            //set aligment to center for that merged cell (A1 to C1);
            $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //make the font become bold
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
            $this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
			
			$this->excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
			
            for($col = ord('A'); $col <= ord('E'); $col++){
				
			
            //set column dimension
            $this->excel->getActiveSheet()->getColumnDimension(chr($col))->setAutoSize(true);
             //change the font size
            $this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);
             
            $this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }
            //retrive contries table data
            //$rs = $this->db->get('countries');
            $exceldata="";
            foreach ($query->result_array() as $row){
            $exceldata[] = $row;
            }
            //Fill data
            $this->excel->getActiveSheet()->fromArray($exceldata, null, 'A4');
             
            $this->excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //$this->excel->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
             
            $filename='Design Service.xls'; //save our workbook as this file name
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache

            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5'); 
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
		}
		
		public function view_design_service_messageModel($id)
		{
			$this->db->select('design_id,name,email,phone,message,userfile');
			$this->db->from('design_service_query');
			$this->db->where('design_id',$id);
			$query = $this->db->get();
			$row = $query->row();
			return $row;
		}
		
		public function getresourcePricingModel()
		{
			$this->db->select('senior_developer,normal_developer,senior_designer,normal_designer,senior_tester,normal_tester,system_analyst,project_manager');
			$this->db->from('resource_pricing');
			$query = $this->db->get();
			$row = $query->row(); 
			return $row;
		}
		
		public function saveResource_pricingModel($post)
		{
			$senior_developer = $post['senior_developer'];
			$normal_developer = $post['normal_developer'];
			$senior_designer = $post['senior_designer'];
			$normal_designer = $post['normal_designer'];
			$senior_tester = $post['senior_tester'];
			$normal_tester = $post['normal_tester'];
			$system_analyst = $post['system_analyst'];
			$project_manager = $post['project_manager'];
			
			$data = array('senior_developer'=>$senior_developer,
		                 'normal_developer'=>$normal_developer,
					     'senior_designer'=>$senior_designer,
					     'normal_designer'=>$normal_designer,
					     'senior_tester'=>$senior_tester,
					     'normal_tester'=>$normal_tester,
					     'system_analyst'=>$system_analyst,
					     'project_manager'=>$project_manager
						 
		            );
					
			$count = $this->db->count_all("resource_pricing");
            if($count==1)
			{
				$this->db->update('resource_pricing',$data);
				return 'updated';
			}
            else
			{
				$this->db->insert('resource_pricing',$data);
				return 'added';
			}

             			
					
			
		}
		
		public function getAllCouponsModel()
		{
			$this->db->select('coupon_id,coupon,sdate,edate,discount');
			$this->db->from('coupons');
			$query= $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function save_newCouponsModel($post)
		{
			$coupon = addslashes($post['coupon']);
			$sdate_temp = $post['sdate'];
			$edate_temp = $post['edate'];
			$discount = $post['discount'];
			
			
			/*----- Splitting the date in proper format ---- */
			$date_temp1 = explode("/",$sdate_temp);
			$sdate = $date_temp1[2]."-".$date_temp1[1]."-".$date_temp1[0];
			
			$date_temp2 = explode("/",$edate_temp);
			$edate = $date_temp2[2]."-".$date_temp2[1]."-".$date_temp2[0];
			
			
			$data = array("coupon"=>$coupon,
			              "sdate"=>$sdate,
						  "edate"=>$edate,
						  "discount"=>$discount
						 );
						 
			$this->db->insert('coupons',$data);	
             return true;			
			
			
		}
		
		public function delete_couponModel($id)
		{
			$this->db->where('coupon_id',$id);
			$this->db->delete('coupons');
			return true;
		}
		
		public function getmonthlyEstimateModel()
		{
			$this->db->select("CONCAT(fname,' ',lname) as name,email,phone,created_date,usr_id");
			$this->db->from('users_monthly');
			$query = $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function view_monthly_estimateModel($id)
		{
			$this->db->select('senior_developer,normal_developer,senior_designer,normal_designer,senior_tester,normal_tester,system_analyst,project_manager');
			$this->db->from('user_monthly_requirement');
			$this->db->where('user_id',$id);
			$query= $this->db->get();
			$row = $query->row();
			return $row;
		}
		
		public function getresourceHourlyPricingModel()
		{
			$this->db->select('senior_developer,normal_developer,senior_designer,normal_designer,senior_tester,normal_tester,system_analyst,project_manager');
			$this->db->from('resource_pricing_hourly');
			$query = $this->db->get();
			$row = $query->row(); 
			return $row;
		}
		
		
		public function saveResourceHourly_pricingModel($post)
		{
			$senior_developer = $post['senior_developer'];
			$normal_developer = $post['normal_developer'];
			$senior_designer = $post['senior_designer'];
			$normal_designer = $post['normal_designer'];
			$senior_tester = $post['senior_tester'];
			$normal_tester = $post['normal_tester'];
			$system_analyst = $post['system_analyst'];
			$project_manager = $post['project_manager'];
			
			$data = array('senior_developer'=>$senior_developer,
		                 'normal_developer'=>$normal_developer,
					     'senior_designer'=>$senior_designer,
					     'normal_designer'=>$normal_designer,
					     'senior_tester'=>$senior_tester,
					     'normal_tester'=>$normal_tester,
					     'system_analyst'=>$system_analyst,
					     'project_manager'=>$project_manager
						 
		            );
					
			$count = $this->db->count_all("resource_pricing_hourly");
            if($count==1)
			{
				$this->db->update('resource_pricing_hourly',$data);
				return 'updated';
			}
            else
			{
				$this->db->insert('resource_pricing_hourly',$data);
				return 'added';
			}

		}
		
		public function gethourlyEstimateModel()
		{
			$this->db->select("CONCAT(fname,' ',lname) as name,email,phone,created_date,usr_id");
			$this->db->from('users_hourly');
			$query = $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function view_hourly_estimateModel($id)
		{
			$this->db->select('senior_developer,normal_developer,senior_designer,normal_designer,senior_tester,normal_tester,system_analyst,project_manager,
			                   senior_developer_hours,normal_developer_hours,senior_designer_hours,normal_designer_hours,senior_tester_hours,
							   normal_tester_hours,system_analyst_hours,project_manager_hours');
			$this->db->from('user_hourly_requirement');
			$this->db->where('user_id',$id);
			$query= $this->db->get();
			$row = $query->row();
			return $row;
		}
		
		public function getApplicationForCurrentOpenings()
		{
			$this->db->select('cand_id,CONCAT(fname," ",lname) as name,email,phone,position,experience,resume');
			$this->db->from('candidate_details');
			$query = $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function getProjectEstimateModel()
		{
			$this->db->select("CONCAT(fname,' ',lname) as name,email,phone,created_date,usr_id");
			$this->db->from('users');
			$query = $this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function getProjectEstimateDetailModel($id)
		{
			$this->db->select('standard_site,ecommerce,pages,seo,mobile_design,hours,extra_features');
			$this->db->from('user_requirement');
			$this->db->where('user_id',$id);
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$row = $query->row(); 
			return $row;
			
		}
		
	
    }// End Of Class	
 