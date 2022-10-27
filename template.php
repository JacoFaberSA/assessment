<?php
    
declare(strict_types = 1);

require 'vendor/autoload.php';

use JacoFaber\Assessment\Category;
use JacoFaber\Assessment\Product;
use JacoFaber\Assessment\DataFilter;

/**
 * Feel free to change any code.
 *
 * Please complete the following assessment.
 *
 * In the file below you will see an Object $data that has categories and products inside it.
 *
 * There are two functions we would like implemented:
 * getProductsInCategory() - This function needs to return a product inside a category that we can specify.
 * doesProductExistInCategory() - This function needs to let us know if a product exists in a category that we chose.
 *
 * Hints:
 * Please make sure that the Object is extendable and other products and categories can be added and the functions will work.
 * Big-O notation.
 * Using DRY and SOLID principles.
 * You can ask for help or more information at anytime.
 *
 * Bonus points:
 * - PHP Unit Testing.
 * - Frontend display/Layout/Template to process data.
 * - Git repository to track the code changes.
 *
 * You will be evaluated on the following:
 * - Code structure, readability, understandably, maintainability and layout.
 * - Code standards used.
 * - Completion of the objective.
 * - Performance of the completed structure.
 */

// class Product {
//     public string $name;
    
//     public function __construct(string $name) {
//         $this->name = $name;
//     }
// }

// class Category {
//     public string $name;
//     public array $products;
    
//     public function __construct(string $name, array $products) {
//         $this->name     = $name;
//         $this->products = $products;
//     }
// }

$data = [
    new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt')]),
    new Category('Kids', [new Product('Sneakers'), new Product('Toy car')]),
];

/**
 * Return a product inside a category.
 *
 * @param string $category
 *
 * @return array
 */
function getProductsInCategory(string $category): array {
    global $data;
    $dataFilter = new DataFilter();
    $result = $dataFilter->getObjectByName($data, $category);
    if($result !== null) {
        return $result->getProducts();
    }
    return [];
}

/**
 * Check if product exists within specified category
 * @param string $category
 * @param string $product
 * @return bool
 */
function doesProductExistInCategory(string $category, string $product): bool {
    global $data;
    $dataFilter = new DataFilter();
    try {
        $result = $dataFilter->getObjectByName($data, $category, $product);
        if($result !== null) {
            return true;
        }
    } catch (Exception $ex) {
        return false;
    }
    
    return false;
}

?>