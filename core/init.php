<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(1);
session_start();

// Create and initialize variables
$errors = array();

// Define paths
define("DS", DIRECTORY_SEPARATOR);
define("APP_ROOT", dirname(dirname(__FILE__)).DS);


// Require resource files  
require_once APP_ROOT . "db/dbConnection.php";
require_once APP_ROOT . "core/common.php";
require_once APP_ROOT . "functions/functions.php";

//Class instances
// $profile = new Profile();
// $user = new User();



//$message = $session->message();

// Obtain the filename of current page
$page = basename($_SERVER['PHP_SELF']);
