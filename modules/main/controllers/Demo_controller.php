    <?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH."modules/main/core/MY_Controller_2.php";

class Demo_controller extends MY_Controller_2
{
    private $data;
    
    public function __construct(){
        parent::__construct();
        
        $this->load->model('article_model_user');
        $this->load->model('gallery_model_user');
        $this->load->model('section_model_user');
        
        $this->data['sections'] = $this->section_model_user->get_all();
        $this->template->set_area('categories', 'default-demo/categories_area', $this->data);
    }
    //show all blog records
    public function index(){
        
        $this->template->set_Title('Demo CodeIgniter Fusion CMS Front End page');
        $this->data['articles'] = $this->article_model_user->get_published(); 
        
        $this->template->twig("default-demo/index", $this->data);
    }
    
    public function show_singe(){
        if($this->input->get('id', true)){
            $id = $this->input->get('id', true);
            $this->data['single'] = $this->article_model_user->get_single($id);
            
            if($this->uri->segment(2) == $this->data['single']['category_segment']){
                if(strpos($this->uri->segment(3), $this->data['single']['segment']) !== false){
                    $this->load_single_page_assets();
                    $this->template->twig("default-demo/single", $this->data);
                } else {
                    show_404(); 
                }
            } else {
                show_404(); 
            }
        } else {
           show_404(); 
        }
    }
    
    public function show_category(){
        if($this->uri->segment(2) !== null){
            $prefix = $this->uri->segment(2);
            $section = $this->section_model_user->get_section($prefix);
            if($section){
                $this->data['articles'] = $this->article_model_user->get_published(null, $section['id']);
                $this->data['section_name'] = $section['name'];
                $this->template->twig("default-demo/index", $this->data);
            } else {
                show_404();
            }
        } else {
            redirect('/demo', 'refresh');
        }
    }
    
    
} 
 
 
 
