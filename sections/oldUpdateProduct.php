<!-- ####################################################### -->

<form method="post" enctype="multipart/form-data">
  <label for="productPicture">Add the picture of your product</label>
  <input type="file" name="productPicture" id="productPicture" value="<?= $product['productPicture']?>">
  <label for="productName">Add the name of your product</label>
  <input type="text" name="productName" id="productName" value="<?= $product['productName']?>">


  <label for="type">Type</label>
  <?php
    $sql = "SELECT * FROM types";
    $res = mysqli_query($conn, $sql);
  ?>

    <select id="type" name="type">
      <?php while( $types = mysqli_fetch_assoc($res) ):?>
        <option
          <?= ($product['type_id'] == $types['id'])? 'selected="selected"':''?>
          value=<?=$types['id']?>
        >
        <?= $types['type']?>
      </option>

      <?php endwhile?>
    </select>


  <label for="quantity">Quantity</label>
  <input type="quantity" name="quantity" id="quantity" value="<?= $product['quantity']?>">
  <label for="price">Price</label>
  <input type="price" name="price" id="price" value="<?= $product['price']?>">
  <textarea id="productDescription" name="productDescription"><?= $product['productDescription']?></textarea>
  <button type="submit">Submit</button>
  <a href="/"> Cancel </a>
</form>