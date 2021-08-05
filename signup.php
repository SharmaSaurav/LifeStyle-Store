<?php require "includes/common.php";
	if(isset($_SESSION['email'])){
		header("location:products.php");
	} ?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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

	<div class="container">
		<div class="row" style="padding-top: 100px;">
			<div class=" col-sm-4 col-sm-offset-4">
				<h1>Sign-up</h1>
				<form method="POST" action="signup_script.php">
					<div class="form-group col-sm-6" style="padding-left: 0px ;">
						
						<input type="text" class="form-control" placeholder="Firstname" name="firstname">
					</div>

					<div class="form-group col-sm-6" style="padding-left:0px;">
						<input type="text" class="form-control" placeholder="Lastname" name="lastname">
					</div>

					<div class="form-group">
						<input type="email"  class="form-control" placeholder="E-mail" name="email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required />
					</div>
					<div><?php if (isset($_POST['email_error'])){echo $_POST['email_error']; } ?></div>

					<div class="form-group">
						<input type="password"  class="form-control" placeholder="Password" name="password" pattern=".{6,}">
					</div>
					<div><?php if (isset($_POST['password_error'])){echo $_POST['password_error'];} ?></div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder = "Contact no."name="contact"></input>
					</div>

					<div class="form-group">
						<select class="form-control">
                                    <option>Mohali</option>
                                    <option>Chandigarh</option>
                                    <option>Panchkula</option>
                                    <option>Delhi</option>
                                    <option>Mumbai</option>
                                    <option>Chennai</option>
                        </select>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder = "Address" name="Address"></input>
					</div>

					<a href="products.php"><button type="button" class="btn btn-primary btn-block">Submit</button></a> 

				</form>
			</div>
		</div>
	</div>

	<?php 
	require "includes/footer.php";
	?>

</body>
</html>