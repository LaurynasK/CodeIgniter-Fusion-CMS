<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fusion_articles_lib
{
    private $data;
    private $data_object;
    
    private $CI;
    private $models_list = [];
    
    public function __construct($params = []){
        $this->CI =& get_instance();
        
        if (isset($params['model_list']))
		{
		    $this->models_list = $params['model_list'];
			foreach($this->models_list as $model){
			    $this->CI->load->model($model);
			}
		} else {
		    show_error('model_list array not found', 500);
		}
    }
    //todo check if this is save to delete
    public function new_article(){
        //$this->set_model_object('section');
        $this->new_set_model_object('section');
        return $this->data_object->get_all();
    }
    
    public function read_all($model_name){
         $this->new_set_model_object($model_name);
        return $this->data_object->get_all();
    }
    
    public function edit($mode = null, $id = null){
        if($id != null){
            if ($mode != null) {
                $this->new_set_model_object($mode);
            
                $this->CI->load->helper('date_converter');
                $this->data[$mode] = $this->data_object->get($id);
                
                if($mode == "article"){
                    $this->data[$mode]['keywords_list'] = json_decode($this->data[$mode]['keywords']);
                    $this->data[$mode]['publish_date'] = date_format_converter($this->data[$mode]['publish_date']);
                }
                
                return $this->data[$mode];
            }
            return "check mode (must be article(s) or section(s))";
        }
        return "there is no id";
    }
    
    public function delete_item ($mode = null, $id = null, $force_delete = false){
        if($mode != null){
            $this->new_set_model_object($mode);
        }
        
        if($this->data_object->get($id)){
            $this->data_object->delete($id);
            $message = $id . "  was moved to trashes";
        } elseif ($this->data_object->trashed($id)) {
            $this->data_object->force_delete($id);
            $message = $id . " was completley deleted from " . $mode;
        } else {
            $message = "no item with such id: " . $id;
        }
        
        return $message;
    }
    
    public function seve_action($mode = null, $id = null, $data){
        if ($mode != null && $id != null){
            $this->new_set_model_object($mode);
            
            if($id == "new"){
                $this->data_object->insert($data);
                $message = $mode . " was created";
            } else {
                if($this->data_object->get($id)){ 
                    $this->data_object->update($data, $id);
                    $message = $mode . " was updated";
                } else {
                    $message = "no " . $mode . " with such id: " . $section_id;
                }
            }
            
            return $message;
        } else {
            return "information was provided was incorrect " . $id;
        }
    }
    
    public function show_all($mode, $page_num, $items_per_page = 10, $pagination_delimiters = array('<li>','</li>')){
        $this->new_set_model_object($mode);
        
        $this->data_object->pagination_delimiters = $pagination_delimiters;
        $total_posts = $this->data_object->count_rows();
           
        $this->data = array(
            $mode => $this->data_object->paginate($items_per_page, $total_posts, $page_num), 
            'all_pages' => $this->data_object->all_pages 
        );
            
        return $this->data;
    }
    
    public function new_set_model_object($mode = null){
        foreach($this->models_list as $model){
            if(preg_match('/s$/', $mode)){
	           $mode = rtrim($mode,"s");
	        }
	        if (strpos($model, $mode) !== false) {
                $this->data_object = $this->CI->$model;
            } 
		}
		return $this->data_object;
    }
    
}