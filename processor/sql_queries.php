<?php

function insert_into_contact($db,$name, $email, $message) {
    $sql = "INSERT INTO contact (name, email, message) values ('$name', '$email', '$message')";
    $results = mysqli_query($db, $sql);
    return results;
}

function insert_into_membership($db, $fullname, $email, $membership_path, $cv_path){
    $sql = "INSERT INTO membership (fullName, email, membershipForm, cv) values ('$fullname', '$email', '$membership_path', '$cv_path')";
    $results = mysqli_query($db, $sql);
    return $results;
}



?>