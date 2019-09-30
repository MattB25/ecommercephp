<?php 
	
	function login($link, $username, $password)
	//login function taking 3 parameters
	{
		$logged_in = false;
		//log in is always set to false at the start

		$sql="SELECT * FROM WA_Users WHERE username='" . $username . "' "AND" password='" . $password . "'";
		//query to select username and password

		$result=mysqli_query($link, $sql); 
		//runs the query
		
		if(mysqli_num_rows($result))
		{
			$details=mysqli_fetch_assoc($result);
			$logged_in=($password==$details['password']);
			//user logged in if password matches database password
			if ($logged_in){
				$_SESSION['user_id']=$details['username'];
				//stores the username into a session
			}
		}


		return $logged_in;
	}

 ?>