<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if ($_SESSION['adloggedin'] != 1) {
  header('location:index.php');
} else {
  $name = $_REQUEST['name'];
  $rollno = $_REQUEST['rollno'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $confirmpassword = $_REQUEST['confirmpassword'];
  if (isset($_POST['Submit'])) {
    if ($confirmpassword != $password) {
      $msg = "Password did not match";
    } else {
      $sql = "INSERT INTO stlogin VALUES ( NULL, '$name','$rollno', '$email','$password')";
      if (mysqli_query($con, $sql)) {
        // header('location:adhomepage.php');
        // echo "<h3> Data stored in database successfully.";
        $msg2 = "Student Signup Successful!";
      } else {
        echo "ERROR in inserting data to database";
        mysqli_error($con);
      }
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
    <title>New student entry</title>
  </head>

  <body>
    <div class="signup d-flex flex-row justify-content-center" style="background-image:url(https://www.djdesignerlab.com/wp-content/uploads/2021/01/3D-Animated-Website-Backgrounds.jpg); background-size:cover;
    height:100vh;">
      <div class=" " style="background-color:#Add8E6; color:black; margin-top:80px;border-style:solid;  text-align: center; padding: 20px; border-width:2px; margin-bottom:100px; border-radius:80px; ">
        <div class="">
          <a href="https://iiitr.ac.in" target="_blank" style="font-size:35px; color:Black; font-family:sans-serif;">
            <b>IIIT RAICHUR ENTRY MANAGEMENT SYSTEM</b>
          </a>
          <p style="font-size:25px ;color:black;"> STUDENT SIGNUP</p>

          <p style="font-size:16px; color:black" text-align="center">

          </p>

          <!--form started for login-->
          <form action="" method="post" name="signup">
            <div>
              <label for="username" style="padding:10px;"> Username</label>
              <input class="" type="text" name="name" id="name" placeholder="name" required="true">
            </div>
            <div>
              <label for="rollno" style="padding:10px;"> Roll no.</label>
              <input class="" type="text" name="rollno" id="rollno" placeholder="Roll no." required="true">
            </div>
            <div>
              <label for="email" style="padding:10px;">Email ID</label>
              <input type="email" id="email" name="email" placeholder="email" required="true">
            </div>
            <div>
              <label for="password" style="padding:10px;">Password</label>
              <input type="password" id="password" name="password" placeholder="Password" required="true">
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
  </body>

  </html>
<?php } ?>