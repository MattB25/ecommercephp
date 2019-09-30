<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';

		$id=(int) $_REQUEST['productID'];
		// request is a mix of get and post
		if(!$id)
		{
			die("This product does not exist.");
		}
		//if an invalid id is entered in the url, it will come back with an error
		
		$details = get_product_details($link, $id);
	?>

	<head>
		<title> Product Details </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
		<link rel="icon" href="images/icons/controllericon.png">
	</head>
	 
	<body>

		<div class="detailtext">

			<form method="post" action="basket.php">
				<input id="formName" name=productName value="<?php echo $details['productName']?>" readonly="readonly" /></input>
				<!-- prints product name of specific product -->
				<p><?php echo $details['productDescription']?></p>

		 		<input id="formPrice" name="price" value="<?php echo "&pound;"; echo $details['price']?>" readonly="readonly" /></input>
		 		<br>	
		 		<br>	 		
		 		<!-- shows the details and price of the particular product -->

				<input id="formQuantity" type="number" name="quantity" value="1" min="1" max="10">

				<input type="hidden" name="id" value="<?=$id?>"/>
	 			<!-- carries unique ID onto basket -->

				<br>

	 			<input name="action" type="submit" value="Add to Basket" class="button"></input>

			</form>
			<!-- form to submit details, hides all the attributes that make it a text box -->

	 	</div>

	 	



		<!-- <div class= "gallery">
	 		<h2> Gallery </h2>
	 		<img src= "images/products/rdr2gp1.jpg" alt="rdr2gp1"/>
	 		<img src= "images/products/rdr2gp2.jpg" alt="rdr2gp2"/>
	 		<img src= "images/products/rdr2gp3.jpg" alt="rdr2gp3"/>
	 		<img src= "images/products/rdr2gp4.jpg" alt="rdr2gp4"/>
	 		<img src= "images/products/rdr2gp5.jpg" alt="rdr2gp5"/>
	 		<img src= "images/products/rdr2gp6.jpg" alt="rdr2gp6"/>
	 		<img src= "images/products/rdr2gp7.jpg" alt="rdr2gp7"/>
	 		<img src= "images/products/rdr2gp8.jpg" alt="rdr2gp8"/>
	 	</div> -->
	

	</body>

 	<?php
		include 'includes/application_bottom.php';
		include 'includes/site_footer.php';
	?>
</html>