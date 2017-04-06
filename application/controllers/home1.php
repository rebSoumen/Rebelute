<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct() {
        parent::__construct();
		$this->load->library('excel');
		//require_once APPPATH."/libraries/phpToPDF.php"; 
    }
	
	public function index()
	{
		$this->load->view('main/dashboard');
	}
	
	public function careers()
	{
		$this->load->view('main/career');
	}
	
	public function error404()
	{
		$this->load->view('main_template/header');
		$this->load->view('main/404');
		$this->load->view('main_template/footer');
	}
	
	public function services()
	{
	     $this->load->view('main/services');
		
	}
	
	public function contact()
	{
		$this->load->view('main/contact');
	}

	public function about()
	{
		$this->load->view('main/about_us');
	}
	
	public function login()
	{
		$this->load->view('main/login');
	}
	
	public function register()
	{
		$this->load->view('main_template/header');
		$this->load->view('main/register');
		$this->load->view('main_template/footer');
	}
	
	public function blog()
	{
		$this->load->view('main/blog');
	}
	
	public function saveCandidateDetails()
	{
		//extract($_POST);
           $this->load->library('upload', $config);
		
		/* -------  Code for file Upload -----------*/
		
		$filename = time().'_'.$_FILES['resumefile']['name'];
        /*$path = 'uploads/resumes/' ;		
		
	    move_uploaded_file($_FILES['resumefile']['tmp_name'],$path.$filename); */
		
		$config = array(
		'upload_path' => "./uploads/resumes/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx",
		'overwrite' => TRUE,
		'max_size' => '800000',
		'file_name' => $filename,
		);
		
		
		if($this->upload->do_upload())
		{
		    $data = array('upload_data' => $this->upload->data());
		}
		else{
		    $error=array('error'=>$this->upload->display_errors());
		print_r($error);
		}
		die;
		
		/* -------- End Uploading the  file ------------*/
		
		$this->load->model('home_model');
		$this->home_model->saveCandidateDetailsModel($_POST,$filename);
		
		echo "Thanks For you Interest !! Your Application Has been Submitted Successfully!!";
		echo "<br>";
		echo "We Will Get Back To You Soon .";
		
	}
	
	public function webanalyser()
	{
		//echo ANALYSER_URL
		redirect(ANALYSER_URL);
	}
	
	public function saveContactUs()
	{
           $this->load->library('email');
          
		extract($_POST);
		$this->load->model('home_model');
		$this->home_model->saveContactUsModel($_POST);
		
		$name = $name ;
		$email = $email;
		$phone = $phone;
		$service = $service;
		$subject = addslashes($subject);
		$message = addslashes($message);
		// Mail  Sending Code
		/*
		$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.gmail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'poojapandey1808@gmail.com', // change it to yours
			  'smtp_pass' => '9893325996', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
                  'newline' => '\r\n',
                  'mailtype'=> 'text',
			  'wordwrap' => TRUE
			);
             */
			$message = "
			        <html>
					    <head>
						    <title>Contact Info</title>
						</head>
					    <body>
						    <table border='1px'>
							    <tr>
								    <td>Name</td>
								    <td>$name</td>
								</tr>
                                <tr>
								    <td>Email</td>
								    <td>$email</td>
								</tr>
                                <tr>
								    <td>Service</td>
								    <td>$service</td>
								</tr>
                                <tr>
								    <td>Subject</td>
								    <td>$subject</td>
								</tr>
                                <tr>
								    <td>Message</td>
								    <td>$message</td>
								</tr>								
							</table> 
						</body>
					</html>
			"
			
			;
			
			//$this->load->library('email', $config);
			//$this->email->set_newline("\r\n");
			//$this->email->from('poojapandey1808@gmail.com'); // change it to yours
			/*$this->email->to('soumens@rebelute.com');// change it to yours
			$this->email->subject('Contact Info');
			$this->email->message($message);
			if($this->email->send())
			{
			   echo 'Email Sent Successfully.';
			}
			else
			{
			    show_error($this->email->print_debugger());
			}
		*/
               $mail->Host = "smtp.gmail.com";
              $this->email->from('soumens@rebelute.in');
               $this->email->reply_to('poojapandey1808@gmail.com');
               $this->email->to('soumensaha05@gmail.com');
                $this->email->subject('SUbject Mail');
                 $this->email->message("Your Message");
     		    $this->email->set_mailtype('html');
    	         $this->email->send();  

		echo "Your Information Is Saved";
	}
	
	
	public function project_estimate()
	{
		$this->load->view('template/header');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}
	
	public function payment_checkout()
	{
		extract($_POST);
		//echo "<pre>";print_r($_POST);
		// Fetching the data for  saving the user information
	
		$desc = $_POST['cost_description'];
		$temp = explode(" ",$desc);
		$count = count($temp);
		if($count==26)
		{
			
			$site = $temp[2]." ".$temp[3] ;
			$pages = $temp[10] ;
			
			$additional = $temp[18]." ".$temp[19]." ".$temp[20] ;
		}
		else
		{
			
			$site = $temp[2]." ".$temp[3] ;
			$pages = $temp[10] ;
			$additional ="";
		}
		
		$arr['user'] = array('site'=>$site,
		             'pages'=>$pages,
					 'additional'=>$additional
		            );
		$this->session->set_userdata($arr);	
        //echo "<pre>";print_r($_SESSION);die;
		
		
		$this->load->view('template/header');
		$this->load->view('checkout');
		
	}
	
	public function saveUserData()
	{
		extract($_POST);
		$this->load->model('home_model');
		$data['result'] = $this->home_model->saveUserDataModel($fname,$lname,$email,$address1,$address2,$city,$state,$zip,$phone);
		echo 1;
	}
	
	public function successPayment()
	{
		//echo "<pre>"; print_r($_GET);
		//echo $this->session->userdata('user_id');
		$this->load->model('home_model');
		$data['result'] = $this->home_model->savePaymentDetails($_GET);
		$this->session->unset_userdata('user_id');
		redirect('home');
	}
	
	public function exportToExcel()
	{
		//echo base_url()."third_party/PHPExcel/Classes/PHPExcel.php"; die;
		// Starting the PHPExcel library
		//$this->load->file(APPPATH.'libraries/Excel.php'); //full path to
		
		
		
		$this->load->model('home_model');
		$result['data'] = $this->home_model->exportUsersToExcelModel();
		
	}
	
	
	
	function sendMail()
	{
			$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'poojapandey1808@gmail.com', // change it to yours
			  'smtp_pass' => '9893325996', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

			$message = 'This is  Test Message';
			//$message = $this->load->view('main/login');
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('poojapandey1808@gmail'); // change it to yours
			$this->email->to('soumens@rebelute.com');// change it to yours
			$this->email->subject('Resume from JobsBuddy for your Job posting');
			$this->email->message($message);
			if($this->email->send())
			{
			   echo 'Email sent.';
			}
			else
			{
			    show_error($this->email->print_debugger());
			}

	}
	
	
	
	
	
	
	
}
