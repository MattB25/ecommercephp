<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';
		#includes other scripts at the top of the page

		if(isset($_POST) and $_POST)
		{
			$username = $_POST['Username'];
			$password = $_POST['Password'];
			$login_success = login($link, $username, $password);
		}
		#sets the username and password posted by the user as $username and $password, and sets the login function as login_success
	?>

	<head>
		<title> Login Page </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	 
	<body>

		<h1>Login</h1>

		<form method="post" action="login.php">
		<!-- Form submits to itself --> 
			<table class="login">
				<?php
					if(isset($login_success) and !$login_success)
					#if the login is set and it is unsuccessful
					{
						$message = "Login unsuccessful";
						echo "<script type='text/javascript'>alert('$message');</script>";
						#alert with 'login unsuccessful' and stays on the login page 
					}

					if(isset($login_success) and $login_success)
					#if the login is set and it is successful
					{
						$message = "Login successful";
						echo "<script type='text/javascript'>alert('$message'); window.location='productlisting.php';</script>";
						#alert with 'login successful' then goes to the product listing page
					}
				?>
				<tr>
					<td>
						<strong>Username</strong>
					</td>
					<td>
						<input type="text" class="textboxes" placeholder="Username" name="Username" value="<?php if (isset($_POST['Username'])) echo $_POST['Username']; ?>"> 
						<!-- Keeps username in box after incorrect login -->
					</td>
				</tr>
				<tr>
					<td>
						<strong>Password</strong>
					</td>
					<td>
						<input type="password" class="textboxes" for="password" placeholder="Password" name="Password">
					</td>
				</tr>
			</table>

		<input type="submit" name="login" value="Log in" class="button"></input>
		
		</form>

		<a id="signup" href="registration.php">Haven't got an account? Sign up here!</a>
		<!-- Link to the sign up page -->


	</body>

 	<?php
		include 'includes/application_bottom.php';
		include 'includes/site_footer.php';
		#includes other scripts at the bottom of the page
	?>

</html>