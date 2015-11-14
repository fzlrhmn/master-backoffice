<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['404_override'] 					= '';
$route['default_controller'] 			= "login/index";
$route['login/submit'] 					= "login/submit";
$route['login/ajax/submit'] 			= "login/submit_ajax";
$route['logout'] 						= "login/logout";

/*
| 
| ROUTING MAPS
|
*/
$route['maps'] 							= "maps/index";
$route['maps/tematik'] 					= "maps/tematik";
$route['maps/mobile'] 					= "maps/mobile_maps";
$route['maps/mobile/v2'] 				= "maps/mobile_maps_v2";

/*
| 
| ROUTING USER
|
*/
$route['user/add'] 					= 'user/add';
$route['user/submit'] 				= 'user/submit';
$route['user/edit/submit'] 			= 'user/edit';
$route['user'] 						= 'user/index';
$route['user/(:num)'] 				= 'user/index/$1';
$route['user/delete/(:num)'] 		= 'user/delete/$1';

$route['perusahaan/delete/(:num)'] 	= 'perusahaan/delete/$1';



/* End of file routes.php */
/* Location: ./application/config/routes.php */