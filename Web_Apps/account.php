<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';
	?>

	<head>
		<title> Account </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	 
	<body>

		<h1>Account</h1>

		<form method="post" action="account.php">
			<table class="signup">
				<tr>
					<td>
						<strong>Edit Name</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Name" name="">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Edit Username</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Username" name="">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Edit Email</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Email" name="">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Edit Password</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Password" name="">
					</td>
				</tr>
			</table>
			<button class="button"> Save </button>
		</form>

		<h1>Past Orders</h1>

		<table class="basket">
		<tr>
			<th>Items</th>
			<th>Overall Price</th>
			<th>Date</th>
		</tr>
		<tr>
			<td>Fifa 18 (Xbox One)</td>
			<td>£50.99</td>
			<td>26/09/2017</td>
		</tr>
		<tr>
			<td>Call of Duty: World at War (Playstation 4)</td>
			<td>£54.99</td>
			<td>08/11/2017</td>
		</tr>
		<tr>
			<td>Super Smash Bros (Nintendo Switch)</td>
			<td>£52.99</td>
			<td>27/01/2019</td>
		</tr>
		<tr>
			<td>Read Dead Redemption (Xbox One)</td>
			<td>£49.99</td>
			<td>02/02/2019</td>
		</tr>
		<tr>
			<td>Crash Bandicoot Trilogy (Playstation 4)</td>
			<td>£29.99</td>
			<td>08/02/2019</td>
		</tr>
		<tr>
			<td>Rocket League (PC)</td>
			<td>£19.99</td>
			<td>15/02/2019</td>
		</tr>
		</table>

	</body>

 	<?php
		include 'includes/application_bottom.php';
		include 'includes/site_footer.php';
	?>
</html>