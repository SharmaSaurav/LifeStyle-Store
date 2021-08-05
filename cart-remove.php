<?php 
	require 'includes/common.php';
	$user_id=$_SESSION['id'];
	$item_id = $_GET['id'];
	$delete_query="DELETE FROM users_item WHERE  user_id='$user_id' and item_id='item_id'";
	mysqli_query($con,$query) or die($mysqli_error($con));
	header("location:cart.php");
?>