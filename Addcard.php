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
            min-height: 550px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
            background-color: #f8f8f8;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        thead {
            background-color: #154567;
            color: white;
        }
        thead th,
        tbody td {
            padding: 12px;
        }
        tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        tbody td img {
            max-width: 50px;
            height: auto;
            display: block;
        }
        .del-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .del-btn:hover {
            background-color: #d32f2f;
        }
        .total-price {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 25px;">Electro World</div>
            <div class="nav-links">
                <a href="Home.php">Home</a>
                <a href="Products.php">Products</a>
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
       <h3>Add to cart product details</h3>
       <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "electro", "3307");
                    if (!$con) {
                        die("Sorry, we are facing a technical issue: " . mysqli_connect_error());
                    }

                    $email = $_SESSION['email'];

                    $sql = "SELECT * FROM `add` WHERE `email` = '$email'";
                    $result = mysqli_query($con, $sql);
                    $totalPrice = 0;

                    while ($row = mysqli_fetch_assoc($result)) {
                        $totalPrice += $row['price'];
                        echo "
                            <tr>
                                <td><img src='{$row['ImgURL']}' alt='{$row['Name']}'></td>
                                <td>{$row['Name']}</td>
                                <td>{$row['price']}</td>
                                <td>
                                    <form method='POST'>
                                        <input type='hidden' name='det_id' value='{$row['CartId']}'>
                                        <button class='del-btn' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        ";
                    }

                    if (isset($_POST['det_id'])) {
                        $delete_id = $_POST['det_id'];
                        $con = mysqli_connect("localhost", "root", "", "electro", "3307");
                        if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "DELETE FROM `add` WHERE CartId = $delete_id";

                        if (mysqli_query($con, $sql)) {
                            echo"<script>alert('Product deleted successfully')</script>"; 
                            exit();
                        } else {
                            echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                        }

                        mysqli_close($con);
                        exit();
                    }
                ?>
            </tbody>
       </table>
       <div class="total-price">Total Price: $<?php echo number_format($totalPrice, 2); ?></div>
    </div>
    
    <footer>
        <div class="foot">
            <a href="help.php" style="color: white;">Help</a> | 
            <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
            <a href="Contact-US.php" style="color: white;">Contact Us</a>
        </div>
    </footer>
</body>
</html>

