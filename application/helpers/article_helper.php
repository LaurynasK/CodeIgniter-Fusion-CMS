<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_main_pic'))
{
    function get_main_pic($data = null)
    {
        $data = json_decode($data);
        if($data == null){
            return "default.jpg";
        } else {
            return $data[0];
        }
    }
}
