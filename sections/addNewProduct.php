<?php
$pageTitle = "Add new product";
include 'header.php';
include_once '../functions/db.php'


?>
<section class="addProduct">
  <h1 class="section-title">Add new Product</h1>
  <form action="addNewProductValidation.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="productPicture">Add the picture of your product</label>
        <input class="form-control" type="file" name="productPicture" id="productPicture">
      </div>
      <div class="mb-3">
        <label class="form-label" for="productName">Add the name of your product</label>
        <input class="form-control" type="text" name="productName" id="productName">
      </div>
      <div class="mb-3">
        <label class="form-label" for="type">Type</label>

        <?php
          $sql = "SELECT * FROM types";
          $res = mysqli_query($conn, $sql);
        ?>

          <select class="form-select" id="type" name="type">
            <?php while( $types = mysqli_fetch_assoc($res) ):?>
                <?= $types['id'] ?>
              <option value=<?=$types['id']?>> <?= $types['type']?> </option>

            <?php endwhile?>
          </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="quantity">Quantity</label>
        <input class="form-control" type="quantity" name="quantity" id="quantity">
      </div>
      <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input class="form-control" type="price" name="price" id="price">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="productDescription" name="productDescription" placeholder="Add a description for your product"></textarea>
      </div>
      <div class="btn-grp">
        <button class="btn btn-success" type="submit">Submit</button>
        <a class="btn btn-secondary" href="/"> Cancel </a>
      </div>
  </form>
</section>

<?php

include './footer.php';
?>