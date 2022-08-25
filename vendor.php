
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background: -webkit-linear-gradient(right, #ffffff, darkgreen);
        color:white;
      }
      div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:green;
  background:#ffc700;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#ffc700;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
  font-weight:700px;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
  backround:
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
input{
    width:54%;
    border-radius:5px;
    height:40px;
    padding:10px;
    margin:10px 20px;
    border-color:#035415;
    border-width:1px;
}
      </style>
</head>
<body>
    <nav style="postion:fixed; top:0;">
        <div class="logo">
            <img src="Young African.png" alt="">
        </div>
        <div class="links">
                 <a href="home.php">Home</a>
                 <a href="shop.php">Shop</a>
                 <a href="updates.php">Updates</a>
                 
                 <?php
                
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
 
<<div class="table-title" style="margin-top:100px; ">
</div>
<table class="table-fill">
<thead>
<tr>
<th colspan="2" class="text-left">MY PRODUCTS
</th>
</tr>
</thead>
<tbody class="table-hover">
  
  <?php 
  $result = mysqli_query($db, "SELECT name, quantity FROM products;");

if (!$result) {
    echo "Could not successfully run query from DB: ";
    exit;
}

if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

while ($row = mysqli_fetch_assoc($result)) {
    
    echo '<tr>
    <td class="text-left">'.$row["name"].'</td>
    <td class="text-left">'.$row["quantity"].'</td>
    </tr>';
}

	?>
<tr>
<td class="text-left"></td>
<td class="text-left">$ </td>
</tr>

</tbody>
</table>
  
<div id="update" class="profile-input-field" style="margin-top:50px;">
        <h3>Update My Infomration</h3>
        
      </div><form style="width:100%; margin-left:42%;" action="signup.php" method="post" class="signup">
            <input type="text" placeholder="Change Your Email" >
            <input type="text" placeholder="Change Your Email" >
            <input type="text" placeholder="Change Your Email" >
          
          </form>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fullname = $_POST['fname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $address = $_POST['address'];
      $query = "UPDATE users SET full_name = '$fullname',
                      gender = '$gender', age = $age, address = '$address'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }              
?>