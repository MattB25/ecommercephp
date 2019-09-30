<!DOCTYPE HTML>
<html>
	<head>
		<link rel="icon" href="images/icons/controllericon.png">
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>

	<body>
		<header>
			<div class = "name">
				Games Store
			</div>
			<div class = "nav"> 
				<img id="icons" src= "images/icons/home.png" alt="home"/>
				<a id="navtext" href="productlisting.php">Home</a>
				<img id="icons" src= "images/icons/login.png" alt="login"/>
				<?php
				if(!isset($_SESSION['user_id'])){
				?>
				<a id="navtext" href="login.php">Log In</a>
				<?php 
				}else{
				?>
				<a id="navtext" href="logout.php">Log Out</a>
				<?php 
				}
				?>
				<img id="icons" src= "images/icons/registration.png" alt="registration"/>
				<a id="navtext" href="account.php">Account</a>
				<img id="icons" src= "images/icons/cart.png" alt="cart"/>
				<a id="navtext" href="basket.php">Basket</a> 
			</div>

		</header>
	</body>



</html>