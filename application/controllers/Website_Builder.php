<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_Builder extends MY_Controller
{
    private $data;
    private $location;
    
    public function __construct(){
        parent::__construct();
        
        if ($this->ion_auth->logged_in()){
            $this->template->set_Title('Edit File');
            $this->load->library('Fusion_Files_CRUD');
            $this->load->helper('file');
            
            $this->location = FCPATH . "modules/";
        } else {
            redirect('auth/login', 'refresh');
            exit; 
        }
    }
    
    public function index(){
        $this->load_webbuilder_assets();
        $this->template->view("themes/default_back_end/website_builder/website_builder");
    }
    
    public function get_inside_menu(){
        if ($this->input->is_ajax_request()) {
            $this->load->helper('directory');
            $this->load->helper('filemap_check');
            
            $directory_map = directory_map($this->location);

            echo json_encode(check($directory_map));
        } else {
            show_404();
        }
    }
    
    public function get_file_content(){

        if ($this->input->is_ajax_request()) {
            $location = $this->location . $this->input->post('location');
            $text = $this->fusion_files_crud->read($location);
            echo json_encode(array("file" => $text));

        } else {
            show_404();
        }
    }
    
    public function save_file(){
        if ($this->input->is_ajax_request()) {
            $content = $this->input->post('content');
            $location = $this->input->post('location');

            $outputData = array();
            
            $file_location = $this->location . $location;
            $content .= PHP_EOL;
            $content = htmlspecialchars_decode($content);
            
            $outputData['content'] = $content;
            
            if($this->fusion_files_crud->update($file_location, $content)){
                $outputData['message'] = "File was updated " . $location;
            } else if ($this->fusion_files_crud->create($file_location, $content)) {
                $outputData['message'] = "File was created " . $location;
            } else {
                $outputData['message'] = "Something went wrong, please try again";
            }
            
             echo json_encode($outputData);
        } else {
            show_404();
        }
    }
    
    public function create_file(){
        if ($this->input->is_ajax_request()) {
            $location = $this->location . $this->input->post('location'); 
            $output_data = array();
            $template_file = $this->location . $this->input->post('template');
            
            if(file_exists($template_file)){
                $file_content = $this->fusion_files_crud->read($template_file);
                $output_data['template_message'] = "Tempate for file was found ";
            } else {
                $output_data['template_message'] = "This file format has no template";
                $file_content = " ";
            }
            $file_content = htmlspecialchars_decode($file_content);
            if (file_exists($location)) {
                $output_data['file_message'] = "Such file already exists";
            } else {
                $this->fusion_files_crud->create($location, $file_content);
                $output_data['message'] = "File was created " . $location;
                $output_data['file_path'] = $location;
            }
                
            echo json_encode($output_data);
            
        } else {
            show_404();
        }
    }
    
    public function delete_file($location = NULL){
        if ($this->input->is_ajax_request()) {
            $location = $this->input->post('location');
            $file_location = $this->location . $location;
            
            if($this->fusion_files_crud->delete($file_location)) {
                $outputData['delete_message'] = "File was deleted " . $location;
                $outputData['delete_file'] = $location;
            } else {
                $outputData['delete_message'] = "File was not found at ". $location; 
            }
            
            echo json_encode($outputData);
            } else {
                show_404();
            }
    }

    public function create_foder(){
        if ($this->input->is_ajax_request()) {
            $location = $this->location . $this->input->post('location');
            
            if($this->fusion_files_crud->mk_dir($location)){
                $outputData['message'] = 'Directory was created ' . $location;
            } else {
                $outputData['message'] = 'something went wrong, please check location and try again';
            }
            
            echo json_encode($outputData);
        } else {
            show_404();
        }
    }
    
    public function delete_folder(){
        if ($this->input->is_ajax_request()) {
            $location = $this->location . $this->input->post('location');
            
            if($this->fusion_files_crud->rm_dir($location)){
                $outputData['message'] = 'Directory was deleted ' . $location;
            } else {
                $outputData['message'] = 'something went wrong, please check location and try again';
            }
            
            echo json_encode($outputData);
        } else {
            show_404();
        }
    }
    
    public function rename_file(){
        if($this->input->is_ajax_request()){
            $location_before = $this->location . $this->input->post('locationBefore');
            $location_after = $this->location . $this->input->post('locationAfter');
            
            if($this->fusion_files_crud->rename_file($location_before, $location_after)){
                $outputData['message'] = 
                    'File was renamed from ' . $location_before . " to " . $location_after;
            } else {
                $outputData['message'] = 'something went wrong, please repeat action';
            }
            
            echo json_encode($outputData);
        } else {
            show_404();
        }
    }
}

