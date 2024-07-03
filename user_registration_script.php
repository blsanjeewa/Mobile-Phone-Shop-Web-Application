<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?><?php
    // Include the connection file and start the session
    require 'connection.php';
    session_start();

    // Get and sanitize user input data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    // Define regex pattern for email validation
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";

    // Validate email format
    if (!preg_match($regex_email, $email)) {
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }

    // Hash and validate the password
    $password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
    if (strlen($password) < 6) {
        echo "Password should have at least 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }

    // Get other user input data
    $contact = $_POST['contact'];
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    // Check if the email is already registered
    $duplicate_user_query = "select id from users where email='$email'";
    $duplicate_user_result = mysqli_query($con, $duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched = mysqli_num_rows($duplicate_user_result);

    if ($rows_fetched > 0) {
        // Email already exists
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    } else {
        // Insert user data into the database
        $user_registration_query = "insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";

        // Set user session data
        $_SESSION['email'] = $email;
        // The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id'] = mysqli_insert_id($con); 

        // Redirect to the products page
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
?>

        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $contact=$_POST['contact'];
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
    
?>