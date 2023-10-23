<?php
session_start();
error_reporting(0);

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
?>
<?php
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
    <title>Entree Details</title>
  </head>

  <body>
    <?php
    $id = $_GET['editid'];
    $ret = mysqli_query($con, "select * from  requests where id='$id'");
    $cnt = 1;
    while ($row = mysqli_fetch_array($ret)) {
      $id = $row['id'];

    ?>
      <h2 style="text-align: center; color:black; font-style:oblique; background-color:aqua;">Entree details</h2>
      <a style="font-style:italic; margin-left:580px; background-color:black;" href="http://localhost/IIITRmancontent/adhomepage.php">Click here to go to home page</a>
      <table class="table table-borderless table-striped table-earning table-dark">
        <tr>
          <th>Name</th>
          <td><?php echo $row['name']; ?></td>
        </tr>
        <tr>
          <th>Roll no.</th>
          <td><?php echo $row['rollno']; ?></td>
        </tr>
        <tr>
          <th>Request</th>
          <td><?php echo $row['requests']; ?></td>
        </tr>
        
        <?php if ($row['response'] == "") { ?>
          <form method="post">
            <tr>
              <th>Your response :</th>
              <td>
                <textarea name="response" placeholder="" rows="4" cols="4" class="form-control wd-450" required="true"></textarea>
              </td>
            </tr>
            <tr align="center">
              <td colspan="2"><button type="submit" name="submit" class="">Update</button></td>
            </tr>
          </form>
        <?php } else { ?>

          <tr>
            <th>Your response: </th>
            <td><?php echo $row['response'];
              } ?>
      </table>
    <?php } ?>
    <?php
    if (isset($_POST['submit'])) {
      $response = $_POST['response'];
      $query = mysqli_query($con, "update requests set response='$response' where  id='$id'");

      if ($query) {
        $msg = "Details have been Updated.";
      } else {
        $msg = "Something Went Wrong. Please try again";
      }
    } ?>


    <label>
      <div class="msg" style=" color:red; font-weight:bold; text-align:center; margin-left:550px;">
        <?php if ($msg) {
          echo $msg;
        }  ?>
      </div>
    </label>
    <div class="text-center copyright-section">
      <span style="color:red;">&#169</span> <span style="font-style:italic;"> MANAGING MASTERS 2022.All rights reserved</span>
    </div>

  </body>

  </html>
<?php } ?>