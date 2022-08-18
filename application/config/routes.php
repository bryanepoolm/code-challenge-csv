<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'authcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'homecontroller';
$route['clients'] = 'clientscontroller';
$route['products'] = 'productscontroller';
$route['sellers'] = 'sellerscontroller';
$route['settings'] = 'settingscontroller';
$route['settings/import-data'] = 'settingscontroller/import_data';

$route['logout'] = 'homecontroller/log_out';
