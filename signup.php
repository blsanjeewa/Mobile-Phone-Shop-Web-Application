<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/phonestore.png" />
        <title>MDS Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
                padding: 0;
                margin: 0;
            }

            h1 {
                text-align: center;
                font-weight: bold;
            }

            .container {
                margin: 60px auto;
                width: 50%;
                background-color: white;
                padding: 50px;
                //border: 1px solid #ccc;
                border-radius: 4px;
            }
			
			.btn {
                
                width: 100%;
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .margin1 {
                margin-bottom: 15px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="tel"] {
                width: 100%;
                padding: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            

            
            .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        </style>
    </head>
    <body>
        <div>
            
            <br><br>
            <div class="container">
                <h1><b>SIGN UP</b></h1>
                <form method="post" action="user_registration_script.php">
                    <div class="margin1">
                        <input type="text" name="name" placeholder="Name" required="true">
                    </div>
                    <div class="margin1">
                        <input type="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div> 
                    <div class="margin1">
                        <input type="password"  name="password" placeholder="Password (min. 6 characters)" required="true" pattern=".{6,}">
                    </div>
                    <div class="margin1"> 
                        <input type="tel" name="contact" placeholder="Contact" required="true">
                    </div>
                    <div class="margin1">
                        <input type="text" name="city" placeholder="City" required="true">
                    </div>
                    <div class="margin1">
                        <input type="text"  name="address" placeholder="Address" required="true">
                    </div>
                    <div class="margin1">
                        <input type="submit" class="btn" value="Sign Up">
                    </div>
                </form>
            </div>
            <div class="footer">
        &copy; MSD Store. All Rights Reserved. | Contact Us: +94 754005678
        <p>This website is developed by MDS Web Innovators</p>
    </div>
        </div>
    </body>
</html>
