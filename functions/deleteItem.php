<?php

require 'db.php';

$productName = $_GET['product'];

  $sql = "DELETE FROM products WHERE productName=\"$productName\"";

  mysqli_query($conn, $sql);


  header("Location:/");