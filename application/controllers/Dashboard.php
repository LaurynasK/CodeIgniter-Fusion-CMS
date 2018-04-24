<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    private $data;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('ion_auth');
        
        if (!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } 
    }

    public function index()
    {
        $this->data['fubar'] = "bar";
        $this->template->set_Title('Main Dashboard');
        $this->template->view("themes/default_back_end/welcome/welcome", $this->data);
    }
    
    public function media()
    {
        $this->template->set_Title('Media library');
        $this->load_media_assets();
        $this->template->view('themes/default_back_end/media/media', $this->data);
    }
    
    
    public function json()
	{
		$options = [
			'script_url' => site_url('dashboard/json'),
			'upload_dir' => APPPATH . '../uploads/files/',
			'upload_url' => site_url('../uploads/files/')
		];
		$this->load->library('UploadHandler', $options);
	}
    
}
