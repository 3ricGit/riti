<?php
require '../processor/processor.php';?>

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
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>


                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>


                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <?php require '../main/footer.php'; ?>
</body>

</html>