<?php 
	require "includes/common.php";
	$first_name=mysqli_real_escape_string($con,$_POST['first_name']);
	$last_name=mysqli_real_escape_string($con,$_POST['last_name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email,$email)) {
		location('location:signup.php?email_error=Incorrect_email');
	}
	$password=mysqli_real_escape_string($con,$_POST['password']);
	if(strlen($password)<6){
		header("location:signup.php?password_error=password must be 6 chrachters long"); // it still reamins to be added
	}
	$password=md5($password);
	$phone=mysqli_real_escape_string($con,$_POST['contact']);
	// $regex_num = "/^[789][0-9]{9}$/";
	// if (!preg_match($regex_num, $phone)) {
 //    $m = "<span class='red'>Not a valid phone number</span>";
 //    header('location: signup.php?m2=' . $m);

	  $city = $_POST['city'];
	  $city = mysqli_real_escape_string($con, $city);

	  $address = $_POST['address'];
	  $address = mysqli_real_escape_string($con, $address);

	$select= mysqli_query($con,"SELECT email FROM users WHERE email='$email' ");
	if (mysqli_num_Num_rows($select)>0) {
		echo "E-mail already exists";
	}
	else {
		$insert_query= "INSERT INTO users (first_name,last_name,email,password,contact,city,address) values('$first_name','$last_name','$email','$password','$phone','$city','$address')";
		$insert= mysqli_query($con,$insert_query);
		$id=mysqli_insert_id($con);
		//session_start();
		$_SESSION['email'] = $email;
    	$_SESSION['id'] = $id;
		header("location:products.php");
	}
	 ?>
