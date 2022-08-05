<?php

include("dbcon.php");

$id = $_GET['em_id'];

$sql = "delete from employee where em_id = $id";

$result = mysqli_query($con,$sql);

if ($result) {
    header("Location:team.php");
} 

?>