<?php

$to = "cs21b1024@iiitr.ac.in";
$subject = "Trial mail";
$body = "This is trial mail send by Disha's mail";
$header = "From : dishaagarwal0304@gmail.com";

if (mail($to, $subject, $body, $header)){
    echo "Mail sending successful";
}
else{
    echo "Something went wrong";
}
?>