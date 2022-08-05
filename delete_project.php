<?php

include("dbcon.php");

$pro_id = $_GET['pro_id'];

$sql = "delete from project where pro_id = $pro_id";

$result = mysqli_query($con,$sql);

if ($result) {
    header("Location:project.php");
} 

?>