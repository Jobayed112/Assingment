<?php


class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return "$".number_format($this->price,2,".",",");
    }

    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";

        echo "- Price: {$this->getFormattedPrice()}\n";
      
    
    }
}

// Print
$product = new Product(1, 'T-shirt', 1999859);
$product->showDetails();




?>