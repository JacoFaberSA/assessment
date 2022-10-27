<?php

namespace JacoFaber\Assessment;

use Exception;

class DataFilter implements FilterInterface {
    /**
     * Iterate over array and return index if search query matches name of element
     * @param array $data Array of elements to search
     * @param string $search Name of element to locate
     * @return int Return index if contained
     */
    public function getIndexByNameAttr(array $data, string $search) : int {
        foreach ($data as $index => $obj) {
            if(is_object($obj) && !method_exists($obj, 'getName')) {
                throw new Exception("Element at " . $index . " is not of type Object or does not have the required 'getName' method implemented.");
            }
            if($search === $obj->getName()) {
                return $index;
            }
        }
        throw new Exception("No elements found in array by provided name '" . $search . "'");
    }

    /**
     * Checks if array contains element using name attribute and returns element if found
     * @param array $data Array of elements to search
     * @param string $search Name of element to locate
     * @param string $deep_search Name of element to locate within first found element
     * @return object Return object if contained
     */
    public function getObjectByName(array $data, string $search, string $deep_search = '') : object {
        $index = $this->getIndexByNameAttr($data, $search);
        if($index !== null) {
            if($deep_search !== '') {
                $deep_data = $data[$index];
                if(is_object($deep_data) && !method_exists($deep_data, 'getProducts')) {
                    throw new Exception("Deep search can only be performed if element is of type Object and has 'getProducts' method implemented.");
                }
                $deep_index = $this->getIndexByNameAttr($deep_data->getProducts(), $deep_search);
                if($deep_index !== null) {
                    return $deep_data->getProducts()[$deep_index];
                }
            } else {
                return $data[$index];
            }
        }
        throw new Exception("Object not found in array by provided name '" . $search . "'");
    }
}

?>