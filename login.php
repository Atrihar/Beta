<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beta| Log-in</title>

    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>

  <?php
  include("dbcon.php");
  if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    if ($email==""||$password=="") {
      echo "all fields should be filled";
      echo "<a href='login.php'>Go Back</a>";
    }

    else {
      $sql = "select * from login where login_email ='$email' and login_pass ='$password'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      if (is_array($row) && !empty($row)) {
        $validUser = $row['login_name'];
        $_SESSION['valid'] = $validUser;
        $_SESSION['id'] = $row['login_id'];
      }

      else {
        echo "Invalid username/ password";
        echo "<a href='login.php'>Go Back</a>";
      }
      
      if (!isset($_SESSION['valid'])) {
        
        echo "Login Successfull";
        header('location:index.html');
      }
    }
  }
  else{
  
  ?>


    <div class="con">
      <div class="container">
        <div class="title">Log In</div>
        <form action="" method="post">
          <div class="user-detailes">
            <div class="input-box">
              <input
                type="email"
                name="email"
                id="#"
                placeholder="Email"
                autocomplete="off"
                required
              />
            </div>
            <div class="input-box">
              <input
                type="password"
                name="password"
                id="#"
                placeholder="Password"
                autocomplete="off"
                required
              />
            </div>
          </div>

          <div class="forgot">
            <a href="#">Forgot Password?</a>
          </div>

          <div class="button">
            <input type="submit" name="submit" value="Login" />
          </div>

          <div class="social">
            <h3>Or Log In Using</h3>
            <div class="icons">
              <a href="https://www.facebook.com/"
                ><i class="bx bxl-facebook"></i
              ></a>
              <a href="https://www.instagram.com/"
                ><i class="bx bxl-instagram"></i
              ></a>
              <a href="https://www.twitter.com/i/flow/login"
                ><i class="bx bxl-twitter"></i
              ></a>
              <a href="https://www.linkedin.com/"
                ><i class="bx bxl-linkedin"></i
              ></a>
            </div>
          </div>

        </form>

        <div class="reg">
          <h3>Need an account? <a href="signup.php">Sign up</a></h3>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  </body>
</html>
