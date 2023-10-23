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
if ($_SESSION['stloggedin'] != 1) {
    header('location:index.php');
} else {

    $stid = $_SESSION['stID'];
    $ret = mysqli_query($con, "select * from stlogin where id='$stid'");
    $row = mysqli_fetch_array($ret);
    $roll = $row['rollno'];
    $name = $row['Name'];
    $email = $row['Email'];

?>
    <?php


    $requests = $_POST['request'];

    if (isset($_POST['submit'])) {

        $sql = "INSERT INTO requests (name,rollno,requests,email) VALUE ('$name','$roll','$requests','$email')";
        if (mysqli_query($con, $sql)) {

            $msg = "entry successful";
        } else {
            echo "ERROR in inserting data to database";
            mysqli_error($con);
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
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Add New Entry</title>
    </head>

    <body>
        <div class="signup d-flex flex-row justify-content-center" style="background-size:cover; ;
    height:100vh; background-image:url(https://cdn1.vectorstock.com/i/1000x1000/15/80/triangle-web-page-background-vector-4661580.jpg); ">
            <div class="signup-box " style="background-color:#e8e8e8; color:black; border-style:solid; margin-top:90px; width:700px; height:450px; text-align:center; padding:20px; border-radius: 100px;  border-width:2px; 
">
                <div class="">
                    <a href="https://iiitr.ac.in" target="_blank" style="font-size:28px; color:black; font-family:sans-serif;">
                        <b>IIIT RAICHUR ENTRY MANAGEMENT SYSTEM</b>
                    </a>
                    <p style="font-size:25px ;color:black; font-family:sans-serif;"> <b>Request</b></p>

                    <p style="font-size:16px; color:black" text-align="center">

                    </p>
                    <label>
                        <div class="update" style=" color:red; font-weight:bold; width:250px;">
                            <?php if ($msg) {
                                echo $msg;
                            }  ?>
                        </div>
                    </label>
                    <div>
                        <form action="" method="post" name="request submit" style="text-align:center;margin-bottom:2px ;">
                            <div>
                                <tr>
                                    <th>Enter your request :</th>
                                    <td>
                                        <textarea name="request" placeholder="Enter your Request:" rows="4" cols="50" class="form-control wd-450" required="true"></textarea>
                                    </td>
                                </tr>
                            </div>

                    </div>
                    <button class="submit" style="margin:30px; width:250px; height:50px; font-size:20px; background-color:blue; color:white; font-weight:bold; border-radius:15px;" type="submit" name="submit">Submit your Request</button>

                </div>
                </form>
            </div>


        </div>
        </div>
        </div>
    </body>

    </html>




<?php } ?>