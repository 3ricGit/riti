<?php
require('phpMailer/PHPMailerAutoload.php');
require 'connectDB.php'; 
require 'helpers.php';




if ($conn->connect_errno) {
    die("Failed to connect to a database ". $conn->connect_error);

}else {

    // apply
    if (isset($_POST['apply'])) {
        $path = 'uploads'.$_FILES["cv"]["name"];
        move_uploaded_file($_FILES["cv"]["tmp_name"], $path);
        
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
        $fullname = $firstName.' '.$lastname;
        $rrorMessage = '';
        $Mailmessage = '
        <table class="table" border="1" width="100%" cellpadding="5" cellspacing="5">
        <tbody>
        <tr>
          <td width="30%">Email</td>
          <td width="70%">'.$email.'</td>
        </tr>
        <tr>
          <td width="30%">Fullname</td>
          <td width="70%">'.$fullname.'</td>
        </tr>
        <tr>
          <td width="30%">Profession</td>
          <td width="70%">'.$profession.'</td>
        </tr>
        <tr>
          <td width="30%">Certificate</td>
          <td width="70%">'.$certificate.'</td>
        </tr>
        <tr>
          <td width="30%">ID</td>
          <td width="70%">'.$identity.'</td>
        </tr>
        <tr>
        <td width="30%">Nationality</td>
        <td width="70%">'.$nationality.'</td>
      </tr>
        <tr>
        <td width="30%">Address</td>
        <td width="70%">'.$address.'</td>
        </tr>

        <tr>
        <td width="30%">Phone</td>
        <td width="70%">'.$phone.'</td>
      </tr>

        <tr>
        <td width="30%">Residence</td>
        <td width="70%">'.$residence.'</td>
        </tr>

        <tr>
        <td width="30%">DOB</td>
        <td width="70%">'.$dob.'</td>
      </tr>

        <tr>
        <td width="30%">Gender</td>
        <td width="70%">'.$gender.'</td>
        </tr>

        <tr>
        <td width="30%">Marital Status</td>
        <td width="70%">'.$maritalStatus.'</td>
        </tr>

        <tr>
        <td width="30%">Occupation</td>
        <td width="70%">'.$occupation.'</td>
      </tr>

      <tr>
      <td width="30%">Designation</td>
      <td width="70%">'.$designation.'</td>
    </tr>
        ';
        $instancemail = new PHPMailer;
        $instancemail->isSMTP();                                      // Set mailer to use SMTP
        $instancemail->Host = 'mail.ritiassociation.or.ke';  // Specify main and backup SMTP servers
        $instancemail->SMTPAuth = false;                               // Enable SMTP authentication
        $instancemail->Username = 'application@ritiassociation.or.ke';                 // SMTP username
        $instancemail->Password = 'RehabiliTitationRiti';                           // SMTP password
        $instancemail->SMTPSecure = false;   
        $instancemail->SMTPAutoTLS= false;                           // Enable TLS encryption, `ssl` also accepted
        $instancemail->Port = 25;                                    // TCP port to connect to

        $instancemail->setFrom($email, $fullname);
        $instancemail->addAddress('application@ritiassociation.or.ke');     // Add a recipient
        // $instancemail->addAddress('director.ritiassociation@gmail.com');               // Name is optional
        // $instancemail->addReplyTo('info@example.com', 'Information');
       

        $instancemail->addAttachment($path);         // Add attachments
        $instancemail->isHTML(true);                                  // Set email format to HTML

        $instancemail->Subject = 'RITI Application';
        $instancemail->Body    = $Mailmessage;
        $instancemail->AltBody = $Mailmessage;

        if(!$instancemail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $instancemail->ErrorInfo;
            

        } else {

            //returing email to the sender
            $sql = "INSERT INTO apply(
                email, firstName, lastname, profession, certificate, identity, nationality, address, phone, residence, dob, gender, maritalStatus, occupation, designation, cv ) 
            values (
                '$email', '$firstName', '$lastname', '$profession', '$certificate', '$identity', '$nationality', '$address', '$phone', '$residence', '$dob', '$gender', '$maritalStatus', '$occupation', '$designation', '$path')";
            $msg = "we have received your application";
            returnMessage($sql, $conn, $msg, $firstName);
           

            
        }

        
       
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