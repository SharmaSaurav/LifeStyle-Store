<?php 
	require "includes/common.php";
	if(isset($_SESSION['email'])){
		header("location:index.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>

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
	require "includes/header.php";
	?>

	<div class="container" style="padding-top: 200px;">
		<div class="row">
			<div class="col-sm-3 col-md-4 col-sm-offset-4">
				<h2>Change Password</h2>
				<form action="settings_script.php" method="POST">
						<div class="form-group">
							<input type="password" name="current_password" placeholder="Current password" class="form-control" required = "true">
						</div>
						<div><?php if (isset($_POST['error_less'])) {
						 echo $_POST['error_less'] ;}?></div>

						<div><?php if (isset($_POST['incorrect_password'])) {
						 echo $_POST['incorrect_password'];} ?></div>

						<div class="form-group">
							<input type="password" name="new_password" placeholder="New password" class="form-control" required = "true">
						</div>
						<div><?php if (isset($_POST['error_less'])) {
							 echo $_POST['error_less'];
							} ?></div>

						<div class="form-group">
							<input type="password" name="confirm_password" placeholder="Confirm new password" class="form-control" required = "true">
						</div>
						<div><?php if (isset($_POST['error_not_same'])) {
										 echo $_POST['error_not_same'];} ?></div>

						<!-- <a href="index.html"> dont need this --> <button type="button" class="btn btn-primary btn-lg">Confirm</button>
						
				</form>
			</div>
		</div>
	</div>

	<?php include "includes/footer.php"; ?>

</body>
</html>