<!DOCTYPE html>
<html>
<head>
    <style>
        

        
        .nav {
            background-color: #333;
            color: #fff;
        }

        /* Style for the container holding navigation elements */
        .container {
            padding: 15px;
        }

        
       
        

        
        ul {
            list-style-type: none;
            padding: 0;
        }

        
        li {
            display: inline;
            margin-right: 10px;
        }

        
        a {
            color: #fff;
            text-decoration: none;
        }

        
        
    </style>
</head>
<body>
  
    <div class = "nav">
        
        <div class="container">
            
            <div >
			
                <a href="index.php" ><p align=center style="font-size:30px">MSD Mobile Phone Store</p></a>
				
            </div>
            
            
            <div>
               
                <ul>
                    
                    <?php
                    //session_start(); // Start the PHP session
                    if(isset($_SESSION['email'])){
                    ?>
                   
                    <li><a href="cart.php"> Cart</a></li>
                    
                    <li><a href="settings.php"> Settings</a></li>
                   
                    <li><a href="index.php"> Logout</a></li>
                    <?php
                    }else{
                    ?>
                    
                    <li><a href="signup.php"> Sign Up</a></li>
                    
                    <li><a href="login.php">Login</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
