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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




$route['banche']='admin_login';
$route['admin-login']='admin_login/admin_login_check';
$route['admin-logout']='admin_login/admin_logout_check';
$route['admin-dashboard']='admin/home';

$route['delete-logo/(.+)']='admin/delete_logo/$1';

$route['delete-slider-image/(.+)']='admin/delete_slider_image/$1';
$route['delete-timeline-slider-image/(.+)']='admin/delete_timeline_slider_image/$1';
$route['delete-announcement/(.+)']='admin/delete_announcement/$1';
$route['delete-collaboration-image/(.+)']='admin/delete_collaboration_image/$1';
$route['delete-newsletter/(.+)']='newsletter/delete_newsletter/$1';
$route['delete-gallery/(.+)']='gallery/delete_gallery/$1';
$route['delete-calender/(.+)']='calender/delete_calender/$1';
$route['delete-admission-information/(.+)']='admission/delete_admission_information/$1';
$route['delete-admission-process/(.+)']='admission/delete_admission_process/$1';
$route['delete-school-brochure/(.+)']='admission/delete_school_brochure/$1';
$route['delete-apply/(.+)']='career/delete_apply/$1';
$route['delete-vacancies/(.+)']='career/delete_vacancies/$1';
$route['delete-exam-venue/(.+)']='exam_venue/delete_exam_venue/$1';
$route['delete-campus/(.+)']='campus/delete_campus/$1';
$route['delete-result/(.+)']='result/delete_result/$1';


