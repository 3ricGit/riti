<?php
require '../processor/processor.php';

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
redirect_to(url_for('login.php'));
exit;
?>