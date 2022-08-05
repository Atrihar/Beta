<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beta| Sign-Up</title>

    <link rel="stylesheet" href="css/signup.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

  <?php
  include("dbcon.php");
  if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    if ($fname=""||$lname=""||$email=""||$contact=""||$password="") {
      echo "all fields should be filled";
      echo "<a href='signup.php'>GO BACK</a>";
    }

    else {
      $sql = "insert into user_reg(user_fname, user_lname, user_email, user_contact, user_pass) values('$fname','$lname','$email','$contact','$password')";
      $result = mysqli_query($con,$sql);
      if ($result) {
        echo "Registation Successfull";
        echo "<a href='login.php'>Login</a>";
      }
    }
  }
?>
    <div class="container">
      <div class="content">
        <div class="title">Sign Up</div>
        <form action="#" method="post">
          <div>
            <input
              type="text"
              name="fname"
              id="#"
              placeholder="First Name"
              autocomplete="off"
              required
            />
          </div>
          <div>
            <input
              type="text"
              name="lname"
              id="#"
              placeholder="Last Name"
              autocomplete="off"
              required
            />
          </div>
          <div>
            <input
              type="text"
              name="contact"
              id="#"
              placeholder="Contact Number"
              autocomplete="off"
              required
            />
          </div>
          <div>
            <input
              type="email"
              name="email"
              id="#"
              placeholder="Email"
              autocomplete="off"
              required
            />
          </div>
          <div>
            <input
              type="password"
              name="password"
              id="#"
              placeholder="Password"
              autocomplete="off"
              required
            />
          </div>
          <div>
            <input class="btn" name="submit" type="submit" value="Sign Up" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
