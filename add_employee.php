<?php

include_once('dbcon.php');

if (isset($_POST['submit'])) {
   $em_name = $_POST['em_name'];
   $em_mail = $_POST['em_mail'];
   $em_contact = $_POST['em_contact'];
   $em_address = $_POST['em_address'];
   $date_of_birth = $_POST['date_of_birth'];
   $edu_qualification = $_POST['edu_qualification'];
   $joining_date = $_POST['joining_date'];
   $em_pass = $_POST['em_pass'];
   $gender = $_POST['gender'];
   $grade = $_POST['grade'];

   if (empty($em_name) || empty($em_mail)|| empty($em_contact)|| empty($em_address)|| empty($date_of_birth)|| empty($edu_qualification)||empty($em_pass) || empty($gender)|| empty($grade)) {
      echo "<font color = 'red'> Field is empty</font></br>";
   }
   else {
      $sql = "insert into employee(em_name, em_mail, em_contact,em_address,date_of_birth,edu_qualification,joining_date,em_pass,gender,grade) values('$em_name', '$em_mail', '$em_contact','$em_address','$date_of_birth','$edu_qualification','$joining_date','$em_pass','$gender','$grade')";

      $result = mysqli_query($con, $sql);

      header("Locaion: team.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Add Employee</title>

   <link rel="stylesheet" href="css/add_employee.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="add_employee.php" method="post">
            <table>
               <tr>
                  <td class="title">Name</td>
                  <td>
                     <input type="text" name="em_name" placeholder="Name" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Email</td>
                  <td>
                     <input type="email" name="em_mail" placeholder="Email" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Contact</td>
                  <td>
                     <input type="text" name="em_contact" placeholder="Contact" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Address</td>
                  <td>
                     <input type="text" name="em_address" placeholder="Address" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Birth Date</td>
                  <td>
                     <input type="date" name="date_of_birth" placeholder="Birth Date" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Educational Qualification</td>
                  <td>
                     <textarea name="edu_qualification" id="#" autocomplete="off"></textarea>
                  </td>
               </tr>
               <tr>
                  <td  class="title">Joining Date</td>
                  <td>
                     <input type="date" name="joining_date" placeholder="Joining Date" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Password</td>
                  <td>
                     <input type="password" name="em_pass" placeholder="Password" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td class="title">Gender</td>
                  <td class="check">
                     
                     <input type="radio" name="gender" id="Male" value="Male">
                     <label for="Male"> Male</label>
                     
                     <input type="radio" name="gender" id="Female">
                     <label for="Female"> Female</label>
                    
                     <input type="radio" name="gender" id="Other">
                     <label for="Other"> Other</label>
                     
                     
                  </td>
               </tr>
               <tr>
                  <td  class="title">Grade</td>
                  <td>
                     <input type="number" name="grade" placeholder="Grade" id="#" autocomplete="off">
                  </td>
               </tr>
               
               <tr>
                  <td class="title"></td>
                  <td class="button">
                     <input type="submit" value="Add" name="submit">
                     <a href="team.php" class="view">View All</a>
                  </td>
               </tr>>
               
            </table>
         </form>
      </div>
   </div>
</body>
</html>