<?php

namespace JacoFaber\Assessment;

use PHPUnit\Framework\TestCase;

use Exception;

$data = [
    new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt')]),
    new Category('Kids', [new Product('Sneakers'), new Product('Toy car')]),
];
$dataFilter = new DataFilter();

final class DataFilterTest extends TestCase
{
    public function testFilter()
    {
        global $dataFilter;
        
        $this->assertInstanceOf(FilterInterface::class, $dataFilter);
    }
    public function testValidSearch()
    {
        global $data;
        global $dataFilter;
        
        $this->assertSame(0, $dataFilter->getIndexByNameAttr($data, 'Mens'));
        $this->assertSame($data[0], $dataFilter->getObjectByName($data, 'Mens'));
        $this->assertSame($data[0]->getProducts()[0], $dataFilter->getObjectByName($data, 'Mens', 'Blue Shirt'));
    }
    public function testUnknownIndexSearch()
    {
        global $data;
        global $dataFilter;
        
        $this->expectException(Exception::class);
        $dataFilter->getIndexByNameAttr($data, 'Unknown');
    }
    public function testUnknownShallowSearch()
    {
        global $data;
        global $dataFilter;
        
        $this->expectException(Exception::class);
        $dataFilter->getObjectByName($data, 'Unknown');
    }
    public function testUnknownDeepSearch()
    {
        global $data;
        global $dataFilter;
        
        $this->expectException(Exception::class);
        $dataFilter->getObjectByName($data, 'Unknown', 'Unknown');
    }
}