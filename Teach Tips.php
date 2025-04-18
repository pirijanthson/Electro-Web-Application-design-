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
    <title>Tech Tips</title>
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

        .tip {
            margin: 15px 0;
            border: 1px solid #ddd;
            padding: 15px;
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
        <h2>Tech Tips for Wearable Devices</h2>
        
        <div class="tip">
            <h4>Choosing the Right Smartwatch</h4>
            <p>Consider battery life, compatibility with your smartphone, and the features you need, such as fitness tracking or notifications.</p>
        </div>
        
        <div class="tip">
            <h4>Maximize Your Fitness Tracker</h4>
            <p>Set realistic fitness goals and regularly sync your device with your smartphone to track progress effectively.</p>
        </div>
        
        <div class="tip">
            <h4>Keeping Your Wearable Device Charged</h4>
            <p>Invest in a portable charger for longer outings, and avoid letting the battery drain completely to extend its lifespan.</p>
        </div>
        
        <div class="tip">
            <h4>Using Health Monitoring Features</h4>
            <p>Take advantage of heart rate monitoring, sleep tracking, and stress management features for better overall health.</p>
        </div>
        
        <div class="tip">
            <h4>Stay Updated with Software</h4>
            <p>Regularly check for software updates to ensure your device runs smoothly and benefits from the latest features and security improvements.</p>
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


