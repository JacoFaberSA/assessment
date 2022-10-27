<?php

namespace JacoFaber\Assessment;

class Category implements CategoryInterface {
    public string $name;
    public array $products;
    
    /**
     * Instantiates a new Category
     * @param string $name
     * @param array $products
     */
    public function __construct(string $name, array $products) {
        $this->name = $name;
        $this->products = $products;
    }

    /**
     * Get category name
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }

    /**
     * Retrieves all products in category
     * @return array $product Set to fetch a specific product 
     */
    public function getProducts() : array {
        return $this->products;
    }
}

?>