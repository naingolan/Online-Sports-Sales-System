<!--for login -->
<?php
      
      include 'connection.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query=mysqli_query($db,"SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);

if ($num_rows>0)
{ session_start();
  $_SESSION['loggedin'] = true;
   $_SESSION["id"]=$row['user_id'];
   $_SESSION["email"]=$email;
    ?>
    <script>
      alert('Successfully Log In');
      document.location='home.php'
    </script>
    <?php
}
}
      ?>

<!-- registratiron -->
<?php
      include 'connection.php';
if(isset($_POST['regSubmit'])){
$email = $_POST['email'];
$fullname=$_POST['fullName'];
$gender=$_POST['gender'];
$phoneNumber=$_POST['phoneNumber'];
$address=$_POST['address'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

 
 
  $query = "INSERT INTO users
                (email, password, address, phone, full_name, gender)
                VALUES ('".$email."','".$password."','".$address."','".$fullname."','".$phoneNumber."','".$gender."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
   ?>
               
           
            <?php
             $query=mysqli_query($db,"SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
             $num_rows=mysqli_num_rows($query);
             $row=mysqli_fetch_array($query);
           
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION["id"]=$row['user_id'];
            $_SESSION["email"]=$email;
            header("location:home.php");
           }
            ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login & Signup Form | CodingNepal</title>
    <link rel="stylesheet" href="loginAndRegister.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <nav style="position:fixed; top:0; Z-index:2;">
        <div class="logo" >
            <img src="Young African.png" alt="">
        </div>
        <div class="links">
                 <a href="home.php">Home</a>
                <a href="signup.php">Login / Sign up</a>
                 <a href="shop.php">Shop</a>
                 <a href="updates.php">Updates</a>
                 <a href="about.php">About</a>
        </div>
    </nav>
    <div class="wrapper" style="margin-top:120px; z-index:1;">
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="signup.php" method="post" class="login">
            <div class="field">
              <input type="text" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required name="password">
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="submit">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="signup.php" method="post" class="signup">
          <div class="field">
              <input type="text" placeholder="Enter Your Email" required name="email">
            </div>
            <div class="field">
              <input type="text" placeholder="Enter Your Full Name" required name="fullName">
            </div>
            <div class="field">
            <label style="margin-right:20px;color:lightgrey;"for="cars">Gender</label>

            <select name="gender" style="color:lightgrey; width:328px;heigth:50px;border-radius:5px;border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            
            </select>
              </div>
            
            <div class="field">
              <input type="text" placeholder="Enter Your Phone Number" required name="phoneNumber">
            </div>
            <div class="field">
              <input type="text" placeholder="Entr Your Address" required name="address">
            </div>
            <div class="field">
              <input type="password" placeholder="Enter Your Password" required name="password">
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm Your Password" required name="confirm">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup" name="regSubmit">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
