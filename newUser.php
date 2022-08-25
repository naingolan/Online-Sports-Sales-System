<!--for login -->
<?php
      session_start();
      include 'connection.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query=mysqli_query($db,"SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
if ($num_rows>0)
{  $_SESSION["id"]=$row['user_id'];
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
$password = $_POST['password'];
$confirm = $_POST['confirm'];
 
 
  $query = "INSERT INTO users
                (email, password)
                VALUES ('".$email."','".$password."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Successfull Added.");
            window.location = "home.php";
        </script>
                <?php
}
      ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login & Signup Form | CodingNepal</title>
    <link rel="stylesheet" href="loginAndRegister.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
         
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
         <form action="signup.php" method="post" class="signup">
            <div class="field">
              <input type="text" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="Enter Your Full Name" required name="fullName">
            </div>
            <div class="field">
            <label style="margin-right:20px;"for="cars">Gender</label>

            <select name="gender" style="width:328px;heigth:50px;border-radius:5px;border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            
            </select>
              </div>
            
            <div class="field">
              <input type="password" placeholder="Enter Your Phone Number" required name="phoneNumber">
            </div>
            <div class="field">
              <input type="password" placeholder="Entr Your Address" required name="addres">
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
