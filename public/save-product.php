<?php
require_once '../classes/ProductManager.php';

$productManager = new ProductManager();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $productType = $_POST['productType'];

    switch ($productType) {
        case 'DVD':
            $size = $_POST['size'];
            $product = new DVD($id,$sku, $name, $price, $size);
            break;
        case 'Book':
            $weight = $_POST['weight'];
            $product = new Book($id,$sku, $name, $price, $weight);
            break;
        case 'Furniture':
            $height = $_POST['height'];
            $width = $_POST['width'];
            $length = $_POST['length'];
            $product = new Furniture($id,$sku, $name, $price, $height, $width, $length);
            break;
        default:
            die("Invalid product type.");
    }

    $productManager->addProduct($product);

    header('Location: index.php');
    exit();
}
?>
