<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
    <title>Document</title>
</head>

<body>
    <div class="bg-search d-flex flex-column justify-content-center" style="background-image:url(https://i.pinimg.com/600x315/b0/2a/e2/b02ae2523a2c395bab1d7828492338bd.jpg); height:610px;">
        <div class="d-flex flex-row justify-content-center">
    <form class="" name="search" action="searchsports.php" method="post">
        <input class="search-form" type="text" name="search-data" id="searchdata" placeholder="Search by names or roll number" style="font-size:30px; padding:20px; width:500px; background-color:black; color:white;" />
        <button class="search-button" type="submit" name="search" style="font-size:30px; padding:10px; width:72px; height:88px; ">
            <img src="https://uxwing.com/wp-content/themes/uxwing/download/01-user_interface/search.png" class="search-img" style="height:55px; width:55px; margin-bottom:20px;"/>
        </button>
    </form>
    </div>
    
    </div>
    <div class="text-center copyright-section">
            <span style="color:red;">&#169</span> <span style="font-style:italic; height:550px;"><b>MANAGING MASTERS 2022.All rights reserved</b> </span>
        </div>
</body>

</html>