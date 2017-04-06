<?php
header("Access-Control-Allow-Origin: *");

defined('BASEPATH') OR exit('No direct script access allowed');

class admins extends CI_Controller{

    function __construct() {
        parent::__construct();
		
        $this->load->library('excel');
		$this->load->model("Admin_Model");
		$this->load->model("Home_Model");
    }
	
	function index()
	{
        $this->load->view('admin/login');	
	}
	
	public function login()
    {
		extract($_POST);
		
		$result['data']=$this->Admin_Model->sub_login($login_email,$login_password);
		
		if($result['data']==true){
			//header("location:".URL.'admins/Dashboard');
			redirect('admins/dashboard');
		}
		else{
			//header("location:".URL.'admins/login_failed');
			$this->load->view('admin/login_failed');
		}
		
    } 
	
	public function dashboard()
	{
		$this->load->view('_admin_template/header');
		$this->load->view('admin/dashboard');
		$this->load->view('_admin_template/footer');
	}
	
	public function logout()
    {
       unset($_SESSION['admin']);
	   redirect('admins');
      
    }
	
	public function add_blog()
	{
		$this->load->model("Admin_Model");
		$result['get_rec'] = $this->Admin_Model->getAllBlogsModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/add_blogs',$result);
		
	}
	
	public function save_new_blog()
	{
		
		/* -------  Code for file Upload -----------*/
		if($_POST['media_option']==0)
		{
			$filename = time().'_'.$_FILES['blog_image']['name'];
			$filename_mobile = time().'_'.$_FILES['blog_image_mobile']['name'];
			$path = 'uploads/blogs/' ;		
			
			move_uploaded_file($_FILES['blog_image']['tmp_name'],$path.$filename); 
			move_uploaded_file($_FILES['blog_image_mobile']['tmp_name'],$path.$filename_mobile); 
			/*
			$config = array(
			'upload_path' => "./uploads/blogs/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => '800000',
			'file_name' => $filename,
			);
			
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$data = array('upload_data' => $this->upload->data());
			}
			else{
				$error=array('error'=>$this->upload->display_errors());
			print_r($error);
			}
			die;
			*/
			/* -------- End Uploading the  file ------------*/ 
		}
		else
		{
			$filename= $_POST['media'];
		}
		$this->load->model("Admin_Model");
		$data=$this->Admin_Model->saveNewBlogModel($_POST,$filename,$filename_mobile);
		//echo "<pre>";print_r($data);die;
		//echo count($data['devices']);die;
		if(count($data['devices_android'])!=0)
		{
			$registrationIds = array();
			foreach($data['devices_android'] as $device)
			{
				$registrationIds[]= $device['device_id'];
			}
			// sending notification to the android devices
			$this->send_notification_android($registrationIds,$filename,$data['blog'],$data['blog_id']);
			
		}
		
		if(count($data['devices_ios'])!=0)
		{
			$registrationIds = array();
			foreach($data['devices_ios'] as $device)
			{
				$registrationIds = $device['device_id'];
				// sending notification to the ios devices
			    $this->send_notification_ios($registrationIds,$filename,$data['blog'],$data['blog_id']);
				
			}
			
			
		}
		
		$url = base_url().'admins/add_blog?msg=added';
	    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		
	}
	
	public function send_notification_android($registrationIds,$filename,$title,$blog_id) {
         
		// API access key from Google API's Console
       
		// prep the bundle
		$url = 'https://fcm.googleapis.com/fcm/send';
	   
		$msg = array
		(
			'message' 	=> 'We have added a new Blog. Please have a look !!!',
			'title'		=> $title,
			'smallIcon' =>  base_url().'uploads/blogs/'.$filename,
			'type'      => 'Blog',
			'blog_id'   => $blog_id
		);
		
		$fields = array
		(
			'registration_ids' 	=> $registrationIds,
			'data'			=> $msg
		);
		 
		 $headers = array(
					'Authorization:key = AIzaSyCCrNJ0ihXa2-iW2MpnPUxsz-lVy8J8s00 ',
					'Content-Type: application/json'
					);
		 
		   $ch = curl_init();
		   curl_setopt($ch, CURLOPT_URL, $url);
		   curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		   curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
		   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		   $result = curl_exec($ch);           
		   if ($result === FALSE) {
			   die('Curl failed: ' . curl_error($ch));
		   }
		   curl_close($ch);
		   //print_r($result);die;
		   return $result;
    }
	
