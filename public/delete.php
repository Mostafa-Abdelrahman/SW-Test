
<?php
require_once '../config/database.php';
require_once '../classes/ProductManager.php';

$productManager = new ProductManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_ids'])) {
    $selectedIds = $_POST['product_ids'];
        $productManager->deleteProducts($selectedIds);
    header("Location: index.php");
    exit();
} else {
    header("Location:index.php");
    exit();
}
?>
