<?php

  $productName = $_GET['product'];

  $pagetitle = $productName;
  include "./sections/header.php";
  include "./functions/db.php";

  $sql = "SELECT * FROM products WHERE productName = \"$productName\"";
  $res = mysqli_query($conn, $sql);

  $product = mysqli_fetch_assoc($res);

?>
<section class="product-view">
  <a class="goBack" href="/" ><i class="fa fa-backward"></i></i></a>

  <img src="products/<?= $product['productPicture'] ?>" alt="Product">
  <ul>
    <li><?= $product['productName'] ?></li>
    <li><?= $product['type_id'] ?></li>
    <li><?= $product['quantity'] ?></li>
    <li><?= $product['price'] ?></li>
    <li><?= $product['productDescription'] ?></li>
    <!-- <li><?= $product[''] ?></li>
    <li><?= $product[''] ?></li> -->
  </ul>



</div>
