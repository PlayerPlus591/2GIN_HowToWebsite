<!--Pedro Code-->

<?php

$hostName= "localhost";
$dbUser = "root";
$dbPassword = '';
$dbName = "login_register";
//connection sends a true or false
$connection = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$connection){
    die("Something went wrong");
}
?>