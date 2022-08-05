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
   <title>Beta| Services</title>

   <link rel="stylesheet" href="css/services.css">
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
          <li class="active">
            <a href="#">Services</a>
          </li>
          <li>
            <a href="project.php">Project</a>
          </li>
          <li>
            <a href="team.php">Team</a>
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
      <img src="img/services.jpg">
      <div>
         <h3>Our Services</h3>
      </div>
   </div>

   <div class="container-2">
      <h2>Services We Provide</h2>
      <div class="service">
         <div class="services-card">
            <div class="service-img">
               <i class='bx bxs-shopping-bag-alt'></i>
            </div>
            <div class="service-heading">
               <h2>Digital Marketing</h2>
            </div>
            <div class="service-deatiles">
               <p>We promote products by doing Digital Marketing. Digital Marketing increase business.</p>
            </div>
         </div>

         <div class="services-card">
            <div class="service-img">
               <i class='bx bxs-planet'></i>
            </div>
            <div class="service-heading">
               <h2>Domain Registration</h2>
            </div>
            <div class="service-deatiles">
               <p>We’d love to be your new domain registrar. You can buy domain name at lowest price.</p>
            </div>
         </div>

         <div class="services-card">
            <div class="service-img">
               <i class='bx bx-search-alt'></i>
            </div>
            <div class="service-heading">
               <h2>Search Engine Optimization (SEO)</h2>
            </div>
            <div class="service-deatiles">
               <p>

                  SEO improve the website visitors as well as the sales and business to the company.
               </p>
               </div>
         </div>

         <div class="services-card">
            <div class="service-img">
               <i class='bx bxs-blanket'></i>
            </div>
            <div class="service-heading">
               <h2>Web Hosting</h2>
            </div>
            <div class="service-deatiles">
               <p>Powerful Web Hosting Easy to use Control Panel. Expert hosting support available 24.</p>
            </div>
         </div>
      </div>

      <div class="service">
         <div class="services-card">
            <div class="service-img">
               <i class='bx bxl-dev-to'></i>
            </div>
            <div class="service-heading">
               <h2>Web Development & Design</h2>
            </div>
            <div class="service-deatiles">
               <p>
                  We are extreme for web design and development by following latest technology.
               </p>
            </div>
         </div>

         <div class="services-card">
            <div class="service-img">
               <i class='bx bxl-kubernetes'></i>
            </div>
            <div class="service-heading">
               <h2>Software Development</h2>
            </div>
            <div class="service-deatiles">
               <p>We Develop Software that is fast, reliable, We work for our clients according to their budget.</p>
            </div>
         </div>

         <div class="services-card">
            <div class="service-img">
               <i class='bx bxs-color'></i>
            </div>
            <div class="service-heading">
               <h2>Graphic Design</h2>
            </div>
            <div class="service-deatiles">
               <p>We are Graphic Design agency specializing in branding, You’ll receive intelligent work for brand.</p>
            </div>
         </div>

         <div class="services-card">
            <div class="service-img">
               <i class='bx bxs-group'></i>
            </div>
            <div class="service-heading">
               <h2>IT Training</h2>
            </div>
            <div class="service-deatiles">
               <p>Techmelba monitors the IT training marketplace looking for the best providers of IT Training .</p>
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
      // <!-- // header('location:login.php'); -->
    }
    ?>
</body>
</html>