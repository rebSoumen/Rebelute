<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->library("pagination");
        // loading captcha helper
        $this->load->helper('captcha');	
        $this->load->model("Home_Model");	
    }
	
	public function index()
	{
	       
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		
		$footer['blog'] = $this->Home_Model->get3RecentblogsModel();
		
		//$this->load->view('main_template/header');
		$this->load->view('main/dashboard',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function careers()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		
		/* --------- Code to get the current opnings  ------ */
		$result['openings']= $this->home_model->getAllCurrentOpeningsModel();
		$result['positions']= $this->home_model->getAllPositionsModel();
		
		$this->load->view('main/career',$result);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function error404()
	{
		$this->load->view('main/404');
	}
	
	public function services()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/services',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function contact()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		
		$this->load->view('main/contact');
		$this->load->view('main_template/footer',$footer);
	}

	public function about()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/about_us',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function termsAndconditions()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/terms_conditions',$footer);
		$this->load->view('main_template/footer',$footer);
		
	}
	
	public function privacyPolicy()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/privacy_policy',$footer);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function news2()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/news_static',$footer);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function news1()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/news1',$footer);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function sitemap()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/sitemap',$footer);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function service1()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/service1',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function product_engineering()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/product_engineering',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function web_development()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/web_development',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function software_development()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/software_development',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function software_maintainence()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/software_maintainence',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function software_re_engineering()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/software_re_engineering',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function web_design()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/web_design',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function mobile_design()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/mobile_design',$data);
		$this->load->view('main_template/footer',$footer);
	}
	public function theming_integration()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/ui_theme');
		$this->load->view('main_template/footer',$footer);
	}
	
	public function design_services()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		$this->load->view('main/design_services');
		$this->load->view('main_template/footer',$footer);
	}
	
	public function mobile_development()
	{
		redirect('mobile-app-development');
	}
	
	public function mobile_app_development()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	  $this->load->model("home_model");
	  $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	  $this->load->view('main/mobile_development',$data);
	  $this->load->view('main_template/footer',$footer);
	}
	 
    public function web_development1()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	  $this->load->model("home_model");
	  $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	  $this->load->view('main/web_development1',$data);
	  $this->load->view('main_template/footer',$footer);
	}
	
	public function digital_marketing()
	{
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	  $this->load->model("home_model");
	  $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	  $this->load->view('main/digital_marketing',$data);
	  $this->load->view('main_template/footer',$footer);
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
	
    public function pricing_plans()
	{
		/* --- ------ Code Added for  Captcha Generation  ---- */
		// numeric random number for captcha
		$random_number = $this->random();
		// setting up captcha config
		$vals = array(
			 'word' => $random_number,
			 'img_path' => './captcha/',
			 'img_url' => base_url().'captcha/',
			 'img_width' => 140,
			 'img_height' => 32,
			 'expiration' => 7200
			);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		
		/* --- ------ Code Added for  Captcha Generation  ---- */
		
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/pricing',$data);
	    $this->load->view('main_template/footer',$footer);
	}
	
	public function pricing_category()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/pricing_category');
	    $this->load->view('main_template/footer',$footer);
	}

        public function check_N_Apply_coupon()
	{
		$this->load->model("home_model");
		$coupon = $this->home_model->check_N_Apply_couponModel($_POST);
		echo $coupon;
	}

        public function sms_marketing()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/SMS_marketing');
	    $this->load->view('main_template/footer',$footer);
	}

	public function online_reputation_Management()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/online_reputation_Management');
	    $this->load->view('main_template/footer',$footer);
	}
	
	public function social_media_optimisation()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/social_media_optimisation');
	    $this->load->view('main_template/footer',$footer);
	}
	
	
	public function Search_engine_optimization()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/Search_engine_optimization');
	    $this->load->view('main_template/footer',$footer);
	}

        public function thankyou()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/thankyou');
	    $this->load->view('main_template/footer',$footer);
	}

        public function email_marketing()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/email_marketing');
	    $this->load->view('main_template/footer',$footer);
	}
	
	public function pay_per_click()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/pay_per_click');
	    $this->load->view('main_template/footer',$footer);
	}

        public function blog_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/blog_development');
		 $this->load->view('main_template/footer',$footer);
	}
 
	public function e_commerce_solution()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/e_commerce_solution');
		 $this->load->view('main_template/footer',$footer);
	}
	 
	public function enterprise_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/enterprise_development');
		 $this->load->view('main_template/footer',$footer);
	}
	 
	public function Custom_web_application_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/Custom_web_application_development');
		 $this->load->view('main_template/footer',$footer);
	}
	 
	public function content_management_system()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/content_management_system');
		 $this->load->view('main_template/footer',$footer);
	}
	 
	public function digital_strategy_consulting()
	{
	    /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/digital_strategy_consulting');
		 $this->load->view('main_template/footer',$footer);
	}
	
	    public function phonegap_app_development()
    {
       /* --- ------ Code Added for  showing recent 3 blogs ---- */
   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/phonegap_app_development');
		 $this->load->view('main_template/footer',$footer);
    }
 
    public function android_app_development()
    {
        /* --- ------ Code Added for  showing recent 3 blogs ---- */
   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/android_app_development');
		 $this->load->view('main_template/footer',$footer);
    }
 
	public function blackberry_app_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/blackberry_app_development');
		 $this->load->view('main_template/footer',$footer);
	}
 
	public function iPad_app_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/iPad_app_development');
		 $this->load->view('main_template/footer',$footer);
	}
 
	public function iPhone_app_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/iPhone_app_development');
		 $this->load->view('main_template/footer',$footer);
	}
	 
	public function windows8_app_development()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/windows8_app_development');
		 $this->load->view('main_template/footer',$footer);
	}
	
	
	public function industries()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/industries');
		 $this->load->view('main_template/footer',$footer);
	}
	
		public function real_estate_vertical()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/real_estate_vertical');
		 $this->load->view('main_template/footer',$footer);
	}
	
		public function digital_marketing_indusries()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/digital_marketing_indusries');
		 $this->load->view('main_template/footer',$footer);
	}
	
	
		public function technologies()
	{
	  /* --- ------ Code Added for  showing recent 3 blogs ---- */
	   
		 $this->load->model("home_model");
		 $footer['blog'] = $this->home_model->get3RecentblogsModel();
	   
		 $this->load->view('main/technologies');
		 $this->load->view('main_template/footer',$footer);
	}
	
	
	public function blog()
	{
		 $this->load->library('pagination');
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		/* ------ Code For making Pagination  ---*/
		
		$config = array();
        $config["base_url"] = base_url() . "home/blog";
        $config["total_rows"] = $this->home_model->record_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
		//$choice = $config["total_rows"] / $config["per_page"];
		//$config["num_links"] = round($choice);
		
		
		$config['full_tag_open'] = '<div class="pagination"><ul class="pagination nobottommargin">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '« First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last »';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next →';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '← Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['blog_results'] = $this->home_model->fetch_blogs($config["per_page"], $page);
		
		
        $data['links'] = $this->pagination->create_links();//var_dump($data["links"]);die;

		
		$this->load->view('main/blog',$data);
		$this->load->view('main_template/footer',$footer);
	}
	
	public function saveCandidateDetails()
	{
		extract($_POST);
		
		if($fname=="" || $lname=="" || $email=="" || $phone=="" || $age=="" || $city=="" || $position=="" || $notice_period=="" || $experience=="" || $message=="")
		{
			echo "Your Application Cannot Be Submitted!! As You acted Too Smart";
			echo "<br>";
			echo "Try Being Less Smarter Next Time .";
			die;
		}
		
		/* -------  Code for file Upload -----------*/
		
		$filename = time().'_'.$_FILES['resumefile']['name'];
        $path = 'uploads/resumes/' ;		
		
	    move_uploaded_file($_FILES['resumefile']['tmp_name'],$path.$filename); 
		/*
		$config = array(
		'upload_path' => "./uploads/resumes/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx",
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
		
		*/
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
			  'smtp_host' => 'localhost',
			  'smtp_port' => 25,
			  'smtp_user' => '', // change it to yours
			  'smtp_pass' => '', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

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
			//$message = $this->load->view('main/login');
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('soumens@rebelute.com'); // change it to yours
			$this->email->to('admin@rebelute.com');// change it to yours
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
		echo "Great !!! Your Contact Information Is Saved";
		echo "</br>";
		echo "We Will Get Back To You Soon";
	}
	
	public function save_Subscribe()
	{
		$this->load->model("home_model");
		$data = $this->home_model->save_Subscribe($_POST);
		if($data==1)
		    echo "Thanks !!! .. You have subscribed successfully";
		else
			echo "Hey !!! You have already subscribed .";
	}
	
	public function save_serviceInfo()
	{
		//echo "<pre>"; print_r($_POST);die;
		$url = $_SERVER['HTTP_REFERER'];
        if(!isset($_POST['captcha']))
		{
			$temp = explode("/",$url);  
			$params = count($temp);
			
			if($params==5)
			{
				
				$is_home = $temp[3];
				array_pop($temp); // with success ,  removing the success uri segment
				$url = implode('/',$temp);
			}
			else
			{
				
				$is_home = $temp[3];
				$url = implode('/',$temp);
			}
			redirect($url.'/failure');
		}
		else
		{
			/* ---- Treating the url for the number of uri segments to avaoid 404 -- */
			$temp = explode("/",$url);  
			$params = count($temp); 
			if($params==5)
			{
				
				$is_home = $temp[3];
				array_pop($temp); // with success ,  removing the success uri segment
				$url = implode('/',$temp);
			}
			else
			{
				$is_home = $temp[3];
				$url = implode('/',$temp);
			}
			//echo $url;die;
			$this->load->model("home_model");
			$data = $this->home_model->save_serviceInfoModel($_POST);
			if($is_home=="")
			  redirect(base_url());
			else
			 redirect($url.'/success');
		}		 
	}
	
	public function save_serviceInfoHomePage()
	{
		
		$url = $_SERVER['HTTP_REFERER'];
	    if(!isset($_POST['captcha']))
		{
			redirect($url.'?msg=failure');
		}
		else
		{
			// checking whether success msg is there
			
			$url_array = explode("?",$url);
			$count =  count($url_array);
			if($count==2)
			{
				$url = $url_array[0];
			}
			
			$this->load->model("home_model");
			$data = $this->home_model->save_serviceInfoModel($_POST);
			
			redirect($url.'?msg=success');
		}		
	}
	
	public function save_designService_requests()
	{
		$filename = time().'_'.$_FILES['userfile']['name'];
        $path = 'uploads/design_service/' ;		
		
	    move_uploaded_file($_FILES['userfile']['tmp_name'],$path.$filename); 
		/*
		$config = array(
		'upload_path' => "./uploads/design_service/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx",
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
		//die;
		*/
		
		/* -------- End Uploading the  file ------------*/
		
		
		$url = $_SERVER['HTTP_REFERER'];
        
		/* ---- Treating the url for the number of uri segments to avaoid 404 -- */
		$temp = explode("/",$url);
        $params = count($temp);
        if($params==5)
 		{
			$url = $url;// When , without success
		}
		else
		{
			array_pop($temp); // with success ,  removing the success uri segment
			$url = implode('/',$temp);
		}
		
		
		
		
		$this->load->model('home_model');
		$this->home_model->save_designService_requestsModel($_POST,$filename);
		redirect($url.'/success');
		
	}
	
	
	
	/* -------------------------  Code For Cost Calculator   ----------------- */
	
	public function project_estimate()
	{
		/* ----  Fetching the data for the recent blogs -----*/
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		$this->load->view('main_template/header_estimate');
		
		$this->load->view('template/header');
		$this->load->view('cost_calculator/dashboard');
		$this->load->view('template/footer');
		
		$this->load->view('main_template/footer',$footer);
		
		
		
	}
	
	public function payment_checkout()
	{
		extract($_POST);
		//echo "<pre>";print_r($_POST);
		// Fetching the data for  saving the user information
	
		$seo_array = array();
		$extra_features_array= array();
		
		if($_POST['seo1']!='')
		{
			$seo_array[]= $_POST['seo1'];
		}
		if($_POST['seo2']!='')
		{
			$seo_array[]= $_POST['seo2'];
		}
		if($_POST['seo3']!='')
		{
			$seo_array[]= $_POST['seo3'];
		}
		
		
		if($_POST['extra_features1']!='')
		{
			$extra_features_array[]= $_POST['extra_features1'];
		}
		if($_POST['extra_features2']!='')
		{
			$extra_features_array[]= $_POST['extra_features2'];
		}
		if($_POST['extra_features3']!='')
		{
			$extra_features_array[]= $_POST['extra_features3'];
		}
		if($_POST['extra_features3']!='')
		{
			$extra_features_array[]= $_POST['extra_features4'];
		}
		
		
		
		$desc = $_POST['cost_description'];
		$standard_site = $_POST['standard_site'];
		$ecommerce_site = $_POST['ecommerce_site'];
		$pages = $_POST['pages'];
		$seo = implode(',',$seo_array);
		$mobile_design = $_POST['mobile_design'];
		$hours = $_POST['hours'];
		$extra_features = implode(',',$extra_features_array);
		
		
		$arr['user'] = array('standard_site'=>$standard_site,
				     'ecommerce'=>$ecommerce_site,
				     'pages'=>$pages,
				     'seo'=>$seo,
				     'hours'=>$hours,
				     'mobile_design'=>$mobile_design,
				     'extra_features'=>$extra_features
		            );
		$this->session->set_userdata($arr);
	
                //echo "<pre>";print_r($_SESSION);die;
		
		/* ----  Fetching the data for the recent blogs -----*/
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		$this->load->view('main_template/header_estimate');
		
		$this->load->view('template/header');
		$this->load->view('cost_calculator/checkout');
		
		$this->load->view('main_template/footer',$footer);
		
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
		redirect('home/thankyou');
	}
	
	public function exportToExcel()
	{
		//echo base_url()."third_party/PHPExcel/Classes/PHPExcel.php"; die;
		// Starting the PHPExcel library
		//$this->load->file(APPPATH.'libraries/Excel.php'); //full path to
		
		
		
		$this->load->model('home_model');
		$result['data'] = $this->home_model->exportUsersToExcelModel();
		
	}
	
	public function project_estimate1()
	{
		/* ----  Fetching the data for the recent blogs -----*/
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		/* ------ Getting the  hourly cost of the resources--------- */
		$this->load->model("admin_model");
		$result['data']= $this->admin_model->getresourcePricingModel();
		
		$this->load->view('main_template/header_estimate');
		
		$this->load->view('template/header');
		$this->load->view('cost_calculator/monthly_calculator',$result);
		$this->load->view('template/footer');
		
		$this->load->view('main_template/footer',$footer);
		
		
		
	}
	
	public function saveMonthlyCalculator()
	{
		extract($_POST);
		
		
		/* ----  Fetching the data for the recent blogs -----*/
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		$this->load->view('main_template/header_estimate');
		
		/* ------ Getting the  hourly cost of the resources--------- */
		$this->load->model("admin_model");
		$result['data']= $this->admin_model->getresourcePricingModel();
		
		$this->load->view('template/header');
		$this->load->view('cost_calculator/monthly_checkout',$result);
		
		$this->load->view('main_template/footer',$footer);
	}
	
	public function saveUserDataMonthly()
	{
		extract($_POST);
		$this->load->model('home_model');
		$data['result'] = $this->home_model->saveUserDataModelMonthly($fname,$lname,$email,$address1,$address2,$city,$state,$zip,$phone);
		echo 1;
	}
	
	
	public function successPaymentMonthly()
	{
		$this->load->model('home_model');
		$data['result'] = $this->home_model->savePaymentDetailsMonthly($_GET);
		$this->session->unset_userdata('user_id');
		redirect('home/thankyou');
	}
	
	public function project_estimateHourly()
	{
		/* ----  Fetching the data for the recent blogs -----*/
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		
		/* ------ Getting the  hourly cost of the resources--------- */
		$this->load->model("admin_model");
		$result['data']= $this->admin_model->getresourceHourlyPricingModel();
		
		$this->load->view('main_template/header_estimate');
		
		
		$this->load->view('template/header');
		$this->load->view('cost_calculator/hourly_calculator',$result);
		$this->load->view('template/footer');
		
		$this->load->view('main_template/footer',$footer);
		
	}
	
	public function saveHourlyCalculator()
	{
		extract($_POST);
		
		
		/* ----  Fetching the data for the recent blogs -----*/
		
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		$this->load->view('main_template/header_estimate');
		
		/* ------ Getting the  hourly cost of the resources--------- */
		$this->load->model("admin_model");
		$result['data']= $this->admin_model->getresourceHourlyPricingModel();
		
		$this->load->view('template/header');
		$this->load->view('cost_calculator/hourly_checkout',$result);
		
		$this->load->view('main_template/footer',$footer);
	}
	
	public function saveUserDataHourly()
	{
		extract($_POST);
		$this->load->model('home_model');
		$data['result'] = $this->home_model->saveUserDataModelHourly($fname,$lname,$email,$address1,$address2,$city,$state,$zip,$phone);
		echo 1;
	}
	
	public function successPaymentHourly()
	{
		$this->load->model('home_model');
		$data['result'] = $this->home_model->savePaymentDetailsHourly($_GET);
		$this->session->unset_userdata('user_id');
		redirect('home/thankyou');
	}
	
	public function payment()
	 {
		$this->load->view('landing_page/response_ccavenue/index');
	 }
	
	public function thankyou_landing()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
	  
	    $this->load->model("home_model");
	    $footer['blog'] = $this->home_model->get3RecentblogsModel();
	  
	    $this->load->view('main/thankyou_landing');
	    $this->load->view('main_template/footer',$footer);
	}
	
	
	public function news()
	{
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		//echo "herer";die;
		$this->load->model("home_model");
		$footer['blog'] = $this->home_model->get3RecentblogsModel();
		//$main['new'] = $this->home_model->getAllNews();
		
		$this->load->view('main/news');
		$this->load->view('main_template/footer',$footer);
	}
	
	public function loadNews()
	{
		$item_per_page = 5;
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		$prev_month = $_POST["prev_month"];
		$position = (($page_number-1) * $item_per_page);
				
		$this->load->model("home_model");
		$new = $this->home_model->loadMoreNewsModel($item_per_page,$position);
		
		$i=1;
	   foreach($new as $key => $news){
		 
		 $image = $news['news_image'];
		 $image = str_replace(" ","_",$image);		
		 $image = str_replace("#","",$image);		
		 $new_url = ( '0' == $news['url_type'] ) ? base_url()."news/". $news['url'] : $news['url'];					 
			?>
			<?php 
			if(true == isset( $new[$key-1]) && $new[$key-1]['month_id'] != $news['month_id'] ){				
				?>
			<div class="entry load entry-date-section notopmargin"><span><font color="#ed1c24"> <?php echo $news['month_name']." ".$news['year_name'];?> </font></span></div>
			<?php 
			} else {
				if( false == isset( $new[$key-1]) && $prev_month != $news['month_id']  ) {
			?>
			<div class="entry load entry-date-section notopmargin"><span><font color="#ed1c24"><?php echo $news['month_name']." ".$news['year_name'];?></font></span></div>
			<?php 
				}
			}
			?>
			<div class="entry clearfix">
				<div class="entry-timeline">
					<div class="timeline-divider"></div>
				</div>
				<div class="entry-image">
					<a href="javascript:;" alt=".." data-lightbox="image"><img class="image_fade" src="<?php echo base_url();?>uploads/news/<?php echo $image;?>" alt=".."></a>
				</div>
				<div class="entry-title">
					<h2><a href="<?php echo $new_url;?>"><?php echo $news['title'];?></a></h2>
				</div>
				
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> <?php echo date('d F Y',strtotime($news['news_date']));?> </li>
					<!--li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
					<li><a href="#"><i class="icon-film"></i></a></li-->
				</ul>
				<div class="entry-content">
					<p><?php echo $news['short_description'];?></p>
					<a href="<?php echo $new_url;?>" target="_blank"  class="more-link">Read More</a>
				</div>
				<?php if( $i == 5 ) {?>
				<input type="hidden" name="prev_month" id="prev_month<?php echo $page_number;?>" value="<?php echo $news['month_id']; ?>" /> 
			<?php } ?>
			</div>
			
		<?php 
			 $i++;
		 }
	}
	
	
	function sendMail()
	{
			$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.gmail.com',
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
			$this->email->initialize($config);
			
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
	
	
	public function generatePDF()
	{
		error_reporting(E_ALL);
		error_reporting(0);
		// PUT YOUR HTML IN A VARIABLE
		/*
		$my_html="<HTML>
		<h2>Test HTML 01</h2><br><br>
		<div style=\"display:block; padding:20px; border:2pt solid:#FE9A2E; background-color:#F6E3CE; font-weight:bold;\">
		phpToPDF is pretty cool!
		</div><br><br>
		For more examples, visit us here --> http://phptopdf.com/examples/
		</HTML>";*/
		header('Content-type: text/plain');
		$my_html = file_get_contents('http://makron.creacodes.com/site/rebelute.com');
		

		// SET YOUR PDF OPTIONS
		// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
		$path = base_url().'uploads/pdf/';
		$filename =  time().'_html_01.pdf';
		
		$pdf_options = array(
		  "source_type" => 'html',
		  "source" => $my_html,
		  "action" => 'save',
		  "save_directory" =>'uploads/pdf/' ,
		  "file_name" =>$filename);

		// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
		phptopdf($pdf_options);

		// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
		echo ("<a href='".base_url()."uploads/pdf/".$filename."'>Download Your PDF</a>");
	
	
	}


    public function database_backup()
    {
        $this->load->dbutil();
        $prefs = array(
            'format' => 'zip', // gzip, zip, txt
            'filename' => 'rebelute_db_backup' . date('Y-m-d') . '.zip',
            'add_drop' => TRUE, // Whether to add DROP TABLE statements to backup file
            'add_insert' => TRUE, // Whether to add INSERT data to backup file
            'newline' => "\n"               // Newline character used in backup file
        );
        $backup = &$this->dbutil->backup($prefs);
        $this->load->helper('download');
        force_download('Rebelute Back Up' . date('Y-m-d') . '.zip', $backup);

       
    }


    public function saveInforamtionGitex()
	{
		$this->load->model('home_model');
		$data = $this->home_model->saveInforamtionGitexModel($_POST);
		echo $data;
	} 


    /*for random string*/
	protected function random($characters=6,$letters = '23456789bcdfghjkmnpqrstvwxyz'){
		$str='';
		for ($i=0; $i<$characters; $i++) { 
			$str .= substr($letters, mt_rand(0, strlen($letters)-1), 1);
		}
		return $str;
	}	
	
	

	
	
	
	
	
	
	
}
