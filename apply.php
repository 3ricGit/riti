<?php
require './processor/processor.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require './main/head.php';?>
</head>
<body>
<?php require './main/preloader.html';?>
    <?php require './main/navbar.php';?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 col-sm-12 mx-auto">

            <div class="apply-now">
                <h1>Download application form <a href="./membershipForm.docx">here</a> or  Apply with the following form</h1>
                <div class="dropdown-items-divide-hr"></div>

            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" class="shadow-lg p-3 mb-5  bg-white rounded" enctype="multipart/form-data">
            <?php if(isset($_SESSION['message'])): ?>
                <?php require './main/message.php';?>
            <?php endif ?>


            <div class="form-row">
            <h1><?php echo $rrorMessage ?></h1>
                <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="John" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Doe" required>
                </div>
            </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone No.</label>
                    <input name="phone" type="tel" class="form-control" id="phone" placeholder="0712345678" required pattern="\d*">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="id">ID/Passport</label>
                    <input name="identity" type="text" class="form-control" id="id" placeholder="governement ID" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input name="nationality" type="text" class="form-control" id="nationality" placeholder="i.e Kenyan" required>
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">Area of Specialiazation</label>
                    <input name="profession" type="text" class="form-control" id="profession" placeholder="Education" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="certificate">Certificate</label>
                    <input name="certificate" type="text" class="form-control" id="certificate" placeholder="e.g. Diploma" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="residence">Current Residence/Estate</label>
                    <input name="residence" type="text" class="form-control" id="residence" placeholder="e.g Kasarani" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address" placeholder="3040, Nairobi" required>
                </div>
            </div>
           <div class="form-group">
                <label for="dob">DOB</label>
                <input name="dob" type="date" class="form-control" id="dob" placeholder="" required>
            </div>
            <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                        <label class="form-check-label" for="gridRadios1" >
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                        </div>

                    </div>
                    </div>
            </fieldset>
            <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Marital Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="maritalStatus" id="married" value="married" checked>
                        <label class="form-check-label" for="married">
                            Married
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="maritalStatus" id="single" value="single">
                        <label class="form-check-label" for="single">
                            Single
                        </label>
                        </div>

                    </div>
                    </div>
            </fieldset>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <select name="occupation" class="form-control" id="occupations" required>
                <option>Self-Employed</option>
                <option>Private</option>
                <option>Government</option>
                <option>Organization</option>
                <option>Unemployed</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="designation">Designation</label>
                    <input name="designation" type="text" class="form-control" id="designation" placeholder="i.e job place" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tel">Tel. </label>
                    <input name="tel" type="text" class="form-control" id="tel" placeholder="i.e Tel" required>
                </div>
           </div>

          
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload CV</label>
                <input name='cv' type="file" class="form-control-file" id="exampleFormControlFile1" accept=".pdf, .docx, .doc" required>
            </div>
            <div class="form-group">
                <button name="apply" class="btn btn-block apply-button">Submit</button>
            </div>
            </form>

            </div>
        
        </div>


        
    </div>
    </div>



    <?php require './main/footer.php'; ?>
</body>
</html>