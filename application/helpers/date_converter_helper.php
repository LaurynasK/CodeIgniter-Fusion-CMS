<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('convert_date'))
{
    function date_format_converter($date, $format = 'Y-m-d')
    {
        $new_Date = new DateTime($date);
        return $new_Date->format($format);
    }
}

