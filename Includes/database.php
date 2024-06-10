<!--Pedro Code-->

<?php
    $hostName= "89.58.47.144";
    $dbUser = "H2W_User";
    $dbPassword = "h2wpw";
    $dbName = "dbHow2Website";

    //connection sends a true or false
    $connection = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$connection){
        die("Something went wrong");
    }
?>