<?php 
	require "includes/common.php";
	if(!isset($_SESSION['email'])){
		header("location:index.php");
	}
	$user_id = $_SESSION['id'];
	$item_id=$_GET['item_id'];
	$query= "UPDATE users_item SET status='CONFIRMED' WHERE user_item.user_id='$user_id' AND user_item.item_id='$item_id' ";
	mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" src="Bootstrap/js/jquery-3.6.0.min.js"></script>

	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Success</title>
</head>
<body>
	<?php
	require "includes/header.php";
	?>

	<div class="container" style="padding-top: 200px">
		<div class="row">
			<div class="jumbotron">
				<center>
					<h1>Your order is confirmed.</h1> <h2>  Thank you for shopping
					with us.<a href="products.html">Click here​ </a> ​ to purchase any other item.</h2>
				</center>
			</div>
		</div>
	</div>

	<?php 
	require "includes/footer.php";
	?>

</body>
</html>