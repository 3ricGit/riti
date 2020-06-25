<?php
session_start();
ob_start();


// ini_set('display_errors', "On");
// error_reporting(E_ALL);

define('PRECESSOR_FOLDER', dirname(__FILE__));
define('PROJECT_FOLDER', dirname(PRECESSOR_FOLDER));
define('UPLOAD_FOLDER', PROJECT_FOLDER . '/uploads');

require_once('helpers.php');
require_once('connectDB.php');
require_once('sql_queries.php');

$db = db_connect()




?>