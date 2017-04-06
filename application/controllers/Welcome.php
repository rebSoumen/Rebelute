<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
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
		$my_html = file_get_contents('https://fastpitchrecruits.com');
		

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
}
