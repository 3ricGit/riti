<?php
require './processor/processor.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './main/head.php'; ?>
</head>

<body>
    <?php require './main/preloader.html'; ?>
    <?php require './main/navbar.php'; ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 col-sm-12 mx-auto">

                <div class="apply-now">
                    <h1 class="text-left"> Membership Application Process</h1>
                    <ol class="mb-5">
                        <li>download the <a href="membership.pdf"><b>MEMBERSHIP FORM HERE <i
                                        class="fas fa-file-pdf"></i></b></a>
                        </li>
                        <li>print the membership form</li>
                        <li>fill all the required fields in the membership form printed</li>
                        <li>scan the filled membership form and upload it together with your CV using the form below
                        </li>
                        </0l>


                        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"
                            class="shadow-lg p-3 mb-5 mt-5 bg-white rounded" enctype="multipart/form-data">
                            <?php if (isset($_SESSION['message'])) : ?>
                            <?php require './main/message.php'; ?>
                            <?php endif ?>


                            <div class="form-row row">
                                <h1><?php echo $rrorMessage ?></h1>
                                <div class="form-group col-md-6">
                                    <label for="fullname">fullname</label>
                                    <input name="fullName" type="text" class="form-control" id="fullname"
                                        placeholder="John Doe" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email address</label>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="name@example.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="membership">Upload Scanned Membership Form</label>
                                <input name='membership' type="file" class="form-control-file" id="membership" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload CV</label>
                                <input name='cv' type="file" class="form-control-file" id="exampleFormControlFile1"
                                    accept=".pdf, .docx, .doc" required>
                            </div>
                            <div class="form-group">
                                <button name="apply" class="btn btn-block apply-button">Submit</button>
                            </div>
                        </form>
                </div>




            </div>

        </div>



    </div>
    </div>



    <?php require './main/footer.php'; ?>
</body>

</html>