<?php
//*DEBUG ERROR REPORTING
ini_set('display_errors', 1); 
ini_set('log_errors', 1); 
ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); 
error_reporting(E_ALL);
//END DEBUG ERROR REPORTING*/

session_start();

include './config/autoloader.php';

//DEFAULT TEMPLATE
App::set('APP_NAME', 'SmallVC');
//END DEFAULT TEMPLAT
//
//DEFAULT TEMPLATE
App::set('DEFAULT_TEMPLATE', 'default');
//END DEFAULT TEMPLATE

//DEFAULT TITLE
App::set('DEFAULT_TITLE', 'Small-VC');
//END DEFAULT TITLE

//LOGIN SEED
App::set('LOGIN_SEED', "lijfg98u5;jfd7hyf");
//END LOGIN SEED

App::set('DEFAULT_CONTROLLER', 'AppController');