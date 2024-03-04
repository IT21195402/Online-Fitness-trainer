<?php
session_start();
require_once("./php/dbcontroller.php");
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
<HTML>
<HEAD>
<TITLE>Fitness Stores</TITLE>

<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" type="text/css" media="screen" href="./css/Store.css">
<link  rel="stylesheet" type="text/css" href="./css/style.css" />
</HEAD>
<BODY>

<div class="header">
        <nav>
            <img src="./logo and menu/Untitled-1.png" alt="logo" class="logo">
            <ul class="navbar">

                <li><a href="#">HOME</a></li>
                <li><a href="#">LOGIN</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">STORE</a></li>
			
		<li>
                    <div class="search">
                        <div class="icon"></div>
                        <div class="input"></div>
                        <input type="text" placeholder="search" id="searchid" class="searchid1">
                        <script>
                            const icon = document.querySelector('.icon');
                            const search = document.querySelector('.search');
                            icon.onclick = function() {
                                search.classList.toggle('active')
                            }
                        </script>
                </li>               

                <li>
                    <div class="cart">
                        <button type="button" class="cartin"><i class="fa-solid fa-cart-arrow-down fa-2x icon-cog whiteiconcolor"></i></button>
                    </div>
                </li>

                <li>
                    <div>
                        <button type="button" class="menuin" id="active"><div class="menudetails"><i class="fa-solid fa-bars fa-2x"></i></div></i></button>

                    </div>
                </li>

            </ul>
        </nav>
        </div>

		<div>
			<button class="main-btn" type="button"><span></span>Pay Now</button>
		</div>

<div id="shopping-cart">
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
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="./product-images/icon-delete.png" alt="Remove Item" /></a></td>
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

<div id="product-grid" class="row">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item col-lg-4">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
        if($key % 4 == 0){
            ?>
        <br/>
        <?php
        }
		}
	}
	?>
</div>
</body>
<br/>
	<footer class="footer">
        <div class="l-footer">
            <h1>
                <img src="./logo and menu/Untitled-1.png" alt=""></h1>
            <p>
                
            </p>

            </p>
        </div>
        <ul class="r-footer">
            <li>
                <h2 class="social1">
                    Social</h2>
                <ul class="box">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Fitnesslk</a></li>
                    <li><a href="#">Health</a></li>
                </ul>
            </li>
            <li class="features">

                <h2 class="social1">Information</h2>
                <ul class="box">
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">package</a></li>
                    <li><a href="#">Trainers</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
            </li>
            <li>
                <h2 class="social1">
                    Legal</h2>
                <ul class="box">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Return</a></li>
                </ul>
            </li>
        </ul>
        <div class="b-footer">
            <p> All rights reserved by ©FITMORE 2022 IWT ASSIGMENT </p>
        </div>
		
    </footer>
</HTML>