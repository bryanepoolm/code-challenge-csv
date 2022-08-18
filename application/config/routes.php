<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['clients'] = 'clientscontroller';
$route['inventary'] = 'inventarycontroller';
$route['settings'] = 'settingscontroller';
$route['settings/import-data'] = 'settingscontroller/import_data';
