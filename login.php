<?php
    require 'connection.php';
    session_start();
?>

<html>
    <head>
        <link rel="shortcut icon" href="img/phonestore.png" />
        <title>MDS Store</title>
        
        <style>
            
            

           
            .header {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 15px;
				font-size:30px;
            }

            
            .container {
                margin: 20px;
                text-align: center;
            }

            
            .panel {
                border: 1px solid #333;
                border-radius: 4px;
                padding: 15px;
                
                display: inline-block;
                text-align: left;
            }

            
            .panel-heading {
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
            }

           

            
            input[type="email"],
            input[type="password"],
            input[type="submit"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-bottom: 10px;
            }

           
           
            .footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
                position: absolute;
                bottom: 0;
                width: 100%;
            }
			.a {
            color: #fff;
            text-decoration: none;
        }
			
        </style>
    </head>
    <body>
        <div class="header">
            <a class="a" href="index.php" >MDS Mobile Phone Store</a>
        </div>
        <div class="container">
            <div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3>LOGIN</h3>
                    </div>
                    
                        <p>Login to buy your mobile.</p>
						
                        <form method="post" action="login_submit.php">
                            
                                <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            
                            
                                <input type="password" class="form-control" name="password" placeholder="Password (min. 6 characters)" pattern=".{6,}">
                            
                            
                                <input type="submit" value="Login" >
                           
                        </form>
                    
                    <div>Don't have an account yet? <a href="signup.php">Register</a></div>
                </div>
            </div>
        </div>
        <div class="footer">
        &copy; MSD Store. All Rights Reserved. | Contact Us: +94 754005678
        <p>This website is developed by MDS Web Innovators</p>
    </div>
    </body>
</html>
