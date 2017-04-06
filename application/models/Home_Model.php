<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home_Model extends CI_Model
    {
	
	    public function saveUserDataModel($fname,$lname,$email,$address1,$address2,$city,$state,$zip,$phone)
		{
			$row = array("fname"=>$fname,
			             "lname"=>$lname,
                                    "email"=>$email,
                                    "address1"=>$address1,
                                    "address2"=>$address2,
                                    "city"=>$city,
                                    "state"=>$state,
                                     "zip"=>$zip,
                                     "phone"=>$phone						 
						);
						
			$this->db->insert('users',$row);
			$user_id = $this->db->insert_id();
			$this->session->set_userdata(array('user_id'=>$user_id));
			
			// Saving  the user requirement in the user_requirement table
			
			$session_data  = $this->session->all_userdata();
			$row_req = $session_data['user'];
			$row_req['user_id']= $user_id;
			$this->db->insert('user_requirement',$row_req);
			
            return true;
			
		}

        public function savePaymentDetails($get)
		{
			$transaction_id = $get['tx'];
			$amount = $get['amt'];
			$status = $get['st'];
			$user_id = $this->session->userdata('user_id');
			
			$row = array('user_id'=>$user_id,
			             'transaction_id'=>$transaction_id,
						 'amount'=>$amount,
						 'pay_status' =>$status 
						);
						
			$this->db->insert('user_payment',$row);	

            if($status=="Completed")
			{
				// Updating the user payment status in users table
				$row_user = array('payment_status'=>1);
				$this->db->where('usr_id',$user_id);
				$this->db->update('users',$row_user);
				
			}
            
             return true;			
		}

        public function exportUsersToExcelModel()
		{
			
			$this->db->select("usr_id,CONCAT(ifNull(fname,''),' ',ifNULL(lname,'')) as name,email,phone");
			$this->db->from('users');
			$this->db->order_by('created_date','DESC');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			//$fields = $query->list_fields();
			
			//echo "<pre>"; print_r($fields);die;
			
			
			
			$this->excel->setActiveSheetIndex(0);
            //name the worksheet
            $this->excel->getActiveSheet()->setTitle('Users');
            //set cell A1 content with some text
            $this->excel->getActiveSheet()->setCellValue('A1', 'Users Excel Sheet');
            $this->excel->getActiveSheet()->setCellValue('A3', 'S.No.');
            $this->excel->getActiveSheet()->setCellValue('B3', 'Name');
            $this->excel->getActiveSheet()->setCellValue('C3', 'Phone');
            $this->excel->getActiveSheet()->setCellValue('D3', 'Email');
            //merge cell A1 until C1
            $this->excel->getActiveSheet()->mergeCells('A1:D1');
            //set aligment to center for that merged cell (A1 to C1)
            $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //make the font become bold
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
            $this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
            for($col = ord('A'); $col <= ord('D'); $col++){
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
            $this->excel->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
             
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


        public function saveCandidateDetailsModel($post,$filename)
		{
			$fname = addslashes($post['fname']);
			$lname = addslashes($post['lname']);
			$email = addslashes($post['email']);
			$phone = addslashes($post['phone']);
			$age = addslashes($post['age']);
			$city = addslashes($post['city']);
			$position = addslashes($post['position']);
			$expected_salary = addslashes($post['salary']);
			$notice_period= addslashes($post['notice_period']);
			$website = addslashes($post['website']);
			$experience = addslashes($post['experience']);
			$message = addslashes($post['message']);
			
			
			
			$data = array("fname"=>$fname,
			              "lname"=>$lname, 
			              "age"=> $age,
			              "email"=>$email, 
			              "phone"=>$phone, 
			              "city"=> $city,
			              "position"=> $position,
			              "expected_salary"=> $expected_salary,
			              "notice_period"=> $notice_period,
			              "website"=> $website,
			              "experience"=> $experience,
			              "message"=>$message,
                          "resume"=>$filename						  
			             );
						 
			$this->db->insert('candidate_details',$data);
            return true;			
			
		}

        public function saveContactUsModel($post)
		{
			$name=$post['name'];
			$email=$post['email'];
			$phone=$post['phone'];
			$services=$post['service'];
			$subject=$post['subject'];
			$message=$post['message'];
			
			$data = array("name"=>$name,
			              "email"=>$email,
						   "phone"=>$phone,
						   "services"=>$services,
						   "subject"=>$subject,
						   "message"=>$message
						  );
						  
			$this->db->insert('contact_info',$data);

            return true;			
		}

        public function save_Subscribe($post)
		{
			$email =  addslashes($post['subscriber_email']);
			
			/* -------- Checking Whether the email has alrady subscribed  --------- */
			$this->db->select('COUNT(0) as users');
			$this->db->from('subscribers');
			$this->db->where('email',$email);
			$query = $this->db->get();
			$row = $query->row();
			
			$count =$row->users;
			
			if($count > 0)
			{
				return 2; // this email already exists
			}
			else
			{
			
				$data = array("email"=>$email);
				$this->db->insert('subscribers',$data);
				return 1;
			}
		}

        public function get3RecentblogsModel()
		{
			$this->db->select('blog_id,title,created_date,blog_image ');
			$this->db->from('blogs');
			$this->db->limit(3);
			$this->db->order_by('blog_id desc'); 
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$row = $query->result();
			return $row;
			
		} 

        /* ---- -  Start Work done on 29/03/2016 --------------*/		
	
	    public function getallBlogscount()
		{
			$this->db->select('COUNT(0) as blog_count');
			$this->db->from('blogs');
			$query = $this->db->get();
			$row = $query->row(); 
			return $row;
		}
		
		public function record_count() 
		{
             return $this->db->count_all("blogs");
        }
		
		public function fetch_blogs($limit, $start) 
		{
			$this->db->limit($limit, $start);
                        $this->db->order_by('blog_id','DESC');
			$query = $this->db->get("blogs");
            
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				//echo $this->db->last_query();die;
				return $data;
			}
			return false;
        }
		
		public function getsingleBlogDataModel($url)
		{
			$this->db->select('blog_id,title,blog_date,category,blog_image,media_type,posted_by,description,short_desc,keywords,image_alt_text');
			$this->db->from('blogs');
			$this->db->where('title LIKE','%'.$url.'%');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$row = $query->row();
			return $row;
		}
		
		public function getRelatedBlogsModel($category)
		{
			$this->db->select('blog_id,title,blog_date,category,blog_image,media_type,posted_by,description,short_desc');
			$this->db->from('blogs');
			$this->db->where('category LIKE','%'.$category.'%');
			$this->db->limit(4);
			$this->db->order_by('blog_id DESC');
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
	
	
	
	
	   
	   
	   /* ---- -  End Work done on 29/03/2016 --------------*/
	   
	   
	   
	   
	   /* ----------------Work done on 30/03/2016 -----------*/
	   
	   
	    public function getAllCurrentOpeningsModel()
	    {
		   $this->db->select('opening_id,position,posted_date,short_desc,requirements,expectations,candidate_skill');
			$this->db->from('recent_openings');
			$this->db->where('isDelete',0);
			$query= $this->db->get();
			$row = $query->result();
			return $row;
	    }
		
		public function getAllPositionsModel()
		{
			$this->db->select('position_name');
			$this->db->from('positions');
			$query=$this->db->get();
			$row = $query->result();
			return $row;
		}
		
		public function save_serviceInfoModel($post)
		{
			//echo "<pre>"; print_r($post);die;
		    $name = addslashes($post['name']);
            $email = addslashes($post['email']);
            $phone = addslashes($post['phone']);
            $message = addslashes($post['message']);
			$page_name = addslashes($post['page_name']);
			$last_ip = $this->input->ip_address();

            $data = array("name"=>$name,
			               "email"=>$email,
			               "phone"=>$phone,
						   "message"=>$message,
						   "from_page"=>$page_name,
						   "ip_address"=>$last_ip
						  );
            
            $this->db->insert('service_info',$data);
			//echo $this->db->last_query(); die;
			return true;
 			
		}
		
		public function save_designService_requestsModel($post,$filename)
		{
			$name = addslashes($post['name']);
			$email = addslashes($post['email']);
			$phone = addslashes($post['phone']);
			$message = addslashes($post['message']);
			
			$data =array("name"=>$name,
						  "email"=>$email,
						  "phone"=>$phone,
						  "message"=>$message,
						  "userfile"=>$filename
					   );
			$this->db->insert('design_service_query',$data);
			return true;
		}
		
		public function saveUserDataModelMonthly($fname,$lname,$email,$address1,$address2,$city,$state,$zip,$phone)
		{
			$row = array("fname"=>$fname,
			             "lname"=>$lname,
                         "email"=>$email,
                         "address1"=>$address1,
                         "address2"=>$address2,
                         "city"=>$city,
                         "state"=>$state,
                         "zip"=>$zip,
                         "phone"=>$phone						 
						);
						
			$this->db->insert('users_monthly',$row);
			$user_id = $this->db->insert_id();
			$this->session->set_userdata(array('user_id'=>$user_id));
			
			// Saving  the user requirement in the user_requirement table
			
			$session_data  = $this->session->all_userdata();
			//$site = $session_data ['user']['site'];
			$senior_developer = $session_data ['user']['senior_developer'];
			$normal_developer = $session_data ['user']['normal_developer'];
			$senior_designer = $session_data ['user']['senior_designer'];
			$normal_designer = $session_data ['user']['normal_designer'];
			$senior_tester = $session_data ['user']['senior_tester'];
			$normal_tester = $session_data ['user']['normal_tester'];
			$system_analyst = $session_data ['user']['system_analyst'];
			$project_manager = $session_data ['user']['project_manager'];
			
			$row_req = array('senior_developer'=>$senior_developer,
		                 'normal_developer'=>$normal_developer,
					     'senior_designer'=>$senior_designer,
					     'normal_designer'=>$normal_designer,
					     'senior_tester'=>$senior_tester,
					     'normal_tester'=>$normal_tester,
					     'system_analyst'=>$system_analyst,
					     'project_manager'=>$project_manager,
						 'user_id'=>$user_id
		            );
			$this->db->insert('user_monthly_requirement',$row_req);
			
            return true;
		}
		
		
		public function savePaymentDetailsMonthly($get)
		{
			$transaction_id = $get['tx'];
			$amount = $get['amt'];
			$status = $get['st'];
			$user_id = $this->session->userdata('user_id');
			
			$row = array('user_id'=>$user_id,
			             'transaction_id'=>$transaction_id,
						 'amount'=>$amount,
						 'pay_status' =>$status 
						);
						
			$this->db->insert('user_payment_monthly',$row);	

            if($status=="Completed")
			{
				// Updating the user payment status in users table
				$row_user = array('payment_status'=>1);
				$this->db->where('usr_id',$user_id);
				$this->db->update('users_monthly',$row_user);
				
			}
            
             return true;		
		}
		
		public function saveUserDataModelHourly($fname,$lname,$email,$address1,$address2,$city,$state,$zip,$phone)
		{
			$row = array("fname"=>$fname,
			             "lname"=>$lname,
                         "email"=>$email,
                         "address1"=>$address1,
                         "address2"=>$address2,
                         "city"=>$city,
                         "state"=>$state,
                         "zip"=>$zip,
                         "phone"=>$phone						 
						);
						
			$this->db->insert('users_hourly',$row);
			$user_id = $this->db->insert_id();
			$this->session->set_userdata(array('user_id'=>$user_id));
			
			// Saving  the user requirement in the user_requirement table
			
			$session_data  = $this->session->all_userdata();
			//$site = $session_data ['user']['site'];
			$senior_developer_hour = $session_data ['user']['senior_developer'];
			$senior_developer = $session_data ['user']['senior_developer_hour'];
			$normal_developer = $session_data ['user']['normal_developer'];
			$normal_developer_hour = $session_data ['user']['normal_developer_hour'];
			$senior_designer = $session_data ['user']['senior_designer'];
			$senior_designer_hour = $session_data ['user']['senior_designer_hour'];
			$normal_designer = $session_data ['user']['normal_designer'];
			$normal_designer_hour = $session_data ['user']['normal_designer_hour'];
			$senior_tester = $session_data ['user']['senior_tester'];
			$senior_tester_hour = $session_data ['user']['senior_tester_hour'];
			$normal_tester = $session_data ['user']['normal_tester'];
			$normal_tester_hour = $session_data ['user']['normal_tester_hour'];
			$system_analyst = $session_data ['user']['system_analyst'];
			$system_analyst_hour = $session_data ['user']['system_analyst_hour'];
			$project_manager = $session_data ['user']['project_manager'];
			$project_manager_hour = $session_data ['user']['project_manager_hour'];
			
			$row_req = array('senior_developer'=>$senior_developer,
			             'senior_developer_hours'=>$senior_developer_hour,
		                 'normal_developer'=>$normal_developer,
		                 'normal_developer_hours'=>$normal_developer_hour,
					     'senior_designer'=>$senior_designer,
					     'senior_designer_hours'=>$senior_designer_hour,
					     'normal_designer'=>$normal_designer,
					     'normal_designer_hours'=>$normal_designer_hour,
					     'senior_tester'=>$senior_tester,
					     'senior_tester_hours'=>$senior_tester_hour,
					     'normal_tester'=>$normal_tester,
					     'normal_tester_hours'=>$normal_tester_hour,
					     'system_analyst'=>$system_analyst,
					     'system_analyst_hours'=>$system_analyst_hour,
					     'project_manager'=>$project_manager,
					     'project_manager_hours'=>$project_manager_hour,
						 'user_id'=>$user_id
		            );
			$this->db->insert('user_hourly_requirement',$row_req);
			
            return true;
		}
		
		
		public function savePaymentDetailsHourly($get)
		{
			$transaction_id = $get['tx'];
			$amount = $get['amt'];
			$status = $get['st'];
			$user_id = $this->session->userdata('user_id');
			
			$row = array('user_id'=>$user_id,
			             'transaction_id'=>$transaction_id,
						 'amount'=>$amount,
						 'pay_status' =>$status 
						);
						
			$this->db->insert('user_hourly_payment',$row);	

            if($status=="Completed")
			{
				// Updating the user payment status in users table
				$row_user = array('payment_status'=>1);
				$this->db->where('usr_id',$user_id);
				$this->db->update('users_hourly',$row_user);
				
			}
            
             return true;		
		}
public function getAllBlogsCategory()

  {

   $this->db->select('DISTINCT(category)');

   $this->db->from('blogs');

   $query = $this->db->get();

   //echo $this->db->last_query();die;

   $row = $query->result();

   return $row;

  }

  

  public function record_count_category($category)

  {

   $category = str_replace("-"," ",$category);

   $this->db->select('COUNT(0) as cat_count');

   $this->db->where('category',$category);

   $this->db->from('blogs');

   $query=$this->db->get(); 

   $row = $query->row();

   return $row->cat_count;

   

  }

  

  public function fetch_blogsByCategory($limit, $start,$category) 

  {

        $category = str_replace("-"," ",$category);

        $this->db->limit($limit, $start);

        $query = $this->db->get_where("blogs",array("category"=>$category));

            

        if ($query->num_rows() > 0) {

          foreach ($query->result() as $row) {

            $data[] = $row;

          }

          //echo $this->db->last_query();die;

         return $data;

         }

       return false;

   }

	public function fetch_newsByCategory($limit, $start, $category) 
    {

        //$category = str_replace("-"," ",$category);

        $this->db->limit($limit, $start);

        $query = $this->db->get_where("tbl_news",array("month_id"=>$category));
				
        if ($query->num_rows() > 0) {

          foreach ($query->result() as $row) {

            $data[] = $row;

          }

          //echo $this->db->last_query();die;

         return $data;

         }

       return false;

   }

    public function check_N_Apply_couponModel($post)
    {
		$coupon = $post['coupon'];
		$this->db->select('discount');
		$this->db->from('coupons');
		$this->db->where('coupon',$coupon);
		$this->db->where('sdate <= CURDATE()');
		$this->db->where('edate >= CURDATE()');
		$query = $this->db->get();
		$row = $query->row();
		$count = $query->num_rows();
		if($count==0)
		{
			return 0;
		}
		else
		{
			return $row->discount;
		}
				
    }
	
	
	
		
	public function loadMoreNewsModel($item_per_page,$position)
	{
		
		//  fetching the data
		$this->db->select('a.month_id,a.month_name,a.year_name,b.news_id,b.title,b.short_description,b.news_date,b.news_image,b.content,b.url, b.url_type');
		$this->db->from('tbl_month as a');
		$this->db->join('tbl_news as b','a.month_id=b.month_id','inner');
		$this->db->order_by('a.month_id','DESC');
		$this->db->order_by('b.news_date','DESC');
		if($position==0)
		  $this->db->limit($item_per_page);
		else		
		  $this->db->limit($item_per_page,$position);
		$query = $this->db->get();  
	
		//$row = $query->result();
		$row = $query->result_array();
		return $row;
		
		
	}
		
	public function record_count_news($category)
   {

		   $category = str_replace("-"," ",$category);

		   $this->db->select('COUNT(0) as cat_count');

		   $this->db->where('month_id',$category);

		   $this->db->from('tbl_news');

		   $query=$this->db->get(); 

		   $row = $query->row();

		   return $row->cat_count;

   

    }	
	
	public function getsingleNewsDataModel($url)
	{
			$this->db->select('news_id, month_id, title, url, url_type, short_description, news_date, news_image, content, created_date,image_alt_text,meta_keywords,meta_description');
			$this->db->from('tbl_news');
			$this->db->where('url', $url );
			$query = $this->db->get();
			
			$row = $query->row();
			return $row;
	}
	
	public function getRelatedNewsModel( $month )
	{
		$this->db->select('news_id, month_id, title, url, url_type, short_description, news_date, news_image, content, created_date');
		$this->db->from('tbl_news');
		$this->db->where('month_id', $month);
		$this->db->limit(4);
		$this->db->order_by('news_id DESC');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	
	public function getnewsMonthsModel( $month, $year )
	{
			
			$this->db->select('month_id, month_name, year_name, created_date');
			$this->db->from('tbl_month');
			$this->db->where('month_name', $month);
			$this->db->where('year_name', $year);
			$query = $this->db->get();
			//$row = $query->row();
			return $query->row();
	}
		
	public function getMonthsDataModel() 
	{
			
			$this->db->select('m.month_id, m.month_name, m.year_name, m.created_date');
			$this->db->from('tbl_month m');
			$this->db->join('tbl_news as n','m.month_id=n.month_id','inner');
			$this->db->group_by('m.month_id'); 
			$this->db->order_by('m.month_id DESC');
			$this->db->limit(15);
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
			
			
	
	}
	
	public function saveInforamtionGitexModel($post)
	{
		    $email = $post['email'];
			$mobile = $post['mobile'];
			
			$data = array("email"=>$email,"mobile"=>$mobile);
			$this->db->insert('tbl_gitex',$data);
			$id = $this->db->insert_id();
			return $id;
	}
	
	public function getBloglistForUrlModel($url)
	{
		
		$last = substr($url,-1);
		if($last=='/')
		{
			$url1 = substr_replace($url, "", -1);
		}
		else
		{
			$url1 = $url.'/';
		}
		// First getting the url id of the url
		
		$this->db->select('url_id');
		$this->db->from('tbl_url');
		$this->db->where('url_link',$url);
		$this->db->or_where('url_link',$url1);
		$query_get = $this->db->get();
		$row_get = $query_get->row();
		$url_id = $row_get->url_id;
		
		$sql = "Select blog_id,title,blog_date,category,blog_image,posted_by,short_desc,mobile_description,media_type  from blogs WHERE FIND_IN_SET($url_id,allowed_urls)";
		$query = $this->db->query($sql);
		$count = $query->num_rows();
		
		if($count > 0)
		{
			$row = $query->result();
		}
		else
		{
			$row= "";
		}
		return $row;
	}
	
	
	public function getsingleBlogDataModel_ajax($url)
	{
		$url = str_replace("-"," ",$url);
		$this->db->select('blog_id,title,blog_date,category,blog_image,media_type,posted_by,description,short_desc,keywords,image_alt_text');
		$this->db->from('blogs');
		$this->db->where('title LIKE','%'.$url.'%');
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		$row = $query->row();
		return $row;
	}
	
	
}
	
?>