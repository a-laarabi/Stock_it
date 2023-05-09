<?php
$pageTitle = "Add new product";
include 'header.php';
include_once '../functions/db.php'


?>

<form action="addNewProductValidation.php" method="post" enctype="multipart/form-data">
  <label for="productPicture">Add the picture of your product</label>
  <input type="file" name="productPicture" id="productPicture">
  <label for="productName">Add the name of your product</label>
  <input type="text" name="productName" id="productName">
  <label for="type">Type</label>

  <?php
    $sql = "SELECT * FROM types";
    $res = mysqli_query($conn, $sql);
  ?>

    <select id="type" name="type">
      <?php while( $types = mysqli_fetch_assoc($res) ):?>
          <?= $types['id'] ?>
        <option value=<?=$types['id']?>> <?= $types['type']?> </option>

      <?php endwhile?>
    </select>
  <label for="quantity">Quantity</label>
  <input type="quantity" name="quantity" id="quantity">
  <label for="price">Price</label>
  <input type="price" name="price" id="price">
  <textarea id="productDescription" name="productDescription" placeholder="Add a description for your product"></textarea>
  <button type="submit">Submit</button>
  <a href="/"> Cancel </a>
</form>
