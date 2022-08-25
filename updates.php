<?php 
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="Young African.png" alt="">
        </div>
        <div class="links">
                 <a href="home.php">Home</a>
                 <a href="shop.php">Shop</a>
                 <a href="updates.php">Updates</a>
                 
                 <?php
                  //session_start();
                  if(isset($_SESSION['email']) && $_SESSION['loggedin'] == true){
                          echo '<a href="profile.php">Profile</a>';
                          echo '<a href="logout.php">Log Out</a>';
                      }else{
                     echo '<a href="signup.php">Login / Sign up</a>';
                    }
                 ?>
                 <a href="about.php">About</a>    
        </div>
    </nav>
    <hr>
  
    <div class="contents-upper">
        <h2>Explore</h2>
        <hr>
        <div class="images">
            <img src="dicksonjob.jpg">
            <img src="yannickBangala.jpg">
            <img src="dicksonjob.jpg">
            <img src="yannickBangala.jpg">
            <img src="dicksonjob.jpg">
            <img src="yannickBangala.jpg">
            
        </div>
    </div>
            
    <div class="updates">
            <div class="newKit">
                <video width="100%" height="100%" controls>
                    <source src="newKitAnounce.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                  </video>
                <p>Home Kit 2021/2022</p>
                <button>$500</button>
            </div>
            <div class="news">
            <h2>What is new?</h2>
            <div class="new">
                <img src="anounceDay.jpg">
                <a href="#">Promotion for our last season jersery. Buy now</a>
            </div>
                <div class="new">
                    <img src="jerseyPromo.jpg">
                    <a href="">Promotion for our last season jersery. Buy now</a>
                </div>
            </div>
           
            </div>
        

    </div>
    <footer>
        <div class="icons">
            <a href="https://web.whatsapp.com/"><img src="whatsapp.png" alt=""></a>
            <a href="https://web.facebook.com/"> <img src="facebook.png" alt=""></a>
            <a href="https://web.twitter.com/"> <img src="twitter.png" alt=""></a>
            <a href="https://web.gmail.com/"> <img src="gmail.png" alt=""></a>
            <a href="https://web.instagram.com/"><img src="instagram.png" alt=""></a>
    </div>
    </footer>
    </body>
    </html>