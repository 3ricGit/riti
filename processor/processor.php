<?php
require('phpMailer/PHPMailerAutoload.php');
require 'connectDB.php';
require 'helpers.php';




if ($conn->connect_errno) {
  die("Failed to connect to a database " . $conn->connect_error);
} else {

  // apply
  if (isset($_POST['apply'])) {
    $path_cv = 'uploads/' . basename($_FILES['cv']['name']);;
    move_uploaded_file($_FILES["cv"]["tmp_name"], $path_cv);

    $path_membership = 'uploads/' . basename($_FILES["membership"]["name"]);
    move_uploaded_file($_FILES["membership"]["tmp_name"], $path_membership);

    $email = $_POST['email'];
    $fullname = $_POST['fullName'];
    $rrorMessage = '';
    $Mailmessage = '
        <table class="table" border="1" width="100%" cellpadding="5" cellspacing="5">
        <tbody>
        <tr>
          <td width="30%">Email</td>
          <td width="70%">' . $email . '</td>
        </tr>
        <tr>
          <td width="30%">Fullname</td>
          <td width="70%">' . $fullname . '</td>
        </tr>
       </tbody>
       </table>
        ';
    $instancemail = new PHPMailer;
    $instancemail->isSMTP();                                      // Set mailer to use SMTP	    $instancemail->SMTPOptions = array(
    $instancemail->Host = 'mail.ritiassociation.or.ke';  // Specify main and backup SMTP servers	      'ssl' => array(
    $instancemail->SMTPAuth = false;                               // Enable SMTP authentication	        'verify_peer' => false,
    $instancemail->Username = 'application@ritiassociation.or.ke';                 // SMTP username	        'verify_peer_name' => false,
    $instancemail->Password = 'VH:wg)0E1d9Ru2';                           // SMTP password	        'allow_self_signed' => true
    $instancemail->SMTPSecure = false;
    $instancemail->Port = 25;                                    // TCP port to connect to	    $instancemail->isSMTP();                                      // Set mailer to use SMTP

    $instancemail->Mailer = "smtp";
    $instancemail->setFrom($email, $fullname);
    $instancemail->SMTPDebug  = 1;
    /* Disable some SSL checks. */
    $instancemail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    $instancemail->addAddress('application@ritiassociation.or.ke');


    $instancemail->addAttachment($path_cv);         // Add attachments
    $instancemail->addAttachment($path_membership);
    $instancemail->isHTML(true);                                  // Set email format to HTML

    $instancemail->Subject = 'RITI Application';
    $instancemail->Body    = $Mailmessage;
    $instancemail->AltBody = $Mailmessage;

    if (!$instancemail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $instancemail->ErrorInfo;
    } else {

      //returing email to the sender
      $sql = "INSERT INTO membership(
                fullName, email, cv, membershipForm ) 
            values (
                '$fullname', '$email',  '$path_cv', '$path_membership')";
      $msg = "we have received your application";
      returnMessage($sql, $conn, $msg, $fullname);
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