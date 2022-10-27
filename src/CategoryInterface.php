<?php 

namespace JacoFaber\Assessment;

interface CategoryInterface {
    public function getProducts() : array;
    public function getName() : string;
}

?>