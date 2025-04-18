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
    <title>Upcoming Products</title>
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
        <h2>Upcoming Products</h2>
        <div class="product">
            <img src="Upcomming/Playstation5pro.jpg" alt="Playstation5pro">
            <h4>playstation 5 pro</h4>
            <p>Release Date: August 2024</p>
            <p>Description: improved performance, higher resolutions, and advanced gaming features.</p>
        </div>
        <div class="product">
            <img src="Upcomming/Sony-a7R-V-1.png" alt="Sony-a7R-V-1">
            <h4>sony a7r v</h4>
            <p>Release Date: September 2024</p>
            <p>Description: high resolution mirrorless camera.</p>
        </div>
        <div class="product">
            <img src="Upcomming/Sony-WH-1000XM5.png" alt="Sony-WH-1000XM5">
            <h4>sony wh-1000xm6</h4>
            <p>Release Date: August 2024</p>
            <p>Description: distraction-free listening and exceptional call clarity.</p>
        </div>
        <div class="product">
            <img src="Upcomming/Smartwatch Series 5.png" alt="Smartwatch Series 5">
            <h4>Smartwatch Series 5</h4>
            <p>Release Date: October 2024</p>
            <p>Description: Advanced health tracking features.</p>
        </div>
        <div class="product">
            <img src="Upcomming/4K VR Headset.png" alt="4K VR Headset">
            <h4>4K VR Headset</h4>
            <p>Release Date: November 2024</p>
            <p>Description: Immersive virtual reality experience.</p>
        </div>
        <div class="product">
            <img src="Upcomming/DJI Avata 2.webp" alt="DJI Avata 2">
            <h4>DJI Avata 2</h4>
            <p>Release Date: December 2024</p>
            <p>Description: captures smooth, steady footage even when flying at high speeds or in windy conditions.</p>
        </div>
        <div class="product">
            <img src="Upcomming/ADT Command.png" alt="ADT Command">
            <h4>ADT Command</h4>
            <p>Release Date: September 2024</p>
            <p>Description: helps bring together the security of ADT and the convenience of Google into one app.</p>
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
