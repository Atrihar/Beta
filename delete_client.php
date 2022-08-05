<?php

include("dbcon.php");

$id = $_GET['client_id'];

$sql = "delete from client where em_id = $id";

$result = mysqli_query($con,$sql);

if ($result) {
    header("Location:team.php");
} 

?>