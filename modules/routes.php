      <?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main/welcome';
$route['demo'] = 'main/demo_controller';
$route['demo/([A-Za-z0-9\-\_]+)'] = 'main/demo_controller/show_category'; //category view
$route['demo/([A-Za-z0-9\-\_]+)/([A-Za-z0-9\-\_]+)'] = 'main/demo_controller/show_singe'; //article view  

$route['temp'] = 'main/welcome'; 
 
 
