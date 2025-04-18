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

        h2 {
            color: #333;
        }

        p, ul {
            line-height: 1.6;
            list-style-type: none;
        }

        ul {
            padding-left: 20px;
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
        <section id="privacy-policy">
            <h2>Introduction</h2>
            <p>Welcome to our Privacy Policy page. At Online Electronics Shop, we value your privacy and are committed to protecting your personal information.</p>

            <h2>Information We Collect</h2>
            <p>We collect various types of information in connection with the services we provide, including:</p>
            <ul>
                <li><strong>Personal Information:</strong> Name, email address, phone number, shipping address, and payment information.</li>
                <li><strong>Non-Personal Information:</strong> Browser type, operating system, IP address, and browsing behavior on our website.</li>
            </ul>

            <h2>How We Use Your Information</h2>
            <p>Your information is used to provide and improve our services, including:</p>
            <ul>
                <li>Processing and fulfilling orders</li>
                <li>Communicating with you regarding your orders and inquiries</li>
                <li>Personalizing your shopping experience</li>
                <li>Improving our website and services</li>
                <li>Marketing and promotional purposes</li>
            </ul>

            <h2>Sharing Your Information</h2>
            <p>We do not sell or rent your personal information to third parties. However, we may share your information with trusted partners for the following purposes:</p>
            <ul>
                <li>Order fulfillment and shipping</li>
                <li>Payment processing</li>
                <li>Marketing and advertising</li>
                <li>Legal compliance and protection of our rights</li>
            </ul>

            <h2>Security</h2>
            <p>We implement a variety of security measures to ensure the safety of your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure.</p>

            <h2>Cookies</h2>
            <p>We use cookies to enhance your browsing experience and gather information about website usage. You can control cookies through your browser settings.</p>

            <h2>Your Rights</h2>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving marketing communications from us at any time.</p>

            <h2>Changes to This Policy</h2>
            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>

            <h2>Contact Us</h2>
            <p>If you have any questions about our Privacy Policy, please contact us:</p>
            <ul>
                <li>Email: privacy@electronics-shop.com</li>
                <li>Phone: 123-456-7890</li>
                <li>Address: 1234 Tech Street, Silicon Valley, CA</li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="foot">
            <a href="help.php" style="color: white;">Help</a>  | 
            <a href="#" style="color: white;">Privacy Policy</a> | 
            <a href="Contact-US.php" style="color: white;">Contact Us</a>
        </div>
    </footer>
</body>
</html>
