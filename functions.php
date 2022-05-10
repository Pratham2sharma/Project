<?php
// require MySQL Connection
require('Database/DBController.php');

// require product class
require('Database/product.php');

// require Cart Class
require('Database/Cart.php');


//DBController Object
$db = new DBController();


// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db);


?>
