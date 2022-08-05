<?php

$host = "localhost:3306";
$dbName = "beta";
$dbUsername = "root";
$dbpassword = "";

$con = mysqli_connect($host, $dbUsername, $dbpassword, $dbName);

if (mysqli_connect_errno()) {
   echo "Connection Failed: ".mysqli_connect_errno();
   exit();
}

?>