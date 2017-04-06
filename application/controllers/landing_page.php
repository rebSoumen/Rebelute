<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_page extends CI_Controller {

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
	 
	function __construct() 
	{
        parent::__construct();
		$this->load->library('excel');
		$this->load->library('session');
		//require_once APPPATH."/libraries/phpToPDF.php";
        $this->load->library("pagination");	
		
        		
    }
	
	public function showMobilePage()
	{
		$this->load->view('landing_page/mobile/index');
	}
	
	public function showSeoPage()
	{
		$this->load->view('landing_page/seo/index');
	}
	public function showWebpage()
	{
		$this->load->view('landing_page/web/index');
	}
	
	public function promotionWebpage()
	{
		$this->load->view('landing_page/promotion/index');
	}
	
	public function saveUserInformation()
	{
		$this->load->model('landing_model');
		$data = $this->landing_model->saveUserInformationModel($_POST);
		redirect('home/thankyou_landing');
	}
	
	public function gitex2016()
	{
		$this->load->view('landing_page/gitex/index');
	}
	
	public function walk_in()
	{
		$this->load->view('landing_page/walk_in/index');
	}
	
	
	
	
	
	
}