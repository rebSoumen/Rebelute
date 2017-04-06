<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class webservices_model extends CI_Model
    {
	
	    public function getBlogListModel($blog_type,$lower_limit,$perpage)
		{
			
			$blog_type = str_replace("\r\n","",$blog_type);
			/* Gettng the list  of blogs for all and  category wise */
			$this->db->select('blog_id,title,blog_date,category,blog_image,posted_by,short_desc,mobile_description');
			$this->db->from('blogs');
			
			//echo $blog_type;die;
			
			if($blog_type!="all")
			{
				$this->db->where('category LIKE','%'.$blog_type.'%');
			}
			
			
			$this->db->order_by('blog_id','DESC');
			/*
			if($lower_limit==0)
			    $this->db->limit($perpage);
		    else
                $this->db->limit($lower_limit,$perpage);				
			*/
			$query = $this->db->get();
			$count = $query->num_rows();
			$row_result1= $query->result_array();
			
			
			foreach($row_result1 as $title1)
			{
				$url = base_url().'blog/'.str_replace(" ","-",$title1['title']);//creating the blog url
				$row_result[]=array("blog_id"=>$title1['blog_id'],
				                    "title"=>$title1['title'],
									"blog_date"=>$title1['blog_date'],
									"category"=>$title1['category'],
									"blog_image"=>$title1['blog_image'],
									"posted_by"=>$title1['posted_by'],
									"short_desc"=>$title1['short_desc'],
									"mobile_description"=>$title1['mobile_description'],
									"url"=>$url,
									
									);
			}
			
			 
			//echo $this->db->last_query();die;
			
			
			
			
			/* ----------  Setting the status message --------*/
			if($count!=0)
			{
				$row['status']=true;
				$row['message']="Data Fetched Successfully";
				$row['data']['blogs'] = $row_result;
			}
			else
			{
				$row['status']=false;
				$row['message']="Database Error Or No Data Found";
			}
			
			return $row;
			
			
			
		}
		
		
		public function getSingleBlogDetailModel($blog_id)
		{
			$this->db->select('blog_id,title,blog_date,category,blog_image,posted_by,short_desc,description');
			$this->db->from('blogs');
			$this->db->where('blog_id',$blog_id);
			$query = $this->db->get();
			$count = $query->num_rows();
			
			/* ----  setting the status message ------*/
			
			if($count!=0)
			{
				$row['status']=true;
				$row['message']="Data Fetched Successfully";
			}
			else
			{
				$row['status']=false;
				$row['message']="Database Error Or No Data Found";
			}
			
			$row1=$query->row();
			
			$row['data']['blog_detail'] =array("blog_id"=>$row1->blog_id,
			                                   "title"=>$row1->title,
											   "blog_date"=> date('d F Y', strtotime($row1->blog_date)),
											   "category"=>$row1->category, 
											   "blog_image"=>$row1->blog_image, 
											   "posted_by"=>$row1->posted_by, 
											   "short_desc"=>$row1->short_desc, 
											   "description"=>html_entity_decode($row1->description)
											   );
											   
			
			return $row;
			
		}
		
		
		public function getAllCategoriesModel()
		{
			/* ------------  Getting the list of the Category--------------    */
			
			$this->db->select('DISTINCT(category)');
			$this->db->from('blogs');
			$query = $this->db->get();
			
			$count = $query->num_rows();
			$result1 = $query->result_array(); 
            
			
			$row['data']['category'] = $result1; 
			
			/* ----------  Setting the status message --------*/
			if($count!=0)
			{
				$row['status']=true;
				$row['message']="Data Fetched Successfully";
			}
			else
			{
				$row['status']=false;
				$row['message']="Database Error Or No Data Found";
			}
			
			return $row;
		}
		
		public function register_userModel($post,$filename)
		{
			//including the encryotion library
			
			require_once dirname(__FILE__) . '/../libraries/MCrypt.php';
		    $mcrypt = new MCrypt();
			
			
			$name = addslashes($post['name']);
			$email = $mcrypt->decrypt(addslashes($post['email']));
			$phone = $mcrypt->decrypt($post['phone']);
			$password = $mcrypt->decrypt(addslashes($post['password']));
			$device_id = $post['device_id'];
			
			/*  ***** Checking for the already used email and  phone number  ************* */
			
			$this->db->select('COUNT(0) as row_count');
			$this->db->from('mobile_users');
			$this->db->where('email',$email);
			$this->db->or_where('phone',$phone);
			$query1 = $this->db->get();
			$count1 = $query1->row();
			$count = $count1->row_count;
			if($count==0)
			{
				// Condition where emial and phone doesnot exits
				
				$data = array("name"=>$name,
				              "email"=>$email,
							  "phone"=>$phone,
							  "password"=>$password,
							  "device_id"=>$device_id,
							  "profile_image"=>$filename
							 );
							 
				$this->db->insert('mobile_users',$data);
                $user_id = $this->db->insert_id();

				$row['status']=true;
				$row['message']="User Registered Successfully";
				$row['user_id'] = $user_id;
			}
			else
			{
				$row['status']=false;
				$row['message']="Same Email or Phone Already Exists";
				
			}
			
			return $row;
			
			
		}
		
		public function login_userModel($post)
		{
			$login_type = $post['login_type'];
			$device_id = $post['device_id'];
			
			if($login_type==1)
			{
				$email = addslashes($post['email']);
				$password = $post['password'];
				
				$where = array("email"=>$email,
							   "password"=>$password
							   );
				/* ********* Checking the email and password ******** */
				
				$this->db->select('user_id,name,email,phone,password,device_id,profile_image');
				$this->db->from('mobile_users');
				$this->db->where($where);
				$query = $this->db->get();
				$count = $query->num_rows();
				if($count!=0)
				{
					// means username  and password is valid , 
					// updating the devie id here
					$update = array("device_id"=>$device_id);
					$this->db->where('email',$email);
					$this->db->update('mobile_users',$update);
					
					// Now setting the fetched information in formatted array 
					
					$row = $query->row();
					$data = array("user_id"=>$row->user_id,
								  "name"=>$row->name,
								  "email"=>$row->email,
								  "phone"=>$row->phone,
								  "profile_image"=>$row->profile_image,
								 );
								 
					$result['status']= true;
					$result['message']= "Success";
					$result['data']= $data;				
				}
				else
				{
					$result['status']= false;
					$result['message']= "Username Or Password Is Invalid";
				}
			} 
			// end if for normal login
			
			/* ********* Start For Login With facebook ******* */
			
			if($login_type==2)
			{
				/* ************ Start For the Facebook Login *********** */
				$name = addslashes($post['name']);
				$unique_id = $post['unique_id'];
				$profile_image = $post['profile_image'];
				
				/* -- Checking whether the unique id already exists ----- */
				
				$this->db->select('user_id,name,device_id,profile_image');
				$this->db->from('mobile_users');
				$this->db->where('unique_id',$unique_id);
				$query1 = $this->db->get();
				$count_user = $query1->num_rows();
				if($count_user==0)
				{
					/* ------- This means user recore does exist ----*/
					$data1=array("name"=>$name,
					            "device_id"=>$device_id,
								"register_type"=>$login_type,
								"profile_image"=>$profile_image
							   );
							   
					$this->db->insert('mobile_users',$data1);
                    $user_id = $this->db->insert_id();					
				}
				else
				{
					$row1 = $query1->row();
					$user_id = $row1->user_id;
				}
				
				$data = array("user_id"=>$user_id);
				$result['status']= true;
				$result['message']= "Success";
				$result['data']= $data;	
				
			}
			/* ********* End For Login With facebook ******* */
			
			/* ********* Start For Login With Google ******* */
			
			if($login_type==4)
			{
				/* ************ Start For the Facebook Login *********** */
				$name = addslashes($post['name']);
				$unique_id = $post['unique_id'];
				$profile_image = $post['profile_image'];
				
				/* -- Checking whether the unique id already exists ----- */
				
				$this->db->select('user_id,name,device_id,profile_image');
				$this->db->from('mobile_users');
				$this->db->where('unique_id',$unique_id);
				$query1 = $this->db->get();
				$count_user = $query1->num_rows();
				if($count_user==0)
				{
					/* ------- This means user recore does exist ----*/
					$data1=array("name"=>$name,
					            "device_id"=>$device_id,
								"register_type"=>$login_type,
								"profile_image"=>$profile_image
							   );
							   
					$this->db->insert('mobile_users',$data1);
                    $user_id = $this->db->insert_id();					
				}
				else
				{
					$row1 = $query1->row();
					$user_id = $row1->user_id;
				}
				
				$data = array("user_id"=>$user_id);
				$result['status']= true;
				$result['message']= "Success";
				$result['data']= $data;	
				
			}
			
			/* ********* End For Login With Google ******* */
			
			/* ********* Start For Login With Twitter ******* */
			if($login_type==3)
			{
				/* ************ Start For the Facebook Login *********** */
				$name = addslashes($post['name']);
				$unique_id = $post['unique_id'];
				$profile_image = $post['profile_image'];
				
				/* -- Checking whether the unique id already exists ----- */
				
				$this->db->select('user_id,name,device_id,profile_image');
				$this->db->from('mobile_users');
				$this->db->where('unique_id',$unique_id);
				$query1 = $this->db->get();
				$count_user = $query1->num_rows();
				if($count_user==0)
				{
					/* ------- This means user recore does exist ----*/
					$data1=array("name"=>$name,
					            "device_id"=>$device_id,
								"register_type"=>$login_type,
								"profile_image"=>$profile_image
							   );
							   
					$this->db->insert('mobile_users',$data1);
                    $user_id = $this->db->insert_id();					
				}
				else
				{
					$row1 = $query1->row();
					$user_id = $row1->user_id;
				}
				
				$data = array("user_id"=>$user_id);
				$result['status']= true;
				$result['message']= "Success";
				$result['data']= $data;	
				
			}
			
			/* ********* End For Login With Twitter ******* */
			
			return $result;
		}
	
	    public function getRecent3BlogsModel($post)
		{
			$row['status']=true;
			$row['message']="Blogs Fetched Successfully";
			$this->db->select('blog_id,title,created_date,blog_image ');
			$this->db->from('blogs');
			$this->db->limit(3);
			$this->db->order_by('blog_id desc'); 
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$row['data'] = $query->result();
			return $row;
		}
		
		public function saveContactInformationModel($post)
		{
			require_once dirname(__FILE__) . '/../libraries/MCrypt.php';
		    $mcrypt = new MCrypt();
			
			
			$name = addslashes($post['name']);
			$email = $mcrypt->decrypt($post['email']);
			$phone = $mcrypt->decrypt($post['phone']);
			$subject = addslashes($post['subject']);
			$services = addslashes($post['services']);
			$message = addslashes($post['message']);
			
			$data= array("name"=>$name,
			             "email"=>$email,
						 "phone"=>$phone,
						 "services"=>$services,
						 "subject"=>$subject,
						 "message"=>$message,
						);
						
			$this->db->insert('contact_info',$data);

            $insert_id = $this->db->insert_id();
			if($insert_id!="")
			{
				$row['status']=true;
				$row['message']="Contact Info Saved Successfully , We Will Get Back To You Soon";
				$row['data']= array("insert_id"=>$insert_id);
			}
			else
			{
				$row['status']=false;
				$row['Message']= "Contact Info Not Saved Due To Some Error, Please Try Again  !!!";
				$row['data']="";
			}
			
			return $row;
			
		}
	
	    public function saveGsm_usersModel($post)
		{
			$device_id =$post['device_id'];
			$device_type = $post['device_type'];
			$data = array("device_id"=>$device_id,"device_type"=>$device_type);
			
			/* ------  Checking If the device id is already there ----- */
			
			$this->db->select('COUNT(0) as row_count');
			$this->db->from('gsm_users');
			$this->db->where('device_id',$device_id);
			$query_count = $this->db->get();
			$temp = $query_count->row();
			$count = $temp->row_count;
			
			if($count==0)
			{
				$this->db->insert('gsm_users',$data);
				$id = $this->db->insert_id();
				if($id!="")
				{
					$result['status']=true;
					$result['message']="Device Id Saved Successfully";
				}
				else
				{
					$result['status']=false;
					$result['message']="Error In Saving Device Id ";
				}
			}
			else
			{
				$result['status']=false;
				$result['message']="Device Id Already Exists";
			}
			return $result;
		}
		
		public function array_push_assoc($array, $key, $value)
		{
			$array[$key] = $value;
			return $array;
		}
	
	
	}
	
	
	?>