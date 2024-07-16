<?php
abstract class Product {
    protected $id;
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    // need to think about id ?
    public function __construct($id,$sku, $name, $price) {
        $this->id=$id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getSku() {
        return $this->sku;
    }

    public function setSku($sku) {
        $this->sku = $sku;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    abstract public function getSpecificAttribute();
}
?>

