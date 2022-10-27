<?php 

namespace JacoFaber\Assessment;

interface CategoryInterface {
    /**
     * Get category name
     * @return string
     */
    public function getName() : string;

    /**
     * Retrieves all products in category
     * @return array $product Set to fetch a specific product 
     */
    public function getProducts() : array;
}

?>