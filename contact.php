<?php
session_start();
?>

<?php

if (!isset($_SESSION['valid'])) {
  include_once("dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beta| Contact</title>

   <link rel="stylesheet" href="css/contact.css">
   <link rel="stylesheet" href="css/nev.css">
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
          <li>
            <a href="team.php">Team</a>
          </li>
          <li  class="active">
            <a href="#">Contact</a>
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
      <img src="img/contactjpg.jpg">
      <div>
        <h2>Contact Us</h2>
      </div>
    </div>
    
    <div class="section">
      <div class="container">
        <div class="contactInfo">
          <div>
            <h2>
              Contact Info
            </h2>
            <ul class="info">
              <li>
                <span>
                  <i class='bx bxs-map'></i>
                </span>
                <span>North Salimpur, <br>Fouzderhat, <br> Chittagong, <br>Bangladesh. </span>
              </li>
              <li>
                <span>
                  <i class='bx bxl-gmail'></i>
                </span>
                <span>contact@beta.com</span>
              </li>
              <li>
                <span>
                  <i class='bx bxs-phone'></i>
                </span>
                <span>+880 1700 000090</span>
              </li>
            </ul>
          </div>

          <div>
            <ul class="sci">
              <li>
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
              </li>
              <li>
                <a href="https://www.twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="contactForms">
          <h2>Send a Message</h2>
          <div class="fromBox">
            <div class="inputBox w50">
              <input type="text" autocomplete="off" placeholder="Name" required>
              <!-- <span>First Name</span> -->
            </div>
            <div class="inputBox w50">
              <input type="email" autocomplete="off" placeholder="Email" required>
              <!-- <span>Email</span> -->
            </div>
            <div class="inputBox w50">
              <input type="text" autocomplete="off" placeholder="Contact Number" required>
              <!-- <span>Contact Number</span> -->
            </div>
            <div class="inputBox w100">
              <textarea name="#" id="#" autocomplete="off" placeholder="Leave your message here" required></textarea>
              <!-- <span>Left a message for us.......</span> -->
            </div>
            <div class="inputBox w100">
              <input type="submit" value="Send">
            </div>
          </div>
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
      // header('location:login.php');
    }
    ?>
</body>
</html>