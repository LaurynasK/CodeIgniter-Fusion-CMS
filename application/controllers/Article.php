<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
{
    private $data;
    private $data_object;
    
    public function __construct(){
        parent::__construct();
        
        $this->load->library('ion_auth');
        
        if ($this->ion_auth->logged_in()){
            $this->template->set_Title('Blog');
            $this->data['user_info'] = $this->ion_auth->user()->row_array();
            
            $config = ['model_list' => ["article_model", "section_model", "gallery_model"]]; 
            $this->load->library('Fusion_articles_lib', $config);
        } else {
            redirect('auth/login', 'refresh');
            exit;
        }
        
    }
    
    public function new_($mode = 'article'){
        if($mode == 'article'){
            $this->load_article_edit_assets();
            $this->data['sections'] = $this->fusion_articles_lib->read_all('sections');
            $this->data['galleries'] = $this->fusion_articles_lib->read_all('gallery');
        } elseif ($mode == 'section') {
            $this->load_section_edit_assets();
        } elseif ($mode == 'gallery') {
            $this->load->helper('directory');
            $this->data['files_list'] = $directory_map = directory_map(FCPATH . "uploads/files");
            $this->load_gallery_assets();
        }
        
        $this->template->view('themes/default_back_end/blog/create_' . $mode, $this->data);
    }
    
    public function edit_($mode, $id){
        if($mode == 'article'){
            $this->data['sections'] = $this->fusion_articles_lib->read_all('sections');
            $this->data['galleries'] = $this->fusion_articles_lib->read_all('gallery');
            $this->load_article_edit_assets();
        } elseif ($mode == 'section') {
            $this->load_section_edit_assets();
        }
        
        if($id !== null){
            $this->data[$mode] = $this->fusion_articles_lib->edit($mode, $id);
            
            $this->template->view('themes/default_back_end/blog/create_' . $mode, $this->data);
        } else {
            redirect('dashboard/show_all_' . $mode . 's', 'refresh'); 
        }
        
    }
    
    public function show_all_($mode = "articles", $page_number = 1) {
        $this->load_section_edit_assets();
        $this->data['item_data'] = $this->fusion_articles_lib->show_all($mode, $page_number);
        $this->template->view('themes/default_back_end/blog/list_' . $mode, $this->data);
    }
    
    public function show_trash($mode = null){ 
        if(!$mode == null){ 
            $this->data_object = $this->fusion_articles_lib->new_set_model_object($mode)->only_trashed();
            $this->load_section_edit_assets();
            $this->data['trash_items'] = $this->data_object->get_all();
            
            $this->template->view('themes/default_back_end/blog/trash_' . $mode, $this->data);
        } else {
            show_404();
        }
    }
    
    public function save_article(){
        if($this->input->is_ajax_request()){
            $this->load->helper('article');
            $id = $this->input->post('ID');
            
            $this->data['data_to_save'] = array(
                    'created_by' => $this->data['user_info']['id'], 
                    'section_id' => $this->input->post('section'),
                    'title' => $this->input->post('article_title'),
                    'main_image' => get_main_pic($this->input->post('full_gallery')),
                    'article_text' => htmlspecialchars_decode($this->input->post('article_text')),
                    'article_gallery' => $this->input->post('gallery'),
                    'created_at' => date("Y-m-d h:i:sa"),
                    'publish_date' => $this->input->post('publish_date'),
                    'keywords' => $this->input->post('article_keywords'),
                );
            $message = $this->fusion_articles_lib->seve_action("articles", $id, $this->data['data_to_save']);
            echo json_encode($message);
        } else {
            show_source();
        }
    }
    
    public function save_section(){
        if($this->input->is_ajax_request()){
            $id = $this->input->post('ID');
            
            $this->data['data_to_save'] = array(
                    'created_by' => $this->data['user_info']['id'], 
                    'name' => $this->input->post('section_name'),
                    'prefix' => $this->input->post('prefix'),
                    'created_at' => date("Y-m-d h:i:sa"),
                );
            $message = $this->fusion_articles_lib->seve_action("sections", $id, $this->data['data_to_save']);
            echo json_encode($message);
        } else {
            show_404();
        }
    }
    
    public function save_gallery(){
        if($this->input->is_ajax_request()){
            $id = $this->input->post('ID');
            
            $this->data['data_to_save'] = array(
                    'name' => $this->input->post('name'),
                    'pic_list' => $this->input->post('pic_list'),
                    'created_by' => $this->data['user_info']['id'], 
                    'created_at' => date("Y-m-d h:i:sa"),
                );
            $message = $this->fusion_articles_lib->seve_action("gallery", $id, $this->data['data_to_save']);
            echo json_encode($message);
        } else {
            show_404();
        }
    }
    
    public function restore_from_trash(){ 
        if ($this->input->is_ajax_request()) {
            
            $mode = $this->input->post('mode');
            $id = $this->input->post('articleID');
            
            $this->data_object = $this->fusion_articles_lib->new_set_model_object($mode)->only_trashed();

            if($this->data_object->trashed($id)){
                $this->data_object->restore($id);
                $message = 'item with id ' . $id . ' was restored';
            } else {
                $message = 'no such item with id: ' . $id;
            }
            
            echo json_encode($message);
        } else {
            show_404();
        }
    }
    
    public function remove(){
        if ($this->input->is_ajax_request()) {
            
            $mode = $this->input->post('mode');
            $id = $this->input->post('articleID');
            
            $message = $this->fusion_articles_lib->delete_item($mode, $id);
            
            echo json_encode($message);
        } else {
            show_404();
        }
    }
    
}