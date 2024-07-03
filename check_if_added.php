<?php
    
    function check_if_added_to_cart($item_id)
	{
        // Include the connection to establish a database connection
        require 'connection.php';
		
        // Get the user ID from the session
        $user_id = $_SESSION['id'];
		
        // Query to check if the item is added to the cart for the user
        $product_check_query = "select * from users_items where item_id = '$item_id' and user_id='$user_id' and status = 'Added to cart'";
        
        // Execute the query
		$product_check_result = mysqli_query($con,$product_check_query);
        
		// Connection error checking
		if(!$con)
		{
			
			die('Could not connect : '.mysqli_error($con));
		}
		
		// Get the number of rows returned by the query
		$num_rows = mysqli_num_rows($product_check_result);
        
		// Check if the item is found in the cart
		if($num_rows >= 1)
		{
			
			return 1;
		}
		else 
		{
			
			return 0;
		}
        
    }
?>