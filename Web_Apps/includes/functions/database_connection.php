<?php
	//connects to the database
	function db_connect()
	{
		@$link = mysqli_connect('mysql.cs.bangor.ac.uk:3306','eeu829', 'Bangor16', 'eeu829'); 
		//'@' hides errors

		if(!$link)
		{ 
			die ("Unable to connect to database!");
		} 
		//if the link can't be reached it shows an error message
		return $link;
	}


	function show_products($link)
	{
		$return = array();
		$query="SELECT * FROM WA_Products";
		$result=mysqli_query($link, $query);
		//puts rows into an array and the query is run

		if (mysqli_num_rows($result))
		{
			while($products = mysqli_fetch_assoc($result))
			{
				array_push($return, $products);
			}
			//goes through results set, and appends the products to the results one by one
		}
		return $return;
	}

	function get_product_details($link, $id)
	{
		$query="SELECT * FROM WA_Products WHERE productID =" .(int)$id;
		$result=mysqli_query($link, $query);
		return mysqli_fetch_assoc($result);

		//query to get the productID for all products and returns results
	}

?>
