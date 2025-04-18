<html>
<head>
    
    <style>

        body {
            margin: 0;
            /*padding: 0;*/
            display: flex;
            justify-content: center;
            align-items: center;
            /*min-height: 100vh;*/
            font-family: 'Poppins', sans-serif;
            background: url("2.jpg");
            background-size: cover;
            background-position: center;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 300px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            /*overflow: hidden;*/
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
            /*transition: background-color 0.3s;*/
            font-size: 16px;
            font-weight: 500;
        }

        .reset-form button:hover {
            background-color: #006affa8;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="reset-form">
            <form id="resetForm" method="POST">
            <h2>Reset Password</h2>
            <p>New password</p>
            <input type="password" id="password" name="password" placeholder="New password" required>
            <p>Confirm new password</p>
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm new password" required>
            <button type="submit" name="subbtn" id="resetButton">Reset Password</button>
            </form>
            <?php
            session_start(); 
            if (isset($_POST["subbtn"])){
                $password = $_POST["password"];
                $confirmpassword = $_POST["confirmpassword"];
                $email = $_SESSION["email"];

                if(!empty($password)){
                    if ($password == $confirmpassword){
                        $con = mysqli_connect("localhost", "root", "", "electro", "3307");

                        if(!$con){
                            die("Sorry we are facing a teachnical issue");
                        }

                        $sql = "UPDATE `user` SET `password` = '".$password."' WHERE `email` = '".$email."'";

                        if(mysqli_query($con,$sql)){
                            header('Location:Login and signup.php');
                        }
                        else{
                            header('Location:Reset.php');
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>