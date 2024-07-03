<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
    exit;
}
$user_id = $_SESSION['id'];
$user_products_query = "SELECT it.id, it.name, it.price FROM users_items ut
                        INNER JOIN items it ON it.id = ut.item_id
                        WHERE ut.user_id = '$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
    echo '<script>alert("No items in the cart!!");</script>';
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum += $row['price'];
    }
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
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .total-row {
            font-weight: bold;
        }

        .btn {
            background-color: #337ab7;
            border: none;
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }
		
		.a {
            color: #fff;
            text-decoration: none;
        }
		
		.a1 {
            color: red;
            text-decoration: none;
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
			margin-top:40%;
        }
    </style>
</head>
<body>
    <div class=header>
        <a class = "a" href="index.php" ><h1>MDS Phone Store</h1></a>
    </div>
	
    <div class="container">
        <table>
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            <?php
            $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
            $no_of_user_products = mysqli_num_rows($user_products_result);
            $counter = 1;
            while ($row = mysqli_fetch_array($user_products_result)) {
                ?>
                <tr>
                    <td><?php echo $counter ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><a class="a1" href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></td>
                </tr>
                <?php
                $counter++;
            }
            ?>
            <tr class="total-row">
                <td></td>
                <td>Total</td>
                <td>Rs <?php echo $sum; ?>/-</td>
                <td><a onclick=clickOrder() href="index.php" class="btn" >Order</a></td>
            </tr>
        </table>
    </div>
    <div class="footer">
        &copy; MSD Store. All Rights Reserved. | Contact Us: +94 754005678
        <p>This website is developed by MDS Web Innovators</p>
    </div>
	<script>
function clickOrder() {
  alert("Order Success....");
}
</script>
	
</body>
</html>