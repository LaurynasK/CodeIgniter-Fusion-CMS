<?php

class Fusion_Files_CRUD 
{
    
    /*
    *  Create file, if file do not exist
    *
    * @param	string
	* @param	string
	* @param	bool
	* @return	mixed
    */
    public function create($file_path, $content, $open = FALSE) {
        if (!(file_exists($file_path))) {
            $file = fopen($file_path, 'w');
            fwrite($file, $content);
            fclose($file);
            
            if($open){
                return $this->read($file_path, $json); 
            }
            return TRUE;
            
        } else {
            return FALSE;
        }
        
    }
    
    /*
    *  Update file, if file already exist
    *
    * @param	string
	* @param	string
	* @param	bool
	* @return	bool
    */
    public function update($file_path, $content, $open = FALSE){
        // If file exist then library will update it. 
        if(file_exists($file_path)){
            $content = remove_invisible_characters($content, TRUE);
            file_put_contents($file_path, $content);
            
            if($open){
                return $this->read($file_path); 
            }
            return TRUE;
        } else {
            return FALSE;
        }
        
    }
    
    /*
    *  Read existing file
    *
    * @param	string
	* @return	mixed
    */
    public function read($file_path){
        if(file_exists($file_path)) {
            $file_stream = file_get_contents($file_path);
            $file_content = html_escape($file_stream);
            
            return $file_content;
            
        } else {
            return FALSE;
        }
    }
    
    /*
    *  Delete existing file
    *
    * @param	string
	* @return	bool
    */
    public function delete($file_path){
        if(file_exists($file_path)) {
            if(unlink($file_path)){
                return TRUE;
            } 
        } else {
            return FALSE;
        }
    }
    
    /*
    *  Make directory
    *
    * @param	string
	* @return	bool
    */
    public function mk_dir($dir_path){
        if (!is_dir($dir_path) && $dir_path != null) {
            if(mkdir($dir_path, 0777, TRUE)){
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
    
    public function rm_dir($dir_path){
        if (!is_readable($dir_path)) {
            return FALSE;
        }
        
        if (is_dir($dir_path)) {
            if(!$this->check_dir_empty($dir_path)){
                if($this->rm_files_from_dir($dir_path)){
                    if(rmdir($dir_path)){
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } else {
                    return FALSE;
                }
            } elseif (rmdir($dir_path)){
                return TRUE;
            } else {
                return FALSE;
            }
        }
        
    }
    
    public function rm_files_from_dir($dir_path){
        $CI =& get_instance();
        
        $CI->load->helper("file"); 
        if(delete_files($dir_path, true)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function check_dir_empty($dir_path){
        if (count(scandir($dir_path)) == 2) {
            return TRUE;
        } else { 
            return FALSE;
        }
    }
    
    /*
    *  Check if path is valid 
    *
    * @param	string
	* @return	bool
    */
    public function check_path($path){
        $path = trim($path);
        
        if(preg_match('/^[^*?"<>|:]*$/',$path)) {
            return TRUE;
        } else {
            return FALSE;
        }    
    }
    
    /*
    *  rename any file  
    *
    * @param	string
    * @param	string
	* @return	bool
    */
    public function rename_file($oldPath, $newPath){
        if(rename($oldPath, $newPath)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
}