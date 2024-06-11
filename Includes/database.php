<!--Pedro Code-->

<?php
$hostName = "89.58.47.144";
$dbUser = "H2W_User";
$dbPassword = "h2wpw";
$dbName = "dbHow2Website";

// Establish a connection to the database
$connection = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>