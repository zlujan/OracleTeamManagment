<?php
//change these variables to change connection settings for the entire system. 
$dbServername = "100.64.14.0";
$dbUsername = "root";
$dbPassword = "123";
$dbName = "oracle";
//ip, user, pass, db

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>