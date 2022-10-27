<?php

namespace JacoFaber\Assessment;

use PHPUnit\Framework\TestCase;

final class CategoryTest extends TestCase
{
    public function testNewCategory()
    {
        global $data;

        $category = new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt')]);
        
        $this->assertSame('Mens', $category->name);
        $this->assertInstanceOf(ProductInterface::class, $category->getProducts()[0]);
        $this->assertInstanceOf(CategoryInterface::class, $category);
    }
}