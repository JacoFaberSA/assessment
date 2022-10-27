<?php

namespace JacoFaber\Assessment;

use InvalidArgumentException;

class Category implements CategoryInterface {
    public string $name;
    public array $products;
    
    public function __construct(string $name, array $products) {
        $this->name = $name;
        $this->products = $products;
    }

    /**
     * Get category name
     * @param string
     */
    public function getName() : string {
        return $this->name;
    }

    /**
     * Retrieves all products in category
     * @param string $product Set to fetch a specific product 
     */
    public function getProducts() : array {
        return $this->products;
    }
}

?>