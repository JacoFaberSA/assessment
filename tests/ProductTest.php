<?php

namespace JacoFaber\Assessment;

use PHPUnit\Framework\TestCase;

final class ProductTest extends TestCase
{
    public function testNewProduct()
    {
        global $data;

        $product = new Product('Blue Shirt');
        
        $this->assertSame('Blue Shirt', $product->name);
        $this->assertInstanceOf(ProductInterface::class, $product);
    }
}