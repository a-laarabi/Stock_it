<?php
  $pageTitle = "";
  include 'sections/header.php';
  include_once './functions/db.php';
?>
  <?php
    $sql = "SELECT * FROM products ORDER BY id";
    $res = mysqli_query($conn, $sql);
  ?>

  <section>
    <div class="row">
      <?php if(mysqli_num_rows($res) > 0 ): ?>
          <?php while($products = mysqli_fetch_assoc($res)): ?>
            <div class="card col-xs-12 col-md-4 m-2">
              <a href="product-view.php?product=<?= $products['productName'] ?>">
                <img class ="card-img-top" src="products/<?= $products['productPicture']?>">
                <div class="card-body">
                  <h2 class="card-title"><?= $products['productName']?></h2>
                  <div class="row">
                    <p col-xs-12 col-md-6><?= $products['quantity'] ?></p>
                    <p col-xs-12 col-md-6><?= $products['price'] ?>$</p>
                  </div>
                  <a class="btn btn-primary" href="sections/updateProduct.php?product=<?= $products['productName'] ?>">Update</a>
                  <a class="btn btn-danger" href="functions/deleteItem.php?product=<?= $products['productName'] ?>">Delete</a>
                </div>
              </a>
            </div>

          <?php endwhile;?>
      <?php endif; ?>
    </div>
  </section>

</body>
</html>



