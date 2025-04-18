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
    <title>Electro World</title>
    <link rel="Stylesheet" href="header and footer.css">
    <style>
        main {
            margin: 0;
            padding: 0 40px 0 40px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .card img {
            max-width: 100px;
            border-radius: 5px;
        }

        .card h4 {
            margin: 0;
            font-size: 18px;
        }

        .card p {
            margin: 5px 0;
        }

        .card button {
            background-color: #2093e6;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .card button:hover {
            background-color: #0d7bcc;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .box {
            max-width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .box img {
            width: 100%;
            height: auto;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .box div {
            padding: 15px;
        }

        .box h4 {
            margin: 0;
            font-size: 18px;
        }

        .box p {
            margin: 10px 0;
        }

        .box button {
            background-color: #2093e6;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .box button:hover {
            background-color: #0d7bcc;
        }
        .heading{
            background-color: #102102;
            color : #ffffff;
            width: 100%;
            height: auto;
            padding: 10px auto 10px auto; 
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 25px;">Electro World</div>
            <div class="nav-links">
                <a href="#">Home</a>
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
    <section id="home">
        <h2>Welcome to Electro World</h2>
        <p>Your one-stop shop for all electronics.</p>

        <nav>
            <a href="#products">Products</a>
            <a href="#promotions">Promotions</a>
            <a href="#vlogs">Vlogs</a>
            <a href="#more">More</a>
        </nav>

        <div id="products">
            <div class="heading">
                <h3>Products</h3>
            </div>
            
            <div class="card">
                <img src="home/Smartphone.jpg" alt="Smartphone">
                <div>
                    <h4>Smartphones and Accessories</h4>
                    <p>Latest models from top brands with advanced features.</p>
                    <button class="add-cart" onclick="show()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Tablet.jpg" alt="Tablet">
                <div>
                    <h4>Tablets and e-Readers</h4>
                    <p>High-resolution screens and long battery life.</p>
                    <button class="add-cart" onclick="show()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Laptop.jpg" alt="Laptop">
                <div>
                    <h4>Laptops and Desktops</h4>
                    <p>Powerful performance for work and play.</p>
                    <button class="add-cart" onclick="show()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Gaming Console.jpg" alt="Gaming Console">
                <div>
                    <h4>Gaming Consoles and Accessories</h4>
                    <p>Latest consoles with immersive gaming experiences.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Headphones.jpg" alt="Headphones">
                <div>
                    <h4>Audio and Headphones</h4>
                    <p>High-quality sound with noise-canceling features.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Wearable.jpg" alt="Wearable">
                <div>
                    <h4>Wearables and Fitness Trackers</h4>
                    <p>Track your fitness and stay connected on the go.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Camera.jpg" alt="Camera">
                <div>
                    <h4>Cameras and Photography</h4>
                    <p>High-resolution cameras and accessories.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Drone.jpg" alt="Drone">
                <div>
                    <h4>Drones and Accessories</h4>
                    <p>Capture stunning aerial shots with our range of drones.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Smartwatch.jpg" alt="Smartwatch">
                <div>
                    <h4>Smartwatches</h4>
                    <p>Stay connected and track your fitness with smartwatches.</p>
                    <button class="add-cart" onclick="show()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/VR Headset.jpg" alt="VR Headset">
                <div>
                    <h4>VR Headsets</h4>
                    <p>Immerse yourself in virtual reality experiences.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>
            <div class="card">
                <img src="home/Smart Home Security.jpg" alt="Smart Home Security">
                <div>
                    <h4>Smart Home Security</h4>
                    <p>Protect your home with advanced security systems.</p>
                    <button class="add-cart" onclick="showCart()">Explore More</button>
                </div>
            </div>

        <div id="promotions">
            <div class="heading">
                <h3>Promotions</h3>
            </div>
            <div class="container">
                <div class="box">
                    <img src="home/Summer Sale.jpg" alt="Promo 1">
                    <div>
                        <h4>Summer Sale</h4>
                        <p>Up to 50% off on selected electronics. Limited time offer!</p>
                        <button class="add-cart" onclick="exploreMore()">Explore More</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Buy One Get One Free.jpg" alt="Promo 2">
                    <div>
                        <h4>Buy One Get One Free</h4>
                        <p>On select smartphone models. Hurry while stocks last!</p>
                        <button class="add-cart" onclick="exploreMore()">Explore More</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Back to School.jpg" alt="Promo 3">
                    <div>
                        <h4>Back to School</h4>
                        <p>Special discounts on laptops and tablets for students.</p>
                        <button class="add-cart" onclick="exploreMore()">Explore More</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Free Shipping.jpg" alt="Promo 4">
                    <div>
                        <h4>Free Shipping</h4>
                        <p>On all orders over $100. Shop now and save more!</p>
                        <button class="add-cart" onclick="exploreMore()">Explore More</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/New Arrivals.jpg" alt="Promo 5">
                    <div>
                        <h4>New Arrivals</h4>
                        <p>Check out the latest additions to our electronics range.</p>
                        <button class="add-cart" onclick="window.location.href = 'New Arival.php'" >Explore More</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="vlogs">
            <div class="heading">
                <h3>Vlogs</h3>
            </div>
            <div class="container">
                <div class="box">
                    <img src="home/Top 10 Gadgets of 2024.jpg" alt="Vlog 1">
                    <div>
                        <h4>Top 10 Gadgets of 2024</h4>
                        <p>A rundown of the must-have gadgets this year.</p>
                        <button class="add-cart" onclick="window.location.href='https://www.youtube.com/watch?v=v9r7PDnE0kA'">Watch Now</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Smart Home Devices.jpg" alt="Vlog 2">
                    <div>
                        <h4>Smart Home Devices</h4>
                        <p>How to make your home smarter and more efficient.</p>
                        <button class="add-cart" onclick="window.location.href='https://www.youtube.com/watch?v=HCkyirkk5Xo'">Watch Now</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Best Budget Laptops.jpg" alt="Vlog 3">
                    <div>
                        <h4>Best Budget Laptops</h4>
                        <p>Top picks for laptops that won't break the bank.</p>
                        <button class="add-cart" onclick="window.location.href='https://www.youtube.com/watch?v=pg2UhoHi9DI'">Watch Now</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Gaming Gear Review.jpg" alt="Vlog 4">
                    <div>
                        <h4>Gaming Gear Review</h4>
                        <p>In-depth reviews of the latest gaming peripherals.</p>
                        <button class="add-cart" onclick="window.location.href='https://www.youtube.com/watch?v=zd9TIZ0yejs'">Watch Now</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Wearable Tech Trends.jpg" alt="Vlog 5">
                    <div>
                        <h4>Wearable Tech Trends</h4>
                        <p>What to expect from the newest wearables.</p>
                        <button class="add-cart" onclick="window.location.href='https://www.youtube.com/watch?v=445FzoqgSNk'">Watch Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="more">
            <div class="heading">
                <h3>More</h3>
            </div>
            <div class="container">
                <div class="box">
                    <img src="home/Customer Reviews.jpg" alt="More 1">
                    <div>
                        <h4>Customer Reviews</h4>
                        <p>Read what our customers are saying about us.</p>
                        <button class="add-cart" onclick="window.location.href = 'Review.php'">Read More</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Upcoming Products.jpg" alt="More 2">
                    <div>
                        <h4>Upcoming Products</h4>
                        <p>Get a sneak peek at the new products coming soon.</p>
                        <button class="add-cart" onclick="window.location.href='upcoming-products.php'">Read More</button>
                    </div>
                </div>
                <div class="box">
                    <img src="home/Wearable Tech Trends.jpg" alt="More 3">
                    <div>
                        <h4>Tech Tips</h4>
                        <p>Useful tips and tricks to get the most out of your gadgets.</p>
                        <button class="add-cart" onclick="window.location.href = 'Teach Tips.php'">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="foot">
        <a href="help.php" style="color: white;">Help</a> | 
        <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
        <a href="Contact-US.php" style="color: white;">Contact Us</a>
    </div>
</footer>

<script>
    function showCart() {
        alert('Not avilable but coming soon!');
    }

    function show(){
        alert('Avilable!')
        window.location.href='products.php';
    }

    function exploreMore() {
        window.location.href = 'offers.php';
    }
</script>

</body>
</html>