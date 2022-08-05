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
   <title>Beta| About</title>

   <link rel="stylesheet" href="css/about.css">
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
          <li  class="active">
            <a href="#">About</a>
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

    <div class="container">
       <div class="container_1">
          <img src="img/about.jpg">
          <div>
             <h3>About our company</h3>
          </div>
       </div>

       <div class="container_2">
          <div class="content">
             <img src="img/about-company.jpg">
          </div>
          <div class="content">
             <h2>Some Information About Beta</h2>
             <p>
               This tutorial / guide will give you a detailed overview of the criteria, method and schedule of company registration in Bangladesh, this is how to open an organization in Bangladesh. Bangladesh, like other jurisdictions, has a set of basic and consistent regulatory consent requirements for starting and conducting a business.
               <br>
               Note that most Bangladeshi companies consider registering a new business or relocating your existing business to Bangladesh. Capital contributions are not liable for companies outside of that. Anyone over the age of 18 (foreign or local) can register a business in Bangladesh under the Companies Act 1994.
             </p>
          </div>
       </div>
       <div class="container_3">
          <div>
             <h2>Why You Should Choose Us?</h2>
             <p>
               We have a dedicated team of Professional Designers, Developers, Digital Marketing Managers, SEO Specialists and Advertising Managers with over 6+ years of experience in various IT field. We provide all services very cheap rate. We develop your website search engine optimization friendly. This is help ranking top of the first page all over competitor website. Your existing client will find easily. We always use latest and modern technology develop your website. This technology you expected. We develop your website dynamically. You can control easily and edit any time without the programming language. We focus on your IT so you can focus on your business. IT Farm helps the sustainability and long term growth of your business by providing. Eurekh IT Farm globally invests in seed, start-up, and early stage companies, and help them on partnerships with Japanese enterprises. More Info About Us: Facebook. If you need any services, please feel free to call us 880 1700 000090.

               <div class="goals">
                  <div class="goal-card">
                    <h2>our mission</h2>
                    <p>
                      to be the global leader in IT services. Building on our technologies, competencies and customer interests and creating value for stakeholders and customers. We'll achieve this by focusing on the intersection of our client's emerging needs and the acceleration of business and technological change.
                    </p>
                  </div>
                  <div class="goal-card">
                    <h2>our values</h2>
                    <p>
                      to be the global leader in IT services. Building on our technologies, competencies and customer interests and creating value for stakeholders and customers. We'll achieve this by focusing on the intersection of our client's emerging needs and the acceleration of business and technological change.
                    </p>
                  </div>
                  <div class="goal-card">
                    <h2>our approach & culture</h2>
                    <p>
                      to be the global leader in IT services. Building on our technologies, competencies and customer interests and creating value for stakeholders and customers. We'll achieve this by focusing on the intersection of our client's emerging needs and the acceleration of business and technological change.
                    </p>
                  </div>
               </div>
             </p>
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