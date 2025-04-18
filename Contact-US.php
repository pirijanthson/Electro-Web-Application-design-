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
    <title>Contact Us</title>
    <link rel="Stylesheet" href="header and footer.css">
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

main {
    padding: 2em;
}

.contact-info h1 {
    font-size: 2em;
}

.contact-info p, .contact-info .details p {
    font-size: 1.2em;
}

.contact-form h2 {
    font-size: 1.5em;
    margin-bottom: 1em;
}

.contact-form label {
    display: block;
    margin-bottom: 0.5em;
    font-weight: bold;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 0.5em;
    margin-bottom: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact-form button {
    padding: 0.7em 1.5em;
    color: white;
    background-color: #333;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #555;
}

.map #map {
    height: 400px;
}

footer .social-media {
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

footer .social-media a {
    margin: 0 10px;
}

footer .footer-links {
    display: flex;
    justify-content: center;
}

footer .footer-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

footer .footer-links a:hover {
    text-decoration: underline;
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
                <a href="#">Contact</a>
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
        <section class="contact-info">
            <h1>Contact Us</h1>
            <p>If you have any questions, feel free to reach out to us!</p>
            <div class="details">
                <p><strong>Address:</strong> 123 Main Street, Anytown, USA</p>
                <p><strong>Phone:</strong> (123) 456-7890</p>
                <p><strong>Email:</strong> contact@yourcompany.com</p>
                <p><strong>Business Hours:</strong> Mon-Fri, 9am - 5pm</p>
            </div>
        </section>

        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form method="post">
                <label for="name">Name</label>
                <input type="text" id="sendname" name="sendname" required>
                
                <label for="email">Email</label>
                <input type="email" id="sendemail" name="sendemail" required>
                
                <label for="phone">Phone</label>
                <input type="tel" id="sendphone" name="sendphone">
                
                <label for="subject">Subject</label>
                <input type="text" id="sendsubject" name="sendsubject" required>
                
                <label for="message">Message</label>
                <textarea id="sendmessage" name="sendmessage" required></textarea>
                
                <button type="submit" name="submitbtn" >Submit</button>
            </form>
            <?php
                if (isset($_POST["submitbtn"])) {
                    $name = $_POST["sendname"];
                    $email = $_POST["sendemail"];
                    $phone = $_POST["sendphone"];
                    $subject = $_POST["sendsubject"];
                    $message = $_POST["sendmessage"];

                    $con = mysqli_connect("localhost", "root", "", "electro", "3307");

                    if (!$con) {
                        die("Sorry, we are facing a technical issue");
                    }

                   $sql="INSERT INTO `contact` (`email`, `name`, `contactNumber`, `subject`, `message`) VALUES ('".$email."', '".$name."', '".$phone."', '".$subject."', '".$message."');";

                   if(mysqli_query($con, $sql)) {
                    echo "<script>alert('your message successfully send');</script>";
                    exit();
                    } else {
                        echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                    }

                    header('Location:Contact-US.php');
            }
            ?>


    </main>

<footer>
    <div class="foot">
        <a href="help.php" style="color: white;">Help</a> | 
        <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
        <a href="" style="color: white;">Contact Us</a>
    </div>
</footer>
</body>
</html>
