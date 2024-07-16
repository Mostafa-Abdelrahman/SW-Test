<?php
require_once '../config/database.php';
require_once 'Product.php';
require_once 'DVD.php';
require_once 'Book.php';
require_once 'Furniture.php';

class ProductManager  {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAllProducts () {
        $result = $this->conn->query('SELECT * FROM products ORDER BY id');
        $products = [];
        while ($row = $result->fetch_assoc()) {
            switch ($row['type']) {
                case 'DVD':
                    $product = new DVD($row['id'],$row['sku'], $row['name'], $row['price'], $row['size']);
                    break;
                case 'Book':
                    $product = new Book($row['id'],$row['sku'], $row['name'], $row['price'], $row['weight']);
                    break;
                case 'Furniture':
                    $product = new Furniture($row['id'],$row['sku'], $row['name'], $row['price'], $row['height'], $row['width'], $row['length']);
                    break;
            }
            $products[] = $product;
                }
        return $products;
    }

    public function addProduct($product) {
        $sql = $this->conn->prepare("INSERT INTO products (sku, name, price, type, size, weight, height, width, length) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sku = $product->getSku();
        $name = $product->getName();
        $price = $product->getPrice();
        $type = $product->getType();
        
        $size = $type === 'DVD' ? $product->getSize() : null;
        $weight = $type === 'Book' ? $product->getWeight() : null;
        $height = $type === 'Furniture' ? $product->getHeight() : null;
        $width = $type === 'Furniture' ? $product->getWidth() : null;
        $length = $type === 'Furniture' ? $product->getLength() : null;

        $sql->bind_param("ssdssiiii", $sku, $name, $price, $type, $size, $weight, $height, $width, $length);
        $sql->execute();
        $sql->close();
    }

    public function deleteProducts($ids) {
        $ids = implode(',', array_map('intval', $ids));
        $sql = "DELETE FROM products WHERE id IN ($ids)";
        $this->conn->query($sql);
    }
}
?>
