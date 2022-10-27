<?php 

namespace JacoFaber\Assessment;

class Product implements ProductInterface {
    public string $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * Get product name
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }
}

?>