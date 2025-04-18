<?php
            session_start(); 
                if(isset($_POST["loginbtn"])){
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    if($email == 'Abishan@gmail.com' && $password == 'abi365$$'){
                        header('Location:Admin.php');
                        exit();
                    }

                    $con = mysqli_connect("localhost","root","","electro","3307");

                    if (!$con) {
                        die("Sorry we are facing a technical issue");
                    }

                    $sql = "SELECT * from `user` where `email` = '".$email."' and `password` = '".$password."' ";
                    $result = mysqli_query($con,$sql);

                    if (mysqli_num_rows($result)>0) {
                        $_SESSION["email"] = $email;
                        header('Location:Home.php');
                    } else {
                        header('Location:Login and signup.php');
                    }
                    
                }
?>