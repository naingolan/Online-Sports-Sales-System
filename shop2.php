


<?php
	$db = mysqli_connect("localhost", "root", "", "sportssales");
?>
<?php //for shopping cart  ?>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
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
                 <a href="home.html">Home</a>
                 <a href="signup.html">Login / Sign up</a>
                 <a href="shop.html">Shop</a>
                 <a href="updates.html">Updates</a>
                 <a href="about.html">About</a>
        </div>
    </nav>
    <hr>
  
<div id="shopping-cart" style="margin-top:50px">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
    <h2 class="prodIntro">Choose your product you can earn right now</h2>
            
    <div class="products">
           <div class="products">
           <?php
		$query = "select name, price, filename from products";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>  <?php echo'<div class="product">
             <img src="./image//'.$data["filename"].'">
             <p>'.$data["name"].'</p>
             <button>$'.$data["price"].'
             </div>';
             ?>
		<?php
		}
		?>
            <div class="product">
                <img src="dicksonjob.jpg">
                <p>Home Kit 2021/2022</p>
                <button>$500</button>
            </div>
            <div class="product">
                <img src="yannickBangala.jpg">
                <p>Away Kit 20221/2022</p>
                <button>$500</button>
            </div>
            <div class="product">
                <img src="goalKeeper.jpg">
                <p>GK Kit 20221/2022</p>
                <button>$500</button>
            </div>
            <div class="product">
                <img src="thirdKit.jpg">
                <p>Third Kit 20221/2022</p>
                <button>$500</button>
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