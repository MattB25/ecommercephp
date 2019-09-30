<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';

		$action = $_REQUEST['action']?? '';
		$items = $_SESSION['items'] ?? array();
		//requests action of button from product details and brings over the information
		//stores this information in an array called items, and stores it in a session.

		if($action == "Add to Basket")
		{
			if(!isset($items[$_POST['productName']]))
			{
				$items[$_POST['productName']] = $_POST['quantity'];
				$_SESSION['items']=$items;
			}
			else
			{
				$items[$_POST['productName']] += $_POST['quantity'];
				$_SESSION['items']=$items;
			}
		}

		//if the button add to basket is pressed on the productdetils page, posts that specific item to the array, unless it it already in there, in that case it adds one

		if($action == 'increase')
		{
			$_SESSION['items'][$_GET['productName']]+=1;
		}

		//this link allows the quantity to be increased by 1

		if($action == 'decrease')
		{
			$_SESSION['items'][$_GET['productName']]-=1;
			if($_SESSION['items'][$_GET['productName']]<1)
			{
				$_SESSION['items'][$_GET['productName']]=1; 
			}
		}
		//this link allows the quantity to be decreased by 1, and stops at 1

		if($action == 'remove')
		{
			unset($_SESSION['items'][$_GET['productName']]);
		}

		//this link allows an item to be completely removed from the basket
	?>

	<head>
		<title> Basket </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	 
	<body>

		<h1>Basket</h1>

		<table class="basket">
			<tr>
				<th>Name</th>
				<th>Quantity</th>
				<th>Increase</th>
				<th>Decrease</th>
				<th>Remove</th>
			</tr>
			<?php 
			foreach($_SESSION['items'] as $productName => $quantity)
			{
			?>
			<tr>
				<td><?= $productName ?></td>
				<td><?= $quantity ?></td>
				<td><a href="basket.php?action=increase&productName=<?=$productName?>">Increase</a></td>
				<td><a href="basket.php?action=decrease&productName=<?=$productName?>">Decrease</a></td>
				<td><a href="basket.php?action=remove&productName=<?=$productName?>">Remove</a></td>
				<!-- stores infromation in url to put on next page -->
			</tr>
			<?php 
			}
			?>
			
		</table>
		<br> 
		Total Cost: 
		<?php
			//get price of product
			//$totalItemCost = price of product * quantity

			//foreach (item in array)
		//{
			//totalBasketCost = $totalItemCost += $totalItemCost
		//}
		}
		?>
		<br>
		<?php
			if(!isset($_SESSION['user_id'])){
				?>
				<a href="login.php">
				<input class="basketbutton" type="button" value="Checkout" name="checkoutbutton"></input>
				</a>
				<!-- if checkout is pressed but no one is logged in, goes to login page  -->
				<?php 
				}else{
				?>
				<a href="checkout.php">
				<input class="basketbutton" type="button" value="Checkout" name="checkoutbutton"></input>
				</a>
				<!-- if checkout is pressed and someone logged in, goes to checkout page -->
				<?php 
				}
				?>
	</body>

 	<?php
		include 'includes/application_bottom.php';
		include 'includes/site_footer.php';
	?>
	
</html>

