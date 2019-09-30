<!DOCTYPE HTML>
<html>

	<?php
		include 'includes/application_top.php';
		include 'includes/site_header.php';

		$list = show_products($link);
	?>

	 <head>
		<title> Homepage </title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
		<link rel="icon" href="images/icons/controllericon.png">
	 </head>
	 
	 <body>

	 	<table class="basket">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list as $product) {
					?>
				<tr>
					<td><?= $product['productName']?></td>
					<td><?= $product['price']?></td>
					<td><?= $product['productDescription']?></td>
					<td><a href="productdetails.php?productID=<?=$product['productID']?>">Details</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<!-- table that shows each product that is in the database -->

	 </body>

 	<?php
		include 'includes/site_footer.php';
		include 'includes/application_bottom.php';
	?>
</html>