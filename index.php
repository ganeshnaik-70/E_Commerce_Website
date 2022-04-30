<?php

$con = mysqli_connect('localhost:3307', 'root', '', 'e_commerce');
session_start();

if (isset($_POST['login'])) {
  $name = $_POST['logname'];
  $password = $_POST['logpass'];
  $date_time = date("Y-m-d h:i:sa");
  $que="INSERT INTO `login`(`name`, `date_time`) VALUES ('$name','$date_time')";

  $sql1="SELECT `fname`, `password` FROM `saler` WHERE fname='$name' and password='$password'";
  $result3 = mysqli_query($con, $sql1);
  $rowsb = mysqli_fetch_assoc($result3);

  $sql="SELECT fname, password FROM `customer` WHERE fname='$name' and password='$password'";
  $result2 = mysqli_query($con, $sql);
  $rowsc = mysqli_fetch_assoc($result2);
  if($rowsb!=null) {
    $i=0;
    while($i==0)
    {
      $usern = $rowsb['fname'];
      $passd = $rowsb['password'];
      $i= $i+1;
    }
    if ($usern==$name and $passd==$password) {
      //$result = mysqli_query($con, $que);
      $_SESSION['fname']=$name;
      $_SESSION['password']=$password;
      header("location:admin/addItem.php");
    }
    else{
      ?>
      <script>
        alert("Invalid username or password1");
      </script>
      <?php
    }
  }
  else if($rowsc) {
    $i=0;
    while($i==0)
    {
      $usern = $rowsc['fname'];
      $passd = $rowsc['password'];
      $i= $i+1;
    }
    if ($usern==$name and $passd==$password) {
      //$result = mysqli_query($con, $que);
      $_SESSION['fname']=$name;
      $_SESSION['password']=$password;
      header("location:mainPage.php");
    }
    else{
      ?>
      <script>
        alert("Invalid username or passwordhhhhh");
      </script>
      <?php
    }
  }
  else{
    ?>
    <script>
      alert("Invalid username or password");
    </script>
    <?php
  }
}
if(isset($_POST['signup'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cus_type = $_POST['type'];
  $date_time = date("Y-m-d h:i:sa");
  if($cus_type=="Consumer"){
    $que="INSERT INTO `customer`(`fname`, `lname`, `email`, `phone`, `password`, `date_time`) VALUES ('$fname','$lname','$email','$phone','$password','$date_time')";
    $result = mysqli_query($con, $que);
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['password']=$password;
    echo $_SESSION['fname'];
    header('location:mainPage.php');
  }
  else if($cus_type=="Saler"){
    $que="INSERT INTO `saler`(`fname`, `lname`, `email`, `phone`, `password`, `date_time`) VALUES ('$fname','$lname','$email','$phone','$password','$date_time')";
    $result = mysqli_query($con, $que);
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['password']=$password;
    header('location:admin/addItem.php');
  }
}
if(isset($_POST['logout'])){
  session_destroy();
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="index.php" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="logname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="logpass" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" name="login"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="POST" action="index.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First name" name="fname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last name" name="lname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Phone number" name="phone" onkeypress="/[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required/>
            </div>
            <h4 style="margin:0;">User Type</h4>
            <select class="input-field" name="type" id="type" style="width: 380px;height:50px; margin-top:10px;">
              <option value="Consumer">Consumer</option>
              <option value="Saler">Saler</option>
            </select>
            <input type="submit" class="btn" value="Sign up" name="signup"/>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Are you a new user?
              Please create your account from here.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>  
          
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already have a account!!
              Try login to your account..
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    

    <script src="app.js"></script>
  </body>
</html>
