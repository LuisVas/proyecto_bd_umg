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
$route['default_controller'] = 'GuestController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['referral'] = 'GuestController/referral';
$route['profile'] = 'GuestController/settings';
$route['store'] = 'GuestController/store';
$route['updateData'] = 'GuestController/updateData';
$route['add_points'] = 'GuestController/add_points';
$route['change_prize'] = 'GuestController/change_prize';

//SESION CLIENTE

$route['register'] = 'SessionController/register';
$route['validate_email'] = 'SessionController/validate_email';
$route['validate'] = 'SessionController/validate';
$route['restorePass'] = 'SessionController/restorePass';
$route['add_register'] = 'SessionController/add_register';
$route['login'] = 'SessionController';
$route['sendMail'] = 'SessionController/sendMail';
$route['verify_account'] = 'SessionController/verify_account';
$route['verify_email'] = 'SessionController/verify_email';
$route['verify_mail'] = 'SessionController/verify_mail';
$route['restore_password'] = 'SessionController/restore_password';
$route['resetlink'] = 'SessionController/resetlink';
$route['sendPass'] = 'SessionController/sendPass';
$route['sign_out'] = 'SessionController/sign_out';


//SESION DASHBOARD
// $route['validate_email'] = 'SessionDashboardController/validate_email';
$route['dashboard/validate'] = 'SessionDashboardController/validate';
$route['dashboard/restorePass'] = 'SessionDashboardController/restorePass';
$route['dashboard/login'] = 'SessionDashboardController';
$route['dashboard/sendMail'] = 'SessionDashboardController/sendMail';
$route['dashboard/verify_account'] = 'SessionDashboardController/verify_account';
$route['dashboard/verify_email'] = 'SessionDashboardController/verify_email';
$route['dashboard/verify_mail'] = 'SessionDashboardController/verify_mail';
$route['dashboard/restore_password'] = 'SessionDashboardController/restore_password';
$route['dashboard/resetlink'] = 'SessionDashboardController/resetlink';
$route['dashboard/sendPass'] = 'SessionDashboardController/sendPass';
$route['dashboard/sign_out'] = 'SessionDashboardController/sign_out';


//SERVICIOS DASHBOARD MEYKO

$route['dashboard'] = 'GuestDashboardController';
$route['dashboard/see-all'] = 'GuestDashboardController/seeall';
$route['dashboard/products'] = 'GuestDashboardController/products';
$route['dashboard/clients'] = 'GuestDashboardController/clients';
$route['dashboard/settings'] = 'GuestDashboardController/settings';
$route['dashboard/swaps'] = 'GuestDashboardController/swaps';
$route['dashboard/bills'] = 'GuestDashboardController/bills';
$route['dashboard/marketing'] = 'GuestDashboardController/marketing';
$route['dashboard/add_instantAward'] = 'GuestDashboardController/add_instantAward';
$route['dashboard/addImage'] = 'GuestDashboardController/addImage';
$route['sendMarketing'] = 'GuestDashboardController/sendMarketing';
$route['sendMail'] = 'GuestDashboardController/sendMail';
$route['updateDataDashboard'] = 'GuestDashboardController/updateDataDashboard';
$route['updateDataClient'] = 'GuestDashboardController/updateDataClient';
$route['updateSwap'] = 'GuestDashboardController/updateSwap';
$route['add_register_user'] = 'GuestDashboardController/add_register_user';
$route['deleteClient'] = 'GuestDashboardController/deleteClient';
$route['deleteProduct'] = 'GuestDashboardController/deleteProduct';
$route['updateDataProduct'] = 'GuestDashboardController/updateDataProduct';

// Categorías
$route['dashboard/categories']['GET'] = 'Dashboard/CategoryController';
$route['dashboard/category/list']['GET'] = 'Dashboard/CategoryController/list';
$route['dashboard/category/add']['POST'] = 'Dashboard/CategoryController/add';
$route['dashboard/category/update']['POST'] = 'Dashboard/CategoryController/update';
$route['dashboard/category/delete']['POST'] = 'Dashboard/CategoryController/delete';
$route['dashboard/category/get']['POST'] = 'Dashboard/CategoryController/get';
$route['dashboard/category/get_sub_categories']['POST'] = 'Dashboard/CategoryController/get_sub_categories';
$route['dashboard/category/list_sub_categories']['GET'] = 'Dashboard/CategoryController/list_sub_categories';
$route['dashboard/category/add_sub_categories']['POST'] = 'Dashboard/CategoryController/add_sub_categories';
