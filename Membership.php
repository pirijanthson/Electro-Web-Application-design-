<?php
session_start();

if(!isset($_SESSION['email'])){
    echo"<script>alert('Please LogIn Again');
    window.location.href = 'Login and signup.php'; 
    </script>";

}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: url("2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

      .background-box {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; 
            max-width: 500px;
            width: 100%;
            background-position: center;
            gap: 20px;
        }

        .background-box input {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .background-box button {
            width: 60%;
            padding: 10px;
            background-color: DodgerBlue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .background-box button:hover {
            background-color: DarkBlue;
        }

        .background-box a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form method = "POST">
    <div class="background-box" align="center">
        <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 45px; font-weight: bold;">Electro World</div>
        <h1 style="color: #000000;">Membership Form</h1>

        <input type="text" name="txtFullName" id="txtFullName" placeholder="Full Name" required><br>

        <input type="date" name="txtDate" id="txtDate" aria-placeholder="Date of birth" placeholder="Date of birth" required>

        <input type="number" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number" required>
        
        <input type="number" name="txtBillNo" id="txtBillNo" placeholder="Bill No" required>
        
        <input type="number" name="txtBillAmount" id="txtBillAmount" placeholder="Amount($)" required>

        <button onclick="myFunction()" name="subbtn">Submit</button><br><br>
        <a href="Home.php">Back to home</a>

        <div class="result" id="result"></div>
    </div>
    </form>

    <?php
    if(isset($_POST["subbtn"])){
        $name = $_POST["txtFullName"];
        $date = $_POST["txtDate"];
        $number = $_POST["PhoneNumber"];
        $amount = $_POST["txtBillAmount"];

        

        if (($amount > 999 )){
            $con = mysqli_connect("localhost", "root", "", "electro","3307");

            if (!$con) {
                die("Sorry we are facing a technical issue");
            }

            $sql = "INSERT INTO `member` (`name`, `DOB`, `phone`) values ('".$name."', '".$date."', '".$number."');";

            mysqli_query($con,$sql);

            header('Location:Home.php');
        }
        else{
            echo "<script>alert('Your amount is invalid');</script>";
        }
    }
    ?>
</body>
</html>


