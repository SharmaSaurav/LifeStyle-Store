<?php require "includes/common.php";
	  require "includes/check_if_added.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Products</title>

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

	<div class="container" style="margin-top: 85px;">
		<div class="jumbotron">
			<h1>Welcome to the Lifestyle Store</h1>
			<p>We have the best cameras, watches and shirts for you. No need to hunt around, we
			have all in one place.</p>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/5.jpg">
						<div class="caption">
							<h3>Cannon EOS</h3>
							<p>Price:Rs. 36000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(1))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=1" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
							
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/2.jpg">
						<div class="caption">
							<h3>Sony Dslr</h3>
							<p>Price:Rs. 40000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(2))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=2" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/3.jpg">
						<div class="caption">
							<h3>Sony Dslr</h3>
							<p>Price:Rs. 5000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(3))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=3" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/4.jpg">
						<div class="caption">
							<h3>Olympus Dslr</h3>
							<p>Price:Rs. 80000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(4))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=4" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/9.jpg">
						<div class="caption">
							<h3>Titan #251</h3>
							<p>Price:Rs. 13000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(5))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=5" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/10.jpg">
						<div class="caption">
							<h3>Tital #301</h3>
							<p>Price:Rs. 3000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(6))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=6" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/11.jpg">
						<div class="caption">
							<h3>HMT Milan</h3>
							<p>Price:Rs. 9000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(7))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=7" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/12.jpg">
						<div class="caption">
							<h3>Faber Luba</h3>
							<p>Price:Rs. 18000</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(8))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=8" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>
		</div>	

		<div class="row">
			<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/8cpy1.jpg">
						<div class="caption">
							<h3>H&W</h3>
							<p>Price:Rs. 800</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(9))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=9" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/6.jpg">
						<div class="caption">
							<h3>Luis Phil</h3>
							<p>Price:Rs. 1500</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(10))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=10" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/13.jpg">
						<div class="caption">
							<h3>John Zok</h3>
							<p>Price:Rs. 1800</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(11))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=11" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class=" thumbnail">
						<img src="images/14.jpg">
						<div class="caption">
							<h3>Jhalsani</h3>
							<p>Price:Rs. 1300</p>
							<?php if(isset($_SESSION['email'])){ 
										if(check_added($_SESSION(12))) { ?>
											<a href="cart.php"><button type="button" class="btn btn-primary btn-block" disabled> Added to cart</button></a>
										<?php 
										} 
										else { ?>
											<a href="cart-add.php?id=12" name="add" value="add"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
										<?php 
										}
									}
								   else { ?>
								   		<a href="login.php"><button type="button" class="btn btn-primary btn-block"> Add to cart</button></a>
								   	<?php 
								   } ?>
						</div>
					</div>
				</div>
		</div>	

	</div>

	<footer style="position: relative;">
		<div class="container">

			<center>
				<h5>“Copyright © Lifestyle Store. All Rights
 				Reserved” ​and ​“Contact Us: +91 90000 00000</h5>
			</center>
		</div>
	</footer>

</body>
</html>