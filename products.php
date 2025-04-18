<?php
session_start();

if(!isset($_SESSION['email'])){
    echo"<script>alert('Please LogIn Again');
    window.location.href = 'Login and signup.php'; 
    </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Electro World</title>
    <link rel="Stylesheet" href="header and footer.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .product {
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #fafafa;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .product img {
            width: auto;
            height: auto;
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .product-details {
            text-align: center;
            padding: 15px;
        }
        .product h2 {
            margin: 10px 0;
        }
        .product p {
            margin: 5px 0;
            color: #666;
        }
        .product .price {
            font-size: 20px;
            color: #000;
            margin: 10px 0;
        }
        .cart-count {
            background-color: #0447ffec;
            bottom: 5px;
            justify-content: center;

            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .cart-count:hover {
            background-color: #003bb5;
        }
        .icon-cart {
    position: relative;
    float: right;
    margin-right: 15px;
    cursor: pointer;
}

.icon-cart img {
    width: 50px;
    height: auto;
}

#cart-count {
            position: absolute;
            bottom: 0;
            right: 0;
            margin-right: -8px;
            margin-bottom: -5px;
            width: 20px;
            height: 20px;
            padding: 5px;
            border-radius: 50%;
            background-color: #e34236;
            color: white;
            text-align: center;
            line-height: 20px;
            font-size: 14px;
            font-weight: bold;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

.icon-cart:hover #cart-count {
    background-color: #c32f27;
}

    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 25px;">Electro World</div>
            <div class="nav-links">
                <a href="Home.php">Home</a>
                <a href="#">Products</a>
                <a href="offers.php">Offers</a>
                <a href="Contact-US.php">Contact</a>
                <a href="about.php">About-US</a>
            </div>
            <div class="user-actions">
                <a style="color: #0ceb08; border-radius: 20px; padding: 8px 10px;" href="https://api.whatsapp.com/send?phone=94760256922&text=Hello">WhatsApp</a>
                <a href="Membership.php">Register</a>
                <a href="Logout.php">Logout</a>
            </div>
        </div>
    </header>
    <div class="container">
    <div class="icon-cart">
       <a href="Addcard.php"><img src="addtocart.jpeg" alt="add-cart"></a>
       <span id="cart-count">
        <?php
            $con = mysqli_connect("localhost", "root", "", "electro", "3307");
            if (!$con) {
                die("Cannot connect to the database");
            }
            $email = $_SESSION['email'];
            $count= mysqli_query($con, "SELECT count(*) as Count_add FROM `add` WHERE `email` = '$email'");
            $addcount = mysqli_fetch_assoc($count);
            echo "{$addcount['Count_add']}";
        ?>
       </span>
    </div>   
        <h3>Available Products</h3>
        <div class="products-grid">
        <?php
        $con = mysqli_connect("localhost", "root", "", "electro", "3307");
        if (!$con) {
            die("Cannot connect to the database");
        }

        $sql = "SELECT * FROM `product`";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                    <div class='product'>
                        <img src='".$row["ImgURL"]."' alt='Product Image'>
                        <div class='product-details'>
                            <h2>".$row["Name"]."</h2>
                            <p>" . $row["description"] . "</p>
                            <p class='category'><strong>Category:</strong> ".$row["category"]."</p>
                            <p class='price'><strong>Price:</strong> $".$row["price"]."</p>
                        </div>
                        <form action='ProductHandeler.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='user_id' value='" . $_SESSION["email"] . "'>
                            <input type='hidden' name='product_id' value='" . $row["PId"] . "'>
                            <input type='hidden' name='product_name' value='" . $row["Name"] . "'>
                            <input type='hidden' name='product_price' value='" . $row["price"] . "'>
                            <input type='hidden' name='product_image' value='" . $row["ImgURL"] . "'>
                            <button class='cart-count' name='Add'>Add to Cart</button>
                        </form>
                    </div>
                ";
            }
        } else {
            echo "<p>No products available.</p>";
        }

        mysqli_close($con);
        ?>

        </div>
    </div>
    
    <footer>
    <div class="foot">
        <a href="help.php" style="color: white;">Help</a> | 
        <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
        <a href="Contact-US.php" style="color: white;">Contact Us</a>
    </div>
</footer>
<script>
        function addToCart() {
            var cartCount = document.getElementById('cart-count');
            var currentCount = parseInt(cartCount.textContent);
            cartCount.textContent = currentCount + 1;
        }
    </script>
</body>
</html>
