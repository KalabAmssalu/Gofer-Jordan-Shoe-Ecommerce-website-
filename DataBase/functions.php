<?php

// require MySQL Connection locally 
require('DBController.php');

// require Product Class
require('Product.php');

// require Cart Class
require('Cart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db);
