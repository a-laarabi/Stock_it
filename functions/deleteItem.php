<?php

require 'db.php';

$productName = $_GET['product'];

echo ('<pre>');
var_dump($productName);
echo ('</pre>');

  $sql = "DELETE FROM products WHERE productName=\"$productName\"";

  mysqli_query($conn, $sql);


  header("Location:/");