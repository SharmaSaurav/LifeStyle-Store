<?php 
	require "includes/common.php";
	$user_id = $_SESSION['id'];
	$old = mysqli_real_escape_string($con,$_POST['current_password']);
	if (strlen($old) < 6) {
		header("settings.php?error_less=Password must be atleast 6 chrachter long");
	}

	$new = mysqli_real_escape_string($con,$_POST['new_password']);
	if (strlen($new) < 6) {
		header("settings.php?error_less=Password must be atleast 6 chrachter long");
	}
	$retype = mysqli_real_escape_string($con,$_POST['confirm_password']);
	if ($new != $retype ) {
		header("settings.php?error_not_same=Password did\'nt not match");
	}

	$select_query = "SELECT password from users where user.id = '$user_id'";

	$password = mysqli_query($con,$select_query);

	// if($password != md5($old)) {

	// 	echo"Enter Correct Password";
	// }

	$select_query = "SELECT password from users where user.id = '$user_id'";

	$password = mysqli_query($con,$select_query);

	if($password != md5($old)) {
		
		header("settings.php? incorrect_password=Enter Correct Password");
	}

	else{
		$new = md5($new);

		$query_update = "UPDATE users set password = $new where users.id = '$user_id'";
		mysqli_query($con, $query_update) or die($mysqli_error($con));
	}
 ?>