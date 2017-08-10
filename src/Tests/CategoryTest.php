<?php
namespace SummerSchool\Tests;

use PHPUnit\Framework\TestCase;
use SummerSchool\Category;

class CategoryTest extends TestCase{
    /**
    * @dataProvider dataTest
    **/
    public function testConstruct($name, $isException)
    {
        if($isException){
          $this->expectException(\Exception::class);
        }
        $category = new Category($name, 'Description');
        if(!$isException){
          $this->assertEquals($name, $category->getName());
        }
    }

    public function dataTest()
    {
        return [
          ['Some name', false],
          [
            null, true
          ]

        ];
    }

}
