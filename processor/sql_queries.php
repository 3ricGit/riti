<?php

function insert_into_contact($db,$name, $email, $message) {
    $sql = "INSERT INTO contact (name, email, message) values ('$name', '$email', '$message')";
    $results = mysqli_query($db, $sql);
    return results;
}



?>