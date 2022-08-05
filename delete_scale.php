<?php

include("dbcon.php");

$grade = $_GET['grade'];

$sql = "delete from scale where grade = $grade";

$result = mysqli_query($con,$sql);

if ($result) {
    header("Location:scale.php");
} 

?>