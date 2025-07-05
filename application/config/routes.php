<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'donasi/index';
$route['datadonasi'] = 'donasi/datadonasi';
$route['donasi/getDonasi/(:any)'] = 'DonasiController/getDonasi/$1';
// $route['donasi'] = 'donasi/index';
// $route['donasi/form'] = 'donasi/form';

