<?php

include("dbcon.php");

if (isset($_POST['submit'])) {
    $grade = $_POST['grade'];
    $salary = $_POST['salary'];
    $post = $_POST['post'];

    if (empty($salary) || empty($post)) {
        echo "<font color = 'red'>Field is empty</font></br>";
    } else {
        $sql_update = "update scale set salar_day='$salary', post='$post' where grade = $grade";

        $result = mysqli_query($con, $sql_update);

        header("Location: scale.php");
    }
}

?>

<?php

$grade = $_GET['grade'];
$sql_fetch = "select * from scale where grade = $grade";
$result2 = mysqli_query($con, $sql_fetch);

while ($r = mysqli_fetch_array($result2)) {
    $salary = $r['salar_day'];
    $post = $r['post'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Edit Post</title>

   <link rel="stylesheet" href="css/add_scale.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="edit_scale.php" method="post">
            <table>
               <tr>
                  <td class="title">Post</td>
                  <td>
                     <input type="text" name="post" id="#" autocomplete="off" value="<?php echo $post;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Salary</td>
                  <td>
                     <input type="number" name="salary" id="#" autocomplete="off" value="<?php echo $salary;?>">
                  </td>
               </tr>
               
               <tr>
                  <td>
                     <input type="hidden" name="grade" value="<?php echo $_GET['grade'];?>">
                  </td>
                  <td class="button">
                     <input type="submit" value="Add" name="submit">
                     <a href="scale.php" class="view">View All</a>
                  </td>
               </tr>
               
            </table>
         </form>
      </div>
   </div>
</body>
</html>