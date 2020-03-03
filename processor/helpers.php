<?php 

// variable declarations

// apply variables
$email = "";
$firstName = '';
$lastname = '';
$county = '';
$description = '';


// contact variable
$message = '';
$status = '';
$message = '';

// call me now 
$name = '';
$phone = '';
$c_email = '';
$interest = '';


// messages

$success_message = '';

function returnMessage($sql, $conn, $msg,  $name) {
    if ($conn->query($sql)=== TRUE) {
        $_SESSION['msg_type'] = 'success';
        $_SESSION['message'] =  'Dear '.$name.', '.$msg;

    }else {
        $ERROR = $conn->error;
        $_SESSION['msg_type'] = 'danger';
        $_SESSION['message'] = 'check errors in your form'.$conn->error;
    }
}


?>