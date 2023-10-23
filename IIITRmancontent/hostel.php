<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if ($_SESSION['adloggedin'] != 1) {
    header('location:index.php');
} else {


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Admin Home Page</title>
    </head>

    <body>

    <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQReDKUNzhvqwnpmJJBJpjuN0tGaQfxY2C2Xg&usqp=CAU); height:640px;">
        <a href='http://localhost/IIITRmancontent/adhomepage.php' style="text-align: center; color:white;">
        <u><i>Click here to go to home page</i></u>
        </a>
        

        <div class="card-header" style="font-size:30px;">
            <strong>Between Specific Dates</strong>
        </div>
        <div class="card-body card-block">
            <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport" action="specdate/hostelspec.php">
                <p style="font-size:16px; color:red" text-align="center"> <?php if ($msg) {
                                                                            echo $msg;
                                                                        }  ?> </p>


                <div class="row form-group">
                    <div class="col col-md-3"  style="font-size:30px; font-style:castellar;">
                        <label for="text-input" class=" form-control-label">From Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="fromdate" name="fromdate" value="" class="form-control" required="">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"  style="font-size:30px; font-style:castellar;">
                        <label for="email-input" class=" form-control-label">To Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="todate" name="todate" value="" class="form-control" required="">

                    </div>
                </div>



                <div class="card-footer">
                    <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" style="width:200px; height:30px; background-color:black; border-radius:5px;"><b>Submit</b>
                        </button></p>

                </div>
            </form>
        </div>
        <div class="text-center copyright-section">
            <span style="color:red;">&#169</span> <span style="font-style:italic;"> <b>MANAGING MASTERS 2022.All rights reserved</b></span>
        </div>


    </body>

    </html>
<?php } ?>