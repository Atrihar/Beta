<?php

include("dbcon.php");

if (isset($_POST['submit'])) {
    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_type = $_POST['pro_type'];
    $pro_des = $_POST['pro_des'];
    $startign_date = $_POST['startign_date'];
    $deadline = $_POST['deadline'];
    $cl_id = $_POST['cl_id'];
    $em_id = $_POST['em_id'];

    if (empty($pro_name) || empty($pro_type) || empty($pro_des) || empty($startign_date) || empty($deadline) || empty($cl_id) || empty($em_id)) {
        echo "<font color = 'red'>Field is empty</font></br>";
    } else {
        $sql_update = "update project set pro_name='$pro_name', pro_type='$pro_type', pro_des='$pro_des', starting_date='$starting_date', deadline='$deadline', cl_id='$cl_id', em_id='$em_id' where pro_id = $pro_id";

        $result = mysqli_query($con, $sql_update);

        header("Location: project.php");
    }
}

?>

<?php

$pro_id = $_GET['pro_id'];
$sql_fetch = "select * from project where pro_id = $pro_id";
$result2 = mysqli_query($con, $sql_fetch);

while ($r = mysqli_fetch_array($result2)) {
    $pro_name = $r['pro_name'];
    $pro_type = $r['pro_type'];
    $pro_des = $r['pro_des'];
    $starting_date = $r['starting_date'];
    $deadline = $r['deadline'];
    $cl_id = $r['cl_id'];
    $em_id = $r['em_id'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Edit Project</title>

   <link rel="stylesheet" href="css/add_project.css">
</head>
<body>
   <div class="container">
      <div class="content">
         <form action="edit_project.php" method="post">
            <table>
               <tr>
                  <td class="title">Name</td>
                  <td>
                     <input type="text" name="pro_name" id="#" autocomplete="off" value="<?php echo $pro_name;?>">
                  </td>
               </tr>
               <tr>
                  <td class="title">Type</td>
                  <td class="check">
                     
                     <input type="radio" name="pro_type" id="Web-development" <?php if (isset($pro_type) && $pro_type=="Web-development" echo "checked";?>value="Web-development">
                     <label for="Web-development"> Web-development</label>
                     
                     <input type="radio" name="pro_type" id="Graphics design" <?php if (isset($pro_type) && $pro_type=="Graphics design") echo "checked";?>value="Graphics design">
                     <label for="Graphics design"> Graphics design</label>
                    
                     <input type="radio" name="pro_type" id="Software development" <?php if (isset($pro_type) && $pro_type=="Software development") echo "checked";?>value="Software development">
                     <label for="Software development"> Software development</label>
                     
                     <input type="radio" name="pro_type" id="Digital Marketing" <?php if (isset($pro_type) && $pro_type=="Digital Marketing") echo "checked";?>value="Digital Marketing">
                     <label for="Digital Marketing"> Digital Marketing</label>
                     
                     
                  </td>
               <tr>
                  <td  class="title">Description</td>
                  <td>
                     <input type="text" name="pro_des" id="#" autocomplete="off" value="<?php echo $pro_des;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Starting Date</td>
                  <td>
                     <input type="date" name="starting_date" id="#" autocomplete="off" value="<?php echo $starting_date;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Deadline</td>
                  <td>
                     <input type="date" name="deadline" id="#" autocomplete="off" value="<?php echo $deadline;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Client</td>
                  <td>
                     <input type="date" name="cl_id" id="#" autocomplete="off" value="<?php echo $cl_id;?>">
                  </td>
               </tr>
               <tr>
                  <td  class="title">Employee</td>
                  <td>
                     <input type="date" name="em_id" id="#" autocomplete="off" value="<?php echo $em_id;?>">
                  </td>
               </tr>
               
               <tr>
                  <td>
                     <input type="hidden" name="pro_id" value="<?php echo $_GET['pro_id'];?>">
                  </td>
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