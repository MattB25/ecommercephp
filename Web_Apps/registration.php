<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';

		if($_POST)
		{
			$error = "";
			$name = $_POST['Name'];
			$username = $_POST['Username'];
			$password = $_POST['Password'];
			$email = $_POST['Email'];
			$deliveryAddress = $_POST['DeliveryAddress'];
			$billingAddress = $_POST['BillingAddress'];
			$paymentMethod = $_POST['PaymentMethod'];

			$user_match = add_user($name, $username, $password, $email, $deliveryAddress, $billingAddress, $paymentMethod);
			//refers to add_user function

			// if (!validate_pass($password))
			// {
			// 	$error="Password has to be 8 or more characters";
			// 	echo "<script type='text/javascript'>alert('$error');</script>";
			// 	#alert with 'login unsuccessful' and stays on the login page 
			// }

			// // if (user_exists($username))
			// // {
			// // 	$error1="Username already exists, please try another.";
			// // 	echo "<script type='text/javascript'>alert('$error1');</script>";
			// // 	#alert with 'login unsuccessful' and stays on the login page 
			// // }

			// if(!$error && !$error1)
			// {
			// 	$product_id=add_user($name, $username, $password, $email);
			// 	$success = "User added successfully.";
			// 	echo "<script type='text/javascript'>alert('$success');window.location='account.php';</script>";
			// }

		}
	?>

	<head>
		<title> Registration </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	 
	<body>

		<h1>Sign Up</h1>

		<form method="post" action="registration.php">
			<table class="signup">
				<?php
					if(isset($user_match) and !$user_match)
						//if the user is entered and it doesnt match the database
						{
							$message = "Username successfully added";
							echo "<script type='text/javascript'>alert('$message');window.location='account.php';</script>";
							#alert with 'username added' then goes to the account page 
						}

						if(isset($user_match) and $user_match)
						//if the user is entered and it does match the database
						{
							$message = "Username already in use. Please try again";
							echo "<script type='text/javascript'>alert('$message');</script>";
							#alert with 'already in use' and lets user try again
						}
				?>
				<tr>
					<td>
						<strong>Name</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Name" name="Name" value="<?php if (isset($_POST['Name'])) echo $_POST['Name']; ?>">
						<!-- keeps the text in the textboxes so user doesnt have to insert info twice -->
					</td>
				</tr>
				<tr>
					<td>
						<strong>Username</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Username" name="Username" value="<?php if (isset($_POST['Username'])) echo $_POST['Username']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Password</strong>
					</td>
					<td>
						<input class="textboxes" type="password" for="password" placeholder="Password" name="Password" value="<?php if (isset($_POST['Password'])) echo $_POST['Password']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Email</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Email" name="Email" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Delivery Address</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Delivery Address" name="DeliveryAddress" value="<?php if (isset($_POST['DeliveryAddress'])) echo $_POST['DeliveryAddress']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Billing Address</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Billing Address" name="BillingAddress" value="<?php if (isset($_POST['BillingAddress'])) echo $_POST['BillingAddress']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Payment Method</strong>
					</td>
					<td>
						<input class="textboxes" placeholder="Payment Method" name="PaymentMethod" value="<?php if (isset($_POST['PaymentMethod'])) echo $_POST['PaymentMethod']; ?>">
					</td>
				</tr>
			</table>

			<button class="button"> Submit </button>
			
		</form>

		
	</body>

 	<?php
		include 'includes/application_bottom.php';
		include 'includes/site_footer.php';
	?>
</html>