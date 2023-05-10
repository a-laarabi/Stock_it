<?php


if ($_POST){
header('Location: /');
}

?>

<?php

$productTitle = $_GET['product'];
$pageTitle = "Update" . $productTitle;
include 'header.php';
require '../functions/db.php';

// echo "<h1>$productTitle</h1>";

$sql = "SELECT * FROM products WHERE productName = \"$productTitle\" ";
$res = mysqli_query($conn, $sql);

$product = mysqli_fetch_assoc($res);
/*
echo "<h1>{$product['productName']}</h1>";
echo "<img src=\"../products/$product[productPicture]\">";


echo "<pre>";
print_r($product);

echo "</pre>";
*/

?>


<section class="addProduct">
<h1><?= $product['productName']?></h1>
<img src="../products/<?= $product['productPicture']?>">
  <form method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="productName">Add the name of your product</label>
        <input class="form-control" type="text" name="productName" id="productName" value="<?= $product['productName']?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="type">Type</label>

        <?php
          $sql = "SELECT * FROM types";
          $res = mysqli_query($conn, $sql);
        ?>

          <select class="form-select" id="type" name="type">
            <?php while( $types = mysqli_fetch_assoc($res) ):?>
              <option <?= ($product['type_id'] == $types['id'])? 'selected="selected"':''?> value=<?=$types['id']?>>
                <?= $types['type']?>
              </option>
            <?php endwhile?>
          </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="quantity">Quantity</label>
        <input class="form-control" type="quantity" name="quantity" id="quantity" value="<?= $product['quantity']?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input class="form-control" type="price" name="price" id="price" value="<?= $product['price']?>">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="productDescription" name="productDescription" placeholder="Add a description for your product"><?= $product['productDescription']?></textarea>
      </div>
      <div class="btn-grp">
        <button class="btn btn-success" type="submit">Submit</button>
        <a class="btn btn-secondary" href="/"> Cancel </a>
      </div>
  </form>
</section>

<?php


if ($_POST){

$productName = $_POST['productName'];
$type_id = $_POST['type'];
$quantity = filter_input(INPUT_POST, "quantity", FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT);
$productDescription = $_POST['productDescription'];


$sql = "UPDATE products
        SET productName = '$productName', type_id = '$type_id', quantity = '$quantity', price = '$price', productDescription = '$productDescription'
        WHERE productName = \"$productTitle\"";

mysqli_query($conn, $sql);
}

?>

