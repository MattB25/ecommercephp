<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';
	?>

	<head>
		<title> Checkout </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	 
	<body>
		<h1>Checkout</h1>

		<div class="checkoutmenu">
			<h2>Delivery Address</h2>
			<div class="checkoutaddress">
					Flat 4<br>
					8 Salisbury Road <br>
					New Brighton<br>
					Merseyside<br>
					England<br>
					CH45 9JJ<br>
			</div>
			<div class="addcheckoutaddress">
					Add new address
			</div>
		</div>

		<div class="checkoutmenu">
			<h2>Billing Address</h2>
			<div class="checkoutaddress">
				Flat 4<br>
				8 Salisbury Road <br>
				New Brighton<br>
				Merseyside<br>
				England<br>
				CH45 9JJ<br>
			</div>
			<div class="addcheckoutaddress">
					Add new address
			</div>

		</div>

		<div class="checkoutmenu">
			<h2>Payment Method</h2>
			<!-- radio buttons of payment choice -->
			<label class="checkoutradio"> Paypal
  				<input type="radio" checked="checked" name="radio">
			</label>
			<label class="checkoutradio"> Debit Card
  				<input type="radio" checked="checked" name="radio">
			</label>
		</div>

		<div class="checkoutmenu">
			<h2>Review Items</h2>
			<!-- displays basket again -->
			<table class="basket">
				<tr>
					<th>Name</th>
					<th>Quantity</th>
					<th>Increase</th>
					<th>Decrease</th>
					<th>Remove</th>
				</tr>
			<?php foreach($_SESSION['items'] as $productName => $quantity)
			{
			?>
			<tr>
				<td><?= $productName ?></td>
				<td><?= $quantity ?></td>
				<td><a href="basket.php?action=increase&productName=<?=$productName?>">Increase</a></td>
				<td><a href="basket.php?action=decrease&productName=<?=$productName?>">Decrease</a></td>
				<td><a href="basket.php?action=remove&productName=<?=$productName?>">Remove</a></td>
			</tr>
			<?php 
			}
			?>
			</table>
			<!-- duplicate of the basket --> 
		</div>

		<div class="checkoutmenu">
			<h2>Terms and Conditions</h2>
			<p class="smallprint">
				<!-- Makes writing smaller for the terms and conditions -->
				Your personal data will be used to provide the information, goods and services offered through our website to you, for billing and order fulfillment.<br>
				If you sign up to our newsletter we may use your email address to send you information about products or services. <br>
				You can opt out of these at any point and you can ask for personal data to stop being recorded at any time.<br>
				All customers have the right to cancel their orders under the The Distance Selling Regulations which gives consumers extra protection when buying online. Specific legislation here that applies is regulation of The Distance Selling Regulations. <br>
			</p>
			<!-- Check boxes for the user to tick before proceeding -->
			<label class="checkoutcheckbox"> I have read & understood the terms and conditions
  				<input type="checkbox" name="checkbox">
			</label><br>
			<label class="checkoutcheckbox"> I would like to signup for email notificaitons
  				<input type="checkbox" name="checkbox">
			</label>
		</div>

		<a href="success.php">
		<button class="button"> Purchase </button>
		</a>

	</body>

 	<?php
		include 'includes/application_bottom.php';
		include 'includes/site_footer.php';
	?>
</html>