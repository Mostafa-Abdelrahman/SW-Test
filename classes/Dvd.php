<?php
require_once 'Product.php';

class DVD extends Product {
    private $size;

    public function __construct($id,$sku, $name, $price, $size) {
        parent::__construct($id,$sku, $name, $price);
        $this->size = $size;
        $this->type = 'DVD';
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getSpecificAttribute() {
        return "Size: " . $this->size . " MB";
    }
}
?>
