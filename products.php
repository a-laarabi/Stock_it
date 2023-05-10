<?php
  $pageTitle = "";
  include 'sections/header.php';
  include_once './functions/db.php';
  $sql = "SELECT * FROM products ORDER BY id";
  $res = mysqli_query($conn, $sql);
?>

<section class="all-items">
  <h1 class="section-title">Products</h1>
  <table>
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Product name</th>
        <th>Type id</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Created at</th>
      </tr>
    </thead>
    <tbody>
      <?php if(mysqli_num_rows($res) > 0 ): ?>
        <?php while($products = mysqli_fetch_assoc($res)): ?>
          <tr>
            <td><?= $products['id'] ?></td>
            <td><?= $products['productName'] ?></td>
            <td><?= $products['type_id'] ?></td>
            <td><?= $products['quantity'] ?></td>
            <td><?= $products['price'] ?></td>
            <td>2023-05-08</td>
          </tr>
        <?php endwhile;?>
      <?php endif; ?>
    </tbody>
  </table>
</section>