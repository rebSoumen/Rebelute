<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
        $this->load->model("Home_Model");	
    }
	
	public function index($url="")
	{
                if($url=="")
		{
		    redirect('blogs');
		}
		
		$url = str_replace("-"," ",$url);
		//$url = str_replace("'","",$url);
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		
		$footer['blog'] = $this->Home_Model->get3RecentblogsModel();
		
		/* --------- Fetching the data of BLOG ---------*/
		
		$result['blogs']= $this->Home_Model->getsingleBlogDataModel($url);
		if(!is_object($result['blogs']))
		{
			 $this->load->view('main/404');
			
		}
		else
		{
			$category = $result['blogs']->category;
			$result['related'] = $this->Home_Model->getRelatedBlogsModel($category);
			$result['categories'] = $this->Home_Model->getAllBlogsCategory();
			$this->load->view('main/blog_detail',$result);
			$this->load->view('main_template/footer',$footer);
		}
		
	}
	
	public function category_blogs($category="")
	{
		//echo $category;die;
		$this->load->library('pagination');
		/* --- ------ Code Added for  showing recent 3 blogs ---- */
		
		//$this->load->model("home_model");
		$footer['blog'] = $this->Home_Model->get3RecentblogsModel();
		
		/* ------ Code For making Pagination  ---*/
		
		$config = array();
        $config["base_url"] = base_url() . "blog/category_blogs/$category";
        $config["total_rows"] = $this->Home_Model->record_count_category($category);
        $config["per_page"] = 8;
        $config["uri_segment"] = 4;
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
		
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['blog_results'] = $this->Home_Model->fetch_blogsByCategory($config["per_page"], $page,$category);
		
		
        $data['links'] = $this->pagination->create_links();//var_dump($data["links"]);die;

		
		$this->load->view('main/blog_category',$data);
		$this->load->view('main_template/footer',$footer);
		
	}
	
	

        	
	
}
	
	?>