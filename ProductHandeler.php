<?php
if (isset($_POST['Add'])) {
    $id = $_POST['product_id'];
    $Name = $_POST['product_name'];
    $image = $_POST['product_image'];
    $price = $_POST['product_price'];
    $email = $_POST['user_id'];

    $con = mysqli_connect("localhost", "root", "", "electro", "3307");

    if (!$con) {
        die("Sorry, we are facing a technical issue: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `add` (`PId`, `ImgURL`, `Name`, `price`, `email`) VALUES ('$id', '$image', '$Name', '$price', '$email')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Product $Name added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add product to cart');</script>";
    }

    mysqli_close($con);

    header('Location: products.php');
    exit();
}
?>
