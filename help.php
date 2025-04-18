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
    <title>help</title>
    <link rel="stylesheet" href="header and footer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            /* min-height: 95vh; */
        }

        main {
            flex: 1;
            padding: 20px;
            max-width: 800px;
            min-height: 600px;
            margin: 0 auto;
        }

        h2, h3 {
            color: #333;
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-item h3 {
            cursor: pointer;
            background-color: #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        .answer {
            display: none;
            padding: 10px;
            border-left: 3px solid #333;
            margin-top: 5px;
        }

        #contact-info ul {
            list-style-type: none;
            padding: 0;
        }

        #contact-info li {
            margin: 5px 0;
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
                <a href="#">Offers</a>
                <a href="Contact-US.php">Contact</a>
                <a href="about.php">About-US</a>
            </div>
            <div class="user-actions">
                <a style="color: #0ceb08; border-radius: 20px; padding: 8px 10px;" href="https://api.whatsapp.com/send?phone=94760256922&text=Hello">WhatsApp</a>
                <a href="Membership.php">Register</a>
                <a href="Login and signup.php">Logout</a>
            </div>
        </div>
    </header>

    <main align="center">
        <section id="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h3 onclick="toggleAnswer('answer1')">How do I place an order?</h3>
                <p id="answer1" class="answer">To place an order, browse our products, add items to your cart, and proceed to checkout.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer('answer2')">What payment methods are accepted?</h3>
                <p id="answer2" class="answer">We accept credit cards, debit cards, and PayPal.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer('answer3')">How can I track my order?</h3>
                <p id="answer3" class="answer">You can track your order using the tracking number provided in the confirmation email.</p>
            </div>
        </section>
        <section id="contact-info">
            <h2>Contact Information</h2>
            <p>If you need further assistance, please contact our support team:</p>
            <ul>
                <li>Email: support@electroworld.com</li>
                <li>Phone: 123-456-7890</li>
                <li>Address: 180 KKS Road, Jaffna, SL</li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="foot">
            <a href="#" style="color: white;">Help</a> | 
            <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
            <a href="Contact-US.php" style="color: white;">Contact Us</a>
        </div>
    </footer>

    <script>
        function toggleAnswer(id) {
            var answer = document.getElementById(id);
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        }

    </script>

</body>
</html>
