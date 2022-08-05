<?php

include("dbcon.php");

if (isset($_POST['submit'])) {
   $cl_id = $_POST['cl_id'];
   $cl_name = $_POST['cl_name'];
    $cl_contact = $_POST['cl_contact'];
    $cl_email = $_POST['cl_email'];
    $cl_address = $_POST['cl_address'];

    if (empty($cl_name) || empty($cl_contact) || empty($cl_address) || empty($cl_email)) {
        echo "<font color = 'red'>Field is empty</font></br>";
    } else {
        $sql_update = "update client set cl_name='$cl_name', cl_contact='$cl_contact', cl_email='$cl_email', cl_address='$cl_address' where cl_id = $cl_id";

        $result = mysqli_query($con, $sql_update);

        header("Location: client.php");
    }
}

?>

<?php

$cl_id = $_GET['cl_id'];
$sql_fetch = "select * from client where cl_id = $cl_id";
$result2 = mysqli_query($con, $sql_fetch);

while ($r = mysqli_fetch_array($result2)) {
    $cl_name = $r['cl_name'];
    $cl_contact = $r['cl_contact'];
    $cl_email = $r['cl_email'];
    $cl_address = $r['cl_address'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Edit Client</title>

   <link rel="stylesheet" href="css/add_client.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="edit_client.php" method="post">
            <table>
               <tr>
                  <td class="title">Name</td>
                  <td>
                     <input type="text" name="cl_name" id="#" autocomplete="off" value="<?php echo $cl_name;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Contact</td>
                  <td>
                     <input type="text" name="cl_contact" id="#" autocomplete="off" value="<?php echo $cl_contact;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Email</td>
                  <td>
                     <input type="text" name="cl_email" id="#" autocomplete="off" value="<?php echo $cl_email;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Address</td>
                  <td>
                     <input type="text" name="cl_address" id="#" autocomplete="off" value="<?php echo $cl_address;?>">
                  </td>
               </tr>
               
               <tr>
                  <td>
                     <input type="hidden" name="cl_id" value="<?php echo $_GET['cl_id'];?>">
                  </td>
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