	public function send_notification_ios($registrationIds,$filename,$title,$blog_id) {
	 
	      // Provide the Host Information.

			$tHost = 'ssl://gateway.push.apple.com';

			$tPort = 2195;

			// Provide the Certificate and Key Data.

			$tCert = dirname(__FILE__).'/RebeluteAppPushDevCertificates.pem';

			// Provide the Private Key Passphrase (alternatively you can keep this secrete

			// and enter the key manually on the terminal -> remove relevant line from code).

			// Replace XXXXX with your Passphrase

			$tPassphrase = '1234';

			// Provide the Device Identifier (Ensure that the Identifier does not have spaces in it).

			// Replace this token with the token of the iOS device that is to receive the notification.

			$tToken = $registrationIds;

			// The message that is to appear on the dialog.

			$tAlert = 'We have added a new Blog. Please have a look !!!';

			// The Badge Number for the Application Icon (integer >=0).

			$tBadge = 1;

			// Audible Notification Option.

			$tSound = 'default';

			// The content that is returned by the LiveCode "pushNotificationReceived" message.

			$tPayload = 'We have added a new Blog. Please have a look !!!';

			$timage = base_url().'uploads/blogs/'.$filename;

			// Create the message content that is to be sent to the device.

			$tBody['aps'] = array (

			'alert' => $tAlert,

			'badge' => $tBadge,

			'sound' => $tSound,

			'image' => $timage,

			);

			$tBody ['payload'] = $tPayload;

			// Encode the body to JSON.

			$tBody = json_encode ($tBody);

			// Create the Socket Stream.

			$tContext = stream_context_create ();

			stream_context_set_option ($tContext, 'ssl', 'local_cert', $tCert);

			// Remove this line if you would like to enter the Private Key Passphrase manually.

			stream_context_set_option ($tContext, 'ssl', 'passphrase', $tPassphrase);

			// Open the Connection to the APNS Server.

			$tSocket = stream_socket_client ('ssl://'.$tHost.':'.$tPort, $error, $errstr, 30, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $tContext);

			// Check if we were able to open a socket.

			if (!$tSocket)

			exit ("APNS Connection Failed: $error $errstr" . PHP_EOL);

			// Build the Binary Notification.

			$tMsg = chr (0) . chr (0) . chr (32) . pack ('H*', $tToken) . pack ('n', strlen ($tBody)) . $tBody;

			// Send the Notification to the Server.

			$tResult = fwrite ($tSocket, $tMsg, strlen ($tMsg));
            /*
			if ($tResult)

			echo 'Delivered Message to APNS' . PHP_EOL;

			else

			echo 'Could not Deliver Message to APNS' . PHP_EOL;
            */
			// Close the Connection to the Server.

			fclose ($tSocket);
			return true;

	}

