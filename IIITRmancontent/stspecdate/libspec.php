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


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Library specific date entry</title>
    </head>

    <body>


        <a href='http://localhost/IIITRmancontent/sthomepage.php' style="text-align: center;">
            Click here to go to home page
        </a>
        <?php
        $fdate = $_POST['fromdate'];
        $tdate = $_POST['todate'];

        ?>
        <h5 align="center" style="color:blue">Report from <?php echo $fdate ?> to <?php echo $tdate ?></h5>
        <hr />

        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                <tr>
                    <th>S.NO</th>
                    <th>Name</th>

                    <th>Roll No.</th>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>author</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Due Date</th>
                    <th>Return Date</th>
                    <th>Remarks</th>
                </tr>
                </tr>
            </thead>
            <?php
            $ret = mysqli_query($con, "select *from libraryentry where date(issuedate) between '$fdate' and '$tdate' and rollno='$roll'");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

            ?>

                <tr>
                    <td><?php echo $cnt; ?></td>
                    <td><?php echo $row['entreename']; ?></td>
                    <td><?php echo $row['rollno']; ?></td>
                    <td><?php echo $row['bookid']; ?></td>
                    <td><?php echo $row['bookname']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['issuedate']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobno']; ?></td>
                    <td><?php echo $row['duedate']; ?></td>
                    <td><?php echo $row['returndate']; ?></td>
                    <td><?php echo $row['remarks']; ?></td>
                <?php
                $cnt = $cnt + 1;
            } ?>
        </table>


    </body>

    </html>
<?php } ?>