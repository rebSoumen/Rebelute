<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class webservices extends CI_Controller {

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
		//$this->load->library('excel');
		//require_once APPPATH."/libraries/phpToPDF.php";
        //$this->load->library("pagination");		
    }
	
	
	public function getBlogList()
	{
		$blog_type = strtolower($_POST['blog_type']);
		$page_count = (int)$_POST['page_count'];
		$perpage = 10;
		
		//$page_count= 1;
		//$blog_type ="all";
		
		$lower_limit = (($perpage*$page_count) - $perpage);
		
		
		$this->load->model("webservices_model");
		$data = $this->webservices_model->getBlogListModel($blog_type,$lower_limit,$perpage);
		echo json_encode($data);
		
	}
	
	public function getSingleBlogDetail()
	{
		$blog_id = $_POST['blog_id'];
		//$blog_id = 9;
		$this->load->model("webservices_model");
		
		$data = $this->webservices_model->getSingleBlogDetailModel($blog_id);
		
		echo json_encode($data);
	}
	
	public function getAllCategories()
	{
		$this->load->model("webservices_model");
		
		$data = $this->webservices_model->getAllCategoriesModel();
		
		echo json_encode($data);
	}
	
	public function register_user()
	{
	    $this->load->model("webservices_model");
	  
	    /*    Code For Image Upload  */
	    $filename = time().'_'.'user_image.jpg';
        $path = 'uploads/profile_image/' ;
		
		
	    $base=$_POST['profile_image'];
		$binary=base64_decode($base);
		header('Content-Type: bitmap; charset=utf-8');
		$file = fopen($path.$filename, 'wb');
		fwrite($file, $binary);
		fclose($file); 
	  
	    /*   End Code For Image Upload  */
	  
	    $data = $this->webservices_model->register_userModel($_POST,$filename);
	    echo json_encode($data);
	}
	
	public function login_user()
	{
		$this->load->model('webservices_model');
		$data = $this->webservices_model->login_userModel($_POST);
		echo json_encode($data);
	}
	
	public function getRecent3Blogs()
	{
		$this->load->model('webservices_model');
		$data = $this->webservices_model->getRecent3BlogsModel($_POST);
		echo json_encode($data);
	}
	
	public function saveContactInformation()
	{
		$this->load->model('webservices_model');
		$data = $this->webservices_model->saveContactInformationModel($_POST);
		echo json_encode($data);
	}
	
	public function send_notification() {
         
		// API access key from Google API's Console
        define( 'API_ACCESS_KEY', 'AIzaSyCAGDI1acoDShl9NSOzXUtXTr7dQjKkx-k');
		$device_id="es1_3raOkHg:APA91bFm7OcZA2V5ow9SjLM44WPKvm9G50loHsB5kvNT6jshXpNovL9M2nieWhGZP2peFlV9OOjIbfHwFRjmwHJhC6amvMi0ql0hC5NTMF4YkfLLN_7rsToV7-9S1ppgk0AQveI0VuNr";
		$registrationIds = array($device_id);
		// prep the bundle
		$msg = array
		(
			'message' 	=> 'New blog has been added',
			'title'		=> 'Demo of New Google Adwords Redesign Will Be Livestreamed On May 24',
			'type'      => 'Blog',
			'blog_id'   => 24,    
 			'smallIcon'	=> base_url()."uploads/blogs/1462542608_Redesigned-AdWords-Rebelute.jpg"
		);
		$fields = array
		(
			'registration_ids' 	=> $registrationIds,
			'data'			=> $msg
		);
		 
		$headers = array
		(
			'Authorization: key=' . API_ACCESS_KEY,
			'Content-Type: application/json'
		);
		 
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
		echo $result;
    }
	
	public function saveGsm_users()
	{
		$this->load->model('webservices_model');
		$data = $this->webservices_model->saveGsm_usersModel($_POST);
		echo json_encode($data);
	}
	
	
	
	
	
	
}

?>