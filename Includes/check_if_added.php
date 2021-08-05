<?php 
 	function check_added($item_id){
 		require "common.php";
 		$user_id = $_SESSION['id'];
 		$in_cart=mysqli_query($con,"SELECT * FROM user_items WHERE user_id='$user_id' AND item_id='$item_id' and status ='ADDED TO CART'")or die(mysqli_error($con));
 		if(mysqli_num_rows($in_cart)==0){
 			return 0;
 		}
 		else {
 			return 1;
 		}
 	}
 ?>