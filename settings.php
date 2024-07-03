<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/phonestore.png" />
        <title>MDS Store</title>
        
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            h1 {
                text-align: center;
            }

            

            .margin1 {
                margin-bottom: 15px;
            }

            input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .btn {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #0056b3;
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
        </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            
                
                    <div style="margin: 0 auto; width: 50%;">
                        <h1>Change Password</h1>
                        <form method="post" action="setting_script.php">
                            
                                <input type="password" class="margin1" name="oldPassword" placeholder="Old Password">
                            
                            
                                <input type="password" class="margin1" name="newPassword" placeholder="New Password">
                            
                            
                                <input type="password" class="margin1" name="retype" placeholder="Re-type new password">
                            
                            
                                <input type="submit" class="btn" value="Change">
                            
                        </form>
                    </div>
                
            
           
            <div class="footer">
        &copy; MSD Store. All Rights Reserved. | Contact Us: +94 754005678
        <p>This website is developed by MDS Web Innovators</p>
    </div>
        </div>
    </body>
</html>
