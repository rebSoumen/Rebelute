<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class landing_model extends CI_Model
    {
	
	    public function saveUserInformationModel($post)
		{
			$name= $post['name'];
			$email = $post['email'];
			$message = $post['message'];
			$mobile = $post['mobile'];
			$page_id = $post['page_id'];
			
			// setting the page id in the session 
			$this->session->set_userdata(array("page_id"=>$page_id));
			
			$data = array("page_id"=>$page_id,
			              "name"=>$name,
			              "email"=>$email,
			              "mobile"=>$mobile,
			              "message"=>$message
						 );
						 
			$this->db->insert('page_leads',$data);
            return true;			
		}
	
	}
	
	
	
	
?>