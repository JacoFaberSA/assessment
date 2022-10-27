<?php

namespace JacoFaber\Assessment;

interface FilterInterface {
    /**
     * Iterate over array and return index if search query matches name attribute of array element
     * @param array $data
     * @param string $search
     * @return int Return index if contained, null if not contained
     */
    public function getIndexByNameAttr(array $data, string $search) : int;

    /**
     * Checks if array contains element using name attribute and returns element if found
     * @param array $data
     * @param string $search
     * @return object Return object if contained, null if not contained
     */
    public function getObjectByName(array $data, string $search) : object;
}

?>