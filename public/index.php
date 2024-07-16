<?php
require_once '../classes/ProductManager.php';
require_once '../config/database.php';

$productManager = new ProductManager();
$products = $productManager->getAllProducts();

include '../views/header.php';
include '../views/index.php';
include '../views/footer.php';
?>
