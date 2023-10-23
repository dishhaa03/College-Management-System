<?php
session_start();
error_reporting(0);
include('dbconnection.php');

if (isset($_POST['adlogin'])) {
    $adusername = $_POST['adusername'];
    $adpassword = $_POST['adpassword'];
    $query = mysqli_query($con, "select id from adlogin where Name='$adusername' && Password='$adpassword'");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['adID'] = $ret['id'];
        $_SESSION['adloggedin'] = 1;
        header("Location:adhomepage.php");
    } else {
        $_SESSION['adloggedin'] = 0;
        $msg1 = "Invalid details.";
    }
}

if (isset($_POST['stlogin'])) {
    $stemail = $_POST['stemail'];
    $stpassword = $_POST['stpassword'];
    $query = mysqli_query($con, "select ID from stlogin where Email='$stemail' && Password='$stpassword'");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['stID'] = $ret['ID'];
        $_SESSION['stloggedin'] = 1;
        header('Location:sthomepage.php');
    } else {
        $_SESSION['stloggedin'] = 0;
        $msg2 = "Invalid details.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="fluid-container">
            <h4><?php echo $msg ?></h4>
        </div>
        <div class="row">
            <div class="col-8 col-md-4 login-box" style="width:400px; height:310px;margin-left:200px; margin-top:3%">
                <a href="https://iiitr.ac.in" target="_blank" style="font-size:25px; color:black; font-weight:bold">
                    IIITR ENTRY MANAGEMENT SYSTEM
                </a>
                <p style="font-size:18px; color:blue;">STUDENT LOGIN</p>


                <form action="" method="post" name="stlogin">
                    <div class="form-group" style="padding:10px;">
                        <label>Email</label>
                        <input type="text" name="stemail" placeholder="Email" required=true; />
                    </div>
                    <div class="form-group" >
                        <label>Password</label>
                        <input type="password" name="stpassword" placeholder="Password " required=true; />
                    </div>
                    <label>
                        <div class="error" style=" color:red; font-weight:bold; width:250px;">
                            <?php if ($msg2) {
                                echo $msg2;
                            }  ?>
                        </div>
                    </label>
                    <div class="form-group">
                        <input type="submit" class="stlogin" name="stlogin" value="Login" style="background-color: blue; color:white; border-radius:20px; height:50px; width:100px;"/>
                    </div>
                </form>
            </div>
            <div class="col-8 col-md-4 login-box" style="width:400px; height:310px; margin-left:30px; margin-top:3%">
                <a href="https://iiitr.ac.in" target="_blank" style="font-size:25px; color:black; font-weight:bold">
                    IIITR ENTRY MANAGEMENT SYSTEM
                </a>
                <p style="font-size:18px; color:blue;">ADMIN LOGIN</p>


                <form action="" method="post" name="adlogin">
                    <div class="form-group" style="padding:10px;">
                        <label>Username</label>
                        <input type="text" name="adusername" placeholder="Username" required=true; />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="adpassword" placeholder="Password" required=true />
                    </div>
                    <label>
                        <div class="error" style=" color:red; font-weight:bold; width:250px;">
                            <?php if ($msg1) {
                                echo $msg1;
                            } ?>
                        </div>
                    </label>
                    <div class="form-group">
                        <input type="submit" class="adlogin" name="adlogin" value="Login"  style="background-color: blue; color:white; border-radius:20px; height:50px; width:100px;"/>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>