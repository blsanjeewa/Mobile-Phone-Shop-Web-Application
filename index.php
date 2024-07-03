<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/phonestore.png" />
    <title>MDS Store</title>
    
    <style>
        
        body,
        p {
            margin: 0;
            padding: 0;
        }

        

        
        #bannerImage {
            background-image: url('img/banner.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 300px;
            text-align: center;
        }

        
        #bannerContent {
            padding: 50px;
            color: #fff;
        }

        
        .btn {
            background-color: #d9534f;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 4px;
        }

        
        .container {
            margin: 20px;
        }

        
        .image-table {
            width: 100%;
            table-layout: fixed; 
            border-collapse: collapse;
        }

      
        .table-cell {
			height: 10%;
            width: 33.33%; 
            border: 1px solid #ddd;
            padding: 15px;
            
            background-color: #fff;
            vertical-align: top;
        }

        
        .thumbnail img {
            width: 100%;
        }

        
        .caption {
            text-align: center;
        }

       
        .product-category {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }

       
        .product-description {
            font-size: 16px;
            margin-top: 5px;
        }

       
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
	<title>MDS Phone Store</title>
</head>

<body>
   <div>
           <?php
            require 'header.php';
           ?>
           
	
	</div>
	
    <div id="bannerImage">
        <div id="bannerContent">
            <h1 style="color:black;">Get the Best Experience.</h1>
            <p style="color:black; font-size:20px;"> 40% OFF on all premium brands.</p><br><br>
            <a href="products.php" class="btn">Shop Now</a>
        </div>
    </div>
    <div class="container">
        <table class="image-table">
            <tr>
                <td class="table-cell">
                    <div class="thumbnail">
						<a href="products.php">
                        <img height = 100% src="img/applelogo.jpg" alt="AppleLogo">
						</a>
                        <div class="caption">
							
                            <p class="product-category">Apple</p>
                            <p class="product-description">Choose among the best available in the world.</p>
							
                        </div>
                    </div>
                </td>
                <td class="table-cell">
                    <div class="thumbnail">
						<a href="products.php">
                        <img src="img/googlepixel.jpg" alt="GooglePixelLogo">
						</a>
                        <div class="caption">
                            <p class="product-category">GooglePixel</p>
                            <p class="product-description">Elevate your mobile experience with our premium selection.</p>
                        </div>
                    </div>
                </td>
                <td class="table-cell">
                    <div class="thumbnail">
						<a href="products.php">
                        <img src="img/huaweilogo.jpg" alt="HuaweiLogo">
						</a>
                        <div class="caption">
                            <p class="product-category">Huawei</p>
                            <p class="product-description">Explore the pinnacle of smartphone technology.</p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="footer">
        &copy; MSD Store. All Rights Reserved. | Contact Us: +94 754005678
        <p>This website is developed by MDS Web Innovators</p>
    </div>
        </div>
</body>

</html>
