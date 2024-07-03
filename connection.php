<?php


	$con = mysqli_connect("localhost", "root", "", "store");
	
	if(!$con)
		{
			die('Could not connect : '.mysqli_error($con));
		}
			
?>
