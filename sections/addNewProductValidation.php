<?php
require_once '../functions/db.php';
echo "<pre>";
echo "<h1>Post</h1>";
  print_r($_POST);
echo "<h1>files</h1>";
  print_r($_FILES['productPicture']);

?>

<?php

$pictureName = $_FILES['productPicture']['name'];
$picture_tmp = $_FILES['productPicture']['tmp_name'];


//Check the uploaded file
$picture_ex = pathinfo($pictureName, PATHINFO_EXTENSION);

$allowed_ex = array('png', 'jpg', 'jpeg');

if(in_array($picture_ex, $allowed_ex)) {
  print_r(dirname(__DIR__));
  $new_pictureName = uniqid("IMG-", true) . "." . $picture_ex;
  $picturePath = dirname(__DIR__) . "/products/$new_pictureName";
  print_r(move_uploaded_file($picture_tmp, $picturePath));
} else {
  
}

$productName = $_POST['productName'];
$type_id = $_POST['type'];
$quantity = filter_input(INPUT_POST, "quantity", FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT);
$productDescription = $_POST['productDescription'];


$sql = "INSERT INTO `products` (`productPicture`, `productName`, `type_id`, `quantity`, `price`, `productDescription`)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
  mysqli_error($conn);
}

mysqli_stmt_bind_param($stmt, "ssiiis", $new_pictureName, $productName, $type_id, $quantity, $price, $productDescription);

mysqli_stmt_execute($stmt);


echo "</pre>";