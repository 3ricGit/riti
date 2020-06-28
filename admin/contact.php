<?php
require '../processor/processor.php';
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true) {
    redirect_to(url_for('login.php'));
    exit;

}

$sql = "SELECT * FROM contact   ORDER BY id DESC";

$results = mysqli_query($db, $sql);
$rowcount=mysqli_num_rows($results);

$counter = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './header.php'; ?>
</head>

<body>
    <?php require './navbar.php'; ?>
    <div class="container ">
        <div class="row admin-top-padding ">
            <div class="col-12">
                <span class="riti-admin-header">RITI Administration</span>
                <div class="admin-underline"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <h1>Messages</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-8 mx-auto">
                <?php if(!$rowcount):?>
                <h1 class="h5 my-4">No messages yet<h1>
                        <?php exit ?>
                        <?php endif?>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">FullName</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($contact = mysqli_fetch_assoc($results)):?>
                                    <?php $counter +=1?>
                                    <tr>
                                        <th scope="row"><?php echo $counter?></th>
                                        <td><?php echo $contact['name']?></td>
                                        <td><?php echo $contact['email']?></td>
                                        <td><?php echo $contact['message']?></td>

                                        <td>reply</td>

                                    </tr>

                                    <?php endwhile?>
                                </tbody>
                            </table>
                        </div>

            </div>
        </div>
    </div>


    <?php require '../main/footer.php'; ?>
</body>

</html>