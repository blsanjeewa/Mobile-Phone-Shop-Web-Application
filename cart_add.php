<?php

    require 'connection.php';   
    session_start();
	
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
	
    $add_to_cart_query = "insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
	
    $add_to_cart_result = mysqli_query($con,$add_to_cart_query);
	
	if(!$con)
		{
			die('Could not connect : '.mysqli_error($con));
		}
		
	// Redirect the user to the cart page
    header('location: products.php');
	
?>