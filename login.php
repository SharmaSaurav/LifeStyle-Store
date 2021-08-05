<?php 
	require "includes/common.php";
	if (isset($_SESSION['email'])) {
    header('location: products.php');
	}	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
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
	<div class="container">
		<?php
			require "includes/header.php";
		?>

		<div class="row" style="padding-top: 100px">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Log-In</h4>
					</div>
					<div class="panel-body">
						<p class="text-warning">
							Login to make a purchase
						</p>
						<form method="POST" action="login_submit.php">
							<div class="form-group">
								<label for="email">E-mail</label>
									<input type="email"  class="form-control" name="email" required = "true" >
									
							</div>
							<div class="form-group">
								<label for="password">Password</label>
									<input type="password"  class="form-control" name="password" required = "true">
							</div>
							<a href="products.html"> <input type="submit" class="btn btn-primary btn-block"></a>
							<?php if(isset($_POST['error'])) {echo $_POST['error'];} ?>
						</div>

					<div class="panel-footer">
						<h5>Don't have and acoount? Don't worry, <a href="signup.php">Sign-up </a>here</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
	require "includes/footer.php";
	?>
</body>
</html>

<!-- text-warning class under p tag is new -->