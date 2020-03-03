<?php

session_start();
$HOST = 'localhost';
// $USER = 'ritiasso_root';
// $PASSWORD = '^e8.6g[zJ5%.';
$USER = 'root';
$PASSWORD = 'Chirchir1.';
// $DB = 'ritiasso_riti';
$DB = 'riti';

$port = '3306';

$conn = new mysqli($HOST, $USER, $PASSWORD, $DB);


?>