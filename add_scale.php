<?php

include_once('dbcon.php');

if (isset($_POST['submit'])) {
   $post = $_POST['post'];
   $salary = $_POST['salary'];

   if (empty($post) || empty($salary)) {
      echo "<font color = 'red'> Field is empty</font></br>";
   }
   else {
      $sql = "insert into scale(post, salar_day) values('$post', '$salary')";

      $result = mysqli_query($con, $sql);

      header("Locaion: scale.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Add Post</title>

   <link rel="stylesheet" href="css/add_scale.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="add_scale.php" method="post">
            <table>
               <tr>
                  <td class="title">Post</td>
                  <td>
                     <input type="text" name="post" placeholder="Post Name" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Salary</td>
                  <td>
                     <input type="number" name="salary" placeholder="Salary Per Day" id="#" autocomplete="off">
                  </td>
               </tr>
               
               <tr>
                  <td class="title"></td>
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