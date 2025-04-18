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
    <title>Customer Reviews</title>
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

        .review {
            margin: 15px 0;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }

        .review .rating { color: gold; }

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
        <h2>Customer Reviews</h2>
        
        <div class="review">
            <h4>Sajeepan</h4>
            <p class="rating">★★★★★</p>
            <p>I love my new smartphone! The features are amazing and the battery life is fantastic.</p>
        </div>
        <div class="review">
            <h4>Abimaran</h4>
            <p class="rating">★★★★☆</p>
            <p>Great tablet for the price. Perfect for reading and browsing.</p>
        </div>
        <div class="review">
            <h4>Thamil mathy</h4>
            <p class="rating">★★★★★</p>
            <p>The customer service was excellent! I got my laptop within a few days.</p>
        </div>
        <div class="review">
            <h4>Shameenthan</h4>
            <p class="rating">★★★☆☆</p>
            <p>Good value for money, but I wish it had a better camera.</p>
        </div>
        <div class="review">
            <h4>Abirna</h4>
            <p class="rating">★★★★★</p>
            <p>Highly recommend! The sound quality of the headphones is outstanding.</p>
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
