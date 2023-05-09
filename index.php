<?php
  $pageTitle = "";
  include 'sections/header.php';
  include_once './functions/db.php';
  // include_once './functions/deleteItem.php'
?>
  <a href="sections/addNewProduct.php"> Add new Product </a>

  <?php
    $sql = "SELECT * FROM products ORDER BY id";
    $res = mysqli_query($conn, $sql);
  ?>

<?php if(mysqli_num_rows($res) > 0 ): ?>
      <?php while($products = mysqli_fetch_assoc($res)): ?>
        <div>
          <!-- <a href="product-view.php?product=<?= $products['productName'] ?>"> -->
            <h1><?= $products['productName']?></h1>
            <img src="products/<?= $products['productPicture']?>">
            <a href="sections/updateProduct.php?product=<?= $products['productName'] ?>">Update</a>
            <a href="functions/deleteItem.php?product=<?= $products['productName'] ?>">Delete</a>
          <!-- </a> -->
        </div>
      <?php endwhile;?>
<?php endif; ?>


</body>
</html>



