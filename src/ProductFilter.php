<?php

namespace JacoFaber\Assessment;

class ProductFilter {
    /**
     * Checks if category contains product
     * @param string $search Name of product to locate
     * @return int Return index if contained, null if not contained
     */
    public static function getProductFromCategoryByName(CategoryInterface $category, string $name) : ProductInterface {
        foreach ($category->getProducts() as $product) {
            if($name === $product->name) {
                return $product;
            }
        }
        return null;
    }
}

?>