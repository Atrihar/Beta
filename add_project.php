<?php

include_once('dbcon.php');

if (isset($_POST['submit'])) {
   $pro_name = $_POST['pro_name'];
   $pro_type = $_POST['pro_type'];
   $pro_des = $_POST['pro_des'];
   $starting_date = $_POST['starting_date'];
   $deadline = $_POST['deadline'];
   $cl_id = $_POST['cl_id'];
   $em_id = $_POST['em_id'];

   if (empty($pro_name) || empty($pro_type) || empty($pro_des) || empty($starting_date) || empty($deadline) || empty($cl_id) || empty($em_id)) {
      echo "<font color = 'red'> Field is empty</font></br>";
   }
   else {
      $sql = "insert into project(pro_name, pro_type, pro_des, starting_date, deadline, cl_id, em_id) values('$pro_name', '$pro_type', '$pro_des', '$starting_date', '$deadline', '$cl_id', '$em_id')";

      $result = mysqli_query($con, $sql);

      header("Locaion: project.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Add Project</title>

   <link rel="stylesheet" href="css/add_project.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="add_project.php" method="post">
            <table>
               <tr>
                  <td class="title">Name</td>
                  <td>
                     <input type="text" name="pro_name" placeholder="Project Name" id="#" autocomplete="off">
                  </td>
               </tr>

               <tr>
                  <td class="title">Type</td>
                  <td class="check">
                     
                     <input type="radio" name="pro_type" id="Web-development" value="Web-development">
                     <label for="Web-development"> Web-development</label>
                     
                     <input type="radio" name="pro_type" id="Graphics design" value="Graphics design">
                     <label for="Graphics design"> Graphics design</label>
                    
                     <input type="radio" name="pro_type" id="Software development" value="Software development">
                     <label for="Software development"> Software development</label>

                     <input type="radio" name="pro_type" id="Digital Marketing" value="Digital Marketing">
                     <label for="Digital Marketing"> Digital Marketing</label>
                     
                     
                  </td>
               </tr>

               <tr>
                  <td  class="title">Description</td>
                  <td>
                     <input type="text" name="pro_des" placeholder="Write about the project" id="#" autocomplete="off">
                  </td>
               </tr>

               <tr>
                  <td  class="title">Starting Date</td>
                  <td>
                     <input type="date" name="starting_date" id="#" autocomplete="off">
                  </td>
               </tr>
               
               <tr>
                  <td  class="title">Deadline</td>
                  <td>
                     <input type="date" name="deadline" id="#" autocomplete="off">
                  </td>
               </tr>
               
               <tr>
                  <td  class="title">Client</td>
                  <td>
                     <input type="number" name="cl_id" placeholder="Enter the id of Client" id="#" autocomplete="off">
                  </td>
               </tr>

               <tr>
                  <td  class="title">Employee</td>
                  <td>
                     <input type="number" name="em_id" placeholder="Enter the id of Employee" id="#" autocomplete="off">
                  </td>
               </tr>

               <tr>
                  <td class="title"></td>
                  <td class="button">
                     <input type="submit" value="Add" name="submit">
                     <a href="project.php" class="view">View All</a>
                  </td>
               </tr>
               
            </table>
         </form>
      </div>
   </div>
</body>
</html>