<?php
	require "includes/common.php";
	if(!isset($_SESSION['email'])){
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		require "includes/header.php";
	?> 

	<div class="container" style="padding-top: 200px;">
		<center>
			<div class="table-responsive ">
				<table class="table table-striped ">
					<?php $user_id=$_SESSION['id'];
						$item_query="SELECT i.id, i.name as name, i.price as price from users_item ut INNER JOIN items i on ut.item_id = i.id  where ut.id='$user_id' and  status='ADDED TO CART'";
						$items = mysqli_query($con,$item_query) or die($mysqli_error($con));
						if(mysqli_num_rows($items)==0){
							echo "let's add some items first";
						}
						else{ ?>
							
					<thead>
						<tr>
							<th>Item Number</th>
							<th>Item Name</th>
							<th>Price</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php  while($items_array=mysqli_fetch_array($items)){
							$id .= $items_array['price'].",";
							$sum += $items_array['price'];
						 ?>
						<tr>
							
							<td><?php echo $items_array['id'] ?></td>
							<td><?php echo $items_array['name'] ?></td>
							<td><?php echo $items_array['price'] ?></td>
							<td><a href="cart-remove.php?id={$items_id['id']}" class="remove_item_link">Remove</a>
							
						
						</tr>
						<?php }
						} ?>

						<tr>
							<td></td>
							<td>Total</td>
							<td>Rs. <?php echo $sum ?></td>
							<td><h6>Have a coupon? use here</h6> <input type="text" name="coupon"></td>
							<form action="success.php" method="GET">
								<td><a href="success.php"> <button type="button" class="btn btn-primary btn-block">Confirm Order</button></a></td>
							</form>
						</tr>
					</tbody>
				</table>
			</div>
		</center>
	</div>

	<?php 
	require "includes/footer.php";
	?>

	

</body>
</html>