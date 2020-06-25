<?php

require_once('db_credentials.php');


function db_connect() {
    $connection = mysqli_connect(SERVER_HOST, USER,PASSWORD, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect($conn) {
    if(isset($conn)) {
        mysqli_close($conn);
    }
}


function confirm_db_connect() {
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }



?>