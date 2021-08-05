<?php 

	require "includes/common.php";

	$email = $_POST['e-mail'];
	$email = mysqli_real_escape_string($con, $email);
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($con, $password);
	$password = MD5($password);
	// Query checks if the email and password are present in the database.
	$email_pass_query="SELECT id,email from users where users.email='$email' and users.password='$password'"; // its correct too
	$email_match = mysqli_query($con,$email_pass_query)or die($mysqli_error($con));
	// If the email and password are not present in the database, the mysqli_num_rows returns 0,
	$rows=mysqli_num_rows($email_match);
	if ($rows == 0){
		$error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  		header('location: login.php?error=Please enter correct E-mail id and Password');
	}

	else {
		$id_email=mysqli_fetch_array($email_match) {
		$_SESSION['id'] =  $id_email['id'];// ormysqli_insert_id($con)
		$_SESSION['email']= $email_match['email'];
		header("location:products.php");
		}

 ?>