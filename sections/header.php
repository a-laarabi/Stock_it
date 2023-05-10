<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- material CDN -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="../newStyle.css">
  <title><?= $pageTitle ?></title>
</head>
<body>
  <div class="container">
  <div class="open" id="menu-btn">
          <span class="material-symbols-sharp">menu</span>
        </div>
    <aside>
      <div class="top">
        <div class="logo">
          <img src="../assets/LogoStockIT.png" alt="Logo">
          <h2>Stock It</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-symbols-sharp">close</span>
        </div>
        
      </div>

        <div class="sidebar">
          <a class="aside-link active" href="/">
            <span class="material-symbols-sharp"> dashboard </span>
            <h3>Dashboard</h3>
          </a>
          <a class="aside-link" href="products.php">
            <span class="material-symbols-sharp">blinds_closed</span>
            <h3>Products</h3>
          </a>
          <a class="aside-link" href="./sections/addNewProduct.php">
            <span class="material-symbols-sharp"> add </span>
            <h3>Add Product</h3>
          </a>
          <a class="aside-link" href="/">
          <span class="material-symbols-sharp"> keyboard_capslock_badge </span>
            <h3>Add Product type</h3>
          </a>
          <a class="aside-link" href="/">
          <span class="material-symbols-sharp"> keyboard_capslock_badge </span>
            <h3>Add Product type</h3>
          </a>
          <a class="aside-link" href="/">
            <span class="material-symbols-sharp"> person_add </span>
            <h3>Stuff</h3>
          </a>
        </div>
    </aside>


  
