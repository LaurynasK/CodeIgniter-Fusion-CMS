<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    private $CI;
    private $data;
    private $main_platform;
    private $menu;
    private $footer;
    private $base_path; 
    
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
        $this->base_path = APPPATH . "views/";

    }
    
    public function set_Title($title)
    {
        $this->data['title'] = $title;
    }
    
    public function view($location, $data = array(), $menu = true, $path = null){
        if($path === null) $path = 'application/views/';
        if($data === null) $data = array();
        
        if(file_exists('application/views/'.$location.'.php' )){
            if(is_array($data) && array_key_exists('areas', $this->data)){
                $data = array_merge($data, $this->data['areas']);
            }

            $this->data['current_page'] = $this->CI->load->view($location, $data, true);
            
            if(!$menu){
                $this->data['menu'] = "";
            }
            
            $this->CI->load->view($this->main_platform, $this->data);
        } else {
            show_error("Something went wrong in template library, please check all view call arguments", 500, $heading = 'Template Library Error Was Encountered');
        }
    }
    
    public function twig($location, $data = array(), $menu = true, $path = null){
        if($path === null){
            if(file_exists(FCPATH . 'modules/main/views/')){
                $path = FCPATH . 'modules/main/views/';
            } else {
                $path = APPPATH . 'modules/main/views/';
            }
        }
        if($data === null) $data = array();
        
        if(file_exists($path . $location.'.twig' )){
            if(array_key_exists('areas', $this->data)){
                $data = array_merge($data, $this->data['areas']);
            }
            
            $this->data['current_page'] = $this->CI->twig->render($location, $data);
            //var_dump($this->data['current_page']); exit;
            
            if(!$menu){
                $this->data['menu'] = "";
            }
            
            $this->CI->twig->display($this->main_platform, $this->data); 
        
        } else {
            show_error("Something went wrong in template library, please check all twig call arguments", 500, $heading = 'Template Library Error Was Encountered');
        }
    }
    
    public function set_platform($location)
    {
        $this->main_platform = $location;
    }

    public function set_js(){
        $js_files = func_get_args();
        
        if(isset($js_files[0]) && is_array($js_files[0])){
            if(count($js_files[0]) > 1) $js_files = $js_files[0];
        }

        if(!isset($this->data) || !array_key_exists('js', $this->data)){
            $this->data['js'] = array();
        }
        
        foreach($js_files as $js_file){
            if(is_bool($js_file)){
                continue;
            }
            
            if(preg_match("/^https?:\/\//", trim($js_file)) > 0 ){
                $is_external = true;
            } else {
                $is_external = false;
            }
            
            if(substr($js_file, 0, 1) == '/'){
                $js_file = substr($script_file,1);
            }
            
            if(!$is_external){
                $js_file = base_url($js_file);
            }
            
            if(!in_array($js_file, $this->data['js'])){
                $this->data['js'][] = $js_file;
            }
        }
        
    }
    
    public function set_css(){
        $css_files = func_get_args();
        
        if(isset($css_files[0]) && is_array($css_files[0])){
            if(count($css_files[0]) > 1) $css_files = $css_files[0];
        }
        
        
        if(!isset($this->data) || !array_key_exists('css', $this->data)){
            $this->data['css'] = array();
        }

        foreach($css_files as $css_file){
            
            if(is_bool($css_file)){
                continue;
            }
            
            if(preg_match("/^https?:\/\//", trim($css_file)) > 0 ){
                $is_external = true;
            } else {
                $is_external = false;
            }
            
            if(substr($css_file, 0, 1) == '/'){
                $css_file = substr($script_file,1);
            }
            
            if(!$is_external){
                $css_file = base_url($css_file);
            }
            
            if(!in_array($css_file, $this->data['css'])){
                $this->data['css'][] = $css_file;
            }
        }
    }
    
    public function add_menu($location, $data = array(), $twig = true){
        if($twig){
            $this->data['menu'] = $this->CI->twig->render($location, $data);
        } else {
            $this->data['menu'] = $this->CI->load->view($location, $data, true);
        }
    }
    
    public function add_footer($location, $data = array(), $twig = true){
        if($twig){
            $this->data['footer'] = $this->CI->twig->render($location, $data);
        } else {
            $this->data['footer'] = $this->CI->load->view($location, $data, true);
        }
    }
    
    public function set_area($name, $location, $data = array(), $twig = true){
        if($twig){
             $this->data['areas'][$name] = $this->CI->twig->render($location, $data);
        } else {
            $this->data['areas'][$name] = $this->CI->load->view($location, $data, true);
        }
    }
    
    public function unset_section($name){
        unset($this->data[$name]);
    }
}
