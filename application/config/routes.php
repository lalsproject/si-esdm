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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';

$route['home'] = 'Welcome/index';

$route['dashboard'] = 'Admin/index';
$route['daerah'] = 'Admin/master_daerah';
$route['daerahEdit/(:any)'] = 'Admin/view_edit_daerah/$1';
$route['saveEditDaerah'] = 'Admin/edit_daerah';
$route['saveDaerah'] = 'Admin/save_daerah';
$route['deleteDaerah/(:any)'] = 'Admin/del_daerah/$1';
$route['perusahaan'] = 'Admin/master_perusahaan';
$route['savePerusahaan'] = 'Admin/add_perusahaan';
$route['perusahaanEdit/(:any)'] = 'Admin/view_edit_perusahaan/$1';
$route['saveEditPerusahaan'] = 'Admin/edit_perusahaan';
$route['deletePerusahaan/(:any)'] = 'Admin/del_perusahaan/$1';
$route['tambang'] = 'Admin/master_tambang';
$route['tambang/(:any)'] = 'Admin/master_tambang/$1';
$route['saveTambang'] = 'Admin/save_tambang';
$route['hapusTambang/(:any)/(:any)'] = 'Admin/hapus_tambang/$1/$2';
$route['createpost'] = 'Admin/create_blog';
$route['saveBlog'] = 'Admin/save_blog';
$route['blogEdit/(:any)'] = 'Admin/edit_blog/$1';
$route['saveEditBlog'] = 'Admin/save_edit_blog';
$route['delBlog/(:any)'] = 'Admin/del_blog/$1';
$route['peti'] = 'Admin/peti';
$route['getDetailLaporan/(:any)'] = 'Admin/detail_peti/$1';



$route['login'] = 'Welcome/login_page';
$route['logout'] = 'Welcome/logout';
$route['logged_process'] = 'Welcome/login_proses';
$route['reset/(:any)'] = 'Welcome/reset/$1';
$route['lapor'] = 'Welcome/lapor_peti';
$route['send_lapor'] = 'Welcome/send_lapor';
$route['verifikasilaporan/(:any)'] = 'Welcome/verify_laporan/$1';


$route['blog'] = 'Welcome/list_blog';
$route['(:any)/tambang'] = 'Welcome/view_tambang/$1';
$route['(:any)/blog'] = 'Welcome/view_blog/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
