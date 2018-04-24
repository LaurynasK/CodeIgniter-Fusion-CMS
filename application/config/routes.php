<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//dashboard routes
//website builder routes
$route['dashboard/editfile'] = 'Website_Builder';
//website buidler ajax
$route['dashboard/get_inside_menu'] = 'Website_Builder/get_inside_menu';
$route['dashboard/editfile/get_inside_menu'] = 'Website_Builder/get_inside_menu';
$route['dashboard/get_file_content'] = 'Website_Builder/get_file_content';
$route['dashboard/editfile/get_file_content'] = 'Website_Builder/get_file_content';
$route['dashboard/save'] = 'Website_Builder/save_file';
$route['dashboard/editfile/save'] = 'Website_Builder/save_file';
$route['dashboard/create_file'] = 'Website_Builder/create_file';
$route['dashboard/editfile/create_file'] = 'Website_Builder/create_file';
$route['dashboard/delete_file'] = 'Website_Builder/delete_file';
$route['dashboard/editfile/delete_file'] = 'Website_Builder/delete_file';
$route['dashboard/rename_file'] = 'Website_Builder/rename_file';
$route['dashboard/editfile/rename_file'] = 'Website_Builder/rename_file';

$route['dashboard/create_foder'] = 'Website_Builder/create_foder';
$route['dashboard/editfile/create_foder'] = 'Website_Builder/create_foder';
$route['dashboard/delete_folder'] = 'Website_Builder/delete_folder';
$route['dashboard/editfile/delete_folder'] = 'Website_Builder/delete_folder';

$route['upload/post']['post'] = 'Upload/upload_post';
$route['dashboard/upload/post']['post'] = 'Upload/upload_post';
//articles aka blogs

$route['dashboard/show_all_(:any)'] = "Article/show_all_/$1";
$route['dashboard/show_all_(:any)/(:num)'] = "Article/show_all_/$1/$2";
$route['dashboard/new_(:any)'] = "Article/new_/$1";
$route['dashboard/edit_(:any)/(:num)'] = "Article/edit_/$1/$2";

$route['dashboard/article/trash/articles'] = 'Article/show_trash/articles';
$route['dashboard/article/trash/sections'] = 'Article/show_trash/sections';
//arcticles ajax 
$route['dashboard/save_article'] = 'Article/save_article';
//sections ajax
$route['dashboard/save_action'] = 'Article/save_action';
$route['dashboard/save_gallery'] = 'Article/save_gallery';
$route['dashboard/save_article'] = 'Article/save_article';
$route['dashboard/save_section'] = 'Article/save_section';
// trash_ajax
$route['dashboard/restore_from_trash'] = 'Article/restore_from_trash';
$route['dashboard/remove_completley'] = 'Article/remove_completley';
$route['dashboard/remove'] = 'Article/remove';

//$route['(.*)'] = "none";
$route['dashboard/get_info'] = "Article/get_info";