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
        <title>Sports Entries</title>
    </head>

    <body>
        <form class="" name="search" action="searchsports.php" method="post">
            <input class="search-form" type="text" name="search-data" id="searchdata" placeholder="Search by names or roll number" />
            <button class="search-button" type="submit" name="search">
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/01-user_interface/search.png" class="search-img" />
            </button>
        </form>

        <div class="table">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                    <tr>
                        <th>S.NO</th>
                        <th>Date</th>
                        <th>Name</th>

                        <th>Roll No.</th>
                        <th>Sports Item</th>
                        <th>Quantity</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Entry date</th>
                        <th>Return date</th>
                        <th>Action</th>
                    </tr>
                    </tr>
                </thead>
                <?php
                $ret = mysqli_query($con, "select *from sportsentry");
                $cnt = 1;
                while ($row = mysqli_fetch_array($ret)) {

                ?>

                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['entreename']; ?></td>
                        <td><?php echo $row['rollno']; ?></td>
                        <td><?php echo $row['sportsitem']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobno']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['returndate']; ?></td>
                        <td><a href="sportsedit.php?editid=<?php echo $row['id']; ?>" title="View Full Details">EDIT DETAILS</a></td>
                    </tr>
                <?php
                    $cnt = $cnt + 1;
                } ?>
            </table>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="text-center copyright-section">
            <span style="color:red;">&#169</span> <span style="font-style:italic;"><B>MANAGING MASTERS 2022.All rights reserved</B></span>
        </div>


    </body>

    </html>
<?php } ?>