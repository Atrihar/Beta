<?php
session_start();
?>

<?php

if (!isset($_SESSION['valid'])) {
  include_once("dbcon.php");
  $sql = "select * from employee";
$result = mysqli_query($con, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Our Team</title>

   
   <link rel="stylesheet" href="css/nev.css" />
    <link rel="stylesheet" href="css/team.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div class="nevbar">
      <a href="#" class="logo">Beta</a>
      <div class="menu">
        <ul class="list">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="about.php">About</a>
          </li>
          <li>
            <a href="services.php">Services</a>
          </li>
          <li>
            <a href="project.php">Project</a>
          </li>
          <li  class="active">
            <a href="#">Team</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <li>
            <a href="scale.php">Scale</a>
          </li>
        </ul>
      </div>
      <div class="a">
        <div class="log">
          <a href="login.php">Login</a>
        </div>
        <div class="log">
          <a href="logout.php">Logout</a>
        </div>
      </div>
    </div>

    <div class="container-1">
      <img src="img/team.jpg">
      <div>
        <h2>Our Team</h2>
      </div>
    </div>

    <div class="container">
       <div class="content">
          <div class="title">Team Members</div>
          <table>
             <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Contact</th>
                <th>Adderss</th>
                <th>Birth Date</th>
                <th>Qualification</th>
                <th>Joninig Date</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Grade</th>
             </tr>

             <?php
             while ($r = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $r['em_name'] . "</td>";
                echo "<td>" . $r['em_mail'] . "</td>";
                echo "<td>" . $r['em_contact'] . "</td>";
                echo "<td>" . $r['em_address'] . "</td>";
                echo "<td>" . $r['date_of_birth'] . "</td>";
                echo "<td>" . $r['edu_qualification'] . "</td>";
                echo "<td>" . $r['joining_date'] . "</td>";
                echo "<td>" . $r['em_pass'] . "</td>";
                echo "<td>" . $r['gender'] . "</td>";
                echo "<td>" . $r['grade'] . "</td>";
                echo "<td><a href=\"edit_employee.php?em_id=$r[em_id]\">Edit</a></td>";
                echo "<td><a href=\"delete_employee.php?em_id=$r[em_id]\"onClick = \"return confirm('Are you sure?')\">Delete</a></td>";
                echo "</tr>";
             }
             ?>
          </table>
          <div class="button">
             <a href="add_employee.php">
                <input type="submit" value="Add Employee">
             </a>
          </div>
       </div>
    </div>


    <div class="footer">
        <div class="footer-content">
          <div class="adderss">
            <h3>Beta</h3>
            <h4>
              North Salimpur
            </h4>
            <h4>Fouzderhat, Chittagong</h4>
            <h4>Bangladesh</h4>
            <h4><strong>Phone:</strong> +880 1700 000090</h4>
            <h4><strong>Mail:</strong> contact@beta.com</h4>
          </div>

          <div class="dtls">
            <h3>Company</h3>
            <ul>
              <li>
                <a href="about.php">About</a>
              </li>
              <li>
                <a href="services.php">Services</a>
              </li>
              <li>
                <a href="team.php">Team</a>
              </li>
              <li>
                <a href="project.php">Projects</a>
              </li>
              <li>
                <a href="#">Privacy & Policy</a>
              </li>
            </ul>
          </div>

          <div class="dtls">
            <h3>Technologies</h3>
            <ul>
              <li>
                <a href="#">Cloud Computing</a>
              </li>
              <li>
                <a href="#">Artificial Intiligence</a>
              </li>
              <li>
                <a href="#">Mechine Learning</a>
              </li>
              <li>
                <a href="#">Block Chain</a>
              </li>
              <li>
                <a href="#">Internet of Things</a>
              </li>
            </ul>
          </div>

          <div class="social">
            <h4>Get In Touch</h4>
            <div class="icons">
              <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
              <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
              <a href="https://www.twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>
              <a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a>
            </div>
          </div>
        </div>

        <div class="ending">
          <h4>© Copyright 2011-2021. All Right Reserved</h4>
          <h4>Developed By- Md. Atrihar Wahid.</h4>
        </div>
      </div>
<?php
   }
    else {
      echo "you must login";
      echo "<a href='login.php'>login</a>";
      // <!-- // header('location:login.php'); -->
    }
    ?>
</body>
</html>