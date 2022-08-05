<?php

include("dbcon.php");

if (isset($_POST['submit'])) {
   $em_id = $_POST['em_id'];
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
      $sql = "update employee set em_name = '$em_name', em_mail = '$em_mail', em_contact = '$em_contact',em_address = '$em_address',date_of_birth = '$date_of_birth',edu_qualification = '$edu_qualification',joining_date = '$joining_date',em_pass = '$em_pass',gender = '$gender',grade =  '$grade' where em_id = $em_id";

      $result = mysqli_query($con, $sql);

      header("Locaion: team.php");
   }
}

?>

<?php

$em_id = $_GET['em_id'];
$sql_fetch = "select * from employee where em_id = $em_id";
$result1 = mysqli_query($con, $sql_fetch);

while ($r = mysqli_fetch_array($result1)) {
   $em_name = $r['em_name'];
   $em_mail = $r['em_mail'];
   $em_contact = $r['em_contact'];
   $em_address = $r['em_address'];
   $date_of_birth = $r['date_of_birth'];
   $edu_qualification = $r['edu_qualification'];
   $joining_date = $r['joining_date'];
   $em_pass = $r['em_pass'];
   $gender = $r['gender'];
   $grade = $r['grade'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Edit Employee</title>

   <link rel="stylesheet" href="css/add_employee.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="edit_employee.php" method="post">
            <table>
            <tr>
                  <td class="title">Name</td>
                  <td>
                     <input type="text" name="em_name" id="#" autocomplete="off" value="<?php echo $em_name;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Email</td>
                  <td>
                     <input type="email" name="em_mail" id="#" autocomplete="off" value="<?php echo $em_mail;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Contact</td>
                  <td>
                     <input type="text" name="em_contact" id="#" autocomplete="off" value="<?php echo $em_contact;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Address</td>
                  <td>
                     <input type="text" name="em_address" id="#" autocomplete="off"value="<?php echo $em_address;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Birth Date</td>
                  <td>
                     <input type="date" name="date_of_birth" id="#" autocomplete="off" value="<?php echo $date_of_birth;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Educational Qualification</td>
                  <td>
                     <textarea name="edu_qualification" id="#" >
                     <?php echo $edu_qualification;?></textarea>
                  </td>
               </tr>
               <tr>
                  <td  class="title">Joining Date</td>
                  <td>
                     <input type="date" name="joining_date" id="#" autocomplete="off" value="<?php echo $joining_date;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Password</td>
                  <td>
                     <input type="password" name="em_pass" id="#" autocomplete="off" value="<?php echo $em_pass;?>">
                  </td>
               </tr>
               <tr>
                  <td class="title">Gender</td>
                  <td class="check">
                     
                     <input type="radio" name="gender" id="Male" <?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male">
                     <label for="Male"> Male</label>
                     
                     <input type="radio" name="gender" id="Female" <?php if (isset($gender) && $gender=="Female") echo "checked";?>value="Female">
                     <label for="Female"> Female</label>
                    
                     <input type="radio" name="gender" id="Other" <?php if (isset($gender) && $gender=="Other") echo "checked";?>value="Other">
                     <label for="Other"> Other</label>
                     
                     
                  </td>
               </tr>
               <tr>
                  <td  class="title">Grade</td>
                  <td>
                     <input type="number" name="grade" id="#" autocomplete="off" value="<?php echo $grade;?>">
                  </td>
               </tr>
               
               <tr>
                  <td>
                  <input type="hidden" name="em_id" value="<?php echo $_GET['em_id'];?>">
                  </td>
                  <td class="button">
                     <input type="submit" value="Add" name="submit">
                     <a href="team.php" class="view">View All</a>
                  </td>
               </tr>
               
            </table>
         </form>
      </div>
   </div>
</body>
</html>