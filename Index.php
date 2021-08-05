<?php
	require "includes/common.php";
	// Redirects the user to products page if he/she is logged in.
	if(isset($_SESSION['email'])){
		header('location:products.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lifstyle Store</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" src="Bootstrap/js/jquery-3.6.0.min.js"></script>

	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="style.css">




</head>
<body>
	<?php
	include "includes/header.php";
	?>
	<div>  <!-- style="padding-top: 50px;" -->
		<div class="banner_image">
			<div class="container">
				<center>
				<div id=banner_content>
					<h2 style="color: #f8f8f8;">Welcome to the Lifestyle Store</h2><br>
					<a href="products.php"><button type="button" class="btn btn-danger btn-lg active">Shop Now</button></a>
				</div>
				</center>
			</div>
		</div>
	</div>

	<?php 
	include "includes/footer.php";
	?>


	

</body>
</html>