<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['Add'])) {
    $name=$_POST['prodName'];
    $price=$_POST['price'];
    $quantity=$_POST['product'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "sportssales");

	// Get all the submitted data from the form
    $sql = "INSERT INTO products (name, price, quantity, filename) VALUES ('$name', '$price', '$quantity','$filename')";
    //$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);
    
	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
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
    <h2 class="prodIntro">Add New Product Right Now</h2>
            
    <div class="products" style="margin-top:38px; padding-top:20px;" >
        <form id="producsForm" action="" method="POST" enctype="multipart/form-data">
        <input class="inputProduct" type="text" name="prodName" placeholder="Enter Product Name">
        <input class="inputProduct" type="text" name="price" placeholder="Enter Product's Price">
        <input class="inputProduct" type="text" name="product" placeholder="Enter Product's Quntity">
        <input class="inputProduct" type="file" name="uploadfile" placeholder="Upload Its Image">
        <input class="inputProduct" type="submit" value="Add" name="Add">
        </form>
        

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