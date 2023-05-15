<?php

$host= "localhost";
$dbname = "stock_it";
$username= "root";
$password = "rootroot";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection Errors: ' . mysqli_connect_error());
}


// echo("Success");

/*
$sql = "INSERT INTO test (name, quantity, price)
        VALUES ('PoductOne', 500, 3)";

mysqli_query($conn, $sql);

echo("Record saved");
*/