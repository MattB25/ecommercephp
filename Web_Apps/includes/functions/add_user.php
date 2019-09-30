<?php
function add_user($name, $username, $password, $email, $deliveryAddress, $billingAddress, $paymentMethod)
	{
		@$link = mysqli_connect('mysql.cs.bangor.ac.uk:3306','eeu829', 'Bangor16', 'eeu829'); 

		$exists = false;

		$query ="SELECT * FROM WA_Users WHERE username='". mysqli_real_escape_string($link, $username) ."'";
		$result=mysqli_query($link, $query); 

		//query to get username from databse and result runs it

		if(mysqli_num_rows($result))
			{
				$details=mysqli_fetch_assoc($result);
				$exists=($username==$details['username']);
				//details not submitted if username matches database username
			}
		else 
			{
				$sql="INSERT INTO WA_Users (name, username, password, email, deliveryAddress, billingAddress, paymentMethod) VALUES ('". mysqli_real_escape_string($link, $name) ."', '". mysqli_real_escape_string($link, $username) ."', '". mysqli_real_escape_string($link, $password) ."', '". mysqli_real_escape_string($link, $email) ."', '". mysqli_real_escape_string($link, $deliveryAddress) ."','". mysqli_real_escape_string($link, $billingAddress) ."','". mysqli_real_escape_string($link, $paymentMethod) ."')";

				mysqli_query($link, $sql);
				$id = mysqli_insert_id($link);

				//inserts values inputted into the database
				
			}

		return $exists;
		return $id;
	}

?>