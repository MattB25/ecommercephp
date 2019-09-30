<!DOCTYPE HTML>
<html>
	<head>
		<link rel="icon" href="images/icons/controllericon.png">
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>

	<body>
		<footer>
			<div class = "smallname"> 
				<?php
				if(!isset($_SESSION['user_id'])){
				?>
				<strong>You are not logged in.</strong>
				<?php 
				}else{
				?>
				<strong>Logged in as:</strong> <?=$_SESSION['user_id']?>
				<?php 
				}
				?>
			</div>

			<div class = "nav"> 
				&copy; Matt Beale
			</div>

		</footer>
	</body>
</html>



