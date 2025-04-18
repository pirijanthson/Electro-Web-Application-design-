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
    <title>Electro World Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .admin-container {
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #4d6270bc;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 8px 16px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #dde4e9;
            color: #000000;
            border-radius: 10px;
        }


        .section {
            background: white;
            margin-bottom: 20px;
            padding: 65px 20px 20px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .section h2 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"], 
        .form-group input[type="email"],
        .form-group textarea, 
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        .form-group button {
            background-color: #2093e6;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-group button:hover {
            background-color: #0d7bcc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2093e6;
            color: white;
        }

        .action-buttons a {
            margin-right: 10px;
            text-decoration: none;
            color: #2093e6;
            cursor: pointer;
        }

        .action-buttons a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Electro World Admin Dashboard</h1>
    <nav>
        <a href="#manage-products">Products</a>
        <a href="#manage-memberships">Members</a>
        <a href="#manage-contacts">Contact</a>
        <a href="#manage-users">Users</a>
        <a href="Logout.php">Logout</a>
    </nav>

<div class="admin-container">
    

    <h3>Manage Products</h3>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product-name">Product Name:</label>
            <input type="text" id="product-name" name="product-name">
        </div>
        <div class="form-group">
            <label for="product-description">Description:</label>
            <textarea id="product-description" name="product-description"></textarea>
        </div>
        <div class="form-group">
            <label for="product-image">Product Image:</label>
            <input type="file" id="product-image" name="product-image">
        </div>
        <div class="form-group">
            <label for="product-category">Category:</label>
            <select id="product-category" name="product-category">
                <option value="Smartphones">Smartphones</option>
                <option value="Tablets">Tablets</option>
                <option value="Laptops">Laptops</option>
                <option value="Mouse">Mouse</option>
                <option value="Keybord">Keybord</option>
                <option value="Moniter">Moniter</option>
                <option value="Hard disk">Hard disk</option>
                <option value="Smartwatch">Smartwatch</option>
            </select>
        </div>
        <div class="form-group">
            <label for="product-price">Price:</label>
            <input type="text" id="product-price" name="product-price" placeholder="$">
        </div>
        <div class="form-group">
            <button type="submit" name="btn">Add Product</button>
        </div>
    </form>

    <?php
    if(isset($_POST["btn"])) {
        $productname = $_POST["product-name"];
        $description = $_POST["product-description"];
        $category = $_POST["product-category"];
        $price = $_POST["product-price"];
        
        $image = "upload/" . basename($_FILES["product-image"]["name"]);
        if(move_uploaded_file($_FILES["product-image"]["tmp_name"], $image)) {
            $con = mysqli_connect("localhost", "root", "", "electro", "3307");
            if(!$con) {
                die("Cannot upload the file, Please choose another file");
            }
            
            $sql = "INSERT INTO `product` (`PId`, `ImgURL`, `Name`, `description`, `category`, `price`) 
                    VALUES (NULL, '".$image."', '".$productname."', '".$description."', '".$category."', '".$price."');";
            
            if(mysqli_query($con, $sql)) {
                echo "<script>alert('Product uploaded Successfully');</script>";
                exit();
            } else {
                echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
            }
        }
    }

    if(isset($_GET["delete_id"])) {
        $delete_id = $_GET["delete_id"];
        $con = mysqli_connect("localhost", "root", "", "electro", "3307");
        if(!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "DELETE FROM product WHERE PId = $delete_id";
        
        if(mysqli_query($con, $sql)) {

        } else {
            echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
        }

        mysqli_close($con);
    }
    ?>
</div>
<br><br>
<div class="section" id="manage-products">
    <h2 align="center">Products</h2>
    <h3>Current Products</h3>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="product-list">
            <?php
            $con = mysqli_connect("localhost", "root", "", "electro", "3307");
            if(!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT PId, Name, description, category, price FROM product";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["category"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td><a href='?delete_id=" . $row["PId"] . "' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No products available.</td></tr>";
            }

            mysqli_close($con);
            ?>
        </tbody>
    </table><br><br>


    <div class="section" id="manage-memberships">
        <h2 align="center">Members</h2>
        <h3>Current Members</h3>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>PhoneNO</th>
                    <th>DOB</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="member-list">
            <?php
            $con = mysqli_connect("localhost", "root", "", "electro", "3307");
            if(!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM member";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["DOB"] . "</td>";
                    echo "<td><a href='?member_remove_id=" . $row["phone"] . "' onclick='return confirm(\"Are you sure you want to remove this member?\");'>Remove</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>members not available.</td></tr>";
            }

            if(isset($_GET["member_remove_id"])) {
                $memberId = $_GET["member_remove_id"];
                $con = mysqli_connect("localhost", "root", "", "electro", "3307");
                if(!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "DELETE FROM member WHERE phone = '$memberId'";
                
                if(mysqli_query($con, $sql)) {

                } else {
                    echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                }
        
                mysqli_close($con);
            }
            ?>
            </tbody>
        </table><br><br>
    </div>

    <div class="section" id="manage-contacts">
        <h2 align="center">Contact Messages</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="contact-list">
                <?php
                $con = mysqli_connect("localhost","root","","electro","3307");
                if(!$con){
                    die("connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT msgid,name,email,message FROM contact";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo"<td>" . $row["name"] . "</td>";
                        echo"<td>" . $row["email"] . "</td>";
                        echo"<td>" . $row["message"] . "</td>";
                        echo "<td>
                                  <a href='?contact_remove_id=" . $row["msgid"] . "' onclick='return confirm(\"Are you sure you want to remove this contact deatail?\");'>Remove</a> |
                                  <a href='replay_form.php?replay_id=" . $row["msgid"] . "'>Reply</a></td>";
                        echo"</tr>";
                    }
                }
                else{
                    echo"<tr><td colsepan = '4'>Contact detail are not available .</td></tr>";
                }
                if(isset($_GET["contact_remove_id"])) {
                    $contactId = $_GET["contact_remove_id"];
                    $con = mysqli_connect("localhost", "root", "", "electro", "3307");
                    if(!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $sql = "DELETE FROM contact WHERE msgid = '$contactId'";
                    
                    if(mysqli_query($con, $sql)) {

                    } else {
                        echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                    }
            
                    mysqli_close($con);
                }
                ?>
            </tbody>
        </table><br><br>
        
    </div>

    <div class="section" id="manage-users">
        <h2 align="center">Users</h2>
        <h3>Current Users</h3>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone no</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="user-list">
            <?php
                $con = mysqli_connect("localhost","root","","electro","3307");
                if(!$con){
                    die("connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT email,username,contact FROM user";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo"<td>" . $row["username"] . "</td>";
                        echo"<td>" . $row["email"] . "</td>";
                        echo"<td>" . $row["contact"] . "</td>";
                        echo "<td>
                                  <a href='?user_remove_id=" . $row["email"] . "' onclick='return confirm(\"Are you sure you want to remove this user?\");'>Remove</a></td>";
                        echo"</tr>";
                    }
                }
                else{
                    echo"<tr><td colsepan = '4'>User detail are not available .</td></tr>";
                }

                if(isset($_GET["user_remove_id"])) {
                    $UserId = $_GET["user_remove_id"];
                    $con = mysqli_connect("localhost", "root", "", "electro", "3307");
                    if(!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $sql = "DELETE FROM user WHERE email = '$UserId'";
                    
                    if(mysqli_query($con, $sql)) {

                        exit();
                    } else {
                        echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                    }
            
                    mysqli_close($con);
                    $con->close();
                }
                ?>
            </tbody>
        </table><br><br>
    </div>
</div>
</body>
</html>