<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if ($_SESSION['adloggedin'] != 1) {
    header('location:index.php');
} else {


?>
    <?php
    // session_start();
    error_reporting(0);
    $adminid = $_SESSION['adID'];
    $ret = mysqli_query($con, "select * from adlogin where id='$adminid'");
    $row = mysqli_fetch_array($ret);
    $name = $row['Name'];
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

        <!-- <div class="d-flex flex-row " style="height:90px;"> -->
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="images/logo.jpg" alt="IIITR logo" style="width:100%" class="img1" />
                </div>
                <div class="col-md-4 col-12 d-flex flex-column justify-content-center">
                    <div class="  ">
                        <a href='search-page.php'><button class=" button2 mt-3 mr-3 ml-3" style="width: 40%; background-color:black;color:white;">Search Entries</button></a>

                        <a href="viewrequests.php"><button class="button2 mt-3" style="width:40%;background-color:black;color:white;">View Requests</button></a><br>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="d-flex flex-row">
                        <img src="data:image/png;base64,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" class="login-logo">
                        <div>
                            <h5 class="" style="text-decoration:underline; font-size:21px; font-weight:bold; margin-left:34px;">
                                <?php echo $name ?>
                            </h5>
                            <a href="logout.php" transition:background-color:white 400ms linear ease-in;>
                                <button class="logout" name="logout" style="background-color:black;color:white;width:100px;height:40px;border-radius:5px;margin-bottom:10px; margin-left:20px;  margin-top:0px;" href='logout.php'>LOG OUT</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-container">
            <div class="fluid-container">
                <div class="row">
                    <!-- <div class="d-flex flex-row justify-content-center"> -->
                    <div class="col-12 col-lg-4 side-bar" style="background-color: white; ">
                        <a href="ad_newstudent.php"><button class="button2 button" style="width:80%;">New Student account</button></a><br>
                        <a href="ad_newentry.php"><button class="button2 button" style="width:80%;">New Entry</button></a><br>
                        <a href="ad_manageentry.php"><button class="button2 button" style="width:80%;">Manage Entries</button></a><br>
                        <a href="ad_specificdateentry.php"><button class="button2 button" style="width:80%;">Entries between specific dates</button></a><br>
                        <a href="ad_changepassword.php"><button class="button2 button" style="width:80%; margin-bottom:0px;">Change Password</button></a><br>

                    </div>
                    <?php
                    $query1 = mysqli_query($con, "select id from hostelentry;");
                    $count_hostelentries = mysqli_num_rows($query1);
                    $query2 = mysqli_query($con, "select id from acadblockentry;");
                    $count_acadentries = mysqli_num_rows($query2);
                    $query3 = mysqli_query($con, "select id from sportsentry;");
                    $count_sportsentries = mysqli_num_rows($query3);
                    $query4 = mysqli_query($con, "select id from libraryentry;");
                    $count_libraryentries = mysqli_num_rows($query4);
                    ?>

                    <div class="col-12 col-md-6 col-lg-4" style="background-color: white;">
                        <div class="visitor-card text-center card1" style="background-color:pink; margin-top:15px;">
                            <h4>Hostel entries till now</h4>
                            <h1 class="count"><?php echo $count_hostelentries ?></h1>
                        </div>
                        <div class="visitor-card text-center" style="background-color:pink; margin-top:15px;">
                            <h4>sports entries till now</h4>
                            <h1 class="count"><?php echo $count_sportsentries ?></h1>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" style="background-color: white;">
                        <div class="visitor-card text-center card1" style="background-color:pink; margin-top:15px;">
                            <h4>Acad block entries till now</h4>
                            <h1 class="count"><?php echo $count_acadentries ?></h1>
                        </div>
                        <div class="visitor-card text-center" style="background-color:pink; margin-top:15px;">
                            <h4>Library entries till now</h4>
                            <h1 class="count"><?php echo $count_libraryentries ?></h1>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-4" style="background-color: white;">
                        
                    </div>
                    <div class="col-12 col-md-4" style="background-color: white;">
                        
                    </div> -->
                </div>
            </div>
        </div>

        <div class="text-center copyright-section" style="margin-bottom:10px;">
            <span style="color:red;">&#169</span> <span style="font-style:italic;"> <b>MANAGING MASTERS 2022.All rights reserved</b></span>
        </div>


    </body>

    </html>
<?php } ?>
<!-- where date(date)=CURDATE()-2 -->