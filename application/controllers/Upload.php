<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('ion_auth');
	}
	
	function upload_post()
    {   
        if ($this->ion_auth->logged_in()){
	    	$location = $this->input->post('location');
			
			$config['upload_path'] = APPPATH . "modules/" . $location ; 
			$config['allowed_types'] = '*';
			
	        $this->load->library('upload');
	
	        $files = $_FILES;
	        $cpt = count($_FILES['userfile']['name']);
	        for($i=0; $i<$cpt; $i++)
	        {           
	            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
	            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
	            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
	            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
	            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    
	
	            $this->upload->initialize($config);
	            $this->upload->do_upload('userfile');
	            
	        }
	        echo json_encode($this->upload->data());
        } else {
        	show_404();
        }
    }
    
}