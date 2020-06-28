<?php
session_destroy();
require_once '../processor/processor.php';

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    redirect_to(url_for('index.php'));

}

$email='';
$password='';
$error = '';

if(is_post_request()) {
    $email  =clean_text($_POST['email']);
    $password= clean_text($_POST['password']);

    $sql = "SELECT * FROM user where email='$email'";
    $results = mysqli_query($db, $sql);
    if ($results) {
       // user found
       $row = mysqli_fetch_assoc($results);

       //check for password
       if($password===$row[password]) {
           // log user in
           $_SESSION['loggedin']=true;
           $_SESSION['email'] = $row['email'];
           redirect_to(url_for('index.php'));


       }else {
           // log user out
           $error = "password provided is invalid";
       }
    }else {
        // user not found
        $error = 'email/password is wrong';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './header.php'; ?>
</head>

<body>
    <div class="body-container d-flex justify-content-center align-items-center">
        <div class="card w-50">
            <div class="card-header text-center ">
                RITI Association

            </div>
            <div class="card-body">


                <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email">

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn  btn-block btn-primary">Login</button>
                    <?php if ($error):?>
                    <span><?php echo $error?></span>
                    <?php endif?>
                </form>
            </div>
        </div>

    </div>


</body>

</html>