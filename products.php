<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>MDS Store</title>
    
    <style>
        
        body, p {
            margin: 0;
            padding: 0;
        }

        

        
        .container {
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        
        .thumbnail {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            
            width: 20%; 
            background-color: #fff;
            text-align: center;
        }

        .thumbnail img {
            max-width: 100%;
            max-height: 150px; 
            margin-bottom: 10px;
        }

        /* Thumbnail caption styles */
        .caption {
            text-align: center;
        }

        /* Product name styles */
        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Product price styles */
        .product-price {
            font-size: 16px;
            margin-top: 5px;
        }

        /* Button styles */
        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Buy button styles */
        .btn-buy {
            background-color: #337ab7;
            color: #fff;
            width: 100%;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-buy:hover {
            background-color: #23527c;
        }

        /* Added to cart button styles */
        .btn-added {
            background-color: #5bc0de;
            color: #fff;
            width: 100%;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: default;
            margin-top: 10px;
        }

        
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <?php
            require 'header.php';
           ?>
    </div>
	
    <div class="container">
        <!-- Product 1: iPhone 13 Pro Max -->
        <div class="thumbnail">
            <img src="img/iphone13.jpg" alt="iPhone 13 Pro Max">
            <div class="caption">
                <div class="product-name">iPhone 13 Pro Max (256GB, Graphite)</div>
                <div class="product-price">Price: LKR. 129,900.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=1" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 2: Samsung Galaxy S21 Ultra 5G -->
        <div class="thumbnail">
            <img src="img/samsungs21.jpg" alt="Samsung Galaxy S21 Ultra 5G">
            <div class="caption">
                <div class="product-name">Samsung Galaxy S21 Ultra 5G (512GB, Phantom Black)</div>
                <div class="product-price">Price: LKR. 105,999.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(2)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=2" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 3: Google Pixel 6 Pro -->
        <div class="thumbnail">
            <img src="img/pixel6.jpg" alt="Google Pixel 6 Pro">
            <div class="caption">
                <div class="product-name">Google Pixel 6 Pro (128GB, Stormy Black)</div>
                <div class="product-price">Price: LKR. 79,990.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(3)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=3" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 4: OnePlus 9 Pro -->
        <div class="thumbnail">
            <img src="img/oneplus9.jpg" alt="OnePlus 9 Pro">
            <div class="caption">
                <div class="product-name">OnePlus 9 Pro (256GB, Morning Mist)</div>
                <div class="product-price">Price: LKR. 309,900.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(4)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=4" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 5: Xiaomi Mi 11 -->
        <div class="thumbnail">
            <img src="img/xiomimi11.jpg" alt="Xiaomi Mi 11">
            <div class="caption">
                <div class="product-name">Xiaomi Mi 11 (256GB, Midnight Black)</div>
                <div class="product-price">Price: LKR 150,000.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(5)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=5" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 6: Oppo Find X3 Pro -->
        <div class="thumbnail">
            <img src="img/oppox3pro.jpg" alt="Oppo Find X3 Pro">
            <div class="caption">
                <div class="product-name">Oppo Find X3 Pro (256GB, Gloss Black)</div>
                <div class="product-price">Price: LKR 196,000.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(6)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=6" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 7: Sony Xperia 1 III -->
        <div class="thumbnail">
            <img src="img/sonyxperia1.jpg" alt="Sony Xperia 1 III">
            <div class="caption">
                <div class="product-name">Sony Xperia 1 III (256GB, Frosted Black)</div>
                <div class="product-price">Price: LKR 196,000.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(7)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=7" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 8: LG Velvet 2 Pro -->
        <div class="thumbnail">
            <img src="img/lgvelvet2.jpg" alt="LG Velvet 2 Pro">
            <div class="caption">
                <div class="product-name">LG Velvet 2 Pro (128GB, Aurora Gray)</div>
                <div class="product-price">Price: LKR 171,500.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(8)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=8" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 9: ASUS ROG Phone 6 -->
        <div class="thumbnail">
            <img src="img/asusrog.jpg" alt="ASUS ROG Phone 6">
            <div class="caption">
                <div class="product-name">ASUS ROG Phone 6 (512GB, Phantom Blue)</div>
                <div class="product-price">Price: LKR 319,900.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(9)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=9" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 10: Motorola Edge+ -->
        <div class="thumbnail">
            <img src="img/motorola.jpg" alt="Motorola Edge+">
            <div class="caption">
                <div class="product-name">Motorola Edge+ (256GB, Solar Black)</div>
                <div class="product-price">Price: LKR 102,900.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(10)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=10" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 11: Huawei P50 Pro -->
        <div class="thumbnail">
            <img src="img/huawei.jpg" alt="Huawei P50 Pro">
            <div class="caption">
                <div class="product-name">Huawei P50 Pro (256GB, Mystic Silver)</div>
                <div class="product-price">Price: LKR 169,999.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(11)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=11" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 12: Nokia 8.4 -->
        <div class="thumbnail">
            <img src="img/nokia8.jpg" alt="Nokia 8.4">
            <div class="caption">
                <div class="product-name">Nokia 8.4 (128GB, Polar Night)</div>
                <div class="product-price">Price: LKR 171,500.00</div>
                <div class="btn-container">
                    <?php if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-buy">Buy Now</a>
                    <?php } else { ?>
                        <?php if(check_if_added_to_cart(12)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=12" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="footer">
        &copy; MSD Store. All Rights Reserved. | Contact Us: +94 754005678
        <p>This website is developed by MDS Web Innovators</p>
    </div>
</body>
</html>
