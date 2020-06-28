<?php
session_start();
ob_start();


// ini_set('display_errors', "On");
// error_reporting(E_ALL);

define('PRECESSOR_FOLDER', dirname(__FILE__));
define('PROJECT_FOLDER', dirname(PRECESSOR_FOLDER));
define('UPLOAD_FOLDER', PROJECT_FOLDER . '/uploads');

// find end position of admin
$admin_end =strpos( $_SERVER['SCRIPT_NAME'], '/admin')+6;
// get admin folder
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $admin_end);

define('WWW_ROOT', $doc_root);

require_once('helpers.php');
require_once('connectDB.php');
require_once('sql_queries.php');

$db = db_connect()




?>