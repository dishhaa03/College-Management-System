<?php
session_start();
error_reporting(0);
$host = "localhost";
$user = "root";
$password = '';
$db_name = "iiitrentry";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
if ($_SESSION['adloggedin'] != 1) {
    header('location:index.php');
} else {

    $adid = $_SESSION['adID'];
    $ret = mysqli_query($con, "select * from adlogin where id='$adid'");
    $row = mysqli_fetch_array($ret);
    $password = $row['Password'];

    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    // $ret = mysqli_query($con, "UPDATE `stlogin` SET `Password` = 'sani' WHERE `stlogin`.`ID` = 51");

?>
    <?php

    if (isset($_POST['Submit'])) {


        if ($oldpassword == $password) {
            if ($newpassword == $confirmpassword) {
                $change = mysqli_query($con, " UPDATE `adlogin` SET `Password` = '$newpassword' WHERE `adlogin`.`ID`= '$adid'");
                $msg = "Password changed successfully";
            } else {
                $msg2 = "Password did not match";
            }
        } else {
            $msg2 = "Enter correct password";
        }
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <title>Document</title>
    </head>

    <body>
        <div class="signup d-flex flex-row justify-content-center" style="background-size:cover; ;
    height:100vh; background-image:url(https://miro.medium.com/max/1400/1*S-eCEF0XS4J6TZW9NqJyIQ.jpeg); ">
            <div class="signup-box " style="background-color:#e8e8e8; color:black; border-style:solid; margin-top:90px; width:700px; height:450px; text-align:center; padding:20px; border-radius: 100px;  border-width:2px; 
">
                <div class="">
                    <a href="https://iiitr.ac.in" target="_blank" style="font-size:28px; color:black; font-family:sans-serif;">
                        <b>IIIT RAICHUR ENTRY MANAGEMENT SYSTEM</b>
                    </a>
                    <p style="font-size:25px ;color:black; font-family:sans-serif;"> <b>Change Password</b></p>

                    <p style="font-size:16px; color:black" text-align="center">

                    </p>
                    <label>
                        <div class="update" style=" color:red; font-weight:bold; width:250px;">
                        </div>
                    </label>
                    <div>
                        <form action="" method="post" name="signup">
                            <label for="password" style="padding:10px;">Current Password</label>
                            <input type="password" id="oldpassword" name="oldpassword" placeholder="Current Password" required="true">
                    </div>
                    <div>
                        <label for="password" style="padding:10px;">New Password</label>
                        <input type="password" id="newpassword" name="newpassword" placeholder="New Password" required="true">
                    </div>
                    <div>
                        <label for="confirmpassword" style="padding:10px;">Confirm Password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required="true">
                    </div>
                    <div>
                        <label>
                            <div class="error" style=" color:red; font-weight:bold; width:250px;">
                                <?php if ($msg) {
                                    echo $msg;
                                } else if ($msg2) {
                                    echo $msg2;
                                }  ?>
                            </div>
                        </label>
                    </div>
                    <button class="button" type="Submit" style="width:200px; height:40px; font-size:20px; background-color:black; color:white;font-weight:bold; border-radius:40px;" name="Submit">Submit</button>


                    </form>
                </div>


            </div>
        </div>
        </div>

    </body>

    </html>








<?php }
?>