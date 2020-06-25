<?php 

require_once('phpMailer/PHPMailerAutoload.php');

function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
 return $string;
}

function u($string="") {
    return urlencode($string);
}

function redirect_to($location) {
    header('Location: '.$location);
    exit();
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function email_error($instance) {
    return  'Mailer Error: ' . $instancemail->ErrorInfo;
}

function send_email($post_data, $mail, $fullname) {
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


    $instancemail->addAttachment($post_data['cv']);         // Add attachments
    $instancemail->addAttachment($post_data['membership']);
    $instancemail->isHTML(true);                                  // Set email format to HTML

    $instancemail->Subject = 'RITI Application';
    $instancemail->Body    =  email_message($email, $fullname);

    if(!$instancemail->send()){
        return false;
    }else {
        return true;
    }
}

function upload_file($filename) {
    $path = get_file_uload_folder() . basename($_FILES[$filename]['name']);
    echo 'path is'. $path;
    move_uploaded_file($_FILES[$filename]["tmp_name"], $path);
    return $path;
}

function is_valid_query($results) {
    if (!$result_set) {
    	return false;
    }
    return true;
}


function set_message($query_results) {
    if(is_valid_query($query_results)) {
        $_SESSION['msg_type'] = 'success';
        $_SESSION['message'] =  'Message send Successfully';
    }else {
        $_SESSION['msg_type'] = 'danger';
        $_SESSION['message'] = 'error while sending message';
    }


}



function email_message($email, $fullname) {
    $mail_message = '
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

    return  $mail_message;
}

function url($path){
    $my_base_url = sprintf(
      "%s://%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME']
    );

    return $my_base_url .$path;
  }

  function get_file_uload_folder() {
    $folder_dir = (explode('/', UPLOAD_FOLDER));
    $folder =array_pop( $folder_dir);

    return '/'. $folder .'/';

  }

?>