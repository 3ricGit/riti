<?php

require 'connectDB.php'; 
require 'helpers.php';




if ($conn->connect_errno) {
    die("Failed to connect to a database ". $conn->connect_error);

}else {

    // apply
    if (isset($_POST['apply'])) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["cv"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $cv = "";

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $cv = $fileName;
        }else {
            $cv = "";
        }



        $email = $_POST['email'];
        $firstName = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $profession = $_POST['profession'];
        $certificate = $_POST['certificate'];
        $identity = $_POST['identity'];
        $nationality = $_POST['nationality'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $residence = $_POST['residence'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $maritalStatus = $_POST['maritalStatus'];
        $occupation = $_POST['occupation'];
        $designation = $_POST['designation'];


        $sql = "INSERT INTO apply(
            email, firstName, lastname, profession, certificate, identity, nationality, address, phone, residence, dob, gender, maritalStatus, occupation, designation, cv ) 
        values (
            '$email', '$firstName', '$lastname', '$profession', '$certificate', '$identity', '$nationality', '$address', '$phone', '$residence', '$dob', '$gender', '$maritalStatus', '$occupation', '$designation', '$targetFilePath')";
        $msg = "we have received your application";
        returnMessage($sql, $conn, $msg, $firstName);

       
    }


    // contact us page

    if (isset($_POST['contact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, message) values ('$name', '$email', '$message')";
        $msg = "we shall contact you shortly";
        returnMessage($sql, $conn, $msg,  $name);

    }











}






?>