    public function edit_blog_view()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->edit_blog_viewModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/edit_blog',$result);
		
	}

    public function save_edit_blog()
	{
		//echo "<pre>"; print_r($_FILES);die;
		if($_POST['media_option']==0 && $_FILES['blog_image']['size']!=0)
		{
			//echo "<pre>"; print_r($_FILES);die;
			/* -------  Code for file Upload -----------*/
		
			$filename = time().'_'.$_FILES['blog_image']['name'];
			$path = 'uploads/blogs/' ;		
			$filename_mobile ="";
			move_uploaded_file($_FILES['blog_image']['tmp_name'],$path.$filename); 
			/*
			$config = array(
			'upload_path' => "./uploads/blogs/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => '800000',
			'file_name' => $filename,
			);
			
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$data = array('upload_data' => $this->upload->data());
			}
			else{
				$error=array('error'=>$this->upload->display_errors());
			print_r($error);
			}
			die;
			*/
			/* -------- End Uploading the  file ------------*/ 
		
		}
		if($_POST['media_option']==0 && $_FILES['blog_image_mobile']['size']!=0)
		{
			
			/* -------  Code for file Upload -----------*/
		
			$filename_mobile = time().'_'.$_FILES['blog_image_mobile']['name'];
			$path = 'uploads/blogs/' ;		
			$filename ="";
			move_uploaded_file($_FILES['blog_image_mobile']['tmp_name'],$path.$filename_mobile); 
			/*
			$config = array(
			'upload_path' => "./uploads/blogs/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => '800000',
			'file_name' => $filename,
			);
			
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$data = array('upload_data' => $this->upload->data());
			}
			else{
				$error=array('error'=>$this->upload->display_errors());
			print_r($error);
			}
			die;
			*/
			/* -------- End Uploading the  file ------------*/ 
		
		}
		if($_POST['media_option']==0 && $_FILES['blog_image_mobile']['size']==0 && $_FILES['blog_image']['size']==0)
		{
			if($_POST['media_option']==1)
			{
			    $filename=$_POST['media'];
			}
			else
			{
				$filename="";
				$filename_mobile="";
			}
		}
		
		$this->load->model("Admin_Model");
		$data = $this->Admin_Model->save_edit_blogModel($_POST,$filename,$filename_mobile);
		//echo "fdfd"; die;
		$url = base_url().'admins/add_blog?msg=updated';
	    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	}

    public function subscribers()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getAllSubscribersModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/subscribers',$result);
	}

    public function exportSubscribers()
	{
		$this->load->model('Admin_Model');
		$result['data'] = $this->Admin_Model->exportSubscribersToExcelModel();
	}

    public function vacancies()
	{
		$this->load->model("Admin_Model");
		$result['get_rec'] = $this->Admin_Model->getAllrecentOpeningsModel();
		
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/recent_openings',$result);
	}

    public function save_currentOpenings()
	{
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->save_currentOpeningsModel($_POST);
		
		$url = base_url().'admins/vacancies?msg=added';
	    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	}

    public function edit_currentOpening_view()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->getDataForEditModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/edit_recent_openings',$result);
	}


    public function save_edit_currentOpenings()
	{
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->save_edit_currentOpeningsModel($_POST);
		
		$url = base_url().'admins/vacancies?msg=updated';
	    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		
	}

    public function delete_currentOpening()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->delete_currentOpeningModel($id);
		
		$url = base_url().'admins/vacancies?msg=deleted';
	    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	}

    public function services_info()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getAllServiceSubscribersModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/services_info',$result);
	}

    public function exportServiceSubscribers()
	{
		$this->load->model('Admin_Model');
		$result['data'] = $this->Admin_Model->exportServiceSubscribersToExcelModel();
	}

    public function view_service_message()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->view_service_messageModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/view_service_message',$result);
	}

    public function design_service_list()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->design_service_listModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/design_services_list',$result);
	}

    public function exportDesignServiceSubscribers()
	{
		$this->load->model('Admin_Model');
		$result['data'] = $this->Admin_Model->exportDesignServiceSubscribersToExcelModel();
	}
    
    public function view_design_service_message()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->view_design_service_messageModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/view_design_message',$result);
	}

    public function resource_pricing()
	{
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->getresourcePricingModel();
		
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/resource_pricing',$result);
	}

    public function saveResource_pricing()
	{
		$this->load->model("Admin_Model");
		$result= $this->Admin_Model->saveResource_pricingModel($_POST);
		if($result=='updated')
		    redirect('admins/resource_pricing?msg=updated');
		else
			redirect('admins/resource_pricing?msg=success');
		
	}

    public function manage_coupons()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getAllCouponsModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/coupons',$result);
	}

    public function save_new_coupon()
	{
		$this->load->model("Admin_Model");
		$result= $this->Admin_Model->save_newCouponsModel($_POST);
		redirect('admins/manage_coupons?msg=added');
	}

    public function delete_coupon()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result=$this->Admin_Model->delete_couponModel($id);
		redirect('admins/manage_coupons?msg=deleted'); 
	}

    public function monthly_estimate()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getmonthlyEstimateModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/monthly_estimate',$result);
	}
	
	public function view_monthly_estimate()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->view_monthly_estimateModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/monthly_estimate_detail',$result);
	}
	
	public function resource_pricing_hourly()
	{
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->getresourceHourlyPricingModel();
		
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/resource_pricing_hourly',$result);
	}
	
	public function saveResource_pricinghourly()
	{
		$this->load->model("Admin_Model");
		$result= $this->Admin_Model->saveResourceHourly_pricingModel($_POST);
		if($result=='updated')
		    redirect('admins/resource_pricing_hourly?msg=updated');
		else
			redirect('admins/resource_pricing_hourly?msg=success');
		
	}
	
	public function hourly_estimate()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->gethourlyEstimateModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/hourly_estimate',$result);
	}
	
	public function view_hourly_estimate()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->view_hourly_estimateModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/hourly_estimate_detail',$result);
	}
	
	public function view_candidates_application()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getApplicationForCurrentOpenings();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/current_openings',$result);
	}
	
	public function project_estimate()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getProjectEstimateModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/project_estimate',$result);
	}
	
	public function project_estimateDetail()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->getProjectEstimateDetailModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/project_estimateDetail',$result);
	}
	
	public function delete_subscribe()
	{
		$id =$this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->deleteSubscribeModel($id);
		redirect('admins/subscribers?msg=deleted'); 
		
	}
	
	public function delete_serices_info()
	{
		$id =$this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->delete_serices_infoModel($id);
		redirect('admins/services_info?msg=deleted'); 
	}
	
	public function delete_design_service()
	{
		$id =$this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->delete_design_serviceModel($id);
		redirect('admins/design_service_list?msg=deleted'); 
	}
	
	public function contact_info()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getAllContactinfoModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/contact_info',$result);
	}
	
	public function view_contact_detail()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data'] = $this->Admin_Model->view_contact_detailModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/view_service_message',$result);
	}
	
	public function view_contact_info()
	{
		$id =$this->uri->segment(3);
		$this->load->model("Admin_Model");
		$result['data']= $this->Admin_Model->view_contact_infoModel($id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/view_contact_detail',$result);
	}
	
	public function delete_contact_info()
	{
		$contact_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->delete_contact_infoModel($contact_id);
		redirect('admins/contact_info?msg=deleted');
	}	
	
	public function exportContactInfoToExcel()
	{
		$this->load->model('Admin_Model');
		$result['data'] = $this->Admin_Model->exportContactInfoToExcelModel();
	}
	
	public function show_all_page()
	{
		$this->load->model("Admin_Model");
		$result['get_rec']= $this->Admin_Model->getAllpagesModel();
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/add_page',$result);
	}
	
	public function save_new_page()
	{
		$this->load->model("Admin_Model");
		$result = $this->Admin_Model->save_new_pageModel($_POST);
		redirect('admins/show_all_page?msg=added'); 
	}
	
	public function edit_page_show()
	{
		$page_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$data['get_rec']=$this->Admin_Model->edit_show_pageModel($page_id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/edit_page',$data);
	}
	
	public function edit_page_save()
	{
		$this->load->model('Admin_Model');
		$this->Admin_Model->edit_page_saveModel($_POST);
		redirect('admins/show_all_page?msg=updated');
	}
	
	
	public function view_page_leads()
	{
		$page_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$data['get_rec']=$this->Admin_Model->view_page_leadsModel($page_id);
		$data['page_id'] = $page_id;
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/view_leads',$data);
	}
	
	public function export_page_leads()
	{
		$page_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$result['data'] = $this->Admin_Model->export_page_leadsToExcelModel($page_id);
	}
	
	public function viewMonths()
	{
		$this->load->model('Admin_Model');
		$data['get_rec']=$this->Admin_Model->getMonthsList();
		$this->load->view('_admin_template/header');
		$this->load->view('admin/add_month',$data);
	}
	
	public function addNewMonth()
	{
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->addNewMonthModel($_POST);
		if($data==1)
		{
			redirect('admins/viewMonths?msg=added');
		}
		else
		{
			redirect('admins/viewMonths?msg=exists');
		}
	}
	
	public function viewNews()
	{
		$this->load->model('Admin_Model');
		$data['get_rec']=$this->Admin_Model->getnewsList();
		$data['month_list']=$this->Admin_Model->getMonthsList();
		$this->load->view('_admin_template/header');
		$this->load->view('admin/add_news',$data);
	}
	
	public function add_news()
	{
		
		 $filename = time().$_FILES['news_image']['name'];
		
		 // first uploading the video on the server
		 $config['allowed_types']  = '*';
		 $config['upload_path'] = './uploads/news/';
		 $config['file_name']  = $filename;
		 $this->load->library('upload', $config);
		 $this->upload->do_upload('news_image');
		
		 //End Code for Video Upload
		 
		 
		 $this->load->model('Admin_Model');
		 $data = $this->Admin_Model->add_newsModel($_POST,$filename);
		
		redirect('admins/viewNews?msg=added');
		
	}
	
	public function edit_news_view()
	{
		$news_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$data['month_list']=$this->Admin_Model->getMonthsList();
		$data['data'] = $this->Admin_Model->getNewsDetail($news_id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/edit_news',$data);
		
		
	}
	
	public function save_edit_news()
	{
		
		if(isset($_FILES['news_image']) && $_FILES['news_image']['name']!="")
		{
		     $filename = time().$_FILES['news_image']['name'];
		
			 // first uploading the video on the server
			 $config['allowed_types']  = '*';
			 $config['upload_path'] = './uploads/news/';
			 $config['file_name']  = $filename;
			 $this->load->library('upload', $config);
			 $this->upload->do_upload('news_image');
			
			 //End Code for Video Upload

             // Now deleting the old image
             $old_image = $_POST['old_image'];
             @unlink('./uploads/news/'.$old_image);			 
		}
		else
		{
			$filename = $_POST['old_image'];
		}
		
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->saveEditNewsModel($_POST,$filename);
		
		redirect('admins/viewNews?msg=updated');
		
		
	}
	
	
	public function delete_news()
	{
		$news_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->deleteNewsModel($news_id);
		redirect('admins/viewNews?msg=deleted');
	}
	
	public function urlList()
	{
		$this->load->model('Admin_Model');
		$data['get_rec']=$this->Admin_Model->geturlList();
		$this->load->view('_admin_template/header');
		$this->load->view('admin/add_url',$data);
	}
	
	public function addNewUrl()
	{
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->addNewUrlModel($_POST);
		if($data==1)
		{
			redirect('admins/urlList?msg=added');
		}
		else
		{
			redirect('admins/urlList?msg=exists');
		}
	}
	
	public function edit_url()
	{
		$url_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$data['data'] = $this->Admin_Model->getUrldetail($url_id);
		
		$this->load->view('_admin_template/header');
		$this->load->view('admin/edit_url',$data);
	}
	
	public function save_edit_url()
	{
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->saveEditUrlModel($_POST);
		if($data==1)
		{
		   redirect('admins/urlList?msg=updated');
		}
		else
		{
			redirect('admins/urlList?msg=exists');
		}
	}
	
	public function delete_url()
	{
		$url_id = $this->uri->segment(3);
		$this->load->model('Admin_Model');
		$this->Admin_Model->delete_urlModel($url_id);
		redirect('admins/urlList?msg=deleted');
	}
	
	public function getBloglistForUrl()
	{
		$url = $this->input->post('url');
		$format = $this->input->post('format');
		$this->load->model('Home_Model');
		$blog_results = $this->Home_Model->getBloglistForUrlModel($url);
		
		?>
		
		<div>
		   <?php  
		   
		        $this->load->view('main_template/header_for_external');
				
		    ?>
			
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div id="blog-image" class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid clearfix">
					
                        <?php foreach($blog_results as $blogs){ 
						
						    if($blogs->media_type==0)
							{
								$title = str_replace(" ","-",$blogs->title);
						?> 
						
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" alt=""></a>
							</div>
							<div class="entry-title testheight">
								<h2><a href="javascript:;" onclick="showBlogDetail('<?php echo $title;?>')"><?php echo $blogs->title;?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><img src="<?php echo base_url();?>assets/main_site/images/calendar.png"/> <?php echo date('d F Y',strtotime($blogs->blog_date));?></li>
								<!--li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li-->
							</ul>
							<div class="entry-content testheight">
								<p><?php echo $blogs->short_desc;?></p>
								<a href="javascript:'" onclick="showBlogDetail('<?php echo $title;?>')" class="button button-rounded button-reveal button-small button-border btntransparent1 tright" style="margin-top:20px !important"><i class="icon-arrow-right1"></i>
		                        <span style="margin-top:0px !important;">Read more </span></a>
							</div>
							<style>
							   .icon-arrow-right1::before {
									content: url('<?php echo base_url();?>assets/main_site/images/arrow.png');
									position: relative;
									top: 3px;
								}
							</style>
						</div>
                         
						
                        <?php }
						      else
							  {
						
						?>
						    <div class="entry clearfix">
							<div class="entry-image">
								<?php echo $blogs->blog_image;?>
							</div>
							<div class="entry-title testheight">
								<h2><a href="blog-single-full.html"><?php echo $blogs->title;?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i><?php echo date('d F Y',strtotime($blogs->blog_date));?></li>
								<!--li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a></li>
								<li><a href="#"><i class="icon-film"></i></a></li-->
							</ul>
							<div class="entry-content testheight">
								<p><?php echo $blogs->short_desc;?></p>
								<!--a href="<?php //echo base_url();?>blog/<?php echo $title;?>"class="more-link">Read More</a-->
							    <a href="<?php echo base_url();?>blog/<?php echo $title;?>" class="button button-rounded button-reveal button-small button-border btntransparent1 tright" style="margin-top:20px !important"><i class="icon-arrow-right"></i>
		                        <span style="margin-top:0px !important;">Read more </span></a>
							
							</div>
						</div>

						

						
						
							  <?php } // End Else
							  
						} // End For each
						?>
						

						

					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					
					

				</div>

			</div>

		</section><!-- #content end -->
		
		</div>
		
	<?php	
		
	}
	
	public function getSingleBlogDetail()
	{
		$blog_title = $this->input->post('title');
		
		$this->load->model('Home_Model');
		$blogs = $this->Home_Model->getsingleBlogDataModel_ajax($blog_title);
		
		?>
		<div>
		   <?php  
		   
		        $this->load->view('main_template/header_for_external');
				
		    ?>
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php echo $blogs->title;?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date('d F Y', strtotime($blogs->blog_date));?></li>
									<li><i class="icon-user"></i> <?php echo $blogs->posted_by;?></li>
									<li><i class="camera-retro"></i> <?php echo $blogs->category;?></li>
									
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<img src="<?php echo base_url();?>uploads/blogs/<?php echo $blogs->blog_image;?>" alt="<?php echo $blogs->image_alt_text;?>">
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">
                                    <?php echo html_entity_decode($blogs->description);?>

								</div>
							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
							
							

							
						</div>
						
						<div class="center">
							<button id="load_more_button" onclick="getBloglist()" class="addMore button button-3d button-dark button-large button-rounded"><img src="<?php echo base_url();?>assets/main_site/images/preloader-dark.gif" class="animation_image" style="display: none;"> Back</button> <!-- load button -->
						</div>

					</div><!-- .postcontent end -->

					

				</div>

			</div>

		</section><!-- #content end -->
		
		</div>
		
	<?php	
		
	}

	
	
	

	
	
}	
?>