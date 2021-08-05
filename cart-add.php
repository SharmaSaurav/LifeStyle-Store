<?php
	require "includes/common.php;"
	if (isset($_GET['id']) && is_numeric($_GET['id'])) {
		$item_id = $_GET['id'];
		$insert_query = "INSERT INTO users_item (user_id,item_id,status)values('$_SESSION['id']','$item_id','ADDED TO CART')"; 
		mysqli_query($con,$insert_query) or die(mysqli_error($con));
		header("location:products.php"); 
	}
?>