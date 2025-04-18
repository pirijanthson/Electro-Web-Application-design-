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
    <title>New Arrivals</title>
    <link rel="stylesheet" href="header and footer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product {
            margin: 15px 0;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }

        .product img {
            max-width: 100px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 25px;">Electro World</div>
            <div class="nav-links">
                <a href="Home.php">Home</a>
                <a href="products.php">Products</a>
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

    <main>
        <h2>New Arrivals</h2>
        
        <div class="product">
            <img src="New arival/S24.jpg" alt="New Smartphone">
            <div>
                <h4>New Smartphone</h4>
                <p>Features: Cutting-edge design, 5G capable, 108MP camera.</p>
            </div>
        </div>
        
        <div class="product">
            <img src="New arival/Lab.jpg" alt="New Laptop">
            <div>
                <h4>New Gaming Laptop</h4>
                <p>Features: High performance, RGB keyboard, 16GB RAM.</p>
            </div>
        </div>
        
        <div class="product">
            <img src="New arival/Tab.jpg" alt="New Tablet">
            <div>
                <h4>New Tablet</h4>
                <p>Features: Lightweight, high-resolution display, long battery life.</p>
            </div>
        </div>
        
        <div class="product">
            <img src="New arival/SmartWatch.webp" alt="New Smartwatch">
            <div>
                <h4>New Smartwatch</h4>
                <p>Features: Health tracking, customizable watch faces.</p>
            </div>
        </div>

    </main>

    <footer>
        <div class="foot">
            <a href="help.php" style="color: white;">Help</a> | 
            <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
            <a href="Contact-US.php" style="color: white;">Contact Us</a>
        </div>
    </footer>

</body>
</html>

