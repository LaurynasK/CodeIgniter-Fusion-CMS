<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('filemap_check'))
{
   
    function check($input){
        $final_output = array();
        $loop_num = 0;
        foreach ($input as $key => $value){

            if(is_array($value)){
                $final_output[$loop_num]['title'] = $key;
                $final_output[$loop_num]['folder'] = true;
                $final_output[$loop_num]['children'] = check($value);
            }else{
                if(!is_array($value)){
                    $final_output[$loop_num]['title'] = $value;
                }
            }
            ++$loop_num;
        }
        return $final_output;
    }
}