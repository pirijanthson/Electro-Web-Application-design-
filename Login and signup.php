<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            /*min-height: 100vh;*/
            /*background: #f2f2f2;*/
            background-image: url(2.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        button {
            border-radius: 20px;
            border: 1px solid #006affa8;
            background-color: #006affa8;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22); 
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background-color: #006affa8;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            /*transform: translateX(0);*/
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            /*transform: translateX(0);*/
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .sign-in-container a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            /*transition: color 0.3s;*/
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container sign-in-container">
            <form action="loginhandelar.php" method="POST">
                <h1>Sign In</h1>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <a href="Forget.php">Forgot your password?</a>
				<br>
                <button type="submit" name="loginbtn" onclick="checkLogin()">Sign In</button>
                
            </form>
        </div>
        <div class="form-container sign-up-container">
            <form method="POST">
                <h1>Create Account</h1>
                <input type="text" id="newName" name="newName" placeholder="Name" required>
                <input type="email" id="Newemail" name="Newemail" placeholder="Email" required>
                <input type="password" id="NewPassword" name="NewPassword" placeholder="Password" required>
                <input type="number" id="NewPhone" name="NewPhone" placeholder="Phone Number" required>
                <button type="submit" name="SignUpbtn" onclick="createAccount()">Sign Up</button>
				<br>
            </form>
            <?php
                if(isset($_POST["SignUpbtn"])){
                    $name = $_POST["newName"];
                    $email = $_POST["Newemail"];
                    $password = $_POST["NewPassword"];
                    $number = $_POST["NewPhone"];

                    $con = mysqli_connect("localhost","root","","electro","3307");

                    if (!$con) {
                        die("Sorry we are facing a technical issue");
                    }

                    $sql = "INSERT INTO `user` (`email`, `username`, `contact`, `password`) values ('".$email."', '".$name."', '".$number."', '".$password."');";

                    mysqli_query($con,$sql);

                    header('Location:Login and signup.php');
                }
            ?>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                    
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signInButton = document.getElementById('signIn');
        const signUpButton = document.getElementById('signUp');
        const container = document.querySelector('.container');

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });
        
	</script>
</body>
</html>

