<?php
    
    // Include the connection to establish a database connection
	require 'connection.php';
    
    // Get multiple request from the same user
    session_start();
    
    // Get the item ID
	$item_id = $_GET['id'];
	
    // Get the user ID
    $user_id = $_SESSION['id'];
	
    // Query to delete the item from the cart for the user
    $delete_query = "delete from users_items where user_id = '$user_id' and item_id = '$item_id'";
	
    // Execute
    $delete_query_result = mysqli_query($con,$delete_query);
	
    // Connection error checking
	if(!$con)
	{
		
		die('Could not connect : '.mysqli_error($con));
	}
	
    // Redirect the user to the cart page
    header('location: cart.php');
	
?>