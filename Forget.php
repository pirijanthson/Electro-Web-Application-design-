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

        .container {
            display: flex;
            width: 100%;
            max-width: 300px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 50px;
        }

        .reset-form {
            text-align: center;
            width: 100%;
        }

        .reset-form h2 {
            font-size: 28px;
            font-weight: bold;
            color: #212121;
            margin-bottom: 30px;
        }

        .reset-form p {
            font-size: 16px;
            color: #555555;
            margin-bottom: 30px;
        }

        .reset-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .reset-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }

        .reset-form button:hover {
            background-color: #006affa8;
        }

        .reset-form a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="reset-form">
          <form method="POST">
            <h2>Forgot Password</h2>
            <p>Enter your email address, and we'll send you instructions to reset your password.</p>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <button type="submit" name="subbtn" id="forgotButton">Forgot Password</button>
            <a href="Login and signup.php">Back to Login</a>
          </form>
          <?php
          session_start(); 
          if (isset($_POST["subbtn"])){
            $email = $_POST["email"];

            $con = mysqli_connect("localhost", "root", "", "electro", "3307");

            if(!$con){
                die("Sorry we are facing a teachnical issue");
            }

            $sql = "SELECT * from `user` where `email` = '".$email."' ";
            $result = mysqli_query($con,$sql);

            if (mysqli_num_rows($result)>0){
                $_SESSION["email"] = $email;
                header('Location:Reset.php');
            }
            else{
                header('Location:Forget.php');
            }
          }
          ?>
        </div>
    </div>
</body>
</html>