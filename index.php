<?php
  $pageTitle = "";
  include 'sections/header.php';
  include_once './functions/db.php';

  // SQL
  $sql = "SELECT * FROM products ORDER BY id";
  $res = mysqli_query($conn, $sql);
  $sqlSumItem = "SELECT SUM(quantity) FROM products";
  $resSqlSumItem = mysqli_query($conn, $sqlSumItem);
  $sumItems = mysqli_fetch_assoc($resSqlSumItem);

  $sqlSumPrice = "SELECT SUM(price) FROM products";
  $resSqlSumPrice = mysqli_query($conn, $sqlSumPrice);
  $sumPrice = mysqli_fetch_assoc($resSqlSumPrice);
?>

<section class="main">
  <h1 class="section-title">Dashboard</h1>

  <div class="insight">

    <div class="insight-products">
      <span class="material-symbols-sharp"> precision_manufacturing </span>
      <div class="middle">
        <h3>Total Products</h3>
        <h1><?=mysqli_num_rows($res)?> product<?= mysqli_num_rows($res) > 1 ? 's': ''?></h1>
      </div>
    </div>

    <div class="items">
      <span class="material-symbols-sharp"> production_quantity_limits </span>
      <div class="middle">
          <h3>Total items</h3>
          <h1><?= $sumItems['SUM(quantity)']?> items</h1>
      </div>
    </div>

    <div class="sales">
      <span class="material-symbols-sharp"> payments </span>
      <div class="middle">
          <h3>Total Sales</h3>
          <h1><?= $sumPrice['SUM(price)']?> $</h1>
      </div>
    </div>
  </div>

  <h1 class="section-title">Products</h1>
    <div class="products">

      <?php if(mysqli_num_rows($res) > 0 ): ?>
        <?php while($products = mysqli_fetch_assoc($res)): ?>
          <div class="product-item">
            <a href="product-view.php?product=<?= $products['productName'] ?>">
              <img class ="card-img-top" src="products/<?= $products['productPicture']?>" alt="<?= $products['productName']?>">
              <div class="inside-product-item">
                <h2 class="card-title"><?= $products['productName']?></h2>
                <ul class="info">
                  <li>Q: <?= $products['quantity'] ?></li>
                  <li><?= $products['price'] ?> $</li>
                </ul>
                <ul>
                  <li><a class="btn btn-success" href="sections/updateProduct.php?product=<?= $products['productName'] ?>">Update</a></li>
                  <li><a class="btn btn-danger" href="functions/deleteItem.php?product=<?= $products['productName'] ?>">Delete</a></li>
                </ul>
              </div>
            </a>
          </div>
        <?php endwhile;?>
      <?php endif; ?>
      
    </div>

</section>

<?php

include './sections/footer.php';
?>