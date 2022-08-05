<?php

include_once('dbcon.php');

if (isset($_POST['submit'])) {
   $cl_name = $_POST['cl_name'];
   $cl_email = $_POST['cl_email'];
   $cl_contact = $_POST['cl_contact'];
   $cl_address = $_POST['cl_address'];

   if (empty($cl_name) || empty($cl_email) || empty($cl_contact) || empty($cl_address)) {
      echo "<font color = 'red'> Field is empty</font></br>";
   }
   else {
      $sql = "insert into client(cl_name, cl_email, cl_contact, cl_address) values('$cl_name', '$cl_email','$cl_contact','$cl_address')";

      $result = mysqli_query($con, $sql);

      echo "<font color = 'green'>data added successfully</font></br>";

      header("Locaion: client.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Add Client</title>

   <link rel="stylesheet" href="css/add_client.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="add_client.php" method="post">
            <table>
               <tr>
                  <td class="title">Name</td>
                  <td>
                     <input type="text" name="cl_name" placeholder="Client Name" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Email</td>
                  <td>
                     <input type="email" name="cl_email" placeholder="Email" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Contact</td>
                  <td>
                     <input type="text" name="cl_contact" placeholder="Contact" id="#" autocomplete="off">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Address</td>
                  <td>
                     <input type="text" name="cl_address" placeholder="Address" id="#" autocomplete="off">
                  </td>
               </tr>
               
               <tr>
                  <td class="title"></td>
                  <td class="button">
                     <input type="submit" value="Add" name="submit">
                     <a href="client.php" class="view">View All</a>
                  </td>
               </tr>
               
            </table>
         </form>
      </div>
   </div>
</body>
</html>