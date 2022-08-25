<?php
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
                  session_start();
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
   >
    <div class="cover">
        <h1>Welcome to Young Africans Shop</h1>
       <button><a href="shop.php">Shop Now</a></button>
       <button><a href="updates.php">What is new?</a></button>
       <button><a href="rating.php">Community</a></button>
    </div>
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
    <div class="brokers">
        <div class="header">
            <h2>Meet with popular brokers for selling your crops right now</h2>
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
    <div id="about">
        <h2>About Us</h2>
        <p>The Official Manchester United Online Store is your premier source for authentic Manchester United kits and merchandise to support your club. Suit up like your favourite Man United heroes when you watch the next match with newly released 2021-22 Manchester United kits in sizes for men, women and youth, available in the widest assortment here at the Manchester United store. No supporter’s wardrobe is complete without the Manchester United away kit and third kit, and true Red Devils can take it up a notch with the Man United training range. Show your allegiance to popular Man United heroes like Marcus Rashford, Bruno Fernandes and all the rest. Man United football shirts are just the start of our range of merchandise – you’re also sure to find the best Manchester United gifts and collectibles within our assortment. No matter what you need for the season, the Manchester United Store is the place to find it. The Manchester United Online Store is committed to bringing you the easiest, most stress-free shopping experience online. Contact our dedicated customer service team for any concerns, or find answers to frequently asked questions in the customer service navigation tool. </p>
    </div>
    </footer>
    </body>
    </html>