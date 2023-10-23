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
        $ret = mysqli_query($con, "select * from  hostelentry where id='$id'");
        $cnt = 1;
        while ($row = mysqli_fetch_array($ret)) {
            $id = $row['id'];

        ?>
        <h2 style="text-align: center;">Entry details</h2>
        <br>
            <table class="table table-borderless table-striped table-earning table-dark">
                <tr>
                    <th>Name :</th>
                    <td><?php echo $row['entreename']; ?></td>
                </tr>

                <tr>
                    <th>Roll No. :</th>
                    <td><?php echo $row['rollno']; ?></td>
                </tr>
                <tr>
                    <th>Block :</th>
                    <td><?php echo $row['blockname']; ?></td>
                </tr>
                <tr>
                    <th>Room No. :</th>
                    <td><?php echo $row['roomno']; ?></td>
                </tr>
                <tr>
                    <th>Email ID :</th>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <th>Contact Number :</th>
                    <td><?php echo $row['mobno']; ?></td>
                </tr>
                <tr>
                    <th>Date :</th>
                    <td><?php echo $row['date']; ?></td>
                </tr>
                <tr>
                    <th>Return time :</th>
                    <td><?php echo $row['returntime']; ?></td>
                </tr>
                <?php if ($row['remarks'] == "") { ?>
                    <form method="post">
                        <tr>
                            <th>Remarks :</th>
                            <td>
                                <textarea name="remark" placeholder="" rows="4" cols="50" class="form-control wd-450" required="true"></textarea>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2"><button type="submit" name="submit" class="">Update</button></td>
                        </tr>
                    </form>
                <?php } else { ?>

                    <tr>
                        <th>Leaving Remark </th>
                        <td><?php echo $row['remarks'];
                        } ?>
            </table>
        <?php } ?>
        <?php
        if (isset($_POST['submit'])) {
            $remark = $_POST['remark'];
            $query = mysqli_query($con, "update hostelentry set remarks='$remark' where  id='$id'");
            $query = mysqli_query($con, "update hostelentry set returntime=current_timestamp() where  id='$id'");


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