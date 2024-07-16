<?php
require_once 'Product.php';

class Book extends Product {
    private $weight;

    public function __construct($id,$sku, $name, $price, $weight) {
        parent::__construct($id,$sku, $name, $price);
        $this->weight = $weight;
        $this->type = 'Book';
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getSpecificAttribute() {
        return "Weight: " . $this->weight . " Kg";
    }
}
?>
